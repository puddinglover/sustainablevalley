// Add your JavaScript here!
$(window).scroll(function() {
    if ($(this).scrollTop() > 1) {
        $('.landing__bird-logo').addClass("landing__bird-logo--transistion");
        $('.bird-logo').addClass("bird-logo--transition");
    } else {
        $('.landing__bird-logo').removeClass("landing__bird-logo--transistion");
        $('.bird-logo').removeClass("bird-logo--transition");
    }
});
