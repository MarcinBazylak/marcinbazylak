var s = 0.2;

var y = $(document).scrollTop();
var h = $(window).innerHeight();
var cl = 4;

$('.box3').each(function() {
    var t = $(this).offset().top;
    if (y + h - 50 > t) {

      if(cl == 2){
         cl = 4;
      } else {
         cl = 2;
      }

      $(this).css('animation-delay', s + 's');
      $(this).removeClass('box3').addClass('box' + cl);
      s += 0.5;

    }
  });

$(document).scroll(function() {

  var y = $(this).scrollTop();  
  var h = $(window).height();

  $('.box3').each(function() {
    var t = $(this).offset().top;

    if (y + h - 50 > t) {

      if(cl == 2){
         cl = 4;
      } else {
         cl = 2;
      }

      if(!$(this).hasClass('box2') && !$(this).hasClass('box4'))

         $(this).removeClass('box3').addClass('box' + cl);
         
      }

  });
});