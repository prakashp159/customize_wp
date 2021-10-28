
jQuery(document).ready(function ($) {
    
     $('.owl-start').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-two').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.owl-three').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
    
    
    
});


//owl-carousel in pop-up-units single page

jQuery(document).ready(function($){
  jQuery(".owl-carousel").owlCarousel({
  	loop:true,
    margin:10,
    autoplay:true,
    nav:true,
    dots:true,    
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:2,
            
        },
        1000:{
            items:4,
            
            
        }
    }
});

});





//by sir

// jQuery('#popup-owl').owlCarousel({
//     margin:10,
//     items: 4,
//     loop: true,
//     dots: true,
//     autoplay: true,
//     autoplayTimeout: 3000,
    
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:2
//         },
//         1000:{
//             items:4
//         }
//     }
// })