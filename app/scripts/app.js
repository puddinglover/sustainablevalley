// Add your JavaScript here!
$(document).ready(function() {

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

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {

        }
    });

    (function() {

        'use strict';

        document.querySelector('.material-design-hamburger__icon').addEventListener(
            'click',
            function() {
                var child;
                document.querySelector('.background-overlay').classList.toggle('background-overlay--active');
                this.parentNode.nextElementSibling.classList.toggle('menu--on');

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
    $("#dropdown").on("click", function(e) {
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
