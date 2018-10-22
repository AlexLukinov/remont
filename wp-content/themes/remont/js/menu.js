$(document).ready(function() {
    var isMenuOpened = false;
    var windowWidth = $(window).width();
    var menuDiv = $('#menu-div');

    initHamburgerMenuClick();

    function initHamburgerMenuClick() {
        $(".menu").on('click',function() {
            $('.hamburgerIcon').first().toggleClass("open");
            $('.hamburgerIconArticle').first().toggleClass("open");
            if (isMenuOpened) {
                menuDiv.animate({width: 'toggle'});
            } else {
                $('.menu_wrapper').first().addClass('fadeOut');
                menuDiv.animate({width: 'toggle'});

            }
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
