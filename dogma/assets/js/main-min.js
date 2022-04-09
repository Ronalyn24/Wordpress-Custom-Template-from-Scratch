anchorAvoidScroll = function () {

    $ = jQuery.noConflict();

    $('a[href="#"]').click(function ($e) {
        $e.preventDefault();
        return false;
    });
}


bugherAnimation = function () {

    $ = jQuery.noConflict();

    $('.menu-bar-icon').click(function () {
        $('html').toggleClass('open-menu');
    });

    $('.mr-header-menu.for-mobile ul.menu li a').click(function () {
        $('html').toggleClass('open-menu');
    });
}

scrollCTA = function () {

    var $ = jQuery.noConflict();

    var documentBody = $('body');
    var hasBeenTrigged = false;

    $(window).scroll(function () {

        if ($(this).scrollTop() >= 300 && !hasBeenTrigged) {
            $(documentBody).addClass('did-scroll');
            $(documentBody).removeClass('did-scroll-top');
            hasBeenTrigged = true;
        }


        if ($(this).scrollTop() < 300 && hasBeenTrigged) {
            $(documentBody).toggleClass('did-scroll');
            $(documentBody).toggleClass('did-scroll-top');
            hasBeenTrigged = false;
        }

    });

}


flickitySliders = function () {

    $ = jQuery.noConflict();

    var $carousel = $('.reviews-carousel').flickity({
        freeScroll: true,
        wrapAround: false,
        cellSelector: '.carousel-cell',
        cellAlign: 'left',
        prevNextButtons: false,
        pageDots: false,
        groupCells: 1
    });

    // previous
    $('.button--previous').on('click', function () {
        $carousel.flickity('previous');
    });

    // next
    $('.button--next').on('click', function () {
        $carousel.flickity('next');
    });

    $carousel.flickity();



    // Space Slider
    var $carousel1 = $('.space-carousel').flickity({
        cellSelector: '.carousel-cell-image',
        lazyLoad: true,
        imagesLoaded: true,
        wrapAround: true,
        cellAlign: 'left',
        prevNextButtons: false,
        pageDots: false,
        groupCells: true
    });

    // previous
    $('.button--previous').on('click', function () {
        $carousel1.flickity('previous');
    });

    // next
    $('.button--next').on('click', function () {
        $carousel1.flickity('next');
    });

    $carousel1.show().flickity('resize');

    // Tabs function
    $('.space-tab-item').click(function () {
        var tab_id = $(this).attr('space-tab-item');

        $('.space-tab-item').removeClass('space-current');
        $('.space-content-wrapper').removeClass('space-current');

        $(this).addClass('space-current');
        $("#space-tab-inner-content-" + tab_id).addClass('space-current');

        $carousel1.show().flickity('resize');
    });

}

elementAccordion = function () {

    $ = jQuery.noConflict();

    $(".acc-item > .acc-btn").on("click", function (e) {

        e.preventDefault()

        if ($(this).hasClass("active")) {

            $(this).removeClass("active");

            $(this).siblings(".content").slideUp(200);

            $(".acc-item > .acc-btn i").removeClass("fa-minus").addClass("fa-plus");

        } else {
            $(".acc-item > .acc-btn i").removeClass("fa-minus").addClass("fa-plus");
            $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
            $(".acc-item > .acc-btn").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this).siblings(".content").slideDown(200);
        }
    });

}


servicesColumns = function () {

    $ = jQuery.noConflict();

    if ($('.service-items').hasClass('col-two')) {
        $('.thumbnail-img.had-two-cols').show();
        $('.thumbnail-img.default-cols').remove();

    }
    else {
        $('.thumbnail-img.default-cols').show();
        $('.thumbnail-img.had-two-cols').remove();
    }
}


getTabFunctions = function () {

    $ = jQuery.noConflict();

    $('.gen-tab-item').click(function () {
        var tab_id = $(this).attr('data-tab-item');

        $('.gen-tab-item').removeClass('tab-current');
        $('.tab-content-wrapper').removeClass('tab-current');

        $(this).addClass('tab-current');
        $("#tab-inner-content-" + tab_id).addClass('tab-current');

    });
}


customLightBox = function () {

    $ = jQuery.noConflict();

    $('.tab-inner-wrap .tab-inner-item .view-lb-btn, .show-slider-lightbox').click(function () {

        $('html').addClass('lightbox-open');
        $('html').removeClass('hide-ligthbox');

    });

    $('.bck-close, .bck-close-bg').click(function () {

        $('html').removeClass('lightbox-open');
        $('html').addClass('hide-ligthbox');

    });
}


jQuery(document).ready(anchorAvoidScroll);
jQuery(document).ready(bugherAnimation);
jQuery(document).ready(scrollCTA);
jQuery(document).ready(flickitySliders);
jQuery(document).ready(elementAccordion);
jQuery(document).ready(servicesColumns);
jQuery(document).ready(getTabFunctions);
jQuery(document).ready(customLightBox);




