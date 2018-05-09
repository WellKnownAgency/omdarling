$(document).ready(function(event){
  $("i").click(function(){
    $(".mainnav li").slideToggle("slow");
  });
});

$(document).ready(function() {
  var feed = new Instafeed({
          get: 'user',
          userId: '277022847',
          clientId: '01289662bc0445a8a9c6d0bccf3b1d26',
          accessToken: '277022847.1677ed0.a98d326b3caf423ba5b1d7003bd0cb34',
          sortBy: 'most-recent',
          limit: 8,
          template: '<div><a href="{{link}}" target="_blank"><img src="{{model.images.standard_resolution.url}}" orientation="{{square}}" class="insta"/></a></div>',
      });
      feed.run();
});
