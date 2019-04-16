// autoscroll
jQuery(document).ready(function($) {
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-0
        }, 700, 'easeOutExpo', function () {
            window.location.hash = target;
        } );
    } );
});

// WOW
wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       100,          // default
        mobile:       true,       // default
        live:         true        // default
    }
)
wow.init();
