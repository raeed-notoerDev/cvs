$(document).ready(function () {
    // $(".owl-carousel").owlCarousel({
    //     items:1,
    //     margin:30,
    //     stagePadding:30,
    //     smartSpeed:450,
    //     autoplay:true,
    //     loop:true,
    // });
    // $('.carouseli').owlCarousel({
    //     animateOut: 'slideOutDown',
    //     animateIn: 'flipInX',
    //     items:1,
    //     autoplay:true,
    //     loop:true,
    // });

    $('.owl-one').owlCarousel({
        items: 1,
        animateIn: 'flipInX',
        animateOut: 'slideOutDown',
        autoplay: true,
        // loop: true,
        nav:false

    });

    $('.owl-two').owlCarousel({
        animateIn: 'zoomIn',
        animateOut: ' fliplnY',
        margin: 10,
        items: 1,
        autoplay: true,
    });
});
