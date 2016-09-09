$(document).foundation()

 
   /* Menu*/
  var $menu = jQuery('#nav'),
      $menulink = jQuery('.menu-link'),
      $menuTrigger = jQuery('.has-submenu > a');
  $menulink.click(function(e) {
    e.preventDefault();
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
  });
  $menuTrigger.click(function(e) {
    e.preventDefault();
    var $this = jQuery(this);
    $this.toggleClass('active').next('ul').toggleClass('active');
  });
/* End Menu*/

/*Banners*/
if($("#slider-ban").length) {
      $( '#slider-ban' ).sliderPro({
        width: '100%',
        height: 550,
        arrows: false,
        fade: true,
        autoHeight: false,
        buttons: false,
        waitForLayers: true,
        autoplay: true,
        autoScaleLayers: false,
      });  
}
    //-------------- [ MenuTop ] --------------//
    $(window).scroll(function(){

      if ( $(this).scrollTop() > 0 ){
        $('.head').addClass('head-fix');
      } else {
        $('.head').removeClass('head-fix');
      }

    });
 
//-------------- [ Menu Activo ] --------------//
var sections = $('section')
  , nav = $('#menu-desk,#mobile-demo')
  , nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
  
          nav.find('a').removeClass('active-menu');
        nav.find('a[href="#"]').addClass('active-menu');
  sections.each(function() {
    var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active-menu');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active-menu');
    }
  });
});

nav.find('a').on('click', function () {
  var $el = $(this)
    , id = $el.attr('href');
  
  $('html, body').animate({
    scrollTop: $(id).offset().top - nav_height
  }, 500);
  
  return false;
});


if($('#map').length) {
  var _this = $('#map');
  var _title = _this.data('title') !== undefined? _this.data('title') : "";
  var _lat = _this.data('lat') !== undefined? _this.data('lat') : 45.659973;
  var _lng = _this.data('lng') !== undefined? _this.data('lng') : 9.721170;
  var _z = _this.data('zoom') !== undefined? _this.data('zoom') : 15;

  var myLatLng = new google.maps.LatLng(_lat, _lng);
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: _z
  });
  var marker = new MarkerWithLabel({
    map: map,
    position: myLatLng,
    labelContent: _title,
    labelClass: 'googlemaps-label',
    labelStyle: {opacity: 1}
  });
    var styles = [
    {
    stylers: [
    { saturation: -30 },
    { hue: "#15BDC3" },
    { lightness: 0 },
    { gamma: 0 }
    ]
    },
    {
    featureType: "poi.business",
    elementType: "all",
    stylers: [
    { visibility: "off" }
    ]
    },
    {
    featureType: "road",
    elementType: "labels",
    stylers: [
    { visibility: "simplified" }
    ]
    }
    
    ]; 
    map.setOptions({styles: styles});  
}   

$(function(){

     $('.item-serv').click(function() {
        $('#options-link').addClass('slick-border');
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 500);

                 return false;

            }


       }
   });
});