import {slugify} from "../../helpers/helpers";
import {newInputImage, initInputImage} from "../../utilities/images/image";

const ui = {
    pageId: '#create-edit-post',
    inputImage: '#image',
    inputOldImage: '#old-image',
    urlDeleteImage: '/api/post/delete-image',
    inputRemoveInitPreview: '.kv-file-remove'
};

if ($(ui.pageId).length) {
    new Vue({
        el: ui.pageId,
        data: {
            postName: viewData.oldName,
            postSlug: viewData.oldSlug
        },
        watch: {
            postName: function (newValue, oldValue) {
                this.postSlug = slugify(newValue);
            }
        },
        methods: {
            addItem: function() {
                let content = `<div class="row content-download-inner">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Label</label>
                                            <input type="text" name="label[]" class="form-control" value=""/>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Url Download</label>
                                            <div class="input-group">
                                                <input type="text" name="url[]" class="form-control" value=""/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-danger" style="margin-left: 10px;" id="remove-item">Remove</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#content-download').append(content);
            }
        }
    });

    $(function () {
        setInputImage();

        $(".horizontal-form").on('submit', function (e) {
            e.preventDefault();

            let parentChecked = $('input:checkbox:checked').length;

            if (parentChecked > 0) {
                $(this).unbind('submit').submit();
            } else {
                $('.inner-error').append('<div class="alert alert-danger"> <ul><li>Please select category. </li></ul></div>');

                setTimeout(function () {
                    $('.inner-error').html('');
                }, 5000);
            }
        });

        /**
         * Set input image preview.
         */
        function setInputImage() {
            if ($(ui.inputImage).length) {
                if ($(ui.inputOldImage).length) {
                    initInputImage(
                        ui.inputOldImage,
                        ui.inputImage,
                        ui.urlDeleteImage
                    );
                } else {
                    newInputImage(ui.inputImage);
                }
            }

            $(ui.inputImage).on('fileclear', function (event) {
                $(ui.inputRemoveInitPreview).trigger("click");
            });
        }

        $(ui.pageId).on('click', '#remove-item', function () {
            $(this).parents('.content-download-inner').remove();
        });
    });
}
