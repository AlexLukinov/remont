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
                menuDiv.effect("slide", { mode : "hide", direction:"left" , distance: windowWidth}, 800);
            } else {
                menuDiv.effect("slide", { mode : "show", direction:"left" , distance: windowWidth}, 800);
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
