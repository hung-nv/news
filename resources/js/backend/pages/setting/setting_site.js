import {initInputImage, newInputImage} from "../../utilities/images/image";

const ui = {
    pageId: '#setting',
    inputFavico: '#favico',
    inputOldFavico: '#old_favico',
    inputService1: '#services_image_1',
    inputOldService1: '#old_services_image_1',
    inputService2: '#services_image_2',
    inputOldService2: '#old_services_image_2',
    inputService3: '#services_image_3',
    inputOldService3: '#old_services_image_3',
    inputLogo: '#company_logo',
    inputOldLogo: '#old_company_logo',
    inputAboutUs: '#about_us_image',
    inputOldAboutUs: '#old_about_us_image',
    inputBanner1: '#banner_image_1',
    inputOldBanner1: '#old_banner_image_1',
    inputBanner2: '#banner_image_2',
    inputOldBanner2: '#old_banner_image_2',
    inputBanner3: '#banner_image_3',
    inputOldBanner3: '#old_banner_image_3',

    inputCourse1: '#courses_image_1',
    inputOldCourse1: '#old_courses_image_1',
    inputCourse2: '#courses_image_2',
    inputOldCourse2: '#old_courses_image_2',
    inputCourse3: '#courses_image_3',
    inputOldCourse3: '#old_courses_image_3',

    urlDeleteFileSetting: '/api/delete-file-setting',
    inputRemoveInitPreview: '.kv-file-remove'
};

$(function () {
    if ($(ui.pageId).length) {
        // init input select font awesome
        $('.icon-picker').iconpicker();

        // init favico.
        if ($(ui.inputFavico).length) {
            if ($(ui.inputOldFavico).length) {
                initInputImage(
                    ui.inputOldFavico,
                    ui.inputFavico,
                    ui.urlDeleteFileSetting,
                    {extractName: 'favico'}
                );
            } else {
                newInputImage(ui.inputFavico);
            }
        }

        // init logo.
        if ($(ui.inputLogo).length) {
            if ($(ui.inputOldLogo).length) {
                initInputImage(
                    ui.inputOldLogo,
                    ui.inputLogo,
                    ui.urlDeleteFileSetting,
                    {extractName: 'company_logo'}
                );
            } else {
                newInputImage(ui.inputLogo);
            }
        }

        // init banner 1.
        if ($(ui.inputService1).length) {
            if ($(ui.inputOldService1).length) {
                initInputImage(
                    ui.inputOldService1,
                    ui.inputService1,
                    ui.urlDeleteFileSetting,
                    {extractName: 'services_image_1'}
                );
            } else {
                newInputImage(ui.inputService1);
            }
        }

        // init banner 1.
        if ($(ui.inputService2).length) {
            if ($(ui.inputOldService2).length) {
                initInputImage(
                    ui.inputOldService2,
                    ui.inputService2,
                    ui.urlDeleteFileSetting,
                    {extractName: 'services_image_2'}
                );
            } else {
                newInputImage(ui.inputService2);
            }
        }

        // init banner 3.
        if ($(ui.inputService3).length) {
            if ($(ui.inputOldService3).length) {
                initInputImage(
                    ui.inputOldService3,
                    ui.inputService3,
                    ui.urlDeleteFileSetting,
                    {extractName: 'services_image_3'}
                );
            } else {
                newInputImage(ui.inputService3);
            }
        }

        // init banner 3.
        if ($(ui.inputAboutUs).length) {
            if ($(ui.inputOldAboutUs).length) {
                initInputImage(
                    ui.inputOldAboutUs,
                    ui.inputAboutUs,
                    ui.urlDeleteFileSetting,
                    {extractName: 'about_us_image'}
                );
            } else {
                newInputImage(ui.inputAboutUs);
            }
        }

        // init banner 3.
        if ($(ui.inputBanner1).length) {
            if ($(ui.inputOldBanner1).length) {
                initInputImage(
                    ui.inputOldBanner1,
                    ui.inputBanner1,
                    ui.urlDeleteFileSetting,
                    {extractName: 'banner_image_1'}
                );
            } else {
                newInputImage(ui.inputBanner1);
            }
        }

        // init banner 3.
        if ($(ui.inputBanner2).length) {
            if ($(ui.inputOldBanner2).length) {
                initInputImage(
                    ui.inputOldBanner2,
                    ui.inputBanner2,
                    ui.urlDeleteFileSetting,
                    {extractName: 'banner_image_2'}
                );
            } else {
                newInputImage(ui.inputBanner2);
            }
        }

        // init banner 3.
        if ($(ui.inputBanner3).length) {
            if ($(ui.inputOldBanner3).length) {
                initInputImage(
                    ui.inputOldBanner3,
                    ui.inputBanner3,
                    ui.urlDeleteFileSetting,
                    {extractName: 'banner_image_3'}
                );
            } else {
                newInputImage(ui.inputBanner3);
            }
        }



        // FOR COURSES
        if ($(ui.inputCourse1).length) {
            if ($(ui.inputOldCourse1).length) {
                initInputImage(
                    ui.inputOldCourse1,
                    ui.inputCourse1,
                    ui.urlDeleteFileSetting,
                    {extractName: 'courses_image_1'}
                );
            } else {
                newInputImage(ui.inputCourse1);
            }
        }

        if ($(ui.inputCourse2).length) {
            if ($(ui.inputOldCourse2).length) {
                initInputImage(
                    ui.inputOldCourse2,
                    ui.inputCourse2,
                    ui.urlDeleteFileSetting,
                    {extractName: 'courses_image_2'}
                );
            } else {
                newInputImage(ui.inputCourse2);
            }
        }

        if ($(ui.inputCourse3).length) {
            if ($(ui.inputOldCourse3).length) {
                initInputImage(
                    ui.inputOldCourse3,
                    ui.inputCourse3,
                    ui.urlDeleteFileSetting,
                    {extractName: 'courses_image_3'}
                );
            } else {
                newInputImage(ui.inputCourse3);
            }
        }



        $(ui.inputFavico).on('fileclear', function (event) {
            $(ui.inputRemoveInitPreview).trigger("click");
        });
    }
});
