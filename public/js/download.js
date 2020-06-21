$(document).ready(function () {
    if ($('.maincontent').length) {
        let elDownloadParent = $('.post-links');
        let elDownload = elDownloadParent.find('.file-doc').first();
        let urlDownload = elDownload.data('download-url');
        if (typeof urlDownload !== "undefined" && urlDownload !== '') {
            window.location.href = urlDownload;
        }
    }
});