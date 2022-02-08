(function () {
    // DOM Cache
    let DOM = {};

    let cacheDOM = function () {
        DOM.burgerMenu = document.getElementById("burgerMenu");
    };

    let toggleMenu = function () {
        document.body.classList.toggle("mainMenu-isActive");
        this.classList.toggle("active");
    };

    let setupEvents = function () {
        console.log("hello");
        DOM.burgerMenu.addEventListener("click", toggleMenu);
    };

    let init = function () {
        cacheDOM();
        setupEvents();
        // jQuery(function ($) {
        //     $(".wp-block-gallery  .blocks-gallery-grid").slick({
        //         dots: true,
        //         infinite: true,
        //         speed: 300,
        //         slidesToShow: 1,
        //         adaptiveHeight: true,
        //     });
        // });
    };

    window.addEventListener("DOMContentLoaded", init);
})();
