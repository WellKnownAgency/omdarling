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

$(document).ready(function() {
  var feed = new Instafeed({
          get: 'user',
          userId: '277022847',
          clientId: '01289662bc0445a8a9c6d0bccf3b1d26',
          accessToken: '277022847.1677ed0.93c646c55fe64884b730f884d3ce7e8d',
          sortBy: 'most-recent',
          limit: 8,
          template: '<div><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" orientation="{{square}}" class="insta"/></a></div>',
      });
      feed.run();
});



function goBack() {
    window.history.back();
}
