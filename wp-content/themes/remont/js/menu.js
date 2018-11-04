$(document).ready(function() {
    var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;
    var isMenuOpened = false;
    var windowWidth = $(window).width();
    var menuDiv = $('#menu-div');
    var previousCoordinate = 0;

    $(window).scroll(function() {
        var currCoordinate = $(window).scrollTop();

        if (isMobile) {
            var header = $('header').first();
            if (currCoordinate > previousCoordinate) {
                header.slideUp();
            } else {
                header.slideDown();
            }
            previousCoordinate = currCoordinate;
        }
    });

    initHamburgerMenuClick();

    function initHamburgerMenuClick() {
        $(".menu").on('click',function() {
            $('.hamburgerIcon').first().toggleClass("open");
            $('.hamburgerIconArticle').first().toggleClass("open");
            // if (isMenuOpened) {
            //     menuDiv.animate({width: 'toggle'});
            // } else {
            //     $('.menu_wrapper').first().addClass('fadeOut');
            //     menuDiv.animate({width: 'toggle'});
            //
            // }
            menuDiv.toggle();
            $(this).toggleClass("menu_bg");
            isMenuOpened = !isMenuOpened;
        });

        $(".menu-item").on('click', function () {
            $('#menu-div').css('display', 'none');
            $('.menu').removeClass("menu_bg");
            $('.hamburgerIcon').first().removeClass("open");
            isMenuOpened = false;
        });
    }
});
