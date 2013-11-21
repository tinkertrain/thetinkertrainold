// $(document).ready(function() {
//   var $project, $details, projectNumber, projectClasses, $close, $previous, $next, $ul, count, amount, $this, $curtain, $body;

//   $project = $('.project-logo');
//   $details = $('.project-details');
//   $close = $('.icon-exit');
//   $previous = $('.previous');
//   $next = $('.next');
//   $ul = $('.past-projects');
//   $curtain = $('<div></div>').addClass('curtain');
//   $body = $('body');
//   amount = $project.length;
//   count = 0;

// function checkOpacity(){
//   $project.each(function(){
//       if($(this).css('opacity') === '0'){
//         $(this).animate({
//                         top: 0,
//                         opacity: 1
//                       }, 300);
//       }
//     });
// }

//   //Show the correct project details upon click
//   $project.on('click', function(event) {
//     event.preventDefault();
//     $this = $(this);
//     projectClasses = $(this).attr('class');
//     projectNumber = parseInt(/project-(\d+)/.exec(projectClasses)[1], 10);
//     $details.hide();
//     $project.each(checkOpacity);
//     $curtain.appendTo($body).css({
//       'height': $body.height(),
//       'width': $(window).width(),
//       'background-color': '#000',
//       'position': 'absolute',
//       'top': 0,
//       'left': 0,
//       'opacity': 0
//     }).fadeTo(100, 0.5);
//     $this.animate({
//                     top: -300,
//                     opacity: 0
//                   },
//                   300,
//                   function(){
//                     $('.project-details.project-'+projectNumber).show()
//                                                                 .animate({
//                                                                           top: 100,
//                                                                           opacity: 1
//                                                                           }, 300);
//                   });
//   });

//   $project.on('mouseenter', function(event){
//     event.preventDefault();
//     $this = $(this);
//     $this.animate({
//       top: '-20px'
//     }, 200);
//   });
//   $project.on('mouseleave', function(event){
//     event.preventDefault();
//     $this = $(this);
//     $this.animate({
//       top: '0px'
//     }, 200);
//   });

//   //Close the details
//   $close.on('click', function(event) {
//     event.preventDefault();
//     $details.animate({
//                       top: -400,
//                       opacity: 0
//                       }, 300, checkOpacity);
//     $curtain.remove();
//   });

//   //Slide the wagons
//   $next.on('mouseenter', function(event) {
//     event.preventDefault();
//     if( count < amount ){
//       $ul.animate({ left: '-=340'}, 1000);
//       count++;
//     }
//   });
//   $previous.on('mouseenter', function(event) {
//     event.preventDefault();
//     if(count > 0){
//       $ul.animate({ left: '+=340'}, 1000);
//       count--;
//     }
//   });
//   $next.on('click', function(event) {
//     event.preventDefault();
//     if( count < amount ){
//       $ul.animate({ left: '-=340'}, 1000);
//       count++;
//     }
//   });
//   $previous.on('click', function(event) {
//     event.preventDefault();
//     if(count > 0){
//       $ul.animate({ left: '+=340'}, 1000);
//       count--;
//     }
//   });
// });

(function() {
  'use strict';
  //Load fonts
  WebFont.load({
    google: {
      families: ['Andada', 'Andada:700']
    },
    custom: {
      families: ['trackregular', 'trackitalic', 'thetinke']
    },
    loading: function() {
      $("header h1, header h2").slabText({
        "viewportBreakpoint":380
      });
    }
  });

  //Animate page h2s
  var $h2 = $('header h2');
  var $extraInfo = $('section.extra-info');
  var $bubble = $('.bubble').hide();

  $h2.addClass('animated');

  $extraInfo.on('click', 'button', function(e) {
    e.preventDefault();
    var $this = $(this);
    var offset = $(this).offset();
    if ($this.hasClass('icon-beaker')) {
      $('.about-this-site').fadeOut(100, function(){
        $('.technologies').fadeIn(200);
        $(window).scrollTop(offset.top);
      });
    }
    else {
      $('.technologies').fadeOut(100, function(){
        $('.about-this-site').fadeIn(200);
        $(window).scrollTop(offset.top);
      });
    }

  });

})();
