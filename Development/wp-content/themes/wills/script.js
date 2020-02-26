$( document ).ready(function() {

    
  AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease-out', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


// Smooth scrolling when clicking on a hash link
$('a[href^="#"]').on('click',function (e) {
e.preventDefault();
var target = this.hash;
var $target = $(target);
$('html, body').stop().animate({
'scrollTop': $target.offset().top - 120
}, 900, 'swing');
});


$('.hero-slider').slick({
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 1000,
  fade: true
});

//caches a jQuery object containing the header element
var nav = $(".nav");
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        nav.addClass("scroll");
        
    } else {
        nav.removeClass("scroll");
    }
});

// var element = $(".gallery-text");
// var waypoint = new Waypoint({
//   element: document.getElementById('basic-waypoint'),
//   handler: function() {
//     console.log("stick");
//     element.addClass("fixedElement")
//   },
//   offset: 120
// })


});
