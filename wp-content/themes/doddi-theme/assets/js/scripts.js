jQuery(document).foundation();
// /*
// These functions make sure WordPress
// and Foundation play nice together.
// */

jQuery(document).ready(function($) {

  // Rotate Arrow in dropdown 180 deg

  $('.content-link').on( "click", function() {
       $('.fa-arrow-down').toggleClass("rotate");
   });


  //Burger Menu
  $('.burger').on( "click", function() {
    $(this).toggleClass("close");

    $menuTitle = $(".title-bar-title")

      if($menuTitle.text() == "Menu") {
          $menuTitle.text("Close");
      } else {
          $menuTitle.text("Menu");
      }
  });

  // Flickity

  $('.main-carousel').flickity({
    contain: true,
    imagesLoaded: true,
    wrapAround: true,
    groupCells: true,
    pageDots: false,
    freeScroll:true
  });

// **** Scroll magic ***

// Init Scroll Magic
// Create a controller and save it in a variable - tells the browswe
// to use the scroll bar and trigger animation
$controller = new ScrollMagic.Controller();

// Build a scene (Nav Scene)
$navScene = new ScrollMagic.Scene({
//Options added Here
  triggerElement: '#scroll-magic-header',
  triggerHook: '0'

})

// Comment this in for testing
// .addIndicators({name:"test-header"})

// State which element with - class we want to change
.setPin('#scroll-magic-header')
// And where we what the class to change too
.addTo($controller);

});
