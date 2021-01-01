new WOW().init();
jQuery(document).ready(function() {
  jQuery('#imageGallery').lightSlider({
  gallery:true,
  item:1,
  loop:true,
  thumbItem:4,
  slideMargin:0,
  enableDrag: false,
  currentPagerPosition:'left',
  onSliderLoad: function(el) {
  el.lightGallery({
  selector: '#imageGallery .lslide'
  });
  }
  });
});
$('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
    autoplay: true,
  autoplaySpeed: 2000,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.slider-product').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
    autoplay: true,
  autoplaySpeed: 2000,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// back to top
jQuery(document).ready(function($){

  $('.popup-overlay').click(function(){
      $(this).removeClass('click');
      $('.my-popup').removeClass('click');
   });

  $('.lh-show-bk').click(function(){
    $('.popup-overlay').addClass('click');
    $('.my-popup').addClass('click');
  });
  $('.exit').click(function(){
     $('.popup-overlay').removeClass('click');
    $(this).parents('.my-popup').removeClass('click');
  });
// end popup


  if($(".btn-top").length > 0){
    $(window).scroll(function () {
      var e = $(window).scrollTop();
      if (e > 300) {
        $(".btn-top").show()
      } else {
        $(".btn-top").hide()
      }
    });
    $(".btn-top").click(function () {
      $('body,html').animate({
        scrollTop: 0
      })
    })
  }
});
// end backto top
// /menu mobi/
$(document).ready(function () {
       $("#menu").click(function(){
    	   $("#drop_down").mmenu({
            offCanvas: {
                position: "right",
            }
        });
    	$("#drop_down").mmenu();
    	   var API=$("#drop_down").data("mmenu");
            API.open();
        });

  });
    //
 //
 $(document).on('click', '.next', function(){
 $(this).siblings('.slick-slider').slick('slickNext');
});

$(document).on('click', '.prev', function(){
  $(this).siblings('.slick-slider').slick('slickPrev');
});