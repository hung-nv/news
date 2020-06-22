jQuery(document).ready(function($) {
    jQuery('.menu-responsive .menu-item-has-children > a').after('<span class="sub-open"></span>');
    jQuery('.menu-responsive .sub-open').click(function() {
        jQuery(this).closest('li').children('.sub-menu').toggle(600);
        jQuery(this).toggleClass('sub-opend');
    });
    jQuery('#header-search-button-mb, .hrm-search-close').click(function() {
        jQuery('body').toggleClass('search-opened');
    });
    $('.menu-open').click(function() {
        jQuery('.menu-responsive, .menu-responsive-overlay').toggleClass('show-mn');
    });
    jQuery('.menu-close, .menu-responsive-overlay').click(function() {
        jQuery('.menu-responsive, .menu-responsive-overlay').toggleClass('show-mn');
    });
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#topcontrol').css({
                bottom: "45px"
            });
        } else {
            jQuery('#topcontrol').css({
                bottom: "-100px"
            });
        }
    });
    jQuery('#topcontrol').click(function() {
        jQuery('html, body').animate({
            scrollTop: '0px'
        }, 800);
        return false;
    });
    $('.gallery-slides').lightSlider({
        item: 3,
        auto: true,
        pause: 2000,
        slideMove: 1,
        loop: false,
        slideMove: 2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed: 600,
        responsive: [{
            breakpoint: 800,
            settings: {
                item: 3,
                slideMove: 1,
                slideMargin: 6,
            }
        }, {
            breakpoint: 480,
            settings: {
                item: 2,
                controls: false,
                slideMove: 1
            }
        }]
    });
    jQuery('.gallery-item a').attr("data-fancybox", "images-preview");
    jQuery().fancybox({
        selector: '[data-fancybox="gallery"], .gallery-item a',
        loop: true,
    });
    jQuery('.news-marquee-inner').lightSlider({
        item: 1,
        slideMargin: 0,
        auto: true,
        pause: 3000,
        pager: false,
        loop: true,
        mode: 'fade',
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>',
    });
    jQuery('.home-slide, .gallery-columns-1').lightSlider({
        item: 1,
        slideMargin: 0,
        auto: true,
        pause: 4200,
        speed: 1000,
        pager: false,
        controls: true,
        loop: true,
        easing: 'cubic-bezier(0.4, 0, 1, 1)',
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>',
    });
    jQuery('.home-slide1').lightSlider({
        item: 3,
        slideMargin: 0,
        auto: true,
        pause: 4200,
        speed: 1000,
        pager: false,
        controls: true,
        loop: true,
        easing: 'cubic-bezier(0.4, 0, 1, 1)',
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>',
        responsive: [{
            breakpoint: 800,
            settings: {
                item: 2,
                slideMove: 1,
                slideMargin: 6,
            }
        }, {
            breakpoint: 500,
            settings: {
                item: 1,
                slideMove: 1
            }
        }]
    });
    if ($(".ykkh").length) {
        jQuery('.ykkh').lightSlider({
            item: 1,
            slideMargin: 0,
            auto: true,
            pause: 3000,
            peed: 1000,
            pager: false,
            controls: true,
            loop: true,
            easing: 'cubic-bezier(0.4, 0, 1, 1)',
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
        });
    }

    /* STICKY MENU */
    var stickyNavTop = jQuery('#site-navigation').offset().top;

    var stickyNav = function(){
        var scrollTop = jQuery(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            jQuery('#site-navigation').addClass('hrm-sticky-menu');
        } else {
            jQuery('#site-navigation').removeClass('hrm-sticky-menu');
        }
    };

    stickyNav();

    jQuery(window).scroll(function() {
        stickyNav();
    });
});