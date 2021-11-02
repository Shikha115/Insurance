$(document).ready(function() {

    $(() => {
        $('.navbar-toggler').click(() => {
            $('#navbarNav').slideToggle("1000");
            $('.navbar-toggler').find('i').toggleClass('fa-times').css('transition', 'all 0.5s ease');
        });
    });

    $(() => {
        $('.menu .nav-item').click(e => {
            $(e.currentTarget).toggleClass('menu-active');
        });
    });

    $(function() {
        $('.slide-one-item').owlCarousel({
            autoplayHoverPause: true,
            items: 1,
            loop: true,
            margin: 10,
            smartSpeed: 1500,
            autoplay: true,
            pauseOnHover: false,
            dots: false,
            nav: true,
            animateOut: 'fadeOut',
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>']
        });
    });

    $(function() {
        $('.test-slider').owlCarousel({
            autoplayHoverPause: true,
            items: 4,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1500,
            autoplay: true,
            pauseOnHover: false,
            dots: true,
            nav: false,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
        });
    });
});