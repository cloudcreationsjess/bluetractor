/**
 * External Dependencies
 */
import 'jquery';
import Masonry from 'masonry-layout';
import Swiper from 'swiper/bundle';
import 'swiper/css';

$(document).ready(() => {
    windowLoad();
    scroller();
    filterBlogPosts();
    mobileMenu();
    animateOnScroll();

    // Run script on specific page
    // var url_pathname = window.location.pathname;
    // if (url_pathname == "/page-name/") {
    // yourScript();
    // }

});

/*
 * Hides nav on scroll down, shows on scroll up
 */
document.addEventListener("DOMContentLoaded", function () {

    var el_autohide = document.querySelector('.autohide');

    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function () {
            let scroll_top = window.scrollY;
            // set scroll amount (px)
            if (!document.querySelector('html').classList.contains('is--mobile-nav__active')) {
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove('scrolled-down');
                    el_autohide.classList.add('scrolled-up');
                } else {
                    el_autohide.classList.remove('scrolled-up');
                    el_autohide.classList.add('scrolled-down');
                }
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }
    // if

});

function filterBlogPosts() {

    $('.js--category-button').click(function (e) {
        e.stopPropagation();
        $('.filter__dropdown').toggleClass('filter__dropdown--is-open');
        $('.filter__search-box__button').toggleClass('filter__search-box__button-rotate');
    });

    $('.js--category-button').click(function (e) {
        e.stopPropagation();
    });

    $('body,html').click(function (e) {
        $('.filter__dropdown').removeClass('filter__dropdown--is-open');
        $('.filter__search-box__button').removeClass('filter__search-box__button-rotate');

    });

}

/*
 * Removes loading animation when page load is completed
 */
function windowLoad() {
    // var loader;
    if (document.readyState == 'loading') {
        // loader = requestAnimationFrame(animateLoaderScript);
    }
    $(".page-loader").fadeOut("slow");
    $("body").removeClass("preload");
}

/*
 * Any on scroll functionality should be placed here so only one window scroll is called
 */
function scroller() {

    // == Change Header on scroll ==
    var header = $(".js__header");

    // ******* SCROLL ************\\
    $(window).on('scroll', function () {

        // == Change Header on scroll ==
        scroll = $(window).scrollTop();
        // set scroll amount (px)
        if (scroll >= 120) {
            header.addClass("header--secondary");// if scroll is further than #px change class
            // splashBox.css("z-index", -100);
        } else {
            header.removeClass("header--secondary"); // if not (is at top) change class back
        }

    });

    // == Change Header on scroll ==
    var scroll = scroll;
    if (scroll >= 120) {
        header.addClass("header--secondary");// if scroll is further than #px change class
    } else {
        header.removeClass("header--secondary"); // if not (is at top) change class back
    }
}

/*
 * Adds scroll to animation functionality
 * add class="animation-element" to an element you want to be triggered when scrolled to,
 * then your animation found in animation.less
 */
function animateOnScroll() {
    var $animation_elements = $('.animation-element');
    var $tab_animation_elements = $('.tab-animation-element');
    var $force_in_view = $('.force-in-view');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height() - 200;
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        if ($animation_elements) {
            $.each($animation_elements, function () {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);

                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }
            });
        }
        if ($force_in_view) {
            $.each($force_in_view, function () {
                $(this).addClass('in-view');
            });
        }
    }

    $(window).load(function () {
        setTimeout(function () {
            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        }, 600);
    });
}

function mobileMenu() {
    var $menu = $('#mobile-menu');
    var html = document.querySelector('html');
    //hamburger
    var hamburger = document.querySelector('.js--hamburger');
    hamburger.addEventListener('click', () => {
        html.classList.toggle('is--mobile-nav__active');
    });

}

// EVENTS SLIDER

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,
    spaceBetween: 0,
    disabledClass: '.swiper-button-disabled',
    clickable: true,
    watchOverflow: false,
    pagination: {
        paginationClickable: true,
        el: '.swiper-pagination',
        type: 'bullets',
    },
    breakpoints: {
        // when window width is >= 1830px
        1830: {
            slidesPerView: 2,
        },
        // when window width is >= 480px

        1500: {
            slidesPerView: 2,
        },

        1370: {
            slidesPerView: 2,
        },

        0: {
            slidesPerView: 1,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    on: {
        init: function () {
            checkArrowEvents();
        },
        resize: function () {
            checkArrowEvents();
        },
    },

});

function checkArrowEvents() {
    var swiperPrev = document.querySelector('.swiper-button-next');
    var swiperNext = document.querySelector('.swiper-button-prev');
    if (window.innerWidth >= 768) {
        console.log('Success', window.innerWidth);
        swiperPrev.style.display = 'flex';
        swiperNext.style.display = 'flex';
    } else {
        swiperPrev.style.display = 'none';
        swiperNext.style.display = 'none';
    }
}

//TESTIMONIAL SLIDER

const swiper2 = new Swiper('#swiper-testimonial', {
    direction: 'horizontal',
    loop: true,
    disabledClass: '.swiper-button-disabled',
    clickable: true,
    slidesPerView: 1,
    watchOverflow: false,
    autoHeight: false,
    effect: 'fade',
    fadeEffect: {crossFade: true},
    speed: 750,
    autoplay: {
        delay: 20000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },

    pagination: {
        paginationClickable: true,
        el: '.swiper-pagination',
        type: 'bullets',
    },

    // Navigation arrows
    navigation: {
        nextEl: '#swiper-next2',
        prevEl: '#swiper-next1',
    },

    on: {
        init: function () {
            checkArrow();
        },
        resize: function () {
            checkArrow();
        },
    },

});

function checkArrow() {
    var swiperPrev = document.querySelector('#swiper-next1');
    var swiperNext = document.querySelector('#swiper-next2');
    if (window.innerWidth > 768) {
        console.log('Success', window.innerWidth);
        swiperPrev.style.display = 'block';
        swiperNext.style.display = 'block';
    } else {
        swiperPrev.style.display = 'none';
        swiperNext.style.display = 'none';
    }
}