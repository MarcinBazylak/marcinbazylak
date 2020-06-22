<?php
include 'stats.php'
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
               // window.scrollTo({ top: 0, behavior: 'smooth' });
               showAlert(data);
            }
         });

      });

   });
   </script>

</head>
<body>

<label class="navigation-toggle" id="toggle" for="input-toggle">
      <span></span>
      <span></span>
      <span></span>
</label>
<input type="checkbox" id="input-toggle">
<nav id="nav">   
   <ul>
      <li id="li1">
         <a href="#aboutMe" id="aboutMeLink">O mnie</a>
      </li>
      <li id="li2">
         <a href="#portfolio" id="portfolioLink">Realizacje</a>
      </li>
      <li id="li3">
         <a href="#contact" id="contactLink">Kontakt</a>
      </li>
   </ul>
</nav>
   
   <div class="box1">
      <h1>
         Marcin Bazylak<br>
         <span style="color: #ddd;">PORTFOLIO</span>     
      </h1>
   </div>

   <div id="aboutMe" class="box3">
      <h2>O MNIE</h2>
   </div>
   <div class="box3">
      <p>
         Nazywam się Marcin Bazylak i jestem programistą oraz grafikiem komputerowym. Na codzień
         tworzę serwisy internetowe i aplikacje na smartfony z systemem Android.
      </p>
      <h3>Zapraszam do zapoznania się z moją ofertą:</h3>
      <ul style="list-style-type: circle; padding-inline-start: 20px;">
         <li>programowanie obiektowe PHP</li>
         <li>projekotwanie responsywnych oraz zgodnych z <b>SEO</b> stron internetowych w
            technologiach <b>HTML 5</b>, <b>CSS 3</b>, <b>PHP 7</b>, <b>MySql</b>,
            <b>Javascript</b>. Wszystkie projektowane przez mnie witryny wyposażone są w pełen
            <b>CMS</b> (panel administracyjny), co pozwala na własnoręczne zmiany zawartości.</li>
         <li>rejestracja domen i utrzymanie na serwerze stron wykonanych dla moich kliektów</li>
         <li>grafika komputerowa: projektowanie plakatów, ulotek, banerów, opakowań, itp.</li>
      </ul>
      </div>

      <div class="box3">
         <h2>UŻYWANE TECHNOLOGIE</h2>   
      </div>

      <div class="box3" style="text-align: center;">
      <img src="img/html.jpg" alt="html logo" class="logo">
      <img src="img/css.jpg" alt="css logo" class="logo">
      <img src="img/php.jpg" alt="php logo" class="logo">
      <img src="img/mysql.jpg" alt="mysql logo" class="logo">
      <img src="img/laravel.jpg" alt="laravel logo" class="logo">
      <img src="img/jquery.jpg" alt="jquery logo" class="logo">
      <img src="img/ajax.jpg" alt="ajax logo" class="logo">
      <img src="img/java.jpg" alt="java logo" class="logo">
      <img src="img/ps.jpg" alt="photoshop logo" class="logo">
      </div>

      <div class="box3">
      <h2>Certyfikaty potwierdzające moje kwalifikacje:</h2>
      <br>
      <center>
         <a href="img/cert1.jpg" data-lightbox="image-1"><img src="img/cert1m.jpg" alt="certyfikat" class="cert"></a>
         <a href="img/cert5.jpg" data-lightbox="image-1"><img src="img/cert5m.jpg" alt="certyfikat" class="cert"></a>
         <a href="img/cert6.jpg" data-lightbox="image-1"><img src="img/cert6m.jpg" alt="certyfikat" class="cert"></a>
      </center>
   </div>

   <div id="portfolio" class="box3">
   <h2>REALIZACJE</h2>   
   </div>

   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/francesco.jpg" data-lightbox="image-2"><img src="img/francesco.jpg" alt="realizacje" class="realizacje"></a>
         </div>
         <div class="projects_description">
            <h3>Pizzeria FRANCESCO<br>Projekt w trakcie realizacji</h3>Strona internetowa Pizzerii Francesco. Projekt przewiduje możliwość zamawiania pizzy online z dowozem do klienta.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Responsive Web Design,
            <br>
            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez
            <b>CMS</b>
         </div>
      </div>
   </div>

   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/tracker1.jpg" data-lightbox="image-1"><img src="img/tracker1.jpg" alt="realizacje" class="realizacje" style="max-width: 120px;"></a>
            <a href="img/tracker2.jpg" data-lightbox="image-1"><img src="img/tracker2.jpg" alt="realizacje" class="realizacje" style="max-width: 120px; margin-left: 15px;"></a>
         </div>
         <div class="projects_description">
            <h3>Child Tracker</h3> Aplikacja na system Android, pozwalająca rodzicom na śledzenie
            lokalizacji telefonu dziecka.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Java, Android SDK, Google FIrebase, Mapy OSM<br><br>
            <a href="http://marcinbazylak.com/pobierz"><button type="button" class="contact">pobierz</button></a>
         </div>
      </div>
   </div>

   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/photolio.jpg" data-lightbox="image-2"><img src="img/photolio.jpg" alt="realizacje" class="realizacje"></a>
         </div>
         <div class="projects_description">
            <h3><a href="http://photolio.pl">photolio.pl</a></h3>serwis dla fotografów oferujący darmową
            przestrzeń na portfolio.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Responsive Web Design,
            <br>
            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez
            <b>CMS</b>
         </div>
      </div>
   </div>

   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/mika.jpg" data-lightbox="image-3"><img src="img/mika.jpg" alt="realizacje" class="realizacje"></a>
         </div>
         <div class="projects_description">
            <h3>Patryk Mika fotografia ślubna</h3>Projekt strony dla fotografa ślubnego Patryka Miki.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Responsive Web Design,
            <br>
            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>
         </div>
      </div>
   </div>

   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/czyscioch.jpg" data-lightbox="image-4"><img src="img/czyscioch.jpg" alt="realizacje" class="realizacje"></a>
         </div>
         <div class="projects_description">
            <h3>czyścioch</h3>Projekt strony firmy zajmującej się kompleksowymi pracami porządkowymi.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Responsive Web Design,
            <br>
            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>
         </div>
      </div>
   </div>
      
   <div class="box3">
      <div class="projects">
         <div class="projects_photo">
            <a href="img/motolux.jpg" data-lightbox="image-5"><img src="img/motolux.jpg" alt="realizacje" class="realizacje"></a>
         </div>
         <div class="projects_description">
            <h3><a href="http://motolux.cba.pl" target="_blank">moto-lux</a></h3>Projekt strony dealera
            samochodów używanych MOTO-LUX.
            <br>
            <b>Użyte technologie:</b>
            <br>
            Responsive Web Design,
            <br>
            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez
            <b>CMS</b>
         </div>
      </div>
   </div>

   <div id="contact" class="box3" style="margin-top: 100px;">
      <h2>KONTAKT</h2>
   </div>
   <div class="box3" style="margin-bottom: 150px; height: 70vh"> 
      <form enctype="multipart/form-data" action="send.php" method="post" id="contactForm"">      
         <p>
            Marcin Bazylak<br>
            tel. 48 883 662 652
         </p>
         <p>
            Jeżeli chciałbyś skontaktować się ze mną w celu nawiązania współpracy, zapoznania się
            dokładniej z moją ofertą lub masz do mnie jakieś inne pytania, możesz się ze mną
            skontaktować korzystając z poniższego formularza.
         </p>
         <div id="message"></div>  
         <div class="form">
            <div class="form_field">
               <input placeholder="Twoje imię" id="name" type="text" name="name" class="contact" maxlength="80" autocomplete="off" required>
            </div>
            <div class="form_field">
               <input placeholder="Twój adres email" id="email" type="email" name="email" class="contact" maxlength="80" autocomplete="off" required>
            </div>
            <div class="form_field">
               <textarea placeholder="Twoja wiadomość" class="contact" id="txtInput" name="enquiry" oninput="this.style.height = '' ;this.style.height = this.scrollHeight + 'px'" required></textarea>
               <input type="checkbox" name="tick" id="tick" value="123" style="display: none;">
            </div>
            <div class="form_field">
               <button type="submit" class="contact" name="button">Wyślij wiadomość</button>
            </div>
         </div>         
      </form>
   </div>

   <script src="js/loading.js"></script>
   <script src="js/message.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/links.js"></script>
</body>
</html>