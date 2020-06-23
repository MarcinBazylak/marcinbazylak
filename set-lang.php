<?php
setcookie("lang", $_GET['lang'], time()+31536000);
header('location: /');
?>