<?php

include (isset($_COOKIE['lang'])) ? 'lang/' . $_COOKIE['lang'] . '.php' : 'lang/pl.php';

if ($_COOKIE['lang'] == 'pl') {
   echo '
   <img id="uk-flag" src="img/uk.png" alt="british flag" class="lang-toggle">
   ';
} else {
   echo '
   <img id="pl-flag" src="img/pl.png" alt="polish flag" class="lang-toggle">
   ';
}

?>
<label class="navigation-toggle" id="toggle" for="input-toggle">
   <span></span>
   <span></span>
   <span></span>
</label>
<input type="checkbox" id="input-toggle">
<nav id="nav">
   <ul>
      <li id="li1">
         <a href="#aboutMe" id="aboutMeLink"><?php echo $lng[5] ?></a>
      </li>
      <li id="li2">
         <a href="#portfolio" id="portfolioLink"><?php echo $lng[6] ?></a>
      </li>
      <li id="li3">
         <a href="#contact" id="contactLink"><?php echo $lng[7] ?></a>
      </li>
   </ul>
</nav>

<div class="box1">
   <h1>
      Marcin Bazylak
      <!-- <span style="color: #ddd;"><?php echo $lng[8] ?></span>      -->
   </h1>
</div>
<div id="message"></div>
<div id="aboutMe" class="box3">
   <h2><?php echo $lng[9] ?></h2>
</div>
<div class="box3">
   <p>
      <?php echo $lng[10] ?>
   </p>
   <h3><?php echo $lng[11] ?></h3>
   <ul style="list-style-type: circle; padding-inline-start: 20px;">
      <li><?php echo $lng[12] ?></li>
      <li><?php echo $lng[15] ?></li>
      <li><?php echo $lng[13] ?></li>
      <li><?php echo $lng[14] ?></li>
   </ul>
</div>

<div class="box3">
   <h2><?php echo $lng[16] ?></h2>
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

<div id="portfolio" class="box3">
   <h2><?php echo $lng[18] ?></h2>
</div>

<div class="box3">
   <div class="projects">
      <div class="projects_photo">
         <a href="img/francesco.jpg" data-lightbox="image-2"><img src="img/francesco.jpg" alt="realizacje" class="realizacje"></a>
      </div>
      <div class="projects_description">
         <h3><a href="https://francesco.marcinbazylak.com" target="_blank" rel="noreferrer"><?php echo $lng[19] ?></a></h3><?php echo $lng[20] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[2] ?>
         <br>
         <?php echo $lng[3] ?>
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
         <h3><?php echo $lng[21] ?></h3> <?php echo $lng[22] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[24] ?><br><br>
         <a href="http://marcinbazylak.com/pobierz"><button type="button" class="contact"><?php echo $lng[25] ?></button></a>
      </div>
   </div>
</div>

<div class="box3">
   <div class="projects">
      <div class="projects_photo">
         <a href="img/photolio.jpg" data-lightbox="image-2"><img src="img/photolio.jpg" alt="realizacje" class="realizacje"></a>
      </div>
      <div class="projects_description">
         <h3><a href="http://photolio.pl" target="_blank" rel="noreferrer">photolio.pl</a></h3><?php echo $lng[26] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[2] ?>
         <br>
         <?php echo $lng[3] ?>
      </div>
   </div>
</div>

<div class="box3">
   <div class="projects">
      <div class="projects_photo">
         <a href="img/mika.jpg" data-lightbox="image-3"><img src="img/mika.jpg" alt="realizacje" class="realizacje"></a>
      </div>
      <div class="projects_description">
         <h3><?php echo $lng[27] ?></h3><?php echo $lng[28] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[2] ?>
         <br>
         <?php echo $lng[4] ?>
      </div>
   </div>
</div>

<div class="box3">
   <div class="projects">
      <div class="projects_photo">
         <a href="img/czyscioch.jpg" data-lightbox="image-4"><img src="img/czyscioch.jpg" alt="realizacje" class="realizacje"></a>
      </div>
      <div class="projects_description">
         <h3><?php echo $lng[29] ?></h3><?php echo $lng[30] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[2] ?>
         <br>
         <?php echo $lng[4] ?>
      </div>
   </div>
</div>

<div class="box3">
   <div class="projects">
      <div class="projects_photo">
         <a href="img/motolux.jpg" data-lightbox="image-5"><img src="img/motolux.jpg" alt="realizacje" class="realizacje"></a>
      </div>
      <div class="projects_description">
         <h3><a href="https://motolux.marcinbazylak.com" target="_blank" rel="noreferrer">moto-lux</a></h3><?php echo $lng[31] ?>
         <br>
         <b><?php echo $lng[1] ?></b>
         <br>
         <?php echo $lng[2] ?>
         <br>
         <?php echo $lng[3] ?>
      </div>
   </div>
</div>

<div id="contact" class="box3" style="margin-top: 100px;">
   <h2><?php echo $lng[32] ?></h2>
</div>
<div class="box3" style="margin-bottom: 150px; height: 70vh">
   <form enctype="multipart/form-data" action="send.php" method="post" id="contactForm"">      
   <p>
   <?php echo $lng[33] ?>
   </p>
   <p>
   <?php echo $lng[34] ?>
   </p>
<div class=" form">
      <div class="form_field">
         <label for="name" style="opacity:0">Podaj swoje imię</label>
         <input placeholder="<?php echo $lng[36] ?>" id="name" type="text" name="name" class="contact" maxlength="80" autocomplete="off" required>
      </div>
      <div class="form_field">
         <label for="email" style="opacity:0">Podaj swój adres email</label>
         <input placeholder="<?php echo $lng[37] ?>" id="email" type="email" name="email" class="contact" maxlength="80" autocomplete="off" required>
      </div>
      <div class="form_field">
         <label for="txtInput" style="opacity:0">Wpisz wiadomość</label>
         <textarea placeholder="<?php echo $lng[38] ?>" class="contact" id="txtInput" name="enquiry" oninput="this.style.height = '' ;this.style.height = this.scrollHeight + 'px'" required></textarea>
         <input type="checkbox" name="tick" id="tick" value="123" style="display: none;">
      </div>
      <div class="form_field">
         <button type="submit" class="contact" name="button"><?php echo $lng[35] ?></button>
      </div>
</div>
</form>
</div>