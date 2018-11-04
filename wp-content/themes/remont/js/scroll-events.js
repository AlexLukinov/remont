$(document).ready(function () {
    var uslugiCoordinateTop = $('#uslugi').offset().top;
    var uslugiCoordinateBottom = $('#uslugi').height() + uslugiCoordinateTop;
    var aboutUsCoordinateTop = $('#about-us').offset().top;
    var aboutUsCoordinateBottom = $('#about-us').height() + aboutUsCoordinateTop;
    var contactsCoordinateTop = $('#contacts').offset().top;
    var contactsCoordinateBottom = $('#contacts').height() + contactsCoordinateTop;
    var blogCoordinateTop = $('#blog').offset().top;
    var blogCoordinateBottom = $('#blog').height() + blogCoordinateTop;

    var appleImgCoordinate = $('#apple-img').offset().top;
    var watchImgCoordinate = $('#watch-img').offset().top;
    var appleImgAlreadyShown = false;
    var watchImgAlreadyShown = false;

    $(window).scroll(function(){
        var previousCoordinate = 0;
        var currCoordinate = $(window).scrollTop();

        if (isMobile) {
            if (currCoordinate > previousCoordinate) {
                $('.article_header').first().hide();
                previousCoordinate = currCoordinate;
            }
        }

        if (currCoordinate >= 0 && currCoordinate < uslugiCoordinateTop){
            setMainSliderActiveDot(1);
            setActiveMenuItem(1);
        }
        if (currCoordinate >= uslugiCoordinateTop && currCoordinate<= uslugiCoordinateBottom){
            setMainSliderActiveDot(2);
            setActiveMenuItem(2);
        }
        if (currCoordinate >= aboutUsCoordinateTop && currCoordinate<= aboutUsCoordinateBottom){
            setMainSliderActiveDot(3);
            setActiveMenuItem(3);
        }
        if (currCoordinate >= contactsCoordinateTop && currCoordinate<= contactsCoordinateBottom){
            setMainSliderActiveDot(4);
            setActiveMenuItem(4);
        }
        if (currCoordinate >= blogCoordinateTop && currCoordinate<= blogCoordinateBottom){
            setMainSliderActiveDot(5);
            setActiveMenuItem(5);
        }

        // start apple image animation on scroll to it
        if (currCoordinate >= (appleImgCoordinate - 200) && !appleImgAlreadyShown) {
            $('#white-div-apple').effect("slide", { mode : "hide", direction:"right" , distance:500}, 200);
            appleImgAlreadyShown = true;
        }

        // start watch image animation on scroll to it
        if (currCoordinate >= (watchImgCoordinate - 200) && !watchImgAlreadyShown) {
            $('#white-div-watch').effect("slide", { mode : "hide", direction:"right" , distance:500}, 200);
            watchImgAlreadyShown = true;
        }
    });

    function setActiveMenuItem(menuItemNumber) {
        // $('nav a:nth-child(1)').removeClass('active');
        // $('nav a:nth-child(2)').removeClass('active');
        // $('nav a:nth-child(3)').removeClass('active');
        // $('nav a:nth-child(4)').removeClass('active');
        // $('nav a:nth-child(5)').removeClass('active');
        // $('nav a:nth-child(' + menuItemNumber + ')').addClass('active');
    }

    function setMainSliderActiveDot(dotNumber) {
        $('#item_circle5').removeClass('active');
        $('#item_circle1').removeClass('active');
        $('#item_circle2').removeClass('active');
        $('#item_circle3').removeClass('active');
        $('#item_circle4').removeClass('active');
        $('#item_circle' + dotNumber).addClass('active');
    }

});