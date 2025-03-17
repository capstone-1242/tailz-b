document.addEventListener("DOMContentLoaded", function() {
    var gallerySwiper = new Swiper('.gallery-slider', {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var testimonialsSwiper = new Swiper('.testimonials-slider', {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
});
