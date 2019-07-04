$(document).ready(function () { //menu

    $('#nav-icon2').click(function () {

        $(this).toggleClass('open');

        //alert($('#nav-icon2').attr('class'));

        if ($('#nav-icon2').attr('class') == "open") {

            $(".menu_head").slideDown(1000);

            $(".main_container, footer, .end_bar, header .logo").hide();

            $("#nav-icon2 span").css('background', '#474545')

        } else {

            $(".menu_head").fadeOut(1200);

            $(".main_container, footer, .end_bar, header .logo").show();

            $("#nav-icon2 span").css('background', '#fff')

        }

    })



    $('.menu_cnt > ul > li > a').click(function () {

        $('.menu_head').css({

            'display': 'none',

        })

        $("#nav-icon2").removeClass('open')

        $("#nav-icon2 span").css('background', '#fff')

        $(".main_container, footer, .end_bar, header .logo").show();

    })

});



let current_page = 1;

//horizontal scroll

$(document).ready(function () {

    $('#pagepiling').pagepiling({

        direction: 'horizontal',

        menu: '#menu',

        verticalCentered: false,

        css3: false,

        anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],

        sectionsColor: ['transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent'],

        navigation: {

            'position': 'right',

            'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4', 'Page 5', 'Page 6']

        },

        navigation: {

            'textColor': '#000',

            'bulletsColor': '#000',

            'position': 'right',

            'tooltips': ['section1', 'section2', 'section3', 'section4', 'section5', 'section6']

        },

        afterRender: function () {

            $('#pp-nav').addClass('custom');

        },

        afterLoad: function (anchorLink, index) {

            if (index > 1) {

                $('#pp-nav').removeClass('custom');

            } else {

                $('#pp-nav').addClass('custom');

            }

        }

    });

});



$(function () { //pagepiling second section delay // contains animation slide effect 

    checkMyPage();

    $('#ballot').bind('wheel', function () {

        $('.active').next('.section').css({

            'opacity': 0,

        });

        setTimeout(function () {

            $('.active').css({

                'opacity': 1,

            });

            lalSingh();

            // animateNew();

        }, 1100);



        $('.active').prev('.section').css({

            'opacity': 0,

            'transition': 'all linear 1s'

        });

        setTimeout(function () {

            $('.active').css({

                'opacity': 1,

                //'transition': 'linear 0.5s'

            });

            lalSingh();

            //animateNew();

        }, 1100);

    });

});





// keyboard up/down click change sections

window.addEventListener("keydown", function () {

    $('.active').next('.section').css({

        'opacity': 0

    });

    setTimeout(function () {

        $('.active').css({

            'opacity': 1

        });

        lalSingh();

        //animateNew();

    }, 1100);



    $('.active').prev('.section').css({

        'opacity': 0

    });

    setTimeout(function () {

        $('.active').css({

            'opacity': 1,

            'transition': 'linear 0.5s'

        });

        lalSingh();

        //animateNew();

    }, 1100);

});



// keyboard up/down click change sections

window.addEventListener("keydown", function () {

    $('.active').next('.section').css({

        'opacity': 0

    });

    setTimeout(function () {

        $('.active').css({

            'opacity': 1

        });

        lalSingh();

        //animateNew();

    }, 1100);

    $('.active').prev('.section').css({

        'opacity': 0

    });

    setTimeout(function () {

        $('.active').css({

            'opacity': 1,

            'transition': 'linear 0.5s'

        })

        lalSingh();

        //animateNew();

    }, 1100);

});







