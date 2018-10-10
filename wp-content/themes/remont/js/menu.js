$(document).ready(function() {

    initHamburgerMenuClick();

    function initHamburgerMenuClick() {
        $(".menu").on('click',function() {
            $('.hamburgerIcon').first().toggleClass("open");
            $('.hamburgerIconArticle').first().toggleClass("open");
            $('#menu').toggleClass("open-menu");
            $(this).toggleClass("menu_bg")
        });

        $(".menu-item").on('click', function () {
            $('#menu').removeClass("open-menu");
            $('.menu').removeClass("menu_bg");
            $('.hamburgerIcon').first().removeClass("open");
        });
    }
});
