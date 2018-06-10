//
//    Autor: Nicolas Ramos
//    Data : 09/06/2018
//    Nota : Projeto de botão totop este é o código principal.
//
(function($) {
    $.fn.totop = function () {
        let to_btn = this;
        to_btn.css('opacity','.7');
        $(document).scroll(function () {
            let pos = $(window).scrollTop();

            if (pos >= 70) {
                if (! (to_btn.hasClass('primeira'))) {
                    to_btn.addClass('primeira')
                        .css({'right': 40,
                              'bottom': 40,
                              'position': 'fixed',
                              'display': 'none',
                        })
                        .fadeIn(500);
                } else {
                    to_btn.fadeIn(500);
                }
            } else {
                to_btn.fadeOut(500);
            }
        });
        to_btn.hover(function () {
            to_btn.css('opacity','1');
        }, function () {
            to_btn.css('opacity','.7');
        }).click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, {
                duration: 900
            });
        });
    }
}(jQuery));