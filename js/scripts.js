// jQuery.noConflict()
  jQuery(function(){
    $('.people_heart').click(function(z){
    z.preventDefault();
    $(this).toggleClass('people_heart_active');
});
$(".menu_btn").click(function() {
  $(this).toggleClass("menu_btn_active")
});
$(".menu_btn").click(function() {
  $('.menu').toggleClass("responsive")
  $('.menu').toggleClass("menu_active")
});

$(".top_slidebar").click(function() {
  $('.rfactive').toggleClass("radio_active")
  $('.top_slidebar').toggleClass("slidebar_active")
});
$(".circle_left").click(function() {
  $('.shape_left').toggleClass("shape_active")
});
$(".circle_right").click(function() {
  $('.shape_right').toggleClass("shape_active")
});
$(".modal_login").click(function(z) {
    z.preventDefault();
  $('.modal_login_form').toggleClass("modal_active")
      $('.modal_layer').addClass('modal_layer_active')
});
$(".modal_layer").click(function(z) {
    z.preventDefault();
  $(this).removeClass('modal_layer_active')
  $('.modal_login_form').removeClass("modal_active")
});
$(".modal_reg").click(function(z) {
    z.preventDefault();

  $('.modal_reg_form').toggleClass("modal_active")
      $('.modal_layer').addClass('modal_layer_active')
});
$(".modal_layer").click(function() {
  $(this).removeClass('modal_layer_active')
  $('.modal_reg_form').removeClass("modal_active")
});
  $(".cat_like > i").click(function() {
  $(this).toggleClass('i_active')
});
   $(".post_social > i").click(function() {
  $(this).toggleClass('i_active')
});
   $(".like_add > i, .comments_like > i").click(function() {
  $(this).toggleClass('i_active')
});
   $(".statistic").click(function() {
  $(this).children(".fa").toggleClass('i_active')
});
$(".fa-heart").click(function() {
    $(this).toggleClass('i_active')
 });
       $(".fa-comment").click(function() {
           $(this).toggleClass('i_active')
       });
$(".touch_block").addClass('anime');

$(".content_right .sub_head i").click(function() {
    $(this).toggleClass('i_active')
 });
$(".pop_click").click(function() {
    $(".user_pop").addClass('user_pop_active')
 });
$(".pop_close").click(function() {
    $(".user_pop").removeClass('user_pop_active')
 });
$(".show_more").click(function() {
    $(".user_post  p  span").toggleClass('show_more_active')
 });
 $( ".blog .view_links > li > a" ).hover(function(){ // задаем функцию при наведении курсора на элемент и при его отведении  
      $( this ).toggleClass( "view_links_active" ) // добавляем, или убираем класс у текущего элемента div
    });
  $( ".admin_tabs .view_links > li > a" ).hover(function(){ // задаем функцию при наведении курсора на элемент и при его отведении  
      $( this ).toggleClass( "view_links_active2" ) // добавляем, или убираем класс у текущего элемента div
    });
  $( ".radio .slide a" ).hover(function(){
   // задаем функцию при наведении курсора на элемент и при его отведении  
      $( this ).toggleClass( "slide_active" ) // добавляем, или убираем класс у текущего элемента div
    });



 $('.user_tab').click(function(z){
    z.preventDefault();
    $(this).toggleClass('user_tab_active_fix');
    $(this).children(".user_tab_content").toggleClass('user_tab_active');
});
//   $('.user_tab').click(function(z){
//     z.preventDefault();
// });
  $('.input_tab').click(function(z){
    z.preventDefault();
    $(this).toggleClass('user_tab_active_fix');
    $(this).children(".input_tab_content").toggleClass('user_tab_active');


});
  $('.user_nav li a').hover(function(z){
    z.preventDefault();
    $(this).toggleClass('user_nav_active');
});







$(".sms_info").click(function(z) {
    z.preventDefault();
    $(this).children("  .sms_pop").toggleClass('sms_pop_active')
  });
$(".set_chek p > span ").click(function(z) {
    z.preventDefault();
    $(this).children("span").toggleClass('set_chek_active')
  });
$(".add").click(function(z) {
    z.preventDefault();
    $(this).next(".bal").addClass('db'),
    $(this).addClass('dn'),
    $(this).parent(".but_act").siblings('.people_info').addClass( "vh" ),
     $(this).parent(".but_act").siblings(".people_btn").addClass( "op1" ); // добавляем, или убираем класс у текущего элемента div

  });
$(".del").click(function(z) {
    z.preventDefault();
    $(this).addClass('dn'),
    $(this).siblings(".del2").addClass( "db" );
});
jQuery(document).ready(function($) {

$('.people_part, .people_part_second').slick({


  dots: true,
  infinite: true,
  speed: 150,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
 ]
});
});
var slider = $(".people_part,  .people_part_second, .last_article_content");
slider.on('wheel', (function(e) {
  e.preventDefault();
  scroll = setTimeout(function(){scrollCount=0;}, 200);
  if(scrollCount) return 0;
  scrollCount=1;
  if (e.originalEvent.deltaY < 0) {
    $(this).slick('slickNext');
  }
  else {
    $(this).slick('slickPrev');
  }
}));

jQuery(document).ready(function($) {
$(".user_nav_item").not(":first").hide();
$(".user_information .user_nav li").click(function() {
$(".user_nav_item").hide().eq($(this).index()).fadeIn('fast', function() {
    });
});


$('.last_article_content').slick({
prevArrow: '<div class="arrow prev_arrow">&#8592;</div>',
nextArrow: '<div class="arrow next_arrow">&rarr;</div>',
arrows: true,
autoplay: true,
autoplaySpeed: 2000,

  dots: true,
  infinite: true,
  speed: 150,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});});

if ($(window).width() > 960)
    {
        $('body').parallax({
            'elements': [
                {
                    'selector': '.circle_1',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':4,
                                'multiplier': -0.001,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': 140.3,
                                'multiplier': 0.007,
                                'unit': 'px',
                                'invert': true
                            }
                        }
                    }
                },  
                 {
                    'selector': '.circle_2',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':34,
                                'multiplier': 0.0009,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': 0,
                                'multiplier': 0.005,
                                'unit': '%',
                                'invert': true
                            }
                        }
                    }
                },   
                {
                    'selector': '.circle_3',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':77,
                                'multiplier': 0.003,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': -42,
                                'multiplier': -0.005,
                                'unit': '%',
                                'invert': true
                            }
                        }
                    }
                },  
                {
                    'selector': '.circle_4',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':25.8,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': -195,
                                'multiplier': 0.01,
                                'unit': '%',
                                'invert': true
                            }
                        }
                    }
                }, 
                {
                    'selector': '.air',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':45.3,
                                'multiplier': 0.007,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': 12,
                                'multiplier': -0.007,
                                'unit': '%',
                                'invert': true
                            }
                        }
                    }
                }, 
                {
                    'selector': '.book',
                    'properties': {
                        'x': {
                            'left': {
                                'initial':54,
                                'multiplier': 0.001,
                                'unit': '%',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': -0,
                                'multiplier': 0.5,
                                'unit': '%',
                                'invert': true
                            }
                        }
                    }
                },   
                {
                    'selector': '.book2',
                    'properties': {
                        'x': {
                            'right': {
                                'initial':14.3,
                                'multiplier': 0.007,
                                'unit': 'px',
                                'invert': false
                            }
                        },
                        'y': {
                            'top': {
                                'initial': -227,
                                'multiplier': -0.007,
                                'unit': 'px',
                                'invert': true
                            }
                        }
                    }
                }, 
            ]
        });
    };   
});



