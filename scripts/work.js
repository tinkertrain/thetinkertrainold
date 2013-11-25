(function() {

	'use strict';

	var TrainLine = function() {
		var _this = this;
		this.$section = $('section[role="main"]');
		this.$projects = $('.projects');
		this.projectNumber = $('.project').length;
		this.$buttons = $('.train-line button');
		this.$project = $('.project');
		this.counter = 1;

		this.initialize = function () {
			this.setProjectsWidth();
			this.moveTheLine();
			this.getProjectDetails();
			this.closeDetails();
		};

		this.setProjectsWidth = function () {
			var newWidth = this.projectNumber * 339;
			this.$projects.width(newWidth);
		};

		this.moveTheLine = function () {
			_this.$buttons.on('click', function (e) {
				e.preventDefault();
				_this.animateLine($(this));
			});
		};

		this.animateLine = function($buttonPressed) {
			if( $buttonPressed.hasClass('right') ) {
				if ( this.projectNumber > this.counter ) {
					this.$projects.animate({ left: '-=343'}, 500);
					this.counter = this.counter + 1;
				}
			}
			else {
				if ( this.counter > 1 ) {
					this.$projects.animate({ left: '+=343'}, 500);
					this.counter = this.counter - 1;
				}
			}
		};

		this.getProjectDetails = function () {
			_this.$project.on('click', 'div', function () {
				var projectClass = $(this).attr('class');
				var projectId = parseInt(projectClass.match(/(\d+)$/)[0], 10) - 1;
				if ( $('.project-detail.' + projectClass ).length === 0) {
					_this.fetchProject(projectId);
				}
				else {
					$('.' + projectClass ).fadeIn();
					$('.overlay').fadeIn();
				}
			});
		};

		this.fetchProject = function (projectId) {
			$.ajax({
				url: document.URL,
				type: 'POST',
				data: { projectId: projectId }
			}).done(function (results) {

				if( $('.overlay').length === 0 ) {
					$('body').append('<div class="overlay"></div>');
				}
				else {
					$('.overlay').fadeIn();
				}

				_this.$section.append(results);
			});
		};

		this.closeDetails = function () {
			this.$section.on('click', '.close', function (e) {
				e.preventDefault();
				$(this).parent().fadeOut();
				$('.overlay').fadeOut();
			});
		};

		// Initialize
		this.initialize();

	}; // TrainLine constructor end

	var projects = new TrainLine();

})();
