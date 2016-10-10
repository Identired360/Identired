

function viewH1() {
    $('.title-home h1').addClass('fadeInDown');
}

function viewHp() {
    $('.title-home p').addClass('bounceIn');
}

function viewHc() {
    $('.cont-linksh').addClass('slideInUp');
}

function viewHomeNoFx() {
    $('#menu_button').addClass('fadeInLeft');
    $('.has-tip').addClass('fadeIn');
}

function viewH1NoFx() {
    $('.title-home h1').addClass('fadeIn');
}

function viewHpNoFx() {
    $('.title-home p').addClass('fadeIn');
}

function viewHcNoFx() {
    $('.cont-linksh').addClass('fadeIn');
}

setTimeout("viewH1()", 2000);
setTimeout("viewHp()", 3000);
setTimeout("viewHc()", 4000);
/*Tabs*/
$('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    asNavFor: '.slider-nav-thumbnails',
});

$('.slider-nav-thumbnails').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider',
    dots: true,
    //  centerMode: true,
    focusOnSelect: true
});
$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
$('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');
$('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var mySlideNumber = nextSlide;
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
    $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
});

/*H home*/
$(document).ready(function () {
    /*
    if ($(window).width() > 975 || $(window).height() > 1000) {
        var a = $(window).height();
        alt = a - 102;
        $('.txt-box').height(alt);
    } else {
        $('.txt-box').height('auto');
    } */
    $('.item-serv.slick-active').removeClass('slick-active');

    $('.slick-prev').click(function () {
        $('#options-link').addClass('slick-border');
    });
    $('.slick-next').click(function () {
        $('#options-link').addClass('slick-border');
    });

});

$(window).resize(function () {
    if ($(window).width() > 975 || $(window).height() > 1000) {
        var a = $(window).height();
        alt = a - 102;
        $('.txt-box').height(alt);
    } else {
        $('.txt-box').height('auto');
    }
});

