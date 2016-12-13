// Add your JavaScript here!
$(document).ready(function() {

    // This function makes the lineunder follow each nav elemtent when clicked
    $("li a").click(function() {
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });

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
})
