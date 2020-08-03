import {_cookie, getParameterByName} from "../backend/helpers/helpers";

window._ = require('lodash');

let ui = {
    formOrder: '#frm-customer',
    modalSuccess: '.modal-confirm',
    modalCrawl: '.modal-crawl-information',
    formCrawl: '#frm-crawl-information',
    urlCrawlInformation: '/api/crawl-information',
    modalConfirmCrawl: '.modal-confirm-crawl',
};

window.vmCard = new Vue({
    el: '#mainApp',
    data: function () {
        return {
            textSearch: getParameterByName('name') ? getParameterByName('name') : '',
            isLoading: false,
            name: '',
            telephone: '',
            address: '',
            note: '',
            email: '',
            errorMessage: '',
            showError: true,
        };
    },
    methods: {
        submitSearchForm: function (event) {
            // if (this.textSearch !== '') {
            //     if (!this.idCatalog) {
            //         return false;
            //     }
            //
            //     window.location = location.protocol + '//' + location.host + '/search?name=' + this.textSearch + '&catalog=' + this.idCatalog;
            // }
        },
        saveCustomer: function (event) {
            let valid = $(ui.formCrawl).valid();

            if (valid) {
                $.ajax({
                    method: 'post',
                    url: ui.urlCrawlInformation,
                    data: {
                        name: this.name,
                        mobile: this.telephone,
                        email: this.email
                    }
                }).done(respon => {
                    $(ui.modalCrawl).modal('toggle');

                    $(ui.modalConfirmCrawl).modal('show');
                }).fail(xhr => {
                    switch (xhr.status) {
                        case 504:
                            this.errorMessage = 'Connection timeout. Please try again later!';
                            break;
                        case 422:
                            let errors = [];

                            if (typeof xhr.responseJSON === 'string') {
                                errors.push(xhr.responseJSON);
                            } else {
                                _.forEach(xhr.responseJSON.errors, error => {
                                    errors.push(error.join(', '));
                                });
                            }

                            this.errorMessage = errors.join(', ');

                            break;
                        default:
                            this.errorMessage = 'Internal Server Error';
                            break;
                    }

                    setTimeout(() => {
                        this.errorMessage = '';
                    }, 5000)
                }).always(function () {

                });
            }
        }
    }
});

$(function () {
    $(ui.modalSuccess).on('hidden.bs.modal', function () {
        window.location = '/';
    });

    $(ui.formOrder).validate({
        rules: {
            telephone: {
                'validatePhone': true,
                required: true
            },
            name: 'required',
            address: 'required'
        },
        messages: {
            name: "Vui lòng nhập họ tên",
            address: "Vui lòng nhập địa chỉ",
            telephone: {
                required: "Vui lòng nhập số điện thoại"
            }
        }
    });

    $(ui.formCrawl).validate({
        rules: {
            mobile: {
                'validatePhone': true,
                required: true
            },
            name: 'required',
            email: 'required'
        },
        messages: {
            name: "Vui lòng nhập họ tên",
            email: "Vui lòng nhập email",
            mobile: {
                required: "Vui lòng nhập số điện thoại"
            }
        }
    });


    setTimeout(function () {
        if (!_cookie('dialog')) {

            _cookie('dialog', 'dialog1', 1);

            $(ui.modalCrawl).modal('show');
        }

    }, 3000); // milliseconds


    $.validator.addMethod('validatePhone', function (value) {
        return /^0([0-9]{9})$/.test(value);
    }, 'Vui lòng nhập chính xác số điện thoại.');
});