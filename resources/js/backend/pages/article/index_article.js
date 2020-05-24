import {confirmBeforeDelete, doException, getParameterByName} from "../../helpers/helpers";
import VueClipboard from 'vue-clipboard2';

VueClipboard.config.autoSetContainer = true;

let ui = {
    pageId: '#post'
};

(function ($, Vue) {
    Vue.use(VueClipboard);

    if ($(ui.pageId).length) {
        const vmIndexArticle = new Vue({
            el: ui.pageId,
            data: function () {
                return {
                    name: getParameterByName('name') ? getParameterByName('name') : '',
                    pageSize: this.getDefaultPageSize(),
                    idCategory: getParameterByName('id_category') ? getParameterByName('id_category') : '-1',
                };
            },
            watch: {
                pageSize: function (newValue, oldValue) {
                    // check if change value.
                    if (newValue !== oldValue) {
                        this.searchArticle();
                    }
                }
            },
            methods: {
                doCopy: function(event) {
                    let url = $(event.target).data('url-download');

                    this.$copyText(url).then(function (e) {
                        toastr.info('Copied');
                    }, function (e) {
                        alert('Can not copy');
                        console.log(e);
                    });
                },
                searchArticle: function() {
                    let params = {};
                    let page = 1;

                    if (getParameterByName('page')) {
                        page = getParameterByName('page');
                    }

                    // set param page.
                    params['page'] = page;
                    if (this.name !== '') {
                        params['name'] = this.name;
                    }
                    if (this.idCategory !== '-1') {
                        params['id_category'] = this.idCategory;
                    }
                    params['pageSize'] = this.pageSize;

                    let currentURL = location.protocol + '//' + location.host + location.pathname;

                    window.location = currentURL + '?' + $.param(params);
                },
                getDefaultPageSize: function () {
                    let pageSize = 20;
                    let defaultPageSize = getParameterByName('pageSize');

                    if (defaultPageSize && !isNaN(pageSize)) {
                        pageSize = defaultPageSize;
                    }

                    return pageSize;
                },
                addGroup: function (element) {
                    let groupId, groupName, postId;

                    groupId = $(element).data('group-id');
                    groupName = $(element).data('group-name');
                    postId = $(element).data('post-id');

                    if (groupId === undefined || groupName === undefined || postId === undefined) {
                        return;
                    }

                    $.ajax({
                        type: "post",
                        dataType: 'json',
                        url: '/api/post/add-group',
                        data: {
                            post_id: postId,
                            group_id: groupId,
                            group_name: groupName
                        }
                    }).done(respon => {
                        toastr.info(respon.message);

                        this.createContainerChecked($(element));
                    }).fail(xhr => {
                        doException(xhr);
                    });
                },
                removeGroup: function (element) {
                    let groupId, groupName, postId;

                    groupId = $(element).data('group-id');
                    groupName = $(element).data('group-name');
                    postId = $(element).data('post-id');

                    if (groupId === undefined || groupName === undefined || postId === undefined) {
                        return;
                    }

                    $.ajax({
                        type: "post",
                        dataType: 'json',
                        url: '/api/post/remove-group',
                        data: {
                            post_id: postId,
                            group_id: groupId,
                            group_name: groupName
                        }
                    }).done(respon => {
                        toastr.warning(respon.message);

                        this.createContainerSet($(element));
                    }).fail(xhr => {
                        doException(xhr);
                    });
                },
                createContainerChecked: function (container) {
                    let iconCheck, buttonCheck, buttonRemove, iconRemove, wrapContainer;

                    iconCheck = $('<i>').addClass('fa fa-check');
                    buttonCheck = $('<a>').addClass('btn btn-xs blue');
                    buttonRemove = $('<a>').addClass('btn btn-xs red')
                        .attr('data-group-id', container.data('group-id'))
                        .attr('data-group-name', container.data('group-name'))
                        .attr('data-post-id', container.data('post-id'))
                        .attr('id', 'btnRemoveGroup');
                    iconRemove = $('<i>').addClass('fa fa-times');
                    buttonCheck.append(iconCheck).append(' ' + container.data('group-name'));
                    buttonRemove.append(iconRemove);

                    wrapContainer = container.parent();
                    wrapContainer.html('');
                    wrapContainer.append(buttonCheck)
                        .append(buttonRemove);
                },
                createContainerSet: function (container) {
                    let wrapContainer, buttonSetGroup;

                    wrapContainer = container.parent();

                    buttonSetGroup = $('<button>').addClass('btn btn-xs grey-cascade')
                        .attr('data-group-id', container.data('group-id'))
                        .attr('data-group-name', container.data('group-name'))
                        .attr('data-post-id', container.data('post-id'))
                        .attr('id', 'btnAddGroup')
                        .text('Set to "' + container.data('group-name') + '"');
                    wrapContainer.html('');
                    wrapContainer.append(buttonSetGroup)
                },
                confirmBeforeDelete: function (event) {
                    confirmBeforeDelete(event.target, 'Do you want to delete this?');
                }
            }
        });

        $(ui.pageId).on('click', '#btnAddGroup', function () {
            vmIndexArticle.addGroup(this);
        });

        $(ui.pageId).on('click', '#btnRemoveGroup', function () {
            vmIndexArticle.removeGroup(this);
        });
    }
})(jQuery, Vue);