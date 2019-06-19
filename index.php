<!--
Theme: G64 Agency
Version: 2
Author: OET Capital
Date: 05-19
-->
<?php
  require_once('backend/lib/db.php');
  $lang      = 'EN';
  $listRoles =  getRoles($lang);
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
    <title>G64 Agency | PR of Video Games and Entertainment | LATAM</title>
    <meta name="description" content="Agency specialized in public relations of video games and entertainment in LATAM">
    <meta name="keywords" content="digitalmarketing, LATAM, digitalmarketing, digitalmarketingexpert, g64, gaming, gamer, gamersmx, games, videogames, bethesda, activision, squareenix, videogames, public relations">
    <meta property="og:title" content="G64 Agency">
    <!-- FALTA  <meta property="og:url" content=""> -->
    <meta property="og:site_name" content="G64 Agency | PR of Video Games and Entertainment | LATAM">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Agency specialized in public relations of video games and entertainment in LATAM">
    <meta property="og:image" content="img/og/fb.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="650">
    <meta name="twitter:card" content="summary_large_image">
    <!-- FALTA <meta name="twitter:site" content=""> -->
    <meta name="twitter:title" content="G64 Agency | PR of Video Games and Entertainment | LATAM">
    <meta name="twitter:description" content="Agency specialized in public relations of video games and entertainment in LATAM">
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
    <link rel="stylesheet" href="css/master-min.css">
    <script src="https://code.jquery.com/jquery-latest.min.js" defer></script>
  </head>
  <body>
    <main>
      <nav class="displayFlex">
        <a href="#" class="whiteLogo"></a>
        <div class="displayFlex">
          <div id="languageMenu" class="displayFlex">
            <a href="#"><span>EN</span> <span class="trans5"> </span></a>
            <span></span>
            <a href="#"><span>ES</span> <span class="trans5"></span></a>
            <span></span>
            <a href="#"><span>PT</span> <span class="trans5"></span></a>
          </div>
          <a role="button" id="menuBtt" class="displayFlex" onclick="menu('open', this)">
            <span class="trans5"></span>
            <span class="trans5"></span>
            <span class="trans5"></span>
          </a>
        </div>
      </nav>
      <div id="menu">
        <div class="displayFlex">
          <!-- MENU -->
          <ul id="menuIndex">
            <li class="displayFlex menuLinkOff">
              <p>01</p>
              <a href="#"><h3>Home</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>02</p>
              <a href="#"><h3>About</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>03</p>
              <a href="#"><h3>Portafolio</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>04</p>
              <a href="#"><h3>Sevices</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>05</p>
              <a href="#"><h3>Press Room</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>06</p>
              <a href="#"><h3>Contact</h3></a>
            </li>
          </ul>
          <!-- Contact Menu -->
          <div id="menuContactInfo" class="menuLinkOff">
              <h4>Contact Us</h4>
              <a href="#" target="_blank"><b>Instagram</b></a>
              <a href="#" target="_blank"><b>Vimeo</b></a>
              <a href="#" target="_blank"><b>Facebook</b></a>
              <a href="#" target="_blank"><b>Twitter</b></a>
              <a href="#"><b>+52 (1) 55 7590-6384</b></a>
              <a href="" ><b>info@g64.agency</b></a>
              <a href=""><span>Cookies and Privacy Policy</span></a>
          </div>
        </div>
      </div>
      <section id="homeCover">
    		<div class="topCover">
    			<div id="video"></div>
    			<div class="whiteTexture"></div>
    			<div id="sliderHomeWrap"> <!-- flex para acomodar fraseSlider e interfaceSlider -->
    				<ul class="sliderHome">
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #1</h2>
    					</li>
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #2</h2>
    					</li>
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #3</h2>
    					</li>
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #4</h2>
    					</li>
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #5</h2>
    					</li>
    					<li>
    						<h4>
    							<b>What We Do</b>
    							<span></span>
    						</h4>
    						<h2>Service #6</h2>
    					</li>
    				</ul>
    				<ul id="interfaceSliderHome">
    					<li>
    						<a role="button">
    							<!-- SVG 1 -->
    						</a>
    					</li>
    					<li>
    						<a role="button">
    							<!-- SVG 2 -->
    						</a>
    					</li>
    					<li>
    						<a role="button">
    							<!-- SVG 3 -->
    						</a>
    					</li>
    					<li>
    						<a role="button">
    							<!-- SVG 4 -->
    						</a>
    					</li>
    					<li>
    						<a role="button">
    							<!-- SVG 5 -->
    						</a>
    					</li>
    					<li>
    						<a role="button">
    							<!-- SVG 6 -->
    						</a>
    					</li>
    				</ul>
    			</div> <!-- sliderHomeWrap -->
    		</div> <!-- topCover -->
    		<div class="bottomCover">
    			<div class="blackTexture"></div>
    		</div>
    	</section>
      <section id="clientsHome">

      </section>
      <section id="gamingTextHome">

      </section>
      <section id="servicesHome">

      </section>
      <section id="contactHome" class="last">
        <div class="sectionMargin displayFlex">

          <div id="formWrap" class="displayFlex">
            <h4>Say Hi. Don't be shy!</h4>
            <p><span class="highlight">For a <b>strategy for the market in LATAM</b> or if you want to <b>work with the best video game studios</b>. <b>Feel free</b> to contact us anytime.</span></p>
            <form id="contactForm" onsubmit="return false;">
              <div class="question displayFlex">
                <label for=""><b>Your Name</b></label>
                <input type="text" id="name">
              </div>
              <div class="question displayFlex">
                <label for=""><b>Choose Your Role</b></label>
                <select  id="roleList">
                    <?php echo $listRoles; ?>
                </select>
              </div>
              <div class="question displayFlex">
                <label for="" ><b>Your Email</b></label>
                <input type="text" id="email">
              </div>
              <div class="question displayFlex">
                <label for=""><b>Ask Wisely</b></label>
                <textarea id="coment"></textarea>
              </div>

              <button type="button" id="btnSubmit">
                <b>Submit</b>
              </button>
              <p id="message"></p>
            </form>

          </div>

          <div id="sliderContact">

          </div>
        </div>
      </section>
    </main>
    <script src="js/backend.js" charset="utf-8" async></script>
  </body>
</html>
