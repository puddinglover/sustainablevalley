// Add your JavaScript here!
$(document).ready(function() {

// Store the file name of current page URL in a variable
var url = document.location.pathname.substr(document.location.pathname.lastIndexOf('/') + 1);
// Store the height of the header in a variable
var headerHeight = $('header').height();
    // This function makes the line under menu items follow each item when clicked
    $("header li a").click(function() {
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });
    // Same function, but for mobile nav
    $(".menu div a").click(function() {
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });
    // Checks current page url and makes the corresponding menu item active
if ($('a[href*="' + url + '"]').parent().hasClass('active') === false) {
  $('.active a').parent().siblings().removeClass('active');
  $('a[href*="' + url + '"]').parent().addClass('active');
    }
    // Checks current page and if it is not the front page then it prevents the bird animation from firing.
if ((url !== 'index.php') && (url !== '')) {
  $('.bird-logo').addClass('bird-logo--transition');
}
else {
    // Based on scroll hight, this script will fire a function that calls the classes that animat the bird.
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.landing__bird-logo').addClass("landing__bird-logo--transistion");
            $('.bird-logo').addClass("bird-logo--transition");
        } else {
            $('.landing__bird-logo').removeClass("landing__bird-logo--transistion");
            $('.bird-logo').removeClass("bird-logo--transition");
        }
    });
}

    // Adds smooth scrolling functionality to the 'down' button on the landing page
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        var scrollValue = ((target.offset().top)-(headerHeight * 1.2));
        $('html, body').animate({
          scrollTop: scrollValue
        }, 1200);
        return false;
      }
    }
  });
});
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {

        }
    });

    // third party event listner, for hamburger menu, when clicked changes or add classes depending on toggle
    (function() {
        'use strict';

        document.querySelector('.material-design-hamburger__icon').addEventListener(
            'click',
            function() {
                var child;
                document.querySelector('.background-overlay').classList.toggle('background-overlay--active');
                this.parentNode.nextElementSibling.classList.toggle('menu--on');
                // global varible child which is the second child.classlist
                child = this.childNodes[1].classList;

                if (child.contains('material-design-hamburger__icon--to-arrow')) {
                    child.remove('material-design-hamburger__icon--to-arrow');
                    child.add('material-design-hamburger__icon--from-arrow');
                } else {
                    child.remove('material-design-hamburger__icon--from-arrow');
                    child.add('material-design-hamburger__icon--to-arrow');
                }

            });

    })();

    // taken from third party, but jquery script that checks if drop menu is open class- open if open remove class and do it fast
    // else add class open and slide down fast when clicked.
    $("#dropdown").on("click", function(e) {
      // prevent default click
        e.preventDefault();

        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(this).children("ul").slideUp("fast");
        } else {
            $(this).addClass("open");
            $(this).children("ul").slideDown("fast");
        }
    });

})
