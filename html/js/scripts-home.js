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

    if ($(window).width() > 975 || $(window).height() > 1000) {
        var a = $(window).height();
        alt = a - 102;
        $('.txt-box').height(alt);
    } else {
        $('.txt-box').height('auto');
    }
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


/****Para deslizar*****/
$(function () {

    $('.item-serv').click(function () {
        $('#options-link').addClass('slick-border');
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