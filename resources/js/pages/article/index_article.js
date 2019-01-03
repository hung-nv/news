import {confirmBeforeDelete, doException} from "../../helpers/helpers";

let ui = {
    pageId: '#post'
};

if ($(ui.pageId).length) {
    new Vue({
        el: ui.pageId,
        methods: {
            addGroup: function (event) {
                let groupId, groupName, postId;
                let element = event.target;

                groupId = $(element).data('group-id');
                groupName = $(element).data('group-name');
                postId = $(element).data('post-id');

                if (groupId === undefined || groupName === undefined || postId === undefined) {
                    alert(2);
                    return;
                }

                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: '/api/post/add-group',
                    headers: {
                        Accept: 'application/json'
                    },
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
            removeGroup: function (event) {
                let groupId, groupName, postId;
                let element = event.target;

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
                    .attr('onclick', 'mainComponent.removeGroup(this)');
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
                    .attr('onclick', 'mainComponent.addGroup(this)')
                    .text('Set to "' + container.data('group-name') + '"');
                wrapContainer.html('');
                wrapContainer.append(buttonSetGroup)
            },
            confirmBeforeDelete: function (event) {
                confirmBeforeDelete(event.target, 'Do you want to delete this?');
            }
        }
    });
}