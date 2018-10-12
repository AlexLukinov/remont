$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;

    // $( window ).resize(function() {
    //     $( "#zayavka_text" ).css('height', '30%');
    // });

    initWhiteDivSize();

    $('#white-div-watch').width($('#white-div-watch').width() + 114);

    $('.section_services').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 100
    });

    // swiper
    var swiper = initSwiper();
    initAutoSwitchHeaderSlides();

    // remove nasty part of next slide
    activeSwiperSlide = $('div.home_slider_img').first();
    if (isMobile) {
        activeSwiperSlide.width('77%');
    } else {
        activeSwiperSlide.width('47%');
    }

    var currHeaderSlide = 1;
    var currArticleSlide = 1;
    var currReviewSlide = 1;

    // all cards are displayed none, display flex first slides
    setTimeout(function () {
        if (isMobile) {
            $('#article-card1').css('display', 'flex');
            $('#review-card1').css('display', 'flex');
        } else {
            $('#article-card1').css('display', 'flex');
            $('#article-card2').css('display', 'flex');
            $('#article-card3').css('display', 'flex');
            $('#review-card1').css('display', 'flex');
            $('#review-card2').css('display', 'flex');
            $('#review-card3').css('display', 'flex');
            $('#review-card4').css('display', 'flex');
        }
    }, 500);
    
    const articlesCards = $('#blog .blog_card');
    const articlesCount = articlesCards.length;
    
    const reviewsCards = $('.reviews_block_item');
    const reviewsCount = reviewsCards.length;

    var articlesSlidesCount = Math.floor(articlesCount / 3) + 1;

    var reviewsSlidesCount = Math.floor(reviewsCount / 4) + 1;

    function calcOneDevision(el, slidesCount) {
        console.log(el.width());
        console.log(slidesCount);
        return el.width() / slidesCount;
    }

    function getOneDevisionByEl(el) {
        switch (el) {
            case 'article':
                console.log('article: ' + calcOneDevision($("#article-svg"), articlesSlidesCount));
                return calcOneDevision($("#article-svg"), articlesSlidesCount);
                break;
            case 'review':
                console.log('review: ' + calcOneDevision($("#review-svg"), reviewsSlidesCount));
                return calcOneDevision($("#review-svg"), reviewsSlidesCount);
                break;
            case 'header':
                return calcOneDevision($("#header-svg"), 4);
                break;
        }
    }

    initSlider('article', articlesCards, articlesSlidesCount);
    listenSwitchSlideClick('article', articlesSlidesCount, currArticleSlide);
    
    initSlider('review', reviewsCards, reviewsSlidesCount);
    listenSwitchSlideClick('review', reviewsSlidesCount, currReviewSlide);

    function initAutoSwitchHeaderSlides() {
        setInterval(function () {
            $('#swiper-button-next')[0].click();
        }, 4000);
    }
    
    function listenSwitchSlideClick(el, slidesCount, currSlide) {
        let cards = (el == 'article') ? articlesCards : reviewsCards;
        $('#next-' + el).click(function (e) {
            e.preventDefault();
            if (currSlide < slidesCount) {
                currSlide += 1;
                slideChange(el, currSlide);
                handleCardsVisibility(el, cards, currSlide);
            }
        });
        
        $('#prev-' + el).click(function (e) {
            e.preventDefault();
            if (currSlide > 1) {
                currSlide -= 1;
                slideChange(el, currSlide);
                handleCardsVisibility(el, cards, currSlide);
            }
        });
    }

    // handle switch of slides (animate line, text of current slide number)
    function slideChange(el, currSlide) {
        let oneDevision = getOneDevisionByEl(el);
        handleSliderLine($('#' + el + 's-line'), oneDevision*currSlide);
        let currSlideText = currSlide > 9 ? currSlide : '0' + currSlide;
        $('#' + el + 's-curr-slide').text(currSlideText);
    }

    // toggle visibility of cards
    function handleCardsVisibility(cardEl, cards, currSlide) {
        cards.css('display', 'none');
        if (isMobile) {
            $('#' + cardEl + '-card' + currSlide).css('display', 'flex');
        } else {
            $('#' + cardEl + '-card' + currSlide*3).css('display', 'flex');
            $('#' + cardEl + '-card' + (currSlide*3 - 1)).css('display', 'flex');
            $('#' + cardEl + '-card' + (currSlide*3 - 2)).css('display', 'flex');
            if (cardEl == 'review') {
                $('#' + cardEl + '-card' + (currSlide*3 - 3)).css('display', 'flex');
            }
        }
    }

    // init slider (article and review)
    function initSlider(el, cards, slidesCount) {
        cards.css('display', 'none');

        if (isMobile) {
            slidesCount = (el == 'article') ? articlesCount : reviewsCount;
        }

        let countText = slidesCount > 9 ? slidesCount : '0' + slidesCount;
        $('#' + el + 's-count').text(countText);

        $('#' + el + 's-curr-slide').text('01');
        handleSliderLine($('#' + el + 's-line'), getOneDevisionByEl(el));
    }

    // get line element and set it length
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

    // switch texts of header cards (h2 and text below h2)
    function handleHeaderCardsContent (nextIndex) {
        $('#white-div').effect("slide", { mode : "show", direction:"right" , distance:500}, 400);
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
        $('#white-div').effect("slide", { mode : "hide", direction:"right" , distance:500}, 400);
    }

    // init header swiper which switch images and by it's events handle
    // texts of header cards
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

                    // if curr == previous it's swiper error and I ignore this case
                    if (index != currHeaderSlide) {
                        handleHeaderCardsContent(index);
                        slideChange('header', index);
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

});