function checkMyPage() {

    $('.section').css({

        'opacity': 0

    });

    if (window.location.hash) {

        switch (window.location.hash.substring(1)) {

            case 'page1':

                setTimeout(function () {

                    $('#section1').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 1;

            case 'page2':

                setTimeout(function () {

                    $('#section2').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 2;

                case 'page3':

                setTimeout(function () {

                    $('#section3').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 3;

            case 'page4':

                setTimeout(function () {

                    $('#section4').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 4;

            case 'page5':

                setTimeout(function () {

                    $('#section5').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 5;

            case 'page6':

                setTimeout(function () {

                    $('#section6').css({

                        'opacity': 1

                    });

                }, 1100);

                break;

                current_page = 6;

        }

    } else {

        $('#section1').css({

            'opacity': 1

        });

        current_page = 1;

    }

}



$(window).ready(function () { //flash animation on text

    //$('#flash1').animate({ left: '225px', width: '0px' }, 1200);

    $('#flash1').hide();

    // setTimeout(function () { $('#flash1').fadeOut() });



    $('.con_tt h2').fadeIn('slow').delay(100).show('slow');

})





// $(function () { //flash animation on text on scroll

//     if ($('#section1').hasClass('active')) {

//         $('.flash_big').animate({ left: '450px', width: '0px' }, 500);

//         setTimeout(function () { $('.flash_big').fadeOut() });

//         //$('.con_tt h2').fadeIn('slow').delay(6000).show('slow');

//     }

// })







/*carousal For Slide */

$(document).ready(function () {

    var owl = $('.owl-carousel');

    owl.owlCarousel({

        items: 3,

        loop: true,

        margin: 10,

        autoplay: true,

        autoplayTimeout: 6000,

        autoplayHoverPause: true,

        responsiveClass: true,

        responsive: {

            0: {

                items: 1,

                nav: true

            },

            600: {

                items: 1,

                nav: true,

            },

            1000: {

                items: 3,

                nav: true,

                margin: 10

            }

        }

    });

    $('.play').on('click', function () {

        owl.trigger('play.owl.autoplay', [6000])

    })

    $('.stop').on('click', function () {

        owl.trigger('stop.owl.autoplay')

    })

});



/*div comes out onclick*/

$(document).ready(function () {

    $('#bx1, #view').click(function () { //slide left frame 1

        $('#box_open').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh').click(function () {

        $('#box_open').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })





    $('#bx2, #view').click(function () { //slide left frame 2

        $('#box_open1').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con1').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh1').click(function () {

        $('#box_open1').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con1').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh1').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx3, #view').click(function () { //slide left frame 3

        $('#box_open2').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con2').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh2').click(function () {

        $('#box_open2').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con2').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh2').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx4, #view').click(function () { //slide left frame 4

        $('#box_open3').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con3').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh3').click(function () {

        $('#box_open3').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con3').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh3').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx5, #view').click(function () { //slide left frame 5

        $('#box_open4').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con4').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh4').click(function () {

        $('#box_open4').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con4').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh4').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx6, #view').click(function () { //slide left frame 6

        $('#box_open5').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con5').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh5').click(function () {

        $('#box_open5').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con5').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh5').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx7, #view').click(function () { //slide left frame 7

        $('#box_open6').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con6').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh6').click(function () {

        $('#box_open6').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con6').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh6').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx8, #view').click(function () { //slide left frame 8

        $('#box_open7').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con7').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh7').click(function () {

        $('#box_open7').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con7').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh7').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx9, #view').click(function () { //slide left frame 9

        $('#box_open8').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con8').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh8').click(function () {

        $('#box_open8').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con8').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh8').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx10, #view').click(function () { //slide left frame 10

        $('#box_open9').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con9').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh9').click(function () {

        $('#box_open9').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con9').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh9').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx11, #view').click(function () { //slide left frame 11

        $('#box_open10').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con10').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh10').click(function () {

        $('#box_open10').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con10').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh10').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx12, #view').click(function () { //slide left frame 12

        $('#box_open11').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con11').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh11').click(function () {

        $('#box_open11').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con11').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh11').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx13, #view').click(function () { //slide left frame 13

        $('#box_open12').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con12').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh12').click(function () {

        $('#box_open12').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con12').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh12').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx14, #view').click(function () { //slide left frame 14

        $('#box_open13').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con13').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh13').click(function () {

        $('#box_open13').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con13').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh13').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx15, #view').click(function () { //slide left frame 15

        $('#box_open14').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con14').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh14').click(function () {

        $('#box_open14').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con14').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh14').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx16, #view').click(function () { //slide left frame 16

        $('#box_open15').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con15').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh15').click(function () {

        $('#box_open15').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con15').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh15').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx17, #view').click(function () { //slide left frame 17

        $('#box_open16').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con16').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh16').click(function () {

        $('#box_open16').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con16').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh16').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx18, #view').click(function () { //slide left frame 18

        $('#box_open17').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con17').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh17').click(function () {

        $('#box_open17').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con17').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh17').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx19, #view').click(function () { //slide left frame 19

        $('#box_open18').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con18').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh18').click(function () {

        $('#box_open18').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con18').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh18').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx20, #view').click(function () { //slide left frame 20

        $('#box_open19').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con19').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh19').click(function () {

        $('#box_open19').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con19').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh19').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx21, #view').click(function () { //slide left frame 21

        $('#box_open20').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con20').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh20').click(function () {

        $('#box_open20').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con20').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh20').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



    $('#bx22, #view').click(function () { //slide left frame 22

        $('#box_open21').animate({

            width: 'show',

            transition: 'all 0.2s cubic-bezier(0, 0, 0, 0)'

        }, 600);

        $('.openbox_con21').delay(400).fadeIn(1000);

        $('.scroll_img').fadeIn();

    });

    $('#psh21').click(function () {

        $('#box_open21').animate({

            width: 'hide',

            transition: 'all 0.6s cubic-bezier(0.77, 0, 0.175, 1)'

        }, 900);

        $('.openbox_con21').fadeOut();

        $('.scroll_img').fadeOut();

    })

    $('#psh21').hover(function () {

        $(this).find('i').toggleClass('fa-chevron-right');

    })



});





/*SCROLLER*/

(function ($) {

    $(window).on("load", function () {



        $("#content-1, #content-2, #content-3, #content-4, #content-5, #content-6").mCustomScrollbar({

            scrollButtons: {

                enable: true

            },

            theme: "light-thick",

            scrollbarPosition: "outside"

        });



    });

})(jQuery);



// function animatorSlide() {

//     resetTextProperty();

//     $('.flash_big').animate({ left: '520px', width: '0px' }, 600);

//     setTimeout(function () { $('.flash_big').fadeOut() });

// }



// Sliding Function (flash_big)

// function slideMeHard() {

//     animatorSlide();

// }





// Sliding Function (flash)

function slideMeSmall() {

    if ($('#section1').hasClass('active')) {

        //$('#page2_text').css({ "opacity" : 0 });

        //$('#page1_text').fadeIn('slow').delay(6000).show('slow').css({"opacity" : 1})

        $('#flash2').css({

            "width": "200px",

            "left": "46px",

            "display": "block"

        });

        $('#flash1').animate({

            left: '225px',

            width: '0px'

        }, 600);

        setTimeout(function () {

            $('#flash1').fadeOut()

        });

        //$('#page2_text').fadeIn('slow').delay(6000).show('slow');

    } else {

        //$('#page1_text').css({ "opacity" : 0 });

        //$('#page2_text').fadeIn('slow').delay().show('slow').css({"opacity" : 1})

        $('#flash1').css({

            "width": "200px",

            "left": "46px",

            "display": "block"

        });

        $('#flash2').animate({

            left: '225px',

            width: '0px'

        }, 800);

        setTimeout(function () {

            $('#flash2').fadeOut()

        });

        //$('.con_tt h2').fadeIn('slow').delay(6000).show('slow');

    }

}



var timer; // function to stop random scroll to stabilise the sections

$(window).scroll(function () {

    clearTimeout(timer);

    timer = setTimeout(function () {

        if ($("#pagepiling").visible(true)) {

            $('.section').circliful();

        }

    }, 250);

});







//function resetTextProperty() {

//    $('.flash_big').css({

//        "width": "520px",

//        "left": "46px",

//        "display": "block"

//    });

//}





//mouseover animate

$(function () {

    $("#rp, #view, .logo img, #nav-icon2, #lp, #bx1, .accord .ptm i, .accord .ptm, .owl-prev, .owl-next, a, button, #psh, a#rp, #mod_btn p, #mod_btn p i, #psh1, .styled-checkbox + label, .push_right").mouseover(function () {

        $(this).css({

            "opacity": 0.2,

            "cursor": "url(\"images/cursor_select.png\"), auto",

            "transition": "linear 2s"

        });

        $(this).animate({

            "opacity": 1,

            "cursor": "url(\"images/cursor_select.png\"), auto",

            "transition": "linear 2s"

        }, {

            duration: 5000,

            width: "linear",

            height: "easeOutBounce",

        }).fadeIn(2000);

    });

})



//button hover effect

// $(function() {

//     $("#rp").mouseenter(function() {

//         $(".gus").hide();

//         $(".poppins").show().animate({            

//             opacity: '9',

//             height: '31px',

//             width: '43px'

//         });

//   })



//   .mouseleave(function() {

//         $(".gus").show().animate({

//             "opacity": "0"

//         }, 500);  

//         $(".poppins").hide();

//   });

// })



// $(function () {

//     animateText($('#section1').find('h2:first'));

// });





//on load letter animation

// function animateText(element) {

//     var string = $(element).text();

//     prevText = string;

//     var letters = string.split('');

//     var x = string.length;

//     $(element).text('');

//     $.each(letters, function (index) {

//         $(element).append('<span id="e' + index + '" class="normal">' + letters[index] + '</span>');



//     });

//     Animate(0);

// }



// function Animate(elem) {

//     setTimeout(function () {

//         $('#e' + elem).removeClass('normal');

//         $('#e' + elem).addClass('red');

//         if (elem != 0) {

//             $('#e' + (elem - 1)).removeClass('red');

//             $('#e' + (elem - 1)).addClass('normal');

//         }

//         Animate(++elem);

//     }, 100);

// }



// function resetText(element) {

//     txt = element.text().replace('span', 'label');

//     element.html(txt);

// }



//animate for heading (each word highlight)

// function animateNew() {

//     resetText($('.active').prev('.section').find('h2:first'));

//     currentObj = $('.active').find('h2:first');

//     animateText(currentObj);

// }





//a href tag submit

function submitForm() {

    $('#ff').submit();

};





//progressbar loading

var myVar;



function myFunction() {

    myVar = setTimeout(showPage, 2000);

}



function showPage() {

    document.getElementById("progress_div").style.display = "none";

    document.getElementById("myDiv").style.display = "block";

} //progress bar of page load ends





function lalSingh() {  //onscroll/ click/ keyboard function

    if (window.location.hash) {

        $('#menu li a').removeClass('selected');

        $('#' + window.location.hash.substring(1)).addClass('selected');

    } else {

        $('#menu li:first-child a').addClass('selected');

    }

}





