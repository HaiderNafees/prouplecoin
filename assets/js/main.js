jQuery(document).ready(function($) {
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 500);
        }
    });
}); 