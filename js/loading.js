var s = 0.1;

var y = $(document).scrollTop();
var h = $(window).innerHeight();

$('.box3').each(function() {
    var t = $(this).offset().top;
    if (y + h - 50 > t) {

      $(this).css('animation-delay', s + 's');
      $(this).removeClass('box3').addClass('box2');
      s += 0.1;

    }
  });

$(document).scroll(function() {

  var y = $(this).scrollTop();  
  var h = $(window).height();

  $('.box3').each(function() {
    var t = $(this).offset().top;

    if (y + h - 50 > t) {

      if(!$(this).hasClass('box2') && !$(this).hasClass('box4'))

         $(this).removeClass('box3').addClass('box2');
         
      }

  });
});