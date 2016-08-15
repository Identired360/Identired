(function() {

    function init() {
        var speed = 330,
            easing = mina.backout;

        [].slice.call(document.querySelectorAll('#grid > a')).forEach(function(el) {
            var s = Snap(el.querySelector('svg')),
                path = s.select('path'),
                pathConfig = {
                    from: path.attr('d'),
                    to: el.getAttribute('data-path-hover')
                };

            el.addEventListener('mouseenter', function() {
                path.animate({
                    'path': pathConfig.to
                }, speed, easing);
            });

            el.addEventListener('mouseleave', function() {
                path.animate({
                    'path': pathConfig.from
                }, speed, easing);
            });
        });
    }

    init();

})();
/*Para height*/
jQuery(window).load(function() {
    equalheight('.item-desa');
    equalheight('.item-vent');
    equalheight('.item-paq');
});

jQuery(window).resize(function() {
    equalheight('.item-desa');
    equalheight('.item-vent');
    equalheight('.item-paq');
});

/****Para deslizar*****/
$(function() {

    $('a[href*=#]').click(function() {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({
                    scrollTop: targetOffset
                }, 1000);

                return false;

            }

        }

    });

});
