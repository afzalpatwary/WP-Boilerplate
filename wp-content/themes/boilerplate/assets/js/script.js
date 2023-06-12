/**
 * @Script js for (Template/Project Name)
 *
 * @project     - Project Name
 * @author      - 
 * @created_by  - 
 * @created_at  - 
 * @modified_by -
 */


/**
 * ========================================================
 * this function execute when window properly loaded
 * ===========================================================
 */

// jQuery(window).on('load', function () {

//     // code should be execute here

// });



/**
 * ========================================================
 * this function execute when DOM element ready 
 * ===========================================================
 */

jQuery(document).ready(function ($) {



    // for dropdown
    $(function () {
        let dropdownMenu = $(".dropdown-menu");
        // Show/hide the dropdown menu
        jQuery(".dropdown-toggle").on("click", function () {
            dropdownMenu.toggleClass("show");
        });

        // Hide the dropdown menu when clicked outside
        jQuery(document).on("click", function (event) {
            var target = jQuery(event.target);
            if (!target.closest(".dropdown").length) {
                dropdownMenu.removeClass("show");
            }
        });
    });




    // testimonial-active
    jQuery(function () {
        if (jQuery('.testimonials-active').length) {
            jQuery(".testimonials-active").owlCarousel({
                items: 3,
                margin: 30,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2500,
                animateOut: 'fadeOut',
                smartSpeed: 2500,
                navText: ["<img src='assets/img/arrow-left.svg' class='img-fluid' />", "<img src='assets/img/arrow-right-s.svg' class='img-fluid' />"],
                dots: false,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        }
    });



    // wow js init
    jQuery(function () {
        var wow = new WOW({
            animateClass: 'animated',
            mobile: true
        });
        wow.init();
    });

});



