(function () {
	var Switcher = function(el){
		var that = this;
		this.el = el;
		this.body = $('.page-blog');
		this.dayNight = $(el).children('.day');
		this.serifSans = $(el).children('.serif');
		this.switchDayNight = function(){
			that.dayNight.on('click', function(){
				if(that.body.hasClass('blog-night')){
					that.body.removeClass('blog-night');
				}
				else{
					that.body.addClass('blog-night');
				}
			});
		};
		this.switchSerifSans = function(){
			that.serifSans.on('click', function(){
				if(that.body.hasClass('blog-sans')){
					that.body.removeClass('blog-sans');
				}
				else{
					that.body.addClass('blog-sans');
				}
			});
		};
		this.switchDayNight();
		this.switchSerifSans();
	};
	var switcher = new Switcher('.switcher');
})();