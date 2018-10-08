$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;

    initHamburgerMenuClick();

    initModals();

    initWhiteDivSize();

    $('#white-div-watch').width($('#white-div-watch').width() + 114);

    $('#ok-modal').click(function () {
        $('#thank_application').css('display', 'none');
    });
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
        var currCoordinate = $(window).scrollTop();
        if (currCoordinate >= 0 && currCoordinate < uslugiCoordinateTop){
            $('#item_circle1').addClass('active');
            $('#item_circle2').removeClass('active');
            $('#item_circle3').removeClass('active');
            $('#item_circle4').removeClass('active');
            $('#item_circle5').removeClass('active');
        }
        if (currCoordinate >= uslugiCoordinateTop && currCoordinate<= uslugiCoordinateBottom){
            $('#item_circle2').addClass('active');
            $('#item_circle1').removeClass('active');
            $('#item_circle3').removeClass('active');
            $('#item_circle4').removeClass('active');
            $('#item_circle5').removeClass('active');
        }
        if (currCoordinate >= aboutUsCoordinateTop && currCoordinate<= aboutUsCoordinateBottom){
            $('#item_circle3').addClass('active');
            $('#item_circle1').removeClass('active');
            $('#item_circle2').removeClass('active');
            $('#item_circle4').removeClass('active');
            $('#item_circle5').removeClass('active');
        }
        if (currCoordinate >= contactsCoordinateTop && currCoordinate<= contactsCoordinateBottom){
            $('#item_circle4').addClass('active');
            $('#item_circle1').removeClass('active');
            $('#item_circle2').removeClass('active');
            $('#item_circle3').removeClass('active');
            $('#item_circle5').removeClass('active');
        }
        if (currCoordinate >= blogCoordinateTop && currCoordinate<= blogCoordinateBottom){
            $('#item_circle5').addClass('active');
            $('#item_circle1').removeClass('active');
            $('#item_circle2').removeClass('active');
            $('#item_circle3').removeClass('active');
            $('#item_circle4').removeClass('active');
        }

        if (currCoordinate >= (appleImgCoordinate - 200) && !appleImgAlreadyShown) {
            $('#white-div-apple').effect("slide", { mode : "hide", direction:"right" , distance:500}, 200);
            appleImgAlreadyShown = true;
        }

        if (currCoordinate >= (watchImgCoordinate - 200) && !watchImgAlreadyShown) {
            $('#white-div-watch').effect("slide", { mode : "hide", direction:"right" , distance:500}, 200);
            watchImgAlreadyShown = true;
        }
    });

    $('.section_services').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 100
    });

    // swiper
    var swiper = initSwiper();
    initAutoSwitchHeaderSlides();

    // remove nasty part of next slide to left
    activeSwiperSlide = $('div.home_slider_img').first();
    if (isMobile) {
        activeSwiperSlide.width('77%');
    } else {
        activeSwiperSlide.width('44%');
    }

    var currHeaderSlide = 1;

    // work with article slider
    var currArticleSlide = 1;
    setTimeout(function () {
        if (isMobile) {
            $('#blog-card1').css('display', 'flex');
        } else {
            $('#blog-card1').css('display', 'flex');
            $('#blog-card2').css('display', 'flex');
            $('#blog-card3').css('display', 'flex');
        }
    }, 500);
    const blogCards = $('#blog .blog_card');
    const articlesCount = blogCards.length;

    var slidesCount = Math.floor(articlesCount / 3) + 1;
    var oneDevision = Math.floor(3*144 / slidesCount);

    initArticlesSlider();
    listenSwitchClicksArticlesSlider();

    function initAutoSwitchHeaderSlides() {
        setInterval(function () {
            $('#swiper-button-next')[0].click();
        }, 4000);
    }

    function listenSwitchClicksArticlesSlider() {
        $('#next-article').click(function (e) {
            e.preventDefault();
            if (currArticleSlide < slidesCount) {
                currArticleSlide += 1;
                articlesSlideChange(currArticleSlide);
            }
        });

        $('#prev-article').click(function (e) {
            e.preventDefault();
            if (currArticleSlide > 1) {
                currArticleSlide -= 1;
                articlesSlideChange(currArticleSlide);
            }
        });
    }

    function articlesSlideChange(currArticleSlide) {
        handleSliderLine($('#articles-line'), oneDevision*currArticleSlide);
        handleBlogCardsVisibility(currArticleSlide);
        let articlesCurrSlideText = currArticleSlide > 9 ? currArticleSlide : '0' + currArticleSlide;
        $('#articles-curr-slide').text(articlesCurrSlideText);
    }

    function handleBlogCardsVisibility(currArticleSlide) {
        blogCards.css('display', 'none');
        if (isMobile) {
            $('#blog-card' + currArticleSlide).css('display', 'flex');
        } else {
            $('#blog-card' + currArticleSlide*3).css('display', 'flex');
            $('#blog-card' + (currArticleSlide*3 - 1)).css('display', 'flex');
            $('#blog-card' + (currArticleSlide*3 - 2)).css('display', 'flex');
        }
    }

    function initArticlesSlider() {
        blogCards.css('display', 'none');

        if (isMobile) {
            slidesCount = articlesCount;
            oneDevision = Math.floor(144 / slidesCount);
        }

        let articlesCountText = slidesCount > 9 ? slidesCount : '0' + slidesCount;
        // let articlesCurrSlideText = currSlide > 9 ? currSlide : '0' + currSlide;
        $('#articles-count').text(articlesCountText);

        $('#articles-curr-slide').text('01');
        handleSliderLine($('#articles-line'), oneDevision);
    }

    function headerSliderChange(index) {
        let lineLength = 36;
        switch (index) {
            case 1: lineLength = 36;
                break;
            case 2: lineLength = 72;
                break;
            case 3: lineLength = 108;
                break;
            case 4: lineLength = 144;
                break;
        }
        handleSliderLine($('#line'), lineLength);
        $('#curr-slide-number').text('0' + index);
    }

    function handleSliderLine(line, length) {
        if (length > 140) {
            length = 144;
        }
        line.attr('d', 'M0 0, ' + length + ' 10');
    }

    // white div is open-close h2 in header
    function initWhiteDivSize() {
        if (isMobile) {
            $('#white-div').css('height', $('#h22').height() + 10);
        } else {
            $('#white-div').css('height', $('#h22').height() + 23);
        }
        $('#white-div').css('width', $('#h22').width() + 100);
    }

    function handleContent (nextIndex) {
        $('#white-div').effect ("slide", { mode : "show", direction:"right" , distance:500}, 400);
        setTimeout(function () {
            $('#h21').css('display', 'none');
            $('#h22').css('display', 'none');
            $('#h23').css('display', 'none');
            $('#h24').css('display', 'none');
            $('#h2' + nextIndex).css('display', 'block');

            $('#h31').css('display', 'none');
            $('#h32').css('display', 'none');
            $('#h33').css('display', 'none');
            $('#h34').css('display', 'none');
            $('#h3' + nextIndex).css('display', 'block');
        }, 400);
        $('#white-div').effect ("slide", { mode : "hide", direction:"right" , distance:500}, 400);
    }


    function initSwiper() {
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
                    var index = (activeIndex < 0) ? 4 : activeIndex + 1;

                    // if curr == previous it's swiper bad and I ignore this case
                    if (index != currHeaderSlide) {
                        handleContent(index);
                        headerSliderChange(index);
                        currHeaderSlide = index;
                    }
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

        return new Swiper(".swiper-container", swiperOptions);
    }

    function initHamburgerMenuClick() {
        $(".menu").on('click',function() {
            $('.hamburgerIcon').first().toggleClass("open");
            $('.hamburgerIconArticle').first().toggleClass("open");
            $('#menu').toggleClass("open-menu");
            $(this).toggleClass("menu_bg")
        });
    }

    function initModals() {
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

        $('a.open_application, #phone-button').click( function(event){ // лoвим клик пo ссылки с id="go"
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

        $('#rev-a').click( function(event){
            event.preventDefault();
            $('#reviews').fadeIn(400,
                function(){
                    $('.modal_form')
                        .css('display', 'flex')
                        .animate({opacity: 1}, 200);
                });
        });


        $('.close').click( function(){
            $('#reviews')
                .animate({opacity: 0}, 200,
                    function(){
                        $(this).css('display', 'none');
                    }
                );
        });
    }

});
