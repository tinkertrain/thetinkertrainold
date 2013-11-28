(function() {

  'use strict';

  // Load fonts
  WebFont.load({
    google: {
      families: ['Andada', 'Andada:700']
    },
    custom: {
      families: ['trackregular', 'trackitalic', 'thetinke']
    },
    loading: function() {
      $('.getBig').slabText({
        viewportBreakpoint: 380,
        maxFontSize: 115,
        postTweak: false
      });
    }
  });

  //Animate page h2s
  var $h2 = $('header h2');
  var $extraInfo = $('section.extra-info');

  $('.about-this-site').hide();

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
