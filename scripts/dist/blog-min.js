!function(a){a.fn.slabText=function(b){var c={fontRatio:.78,forceNewCharCount:!0,wrapAmpersand:!0,headerBreakpoint:null,viewportBreakpoint:null,noResizeEvent:!1,resizeThrottleTime:300,maxFontSize:999,postTweak:!0,precision:3,minCharsPerLine:0};return a("body").addClass("slabtexted"),this.each(function(){b&&a.extend(c,b);var d=a(this),e=a("span.slabtext",d).length,f=e?[]:String(a.trim(d.text())).replace(/\s{2,}/g," ").split(" "),g=null,h=null,i=c.fontRatio,j=c.forceNewCharCount,k=c.headerBreakpoint,l=c.viewportBreakpoint,m=c.postTweak,n=c.precision,o=c.resizeThrottleTime,p=c.minCharsPerLine,q=null,r=a(window).width(),s=d.find("a:first").attr("href")||d.attr("href"),t=s?d.find("a:first").attr("title"):"";if(!(!e&&p&&f.join(" ").length<p)){var u=function(){var a=jQuery('<div style="display:none;font-size:1em;margin:0;padding:0;height:auto;line-height:1;border:0;">&nbsp;</div>').appendTo(d),b=a.height();return a.remove(),b},v=function(){var b,o=d.width();if(d.removeClass("slabtextdone slabtextinactive"),l&&l>r||k&&k>o)return d.addClass("slabtextinactive"),void 0;if(b=u(),e||!j&&b==g)g=b;else{g=b;var q,v,w,x=Math.min(60,Math.floor(o/(g*i))),y=0,z=[],A="",B="",C="";if(x!=h){for(h=x;y<f.length;){for(B="";B.length<h&&(A=B,B+=f[y]+" ",!(++y>=f.length)););p&&(q=f.slice(y).join(" "),q.length<p&&(B+=q,A=B,y=f.length+2)),v=h-A.length,w=B.length-h,w>v&&A.length>=(p||2)?(C=A,y--):C=B,C=a("<div/>").text(C).html(),c.wrapAmpersand&&(C=C.replace(/&amp;/g,'<span class="amp">&amp;</span>')),C=a.trim(C),z.push('<span class="slabtext">'+C+"</span>")}d.html(z.join(" ")),s&&d.wrapInner('<a href="'+s+'" '+(t?'title="'+t+'" ':"")+"/>")}}a("span.slabtext",d).each(function(){var b,d,e,f=a(this),h=f.text(),i=h.split(" ").length>1;m&&f.css({"word-spacing":0,"letter-spacing":0}),d=o/f.width(),e=parseFloat(this.style.fontSize)||g,f.css("font-size",Math.min((e*d).toFixed(n),c.maxFontSize)+"px"),b=m?o-f.width():!1,b&&f.css((i?"word":"letter")+"-spacing",(b/(i?h.split(" ").length-1:h.length)).toFixed(n)+"px")}),d.addClass("slabtextdone")};v(),c.noResizeEvent||a(window).resize(function(){a(window).width()!=r&&(r=a(window).width(),clearTimeout(q),q=setTimeout(v,o))})}})}}(jQuery),function(){"use strict";WebFont.load({google:{families:["Andada","Andada:700"]},custom:{families:["trackregular","trackitalic","thetinke"]},loading:function(){$(".getBig").slabText({viewportBreakpoint:380,maxFontSize:115,postTweak:!1})}});var a=$("header h2"),b=$("section.extra-info");$(".about-this-site").hide(),a.addClass("animated"),b.on("click","button",function(a){a.preventDefault();var b=$(this),c=$(this).offset();b.hasClass("icon-beaker")?$(".about-this-site").fadeOut(100,function(){$(".technologies").fadeIn(200),$(window).scrollTop(c.top)}):$(".technologies").fadeOut(100,function(){$(".about-this-site").fadeIn(200),$(window).scrollTop(c.top)})})}(),function(){{var a=function(a){var b=this;this.$el=$(a),this.body=$(".page-post"),this.$blogLogo=$(".blog-logo"),this.switchDayNight=function(){this.$el.on("click",".day",function(){b.body.hasClass("blog-night")?(b.body.removeClass("blog-night"),b.$blogLogo.attr("src","/site/templates/images/mrtinker.svg")):(b.body.addClass("blog-night"),b.$blogLogo.attr("src","/site/templates/images/mrtinker-dark.svg"))})},this.switchSerifSans=function(){this.$el.on("click",".serif",function(){b.body.hasClass("blog-sans")?b.body.removeClass("blog-sans"):b.body.addClass("blog-sans")})},this.switchDayNight(),this.switchSerifSans()};new a(".switcher")}}();