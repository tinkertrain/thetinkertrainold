(function () {
	var Switcher = function(el){
		var _this = this;
		this.$el = $(el);
		this.body = $('.page-post');
		this.$blogLogo = $('.blog-logo');

		this.switchDayNight = function(){
			this.$el.on('click', '.day', function(){
				if(_this.body.hasClass('blog-night')){
					_this.body.removeClass('blog-night');
					_this.$blogLogo.attr('src', '/site/templates/images/mrtinker.svg');
				}
				else{
					_this.body.addClass('blog-night');
					_this.$blogLogo.attr('src', '/site/templates/images/mrtinker-dark.svg');
				}
			});
		};

		this.switchSerifSans = function(){
			this.$el.on('click', '.serif', function(){
				if(_this.body.hasClass('blog-sans')){
					_this.body.removeClass('blog-sans');
				}
				else{
					_this.body.addClass('blog-sans');
				}
			});
		};

		this.switchDayNight();
		this.switchSerifSans();
	};
	var switcher = new Switcher('.switcher');
})();
