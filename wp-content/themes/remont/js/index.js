$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы

    $(".menu").on('click',function() {
        $('.hamburgerIcon').first().toggleClass("open");
        $('.hamburgerIconArticle').first().toggleClass("open");
        $('#menu').toggleClass("open-menu");
        $(this).toggleClass("menu_bg")
    });

    $(function() {
        $('.home_slider_content a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
                scrollTop: top
            }, 1200);
        });
    });

    // модальное окно
    $("#review-modal").each( function(){
        $(this).wrap('<div class="overlay"></div>')
    });

    $(".open-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        showModal(modal);
        $(document).on('click', function(e){
            var target = $(e.target);

            if ($(target).hasClass("overlay")){
                $(target).find(".modal").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                }, 350);
            }

        });

    });

    $(".close-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $(modal).removeClass("open");
        setTimeout( function(){
            $(modal).parents(".overlay").removeClass("open");
        }, 350);

    });

    $('a.open_application').click( function(event){ // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#application').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('.modal_form')
                    .css('display', 'flex') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });

    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('.close').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#application').fadeOut(400,
            function(){ // пoсле aнимaции
                $(this).css('display', 'none'); // делaем ему display: none;
            }
        );
    });

    $('#rev-a').click( function(event){ // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#reviews').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('.modal_form')
                    .css('display', 'flex') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });

    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('.close').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#reviews')
            .animate({opacity: 0}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                }
            );
    });

    var interleaveOffset = 0.5;

    var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
            nextEl: "#swiper-button-next",
            prevEl: "#swiper-button-prev"
        },
        on: {
            slideChange: function() {
                var swiper = this;
                var activeIndex = (swiper.activeIndex - 1) % (swiper.slides.length - 2);
                var index = (activeIndex < 0) ? 3 : activeIndex;
                handleContent(index);
            },
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    $('#ok-modal').click(function () {
        $('#thank_application').css('display', 'none');
    });


    function handleContent(index) {
        switch (index) {
            case 0:
                $('#home_slider_content1').css('display', 'flex');
                $('#home_slider_content2').css('display', 'none');
                $('#home_slider_content3').css('display', 'none');
                $('#home_slider_content4').css('display', 'none');
                break;
            case 1:
                $('#home_slider_content1').css('display', 'none');
                $('#home_slider_content2').css('display', 'flex');
                $('#home_slider_content3').css('display', 'none');
                $('#home_slider_content4').css('display', 'none');
                break;
            case 2:
                $('#home_slider_content1').css('display', 'none');
                $('#home_slider_content2').css('display', 'none');
                $('#home_slider_content3').css('display', 'flex');
                $('#home_slider_content4').css('display', 'none');
                break;
            case 3:
                $('#home_slider_content1').css('display', 'none');
                $('#home_slider_content2').css('display', 'none');
                $('#home_slider_content3').css('display', 'none');
                $('#home_slider_content4').css('display', 'flex');
                break;
            default:
                $('#home_slider_content1').css('display', 'flex');
                $('#home_slider_content2').css('display', 'none');
                $('#home_slider_content3').css('display', 'none');
                $('#home_slider_content4').css('display', 'none');
                break;
        }
    }

});
jQuery(document).ready(function() {
    jQuery('.section_services').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 100
    });
    // $('.plast_img').click(function () {
    //     $(".plast_img").show('slide', 1000);
    // })
});
