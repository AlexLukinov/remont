$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
    var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;

    initModals();

    $('#ok-modal').click(function () {
        $('#thank_application').css('display', 'none');
    });

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
