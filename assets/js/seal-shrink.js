// The following script will shrink the navigation bar once the user has scrolled down the page a bit.
// It will also remove the FSU seal from appearing on smaller screens to conserve space.

// Defining functions for shrinking or expanding Nav
function shrinkNav() {
   document.getElementById("seal").style.display = "none";
   $('nav').addClass('shrink');
   $('nav a').addClass('shrink');
}

function expandNav(){
   document.getElementById("seal").style.display = "inline";
   $('nav').removeClass('shrink');
   $('nav a').removeClass('shrink');
}

function hideSeal(){
   document.getElementById("seal").style.display = "none";
}

//Create variable from width of viewport
var viewportWidth = window.innerWidth || document.documentElement.clientWidth;



// Prevent seal from appearing on smaller screens
$( document ).ready(function() {
   if (viewportWidth < 768 ){
      hideSeal();
   }
});


// Remove seal and shrink menu on scroll
   $(window).scroll(function() {

      // Keep preventing seal from appearing on smaller screens
   if (viewportWidth < 768 ){
      hideSeal();
   }

      // If on large screen and user scrolls down, remove the seal and shrink the navbar
  else if ($(document).scrollTop() > 80 && viewportWidth > 768 ) {
   shrinkNav();
  } 

  // If on large screen and user scrolls back up, bring back the seal and un-shrink the navbar
  else {
   expandNav();
  }

});


// Adding listener for page resizes

window.addEventListener('resize', function () {
	viewportWidth = window.innerWidth || document.documentElement.clientWidth;
   if (viewportWidth < 768 ){
      hideSeal();
   }

      // If on large screen and user scrolls down, remove the seal and shrink the navbar
  else if ($(document).scrollTop() > 80 && viewportWidth > 768 ) {
   shrinkNav();
  } 

  // If on large screen and user scrolls back up, bring back the seal and un-shrink the navbar
  else {
   expandNav();
  }
}, false);
