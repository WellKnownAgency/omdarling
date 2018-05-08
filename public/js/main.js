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
          userId: '248274392',
          clientId: '474194880b8845819aba26a07dc122fd',
          accessToken: '248274392.1677ed0.8a29b5a11e5f4e0f8b8e6ddd0933ac4c',
          sortBy: 'most-recent',
          limit: 8,
          template: '<div><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" class="insta"/></a></div>',
      });
      feed.run();
});

function goBack() {
    window.history.back();
}
