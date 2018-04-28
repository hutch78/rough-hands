jQuery(document).ready(function($){


    function initMobileNav() {
        /*
            *
            *   Menu Overlay Toggle
            * 
            */
        var NAV_TOGGLE = $('.nav-toggle');
        var NAVS = $('.right-side-nav, .left-side-nav');

        var activateNav = function () {
            NAVS.slideToggle();
        }
        var deActivateNav = function () {
            NAVS.slideToggle();
            NAV_TOGGLE.removeClass('nav-toggle--active');
        }

        NAV_TOGGLE.on('click', function (evt) {
            evt.preventDefault();
            evt.stopPropagation();
            NAVS.slideToggle();
            NAV_TOGGLE.toggleClass('nav-toggle--active');
        });

    }



    initMobileNav();

    
});