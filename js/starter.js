/*global jQuery*/
(function ($) {
  "use strict";
  $(document).ready(function () {
    // Menu icon
    $(".js-menu-open").click(function () {
      $(this).toggleClass("open");
      $(".js-nav-toggle").toggleClass("open-mobile-menu");
      $("body").toggleClass("mobile-menu-open");
    });

    // Menu icon close
    $(".js-menu-close").click(function () {
      $(this).toggleClass("open");
      $(".js-nav-toggle").toggleClass("open-mobile-menu");
      $("body").toggleClass("mobile-menu-open");
    });

    // MOBILE MENU //
    $(".mobile-menu a").click(function () {
      $(".mobile-menu a").removeClass("active");
      $(".mobile-menu ul").removeClass("active-trail");
      $(this).addClass("active");
    });

    // Sub menu trigger
    $(".mobile-menu ul")
      .parent("li")
      .append('<span class="menu-trigger"></span>');

    // Sub menu toggle
    $(".current_page_ancestor > .menu-trigger").addClass("active-trigger");
    $(".menu-trigger").click(function () {
      $(this).siblings("ul").slideToggle().toggleClass("mobile-sibling-open");
      $(this).toggleClass("active-trigger");
    });

    // Sub menu toggle uden link - MegaMenu
    $(".m-head > a").click(function () {
      $(this).siblings("ul").slideToggle().toggleClass("mobile-sibling-open");
      $(this).toggleClass("active-trigger");
      $(this).siblings("span").toggleClass("active-trigger");
    });

    $(".current-menu-item .menu-trigger").addClass("active-trigger");
    //--------------------------

    // Lightbox
    $(".lightbox-link, .overlay a").attr("data-lightbox", "content-image");

    
    // Detect scroll
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll > 150) {
        $(".sticky-header").addClass("scroll");
      }
      if (scroll < 100) {
        $(".sticky-header").removeClass("scroll");
      }

      if (scroll > 150) {
        $(".to-top").addClass("active");
      }

      if (scroll < 100) {
        $(".to-top").removeClass("active");
      }
    });

    // --------------------------------------------

    // Element i viewpoint - skal forfines!

    function isScrolledIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();

      return elemBottom <= docViewBottom && elemTop >= docViewTop;
    }

    $(window).scroll(function () {
      $(".zoom-in .img-zoom").each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass("visible");
        }
      });
    });

    $(".zoom-in .img-zoom").each(function () {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass("visible");
      }
    });

    // --------------------------------------------

    // WOO
    $("#woo-filter-toggle").click(function () {
      $(".woo-aside-con").toggleClass("active");
    });
  });

  $(document).on("click", ".ajax_add_to_cart", function () {
    if (!$("body").hasClass("itemsInCart")) {
      $("body").addClass("itemsInCart");
    }
  });
})(jQuery);

// Slider i vanilla js
document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".banner");
    const slides = document.querySelectorAll(".banner-item");
    let current = 0;
    const duration = 5000;

    function setActiveSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
      });

      // Vent på, at layoutet opdateres, før vi måler højden
      requestAnimationFrame(() => {
        setTimeout(() => {
          const activeSlide = slides[index];
          const height = activeSlide.scrollHeight;
          container.style.height = height + "px";
        }, 50); // Lidt forsinkelse for at sikre korrekt måling
      });
    }

    function nextSlide() {
      current = (current + 1) % slides.length;
      setActiveSlide(current);
    }

    // Opdater højden, når billederne er indlæst
    slides.forEach(slide => {
      slide.querySelectorAll("img").forEach(img => {
        if (!img.complete) {
          img.addEventListener("load", () => setActiveSlide(current));
        }
      });
    });

    // Opdater højden ved vinduets størrelse ændres
    window.addEventListener("resize", () => setActiveSlide(current));

    setActiveSlide(current); // Initial visning
    setInterval(nextSlide, duration);
  });