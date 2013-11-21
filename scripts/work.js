(function() {
	'use strict';
	var TrainLine = function() {
		this.$projects = $('.projects');
		this.projectNumber = $('.project').length;
		this.$buttons = $('.train-line button');
		this.$project = $('.project');
		this.counter = 1;

		this.initialize = function () {
			this.setProjectsWidth();
			this.moveTheLine();
			this.getProjectDetails();
		};

		this.setProjectsWidth = function () {
			var newWidth = this.projectNumber * 339;
			this.$projects.width(newWidth);
		};

		this.moveTheLine = function () {
			var _this = this;

			_this.$buttons.on('click', function (e) {
				e.preventDefault();
				_this.animateLine($(this));
			});

		};

		this.animateLine = function($buttonPressed) {
			if( $buttonPressed.hasClass('next') ) {
				if ( this.projectNumber > this.counter ) {
					this.$projects.animate({ left: '-=343'}, 1000);
					this.counter = this.counter + 1;
				}
			}
			else {
				if ( this.counter > 1 ) {
					this.$projects.animate({ left: '+=343'}, 1000);
					this.counter = this.counter - 1;
				}
			}
		};

		this.getProjectDetails = function () {
			var _this = this;
			_this.$project.on('click', 'div', function () {
				var projectClass = $(this).attr('class');
				var projectId = parseInt(projectClass.match(/(\d+)$/)[0], 10) - 1;

				_this.fetchProject(projectId);
			});
		};

		this.fetchProject = function (projectId) {

			$.ajax({
				url: document.URL,
				type: 'POST',
				data: { projectId: projectId }
			}).done(function (results) {
				$('section[role="main"]').append(results);
			});

		};

		// Initialize
		this.initialize();

	}; // TrainLine end

	var projects = new TrainLine();

})();
