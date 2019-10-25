import {initInputImage, newInputImage} from "../../utilities/images/image";

const ui = {
    inputFavico: '#favico',
    inputOldFavico: '#old_favico',
    inputBanner1: '#banner_image_1',
    inputOldBanner1: '#old_banner_image_1',
    inputBanner2: '#banner_image_2',
    inputOldBanner2: '#old_banner_image_2',
    inputBanner3: '#banner_image_3',
    inputOldBanner3: '#old_banner_image_3',
    inputLogo: '#company_logo',
    inputOldLogo: '#old_company_logo',
    inputWhyUs: '#why_us_image',
    inputOldWhyUs: '#old_why_us_image',
    urlDeleteFileSetting: '/api/delete-file-setting',
    inputRemoveInitPreview: '.kv-file-remove'
};

$(function () {
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

    // init banner 1.
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
