
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  jQuery(document).ready(function($) {
      $('.navbar-nav li a').on("click", function() {
          console.log("menu clicked");
          $('button.navbar-toggler').click();
      });
  });
