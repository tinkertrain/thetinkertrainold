(function(){"use strict";var e=function(){this.$projects=$(".projects");this.projectNumber=$(".project").length;this.$buttons=$(".train-line button");this.counter=1;this.initialize=function(){this.setProjectsWidth();this.moveTheLine()};this.setProjectsWidth=function(){var e=this.projectNumber*339;this.$projects.width(e)};this.moveTheLine=function(){var e=this;e.$buttons.on("click",function(t){t.preventDefault();e.animateLine($(this))})};this.animateLine=function(e){if(e.hasClass("next")){if(this.projectNumber>this.counter){this.$projects.animate({left:"-=343"},1e3);this.counter=this.counter+1}}else if(this.counter>1){this.$projects.animate({left:"+=343"},1e3);this.counter=this.counter-1}};this.initialize()},t=new e})();