import {initInputImage, newInputImage} from "../../utilities/images/image";

const ui = {
    inputFavico: '#favico',
    inputOldFavico: '#old_favico',
    inputService1: '#services_image_1',
    inputOldService1: '#old_services_image_1',
    inputService2: '#services_image_2',
    inputOldService2: '#old_services_image_2',
    inputService3: '#services_image_3',
    inputOldService3: '#old_services_image_2',
    inputLogo: '#company_logo',
    inputOldLogo: '#old_company_logo',
    inputWhyUs: '#why_us_image',
    inputOldWhyUs: '#old_why_us_image',
    urlDeleteFileSetting: '/api/delete-file-setting',
    inputRemoveInitPreview: '.kv-file-remove'
};

$(function () {
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
                {extractName: 'banner_image_1'}
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
                {extractName: 'banner_image_2'}
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
                {extractName: 'banner_image_3'}
            );
        } else {
            newInputImage(ui.inputService3);
        }
    }

    // init banner 3.
    if ($(ui.inputWhyUs).length) {
        if ($(ui.inputOldWhyUs).length) {
            initInputImage(
                ui.inputOldWhyUs,
                ui.inputWhyUs,
                ui.urlDeleteFileSetting,
                {extractName: 'why_us_image'}
            );
        } else {
            newInputImage(ui.inputWhyUs);
        }
    }

    $(ui.inputFavico).on('fileclear', function (event) {
        $(ui.inputRemoveInitPreview).trigger("click");
    });
});
