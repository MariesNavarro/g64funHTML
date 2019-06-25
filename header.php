<!--
Theme: G64 Agency
Version: 2
Author: OET Capital
Date: 05-19
-->
<?php
  require_once('backend/lib/db.php');
  require_once('lang/languages.php');

  /* Obtener parametros  */
  if (isset($_GET['lang'])) { $lang = $_GET['lang']; } else { $lang = 'EN'; /* por defecto en Ingles */}
  /* Obtener listas */
  $listRoles =  getRoles($lang);
  /* Guardar el lenguaje en la página */
  echo '<input type="hidden" id="lang" name="lang" value='.$lang.'>';

  $page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en,es">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0000, minimum-scale=1.0000, maximum-scale=5.0000">
    <title><?php echo $title = ""; ?></title>
    <style>
      #loading{
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0;
        left:0;
        background: #1e1338;
        z-index: 5000;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
      }
      #loading>img{ margin-top: calc(50vh - 48px); }
    </style>
    <meta name="description" content="Full Service Advertising Agency focus on the entertainment industry">
    <meta name="keywords" content="digitalmarketing, LATAM, digitalmarketing, digitalmarketingexpert, g64, gaming, gamer, gamersmx, games, videogames, bethesda, activision, squareenix, videogames, public relations">
    <meta property="og:title" content="G64 Agency">
    <meta property="og:url" content="<?php echo $site = ""; ?>">
    <meta property="og:site_name" content="<?php echo $title = ""; ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Full Service Advertising Agency focus on the entertainment industry - LATAM">
    <meta property="og:image" content="img/og/fb.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="650">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo $site = ""; ?>">
    <meta name="twitter:title" content="<?php echo $title = ""; ?>">
    <meta name="twitter:description" content="Full Service Advertising Agency focus on the entertainment industry - LATAM">
    <meta name="twitter:image" content="img/og/tw.jpg">
    <meta name="twitter:image:width" content="750">
    <meta name="twitter:image:height" content="392">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <link rel="mask-icon" href="img/fav/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <link rel="shortcut icon" href="img/fav/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/resetForm-min.css">
    <link rel="stylesheet" href="css/master-min.css">
    <link rel="stylesheet" href="css/sections-min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body style="background:<?php echo $site = ""; ?>">
    <div id="loading" class="displayFlex trans5">
      <img src="img/logotipo-g64.gif" alt="Logotipo G64 animado" width="80" height="76">
    </div>
    <div id="closePress" class="trans5" onclick="pressRoom('close')">
      <span class="trans5"></span><span class="trans5"></span>
    </div>
    <main>
      <nav class="displayFlex">
        <a id="logoNav" class="whiteLogo" href="index.html" name="home" onmouseover="hoverAnimate()"></a>
        <div class="displayFlex">
          <div id="languageMenu" class="displayFlex">
            <a href="<?php echo $page?>?lang=EN" class="trans3 whiteColor" name="english"><span>EN</span> <span class="trans5"></span></a>
            <span class="trans3 whiteBack"></span>
            <a href="<?php echo $page?>?lang=ES" class="trans3 whiteColor" name="spanish"><span>ES</span> <span class="trans5"></span></a>
            <span class="trans3 whiteBack"></span>
            <a href="<?php echo $page?>?lang=PT" class="trans3 whiteColor" name="portuguese"><span>PT</span> <span class="trans5"></span></a>
          </div>
          <a role="button" id="menuBtt" class="displayFlex" onclick="menu('open', this)" name="menu">
            <span class="trans5 whiteBack"></span>
            <span class="trans5 whiteBack"></span>
            <span class="trans5 whiteBack"></span>
          </a>
        </div>
      </nav>
      <div id="menuAudio">
        <div class="bars" onclick="audioMuted(this, 'mute')">
          <div id="bar-1" class="bar"></div>
          <div id="bar-2" class="bar"></div>
          <div id="bar-3" class="bar"></div>
          <div id="bar-4" class="bar"></div>
          <div id="bar-5" class="bar"></div>
          <div id="bar-6" class="bar"></div>
        </div>
      </div>
      <div id="menu">
        <div class="displayFlex">
          <!-- MENU -->
          <ul id="menuIndex">
            <li class="displayFlex menuLinkOff">
              <p>01</p>
              <a href="index.php" name="home link"><h3><?php echo __("Home", $lang);?></h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>02</p>
              <a href="about.php" name="about link"><h3><?php echo __("About Us", $lang);?></h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>03</p>
              <a href="projects.html" name="portafolio link"><h3><?php echo __("Portfolio", $lang);?></h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>04</p>
              <a href="services.html" name="services link"><h3><?php echo __("Sevices", $lang);?></h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>05</p>
              <a role="button" name="press room link" onclick="pressRoom('open')"><h3><h3><?php echo __("Press Room", $lang);?></h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>06</p>
              <a role="buttom" name="contact link" onclick="contactLink()"><h3><?php echo __("Contact", $lang);?></h3></a>
            </li>
          </ul>
          <!-- Contact Menu -->
          <div id="menuContactInfo" class="menuLinkOff">
              <h4><?php echo __("Follow Us", $lang);?></h4>
              <a href="#" target="_blank" name="instagram g64"><b>Instagram</b></a>
              <a href="#" target="_blank" name="vimeo g64"><b>Vimeo</b></a>
              <a href="#" target="_blank" name="facebook g64"><b>Facebook</b></a>
              <a href="#" target="_blank" name="twitter g64"><b>Twitter</b></a>
              <a href="" name="mail info g64"><b>info@g64.agency</b></a>
              <a href="" name="cookies and privacy policy" target="_blank"><span><?php echo __("Cookies and Privacy Policy", $lang);?></span></a>
          </div>
        </div>
      </div>
