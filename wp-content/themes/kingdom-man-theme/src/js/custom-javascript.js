// Add your custom JS here.

// Mobile Menu
document.addEventListener('DOMContentLoaded', function() {
    var navbarToggler = document.querySelector('.navbar-toggler');
    var mainNav = document.querySelector('#main-nav');

    navbarToggler.addEventListener('click', function() {
      mainNav.classList.toggle('navbar-open');
    });
  });

// Scroll up button
const toggleScrollToTop = document.querySelector("#back-to-top");

function toggleScrollButton() {
  toggleScrollToTop.style.display = window.scrollY > window.innerHeight / 4 ? "block" : "none";
}

toggleScrollButton();

window.addEventListener('scroll', toggleScrollButton);

toggleScrollToTop.addEventListener("click", function () {
  window.scrollTo(0, 0);
});

// On scroll
jQuery(document).ready(function($) {
  $(window).scroll(function() {
    var navbar = $('#main-nav');

    // Set the scroll position threshold to add/remove the 'scrolled' class
    var scrollThreshold = 50;

    if ($(window).scrollTop() > scrollThreshold) {
      navbar.addClass('scrolled');
    } else {
      navbar.removeClass('scrolled');
    }
  });
});