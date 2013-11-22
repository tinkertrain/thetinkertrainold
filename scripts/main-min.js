/*! jQuery slabtext plugin v2.2 MIT/GPL2 @freqdec */(function(e){e.fn.slabText=function(t){var n={fontRatio:.78,forceNewCharCount:!0,wrapAmpersand:!0,headerBreakpoint:null,viewportBreakpoint:null,noResizeEvent:!1,resizeThrottleTime:300,maxFontSize:999,postTweak:!0,precision:3,minCharsPerLine:0};e("body").addClass("slabtexted");return this.each(function(){t&&e.extend(n,t);var r=e(this),i=e("span.slabtext",r).length,s=i?[]:String(e.trim(r.text())).replace(/\s{2,}/g," ").split(" "),o=null,u=null,a=n.fontRatio,f=n.forceNewCharCount,l=n.headerBreakpoint,c=n.viewportBreakpoint,h=n.postTweak,p=n.precision,d=n.resizeThrottleTime,v=n.minCharsPerLine,m=null,g=e(window).width(),y=r.find("a:first").attr("href")||r.attr("href"),b=y?r.find("a:first").attr("title"):"";if(!i&&v&&s.join(" ").length<v)return;var w=function(){var e=jQuery('<div style="display:none;font-size:1em;margin:0;padding:0;height:auto;line-height:1;border:0;">&nbsp;</div>').appendTo(r),t=e.height();e.remove();return t},E=function(){var d=r.width(),m;r.removeClass("slabtextdone slabtextinactive");if(c&&c>g||l&&l>d){r.addClass("slabtextinactive");return}m=w();if(!i&&(f||m!=o)){o=m;var E=Math.min(60,Math.floor(d/(o*a))),S=0,x=[],T=0,N="",C="",k="",L,A,O;if(E!=u){u=E;while(S<s.length){C="";while(C.length<u){N=C;C+=s[S]+" ";if(++S>=s.length)break}if(v){L=s.slice(S).join(" ");if(L.length<v){C+=L;N=C;S=s.length+2}}A=u-N.length;O=C.length-u;if(A<O&&N.length>=(v||2)){k=N;S--}else k=C;k=e("<div/>").text(k).html();n.wrapAmpersand&&(k=k.replace(/&amp;/g,'<span class="amp">&amp;</span>'));k=e.trim(k);x.push('<span class="slabtext">'+k+"</span>")}r.html(x.join(" "));y&&r.wrapInner('<a href="'+y+'" '+(b?'title="'+b+'" ':"")+"/>")}}else o=m;e("span.slabtext",r).each(function(){var t=e(this),r=t.text(),i=r.split(" ").length>1,s,u,a;h&&t.css({"word-spacing":0,"letter-spacing":0});u=d/t.width();a=parseFloat(this.style.fontSize)||o;t.css("font-size",Math.min((a*u).toFixed(p),n.maxFontSize)+"px");s=h?d-t.width():!1;s&&t.css((i?"word":"letter")+"-spacing",(s/(i?r.split(" ").length-1:r.length)).toFixed(p)+"px")});r.addClass("slabtextdone")};E();n.noResizeEvent||e(window).resize(function(){if(e(window).width()==g)return;g=e(window).width();clearTimeout(m);m=setTimeout(E,d)})})}})(jQuery);(function(){"use strict";WebFont.load({google:{families:["Andada","Andada:700"]},custom:{families:["trackregular","trackitalic","thetinke"]},loading:function(){$("header h1, .getBig").slabText({viewportBreakpoint:380,maxFontSize:115,postTweak:!1})}});var e=$("header h2"),t=$("section.extra-info"),n=$(".bubble").hide();e.addClass("animated");t.on("click","button",function(e){e.preventDefault();var t=$(this),n=$(this).offset();t.hasClass("icon-beaker")?$(".about-this-site").fadeOut(100,function(){$(".technologies").fadeIn(200);$(window).scrollTop(n.top)}):$(".technologies").fadeOut(100,function(){$(".about-this-site").fadeIn(200);$(window).scrollTop(n.top)})})})();