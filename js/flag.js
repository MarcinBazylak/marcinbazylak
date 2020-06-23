$('#pl-flag').click(function() {

   Cookies.set('lang', 'pl', { expires: 365 })

    $('#pl-flag').animate().css({
      opacity: '0',
      transform: 'scale(10)'
    });
   $('#uk-flag').animate({left: 2000}, 200);
   $('#flag-txt').animate({bottom: 2000}, 900);

   setTimeout(function(){

      window.location = '/';
      
   }, 500);

});

$('#uk-flag').click(function() {

   Cookies.set('lang', 'en', { expires: 365 })

    $('#uk-flag').animate().css({
      opacity: '0',
      transform: 'scale(10)'
    });
   $('#pl-flag').animate({right: 2000}, 200);
   $('#flag-txt').animate({bottom: 2000}, 900);

   setTimeout(function(){

      window.location = '/';

   }, 500);

});