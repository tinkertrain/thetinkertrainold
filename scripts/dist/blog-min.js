!function(){{var a=function(a){var b=this;this.el=a,this.body=$(".page-blog"),this.dayNight=$(a).children(".day"),this.serifSans=$(a).children(".serif"),this.switchDayNight=function(){b.dayNight.on("click",function(){b.body.hasClass("blog-night")?b.body.removeClass("blog-night"):b.body.addClass("blog-night")})},this.switchSerifSans=function(){b.serifSans.on("click",function(){b.body.hasClass("blog-sans")?b.body.removeClass("blog-sans"):b.body.addClass("blog-sans")})},this.switchDayNight(),this.switchSerifSans()};new a(".switcher")}}();