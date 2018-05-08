$(document).ready(function(event){
  $("i").click(function(){
    $(".mainnav li").slideToggle("slow");
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
