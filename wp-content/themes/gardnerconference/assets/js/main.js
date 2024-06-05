jQuery(document).ready(function ($) {

    
    $('.imaeg-slider-main-section').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="https://gardnerconference.exoticaitsolutions.com/wp-content/uploads/2024/05/left-arrow.png" alt="Previous"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="https://gardnerconference.exoticaitsolutions.com/wp-content/uploads/2024/05/right-arrow.png" alt="Next"></button>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: true,
                }
            },   {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                     infinite: true,
                    dots: true
                }
            }
        ]
    });

    $("section.banner-slider123").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000, // Adjust as needed
        dots: false,
        arrows: true,
      });
      $('.slider-testimonials').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        // centerMode: true,
        // centerPadding: '60px',
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 768, // Medium devices (tablets, 768px and up)
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    // Adjust settings as needed for medium devices
                }
            },
            {
                breakpoint: 480, // Small devices (phones, 480px and up)
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    // Adjust settings as needed for small devices
                }
            }
            // Add more breakpoints and settings as needed
        ]
    });
      $(".accordion button").click(function() {
        const itemToggle = $(this).attr('aria-expanded');
    
        $(".accordion button").attr('aria-expanded', 'false');
    
        if (itemToggle === 'false') {
          $(this).attr('aria-expanded', 'true');
        }
      });


    //   jQuery(".hamburger").click(function(){
    //     $("#menu-main-menu").toggleClass("is-active");
    //     $(this).toggleClass("is-active");
    //   });
    jQuery(".hamburger").click(function(){
        jQuery(".menu_navbar_set").toggleClass("is-active");
        jQuery(this).toggleClass("Cross");
      });

 jQuery('.PreferredEventDates').datepicker({
        minDate: 1,
        defaultDate: "+1",
        dateFormat: 'yy-mm-dd'
    });
    jQuery('.Phone').inputmask('+1 (999) 999-9999');


  
});