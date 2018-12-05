$(document).ready(function(event){
  $("#clicko").click(function(){
    $(".mainnav li").slideToggle("slow");
  });
});

$(document).ready(function(event){
  $("#clicko").click(function(){
    $(".mainnavblog li").slideToggle("slow");
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

function removeHoverCSSRule() {
  if ('createTouch' in document) {
    try {
      var ignore = /:hover/;
      for (var i = 0; i < document.styleSheets.length; i++) {
        var sheet = document.styleSheets[i];
        if (!sheet.cssRules) {
          continue;
        }
        for (var j = sheet.cssRules.length - 1; j >= 0; j--) {
          var rule = sheet.cssRules[j];
          if (rule.type === CSSRule.STYLE_RULE && ignore.test(rule.selectorText)) {
            sheet.deleteRule(j);
          }
        }
      }
    }
    catch(e) {
    }
  }
}
