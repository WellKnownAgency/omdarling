$(document).ready(function() {

    // Put your offset checking in a function
    function checkOffset() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        }
        else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    }

    // Run it when the page loads
    checkOffset();


    // Run function when scrolling
    $(window).scroll(function() {
        checkOffset();
    });
});

$(document).ready(function() {

    // Put your offset checking in a function
    function checkOffset() {
        if ($(".navbar-blog").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse1");
        }
        else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse1");
        }
    }

    // Run it when the page loads
    checkOffset();


    // Run function when scrolling
    $(window).scroll(function() {
        checkOffset();
    });
});

function goBack() {
    window.history.back();
}
