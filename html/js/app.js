$(document).foundation()
function viewHome() {
    $('#menu_button').addClass('fadeInLeft');
}
setTimeout("viewHome()", 1000);
/*Animations***/

//var showCounter = Cookies.get('showCounter');
/*if (showCounter != 'false') {

} else {
    viewHomeNoFx();
    viewH1NoFx();
    viewHpNoFx();
    viewHcNoFx();
}*/

//Animación desarrollo web
function animdes(){
   $('.type-wrap').addClass('display');
   $('.coffee').addClass('fadeInLeft');
   $('.libreta').addClass('fadeInLeft');
   $('.teclado').addClass('fadeInUp');
   $('.boceto').addClass('fadeInRight');
   $('.lentes').addClass('fadeInRight');
}
setTimeout("animdes()", 1000);

function animequip(){
   $('.equipo1').addClass('fadeInUp');
   $('.equipo2').addClass('fadeInLeft');
   $('.equipo3').addClass('fadeInLeft');
   $('.equipo4').addClass('fadeInLeft');
   $('.equipo5').addClass('fadeInRight');
   $('.equipo6').addClass('fadeInRight');
   $('.equipo7').addClass('fadeInRight');
}
setTimeout("animequip()", 1000);

function animproy(){
   $('.imgp1').addClass('fadeInLeft');
   $('.imgp2').addClass('fadeInLeft');
   $('.imgp3').addClass('fadeInUp');
   $('.imgp4').addClass('fadeInUp');
   $('.imgp5').addClass('fadeInRight');
   $('.imgp6').addClass('fadeInRight');
   $('.imgp7').addClass('fadeInRight');
}
setTimeout("animproy()", 1100);

function animblog(){
   $('.imgb1').addClass('fadeInUp');
   $('.imgb3').addClass('fadeInLeft');
   $('.imgb2').addClass('fadeInRight');
}
setTimeout("animblog()", 1100);
    

//
$(document).ready(function () {
    var showCounter = Cookies.get('showCounter');

    if (showCounter != 'false') {
        new WOW().init();
    }



    /*Menu*/
    var overlayTimer = null;

    function closeMenu() {
        if (overlayTimer != null) {
            clearTimeout(overlayTimer);
            overlayTimer = null;
        }

        //$('body').removeClass('menu-shown');

        $('#menu_button').removeClass('open');

        $('#overlay').css('opacity', 0);
        /*
         overlayTimer = setTimeout(function()
         {
         $('#overlay').css('display', 'none');
         overlayTimer = null;
         
         }, 0.33 * 1000);*/
    }

    $('#overlay').on('click', closeMenu);


    $('#menu_button').click(function (e) {

        //$('body').toggleClass('menu-shown');

        $(this).toggleClass('open');

        /*  var isShown = $('body').hasClass('menu-shown');
         
         if (overlayTimer != null)
         {
         clearTimeout(overlayTimer);
         overlayTimer = null;
         }
         
         if (isShown)
         {
         
         $('#overlay').css('display', 'block');
         overlayTimer = setTimeout(function()
         {
         $('#overlay').css('opacity', 1);
         overlayTimer = null;
         
         }, 1);
         }
         else
         {
         closeMenu();
         
         }*/

    });

});
/* End Menu*/

/*Slide toggle*/

$("#top-view").click(function () {
    $(".top-bar-head").slideToggle("fast", function () {
        $(".has-tip svg").slideToggle('fast');
        $(".i-iconn").slideToggle('fast'); // Animation complete.
    });
});

/*Para form largo*/

$(function () {

    $('.awesome-form .input-group input').focusout(function () {

        var text_val = $(this).val();

        if (text_val === "") {

            $(this).removeClass('has-value');

        } else {

            $(this).addClass('has-value');

        }

    });
    $('.awesome-form .input-group textarea').focusout(function () {

        var text_val = $(this).val();

        if (text_val === "") {

            $(this).removeClass('has-value');

        } else {

            $(this).addClass('has-value');

        }

    });

});

/*Equal height*/
equalheight = function (container) {

    var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
    jQuery(container).each(function () {

        $el = jQuery(this);
        jQuery($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

//-------------- [ MenuTop ] --------------//
$(window).scroll(function () {

    if ($(this).scrollTop() > 0) {
        $('.head').addClass('head-fix');
    } else {
        $('.head').removeClass('head-fix');
    }

});

/*Para validar formulario*/
$('input, textarea').on('focus', function () {
    $(this).parent().addClass('focus');
});

$('input, textarea').on('blur', function (event) {
    if (event.target.value.length > 0) {
        $(this).parent().addClass('active');
    } else {
        $(this).parent().removeClass('active');
    }

    $(this).parent().removeClass('focus');
});

$('textarea').on('keyup', function () {
    $(this).css('height', 'auto');
    $(this).css('height', $(this)[0].scrollHeight + 'px');
});

$('#formWeb').validate();
$('#formReg').validate();
$('#formBrief').validate();
$('#formDesus').validate();

/****Para deslizar*****/
$(function () {

    $('a[href*=#]').click(function () {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                && location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({scrollTop: targetOffset}, 500);

                return false;

            }

        }

    });

});

/*Para facebook*/
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function () {
    $(window).bind('scroll', function () {
        var navHeight = $(window).height();
        if ($(window).scrollTop() > 300) {
            $('.reg-blog').addClass('fijo');
        } else {
            $('.reg-blog').removeClass('fijo');
        }
    });
});
function detecta_scroll() {
    var pos = $(window).scrollTop();
    var page1 = $(".sec-clien").offset().top;
    if (pos >= page1 - 450)
    {
        $('.reg-blog').fadeOut();
    } else
    {
        $('.reg-blog').fadeIn();
    }
}
var ancho = $(document).width();
var $window = $(window);
$window.bind('scroll', function () {
    var ancho = $(document).width();
    if (ancho > 1068) {
        detecta_scroll();
    }
});

jQuery(window).load(function () {
    equalheight('.item-test');
});

jQuery(window).resize(function () {
    equalheight('.item-test');
});

//Para letras
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }


