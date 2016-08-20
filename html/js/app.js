$(document).foundation()

/*Animations***/

function viewHome() {
    $('#menu_button').addClass('fadeInLeft');
    $('.has-tip').addClass('fadeInDown');
}

function viewH1() {
    $('.title-home h1').addClass('fadeInDown');
}

function viewHp() {
    $('.title-home p').addClass('bounceIn');
}

function viewHc() {
    $('.cont-linksh').addClass('slideInUp');
}
var showCounter = Cookies.get('showCounter');
if (showCounter != 'false') {
    setTimeout("viewHome()", 3000);
    setTimeout("viewH1()", 6000);
    setTimeout("viewHp()", 7700);
    setTimeout("viewHc()", 8200);
} else {
//    viewHome();
//    /*viewH1();
//     viewHp();
//     viewHc();*/
//    setTimeout("viewH1()", 0);
//    setTimeout("viewHp()", 0);
//    setTimeout("viewHc()", 0);
}

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

