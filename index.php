<?php
// include 'stats.php'
?>
<!DOCTYPE html>
<html lang="pl-PL">

<HEAD>
   <title>Marcin Bazylak - Portfolio</title>
   <meta name="description" content="Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
   <link rel="canonical" href="http://marcinbazylak.com/">
   <meta property="og:url" content="http://marcinbazylak.com">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Marcin Bazylak - Portfolio">
   <meta property="og:description" content="Nazywam się Marcin Bazylak. Od kilku lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
   <meta property="og:image" content="http://www.marcinbazylak.com/img/og_logo.jpg">
   <meta charset="utf-8">
   <meta name="robots" content="index,follow">
   <link rel="shortcut icon" href="img/icon.png">
   <meta http-equiv="Expires" content="0" />
   <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
   <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
   <meta http-equiv="Pragma" content="no-cache" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="css/lbx.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
   <script src="_lightbox/dist/js/lightbox.js"></script>

   <script>
      $(function() {

         $('#contactForm').on('submit', function(e) {

            var tick;

            e.preventDefault();
            if ($('#tick').is(":checked")) {
               tick = $('#tick').val()
            }

            $.ajax({
               type: 'post',
               url: 'send.php',
               data: {
                  name: $('#name').val(),
                  email: $('#email').val(),
                  text: $('#txtInput').val(),
                  tick: tick
               },
               success: function(data) {
                  document.getElementById('contactForm').reset();
                  window.scrollTo({ top: 0, behavior: 'smooth' });
                  showAlert(data);
               }
            });

         });

      });
   </script>

</head>

<body>

   <?php

   include (isset($_COOKIE['lang'])) ? 'body.php' : 'lang.php';

   ?>

   <script src="js/loading.js"></script>
   <script src="js/message.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/flag.js"></script>
   <script src="js/links.js"></script>
</body>

</html>