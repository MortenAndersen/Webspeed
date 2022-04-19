// @codekit-prepend "bx-slider.js", "fitvids.js", "lightbox.js" quiet;

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

        $('.sub-menu li:has(ul)').addClass('has-sub');

        // Video
        $('.video, .wp-block-embed__wrapper').fitVids();

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

        // Accordion
        $('.acc-head').click(function(){
            $(this).toggleClass('active');
            $(this).parent().find('.arrow').toggleClass('arrow-animate');
            $(this).parent().find('.acc-content').slideToggle(280);
        });


});

}(jQuery));