$(document).ready(function(){
    // Home Page SLider
    $('.cis-slider.owl-carousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        navText:["<img src='http://localhost/referral/wp-content/uploads/2020/11/icon-left.svg' >","<img src='http://localhost/referral/wp-content/uploads/2020/11/icon-right.svg' >"],
        thumbs: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    

    // Home Page Portfolio Slider
    $('.pfs-slider .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        thumbs: false,
        nav:true,
        items:1,
        loop:false,
        dots:false,
        navText: ["<div id='counter_banner'></div><img src='http://localhost/referral/wp-content/uploads/2020/11/icon-left.svg' > ","<img src='http://localhost/referral/wp-content/uploads/2020/11/icon-right.svg' >"],
            onInitialized  : counter, //When the plugin has initialized.
            onTranslated : counter //When the translation of the stage has finished.
    });
    
    function counter(event) {
        var element   = event.target;         // DOM element, in this example .owl-carousel
        var items     = event.item.count;     // Number of items
        var item      = event.item.index + 1;     // Position of the current item

         // it loop is true then reset counter from 1
        if(item > items) {
            item = item - items
        }
        $('#counter_banner').html("<span>"+item+"</span> <span> / </span> <span>"+items+"</span>");
    }

    // Testimonial Section Slider
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        items:1,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'

    });

    // On Click Scroll to next section
    $('.scroll-down-center,.scroll-down').on('click', function () {
        var ele = $('.scrollDiv');
        // this will search within the section
        $("html, body").animate({
             scrollTop: $(ele).offset().top
        }, 1000);
        return false;
    });



    // Mobile Menu
    $(".nav-toggler").click(function () {
        $('.menu-main-menu-container').slideToggle('menu-active');
        $(this).toggleClass('nav-active');
       
    });
  
});