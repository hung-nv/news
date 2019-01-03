const ui = {
    pageId: '#menu',
    urlCreateMenu: '/api/create-menu',
    urlGetAllMenu: '/api/get-list-menu',
    urlAddCategory: '/api/add-category',
    urlAddPage: '/api/add-page',
    urlAddCustom: '/api/add-custom',
    urlGetMenuNestable: '/api/get-menu/',
    urlDeleteMenu: '/api/delete-menu',
    urlUpdateSort: '/api/update-sort',
    elementNestable: '.dd-list',
    divNestable: '#nestable_list_2'
};

if ($(ui.pageId).length) {
    const vmMenu = new Vue({
        el: ui.pageId,
        data: {
            nameMenu: '',
            idMenuGroup: this.getIdMenuGroup(),
            customLabel: '',
            customDirect: ''
        },
        method: {
            getIdMenuGroup: function () {
                let idGroup = 0;
                if (getParameterByName('menu_group') != null) {
                    idGroup = Number(getParameterByName('menu_group'));
                }

                return idGroup;
            },
            selectMenuGroup: function (event) {
                if (this.idMenuGroup == null) {
                    return;
                }

                window.location.href = '/administrator/menu?menu_group=' + this.idMenuGroup;
            },
            createMenu: function (event) {
                if (this.nameMenu === '') {
                    return;
                }

                $.ajax({
                    url: ui.urlCreateMenu,
                    type: 'post',
                    data: {
                        name: this.nameMenu
                    }
                }).done(respon => {
                    toastr.info(respon.message);

                    // reload list menu group.
                    $('#selected-menu').load(ui.urlGetAllMenu);

                    // close modal.
                    $('#modalAddMenu').modal('toggle');
                }).fail(xhr => {
                    doException(xhr, {elementShowError: '.show-error'});
                });
            },
            addCategoryToMenu: function (event) {
                let idsCategory;

                if (!this.idMenuGroup) {
                    this.beforeExecuteMenu();
                    return;
                }

                // get all checked category.
                idsCategory = $('input[name="parent[]"]:checkbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // if have category checked.
                if (idsCategory.length) {
                    $.ajax({
                        type: "post",
                        dataType: 'json',
                        url: ui.urlAddCategory,
                        data: {
                            ids: idsCategory,
                            idMenuGroup: this.idMenuGroup
                        }
                    }).done(respon => {
                        // reload menu after change.
                        $(ui.elementNestable).load(ui.urlGetMenuNestable + this.idMenuGroup);
                    }).fail(xhr => {
                        doException(xhr);
                    });
                }
            },
            addPageToMenu: function (event) {
                let idsPages;

                if (!this.idMenuGroup) {
                    this.beforeExecuteMenu();
                    return;
                }

                // get all checked page.
                idsPages = $('input[name="page[]"]:checkbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // if have page checked.
                if (idsPages.length) {
                    $.ajax({
                        type: "post",
                        url: ui.urlAddPage,
                        data: {
                            ids: idsPages,
                            idMenuGroup: this.idMenuGroup
                        }
                    }).done(respon => {
                        // reload menu after change.
                        $(ui.elementNestable).load(ui.urlGetMenuNestable + this.idMenuGroup);
                    }).fail(xhr => {
                        doException(xhr);
                    });
                }
            },
            addCustomToMenu: function (event) {
                if (!this.idMenuGroup) {
                    this.beforeExecuteMenu();
                    return;
                }

                let formCustom = $('#frmCustom');

                formCustom.validate();

                if (formCustom.valid()) {
                    $.ajax({
                        type: "post",
                        url: ui.urlAddCustom,
                        data: {
                            label: this.customLabel,
                            url: this.customDirect,
                            idMenuGroup: this.idMenuGroup
                        }
                    }).done(respon => {
                        // reload menu after change.
                        $(ui.elementNestable).load(ui.urlGetMenuNestable + this.idMenuGroup);
                    }).fail(xhr => {
                        doException(xhr);
                    });
                }
            },
            beforeExecuteMenu: function () {
                swal(
                    'Invalid',
                    'Please create menu before to do this action!',
                    'error'
                );
            },
            deleteMenu: function (idMenu) {
                swal({
                    title: 'Are you sure?',
                    type: 'warning',
                    showCancelButton: true,
                    customClass: 'nvh-dialog',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then(() => {
                    $.ajax({
                        type: "post",
                        url: ui.urlDeleteMenu,
                        data: {
                            id: idMenu
                        }
                    }).done(respon => {
                        // alert message.
                        toastr.info(respon.message);

                        // reload menu after change.
                        $(ui.elementNestable).load(ui.urlGetMenuNestable + this.idMenuGroup);
                    }).fail(xhr => {
                        doException(xhr);
                    });
                });
            }
        }
    });

    $(function () {
        // sort menu.
        nestableSort();

        /**
         * Sort menu.
         */
        function nestableSort() {
            $(ui.divNestable).nestable({
                group: 1
            }).on("change", () => {
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: ui.urlUpdateSort,
                    data: {data: $(ui.divNestable).nestable("serialize"), menu_group: vmMenu.idMenuGroup}
                }).done(respon => {

                }).fail(xhr => {
                    doException(xhr);
                });
            });
        }
    });
}