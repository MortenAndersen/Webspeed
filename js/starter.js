// @codekit-prepend "bx-slider.js", "lightbox.js" quiet;

/*global jQuery*/
(function ($) {
    "use strict";
    $(document).ready(function () {

        // Menu icon
        $('.js-menu-open').click(function() {
            $(this).toggleClass('open');
            $('.js-nav-toggle').toggleClass('open-mobile-menu');
            $('body').toggleClass('mobile-menu-open');
        });

        // Menu icon close
        $('.js-menu-close').click(function() {
            $(this).toggleClass('open');
            $('.js-nav-toggle').toggleClass('open-mobile-menu');
            $('body').toggleClass('mobile-menu-open');
        });

        // MOBILE MENU //
        $('.mobile-menu a').click(function() {
            $('.mobile-menu a').removeClass('active');
            $('.mobile-menu ul').removeClass('active-trail');
            $(this).addClass('active');
        });

        // Sub menu trigger
        $('.mobile-menu ul').parent('li').append('<span class="menu-trigger" aria-label="Åben undermenu"></span>');

        // Sub menu toggle
        $('.current_page_ancestor > .menu-trigger').addClass('active-trigger');
        $('.menu-trigger').click(function() {
            $(this).siblings('ul').slideToggle().toggleClass('mobile-sibling-open');
            $(this).toggleClass('active-trigger');
        });

        // Sub menu toggle uden link - MegaMenu
        $('.m-head > a').click(function() {
            $(this).siblings('ul').slideToggle().toggleClass('mobile-sibling-open');
            $(this).toggleClass('active-trigger');
            $(this).siblings('span').toggleClass('active-trigger');
        });

        $('.current-menu-item .menu-trigger').addClass('active-trigger');
//--------------------------

        // Lightbox
        $('.lightbox-link, .overlay a').attr('data-lightbox', 'content-image');

        // Slider

        $(function(){
            $('.banner').bxSlider({
                mode: 'fade',
                auto: true,
                controls: false,
                pager: false,
                speed: 2000,
                touchEnabled: false

            });
        });

           $(function(){
            $('.slider-2').bxSlider({
                maxSlides: 2,
                minSlides: 2,
                slideWidth: 502,
                slideMargin: 32,
                controls: false,
                auto: true,
                speed: 2000,
                pause: 6000,
                autoHover: true,
                touchEnabled: false
            });
        });

        $(function(){
            $('.slider-3').bxSlider({
                maxSlides: 3,
                minSlides: 2,
                slideWidth: 326,
                slideMargin: 32,
                controls: false,
                auto: true,
                speed: 2000,
                pause: 6000,
                autoHover: true,
                touchEnabled: false
            });
        });

        $(function(){
            $('.slider-4').bxSlider({
                maxSlides: 4,
                minSlides: 2,
                slideWidth: 235,
                slideMargin: 32,
                controls: false,
                auto: true,
                speed: 2000,
                pause: 6000,
                autoHover: true,
                touchEnabled: false
            });
        });

        // Accordion
        $('.acc-head').click(function(){
            $(this).toggleClass('active');
            $(this).parent().find('.arrow').toggleClass('arrow-animate');
            $(this).parent().find('.acc-content').slideToggle(280);
        });

        // Detect scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll > 150) {
                $('.sticky-header').addClass("scroll");
            } 
            if ( scroll < 100) {
                $('.sticky-header').removeClass("scroll");
            }

            if (scroll > 150) {
                $('.g-t-t').addClass("ggt-active");
            } 

            if (scroll < 100) {
                $('.g-t-t').removeClass("ggt-active");
            } 
        });

// --------------------------------------------

        // Element i viewpoint - skal forfines!

        function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(window).scroll(function () {
    $('.zoom-in .img-zoom').each(function () {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('visible');
        }
    });

});

$('.zoom-in .img-zoom').each(function () {
        if (isScrolledIntoView(this) === true) {
            $(this).addClass('visible');
        }
    });

// --------------------------------------------

// WOO
    $('#woo-filter-toggle').click(function(){
        $('.woo-aside-con').toggleClass('active');
    });

});

}(jQuery));