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
    <title>G64 Agency | Full advertising services for the entertainment industry</title>
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
    <meta property="og:url" content="https://g64.agency/">
    <meta property="og:site_name" content="Full Service Advertising Agency focus on the entertainment industry">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Full Service Advertising Agency focus on the entertainment industry - LATAM">
    <meta property="og:image" content="img/og/fb.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="650">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://g64.agency/">
    <meta name="twitter:title" content="G64 Agency | PR of Video Games and Entertainment | LATAM">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body style="background:#1e1338">
    <div id="loading" class="displayFlex trans5">
      <img src="img/logotipo-g64.gif" alt="Logotipo G64 animado" width="80" height="76">
    </div>
    <main>
      <nav class="displayFlex">
        <a id="logoNav" class="whiteLogo" href="#" name="home"></a>
        <div class="displayFlex">
          <div id="languageMenu" class="displayFlex">
            <a href="#" class="trans3 whiteColor" name="english"><span>EN</span> <span class="trans5"></span></a>
            <span class="trans3 whiteBack"></span>
            <a href="#" class="trans3 whiteColor" name="spanish"><span>ES</span> <span class="trans5"></span></a>
            <span class="trans3 whiteBack"></span>
            <a href="#" class="trans3 whiteColor" name="portuguese"><span>PT</span> <span class="trans5"></span></a>
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
              <a href="index.html" name="home link"><h3>Home</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>02</p>
              <a href="about.html" name="about link"><h3>About</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>03</p>
              <a href="projects.html" name="portafolio link"><h3>Portafolio</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>04</p>
              <a href="services.html" name="services link"><h3>Sevices</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>05</p>
              <a href="#" name="press room link"><h3>Press Room</h3></a>
            </li>
            <li class="displayFlex menuLinkOff">
              <p>06</p>
              <a role="buttom" name="contact link" onclick="contactLink()"><h3>Contact</h3></a>
            </li>
          </ul>
          <!-- Contact Menu -->
          <div id="menuContactInfo" class="menuLinkOff">
              <h4>Follow Us</h4>
              <a href="#" target="_blank" name="instagram g64"><b>Instagram</b></a>
              <a href="#" target="_blank" name="vimeo g64"><b>Vimeo</b></a>
              <a href="#" target="_blank" name="facebook g64"><b>Facebook</b></a>
              <a href="#" target="_blank" name="twitter g64"><b>Twitter</b></a>
              <a href="#" name="phone number g64"><b>+52 (1) 55 7590-6384</b></a>
              <a href="" name="mail info g64"><b>info@g64.agency</b></a>
              <a href="" name="cookies and privacy policy" target="_blank"><span>Cookies and Privacy Policy</span></a>
          </div>
        </div>
      </div>
      <section id="homeCover" class="panel">
        <span class="whiteTexture texture"></span>
    		<div class="topCover" class="displayFlex">
    			<div id="sliderHomeWrap"> <!-- flex -->
    				<ul id="sliderHome" class="displayFlex trans5">
    					<li data-service="service-1">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>What We Do?</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service1"></h2>
                </div>
    					</li>

    					<li data-service="service-2">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>We Have</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service2"></h2>
                </div>
    					</li>

    					<li data-service="service-3">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>What We Do?</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service3"></h2>
                </div>
    					</li>
    					<li data-service="service-4">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>We Have</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service4"></h2>
                </div>
    					</li>

    					<li data-service="service-5">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>What We Do?</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="services5"></h2>
                </div>
    					</li>
    					<li data-service="service-6">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b>We Have</b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service6"></h2>
                </div>
    					</li>
    				</ul>
    				<ul id="interfaceSliderHome" class="displayFlex">
    					<li>
    						<a role="button" name="bullet 1 slider home" onclick="sliderHomeFun(0)">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle cx="15" cy="15" r="3"/>
                </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 2 slider home" onclick="sliderHomeFun(1)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 3 slider home" onclick="sliderHomeFun(2)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 4 slider home" onclick="sliderHomeFun(3)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 5 slider home" onclick="sliderHomeFun(4)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 6 slider home" onclick="sliderHomeFun(5)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    				</ul>
    			</div> <!-- sliderHomeWrap -->
          <video id="coverVid" autoplay loop muted poster="img/poster-vid.jpg"></video>
          <ul id="sliderMobileHome" style="display:none">
            <span class="whiteTexture texture"></span>
            <img id="imgSlider" src="img/slidermobile/mob/5.jpg" style="display:none">
          </ul>
    		</div> <!-- topCover -->
    	</section>

      <section id="clientsHome">
        <span class="whiteTexture texture"></span>
        <div class="sectionMargin">
          <h4 id="clientsTitle"><span style="opacity:0; translateY(100px)">Clients</span></h4>
          <p id="clientsText" style="opacity:0; translateY(100px)">We are proud to partner with the <b>greatest</b> in the industry, together we build <b>campaigns that get results</b>.</p>
          <div class="gridClients">
            <ul class="rowClients displayFlex">
              <li id="anchorClients" class="trans5 clientSectionHomeOff">
                <a href="#" title="Bud Light" style="background-image:url('img/clients/budlight.svg')" name="Client Bud Light"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Intel" style="background-image:url('img/clients/intel.svg')" name="Client Intel"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Bethesda" style="background-image:url('img/clients/bethesda.svg')" name="Client Bethesda"></a>
              </li>
            </ul>
            <ul class="rowClients displayFlex">
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Square Enix" style="background-image:url('img/clients/squareenix.svg')" name="Client Square Enix"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Activision" style="background-image:url('img/clients/activision.svg')" name="Client Activision"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Blizzard" style="background-image:url('img/clients/blizzard.svg')" name="Client Blizzard"></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section id="gamingTextHome" class="panel displayFlex">
          <span class="blackTexture texture"></span>
          <div id="gifGaming" class="displayFlex">
            <img id="movingEl" style="opacity:0">
          </div>
          <div class="marginGaming">
            <p id="gamingText">
              <span class="gamingExperience">The</span> <a role="button" onmouseover="imagesMoveHome(event, 0)" onmouseout="imagesOutHome()" class="trans5" name="Gaming Experience"><span class="trans5"></span> Gaming Experience</a> <span class="gamingExperience"> has expanded to more aspects of the everyday lives: from competitive sports to full paid jobs. The public is focusing on</span> <a role="button" onmouseover="imagesMoveHome(event, 1)" onmouseout="imagesOutHome()" class="trans5" name="Gaming As A Lifestyle"><span class="trans5"></span> Gaming As A Lifestyle</a> <span class="gamingExperience"> and we have adopted it, reshaped it to fit the</span> <a role="button" onmouseover="imagesMoveHome(event, 2)" onmouseout="imagesOutHome()" class="trans5" name="LATAM Audience"> <span class="trans5"></span>LATAM Audience</a> <span class="gamingExperience">and to generate the best results in the region.</span>
            </p>
          </div>
      </section>

      <section id="servicesHome">
        <span class="whiteTexture texture"></span>
        <div class="sectionMargin">
          <h4 id="servicesTitle"><span style="opacity:0; translateY(100px)">Services</span></h4>
          <p id="servicesText" style="opacity:0; translateY(100px)">Our goal is to deliver amazing experiences that connect with the <b>LATAM audience</b> and <b>build strategic value for brands</b>.</p>
          <div class="gridServices">
            <ul class="rowClients displayFlex">
              <li id="anchorServices" class="trans5 clientSectionHomeOff">
                <a href="#" title="Consulting, strategizing, planning and research" style="background-image:url('img/services/consulting.svg')"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="PR" style="background-image:url('img/services/pr.svg')"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Event production" style="background-image:url('img/services/event.svg')"></a>
              </li>
            </ul>
            <ul class="rowClients displayFlex">
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Social media and influencers" style="background-image:url('img/services/influencers.svg')"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Offiline and Online Media Buying and Optimization" style="background-image:url('img/services/media.svg')"></a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="Websites and App Development" style="background-image:url('img/services/apps.svg')"></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section id="contactHome" class="displayFlex">
        <div id="messageSubmit"> <p> </p> </div>
        <span class="blackTexture texture"></span>
        <div class="sectionMarginContact displayFlex">
          <div id="formWrap" class="displayFlex">
            <h4>Say Hi. Don't be shy!</h4>
            <p>For a <b>strategy for the market in LATAM</b> or if you want to <b>work with the best video game studios</b>. <b>Feel free</b> to contact us anytime.</p>
            <form id="contactForm" action="" onsubmit="return false;">
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
              <button type="button" form="contactForm" value="submit" class="trans5" id="btnSubmit">
                <b>Submit</b>
              </button>
            </form>

          </div>

          <div id="sliderContact">
            <ul>
              <li style="background-image:url('img/workplace/0.jpg')"></li>
            </ul>
          </div>
        </div>

        <footer>
          <span class="whiteTexture texture"></span>
          <div class="marginWidth">
            <ul class="contactMobile">
              <li><a href="tel:5575906384">+52 (1) 55 7590-6384</a></li>
              <li><a href="mailto:info@g64.agency">info@g64.agency</a></li>
              <li><a href="mailto:ventas@g64.agency">ventas@g64.agency</a></li>
              <li><a href="mailto:talento@g64.agency">talento@g64.agency</a></li>
            </ul>
            <div class="infoColums">
              <!-- 1 Columna Sitemap -->
              <ul>
                <h4>Sitemap</h4>
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <a href="services.html">Services</a>
                </li>
                <li>
                  <a href="projects.html">Projects</a>
                </li>
                <li>
                  <a role="button">Press Room</a>
                </li>
                <li>
                  <a role="button" onclick="contactLink('nomenu')">Contact</a>
                </li>
              </ul>

              <!-- 2 Columna Follow Us -->
              <ul>
                <h4>Follow Us</h4>
                <li>
              		<a href="https://www.instagram.com/g64.agency/" target="_blank">Instagram</a>
              	</li>
              	<li>
              		<a href="https://vimeo.com/user85719236" target="_blank">Vimeo</a>
              	</li>
              	<li>
              		<a href="https://www.facebook.com/pages/G64/1489576167830724" target="_blank">Facebook</a>
              	</li>
              	<li>
              		<a href="https://twitter.com/g64agency" target="_blank">Twitter</a>
              	</li>
              </ul>

              <!-- 3 Columna Our Family -->
              <ul>
                <h4>Our Family</h4>
                <li>
                  <a href="https://www.tierragamer.com/" target="_blank">Tierra Gamer</a>
                </li>
                <li>
                  <a href="#" target="_blank">Eleven Advertising</a>
                </li>
              </ul>

              <!-- 4 Columna Policy -->
              <ul>
                <h4>Policy</h4>
                <li>
                  <a href="#" target="_blank">Cookies and Privacy Policy</a>
                </li>
              </ul>

              <!-- 5 Columna Policy -->
              <ul>
                <h4>Contact</h4>
                <li>
                  <a href="tel:+5215575906384">+52 (1) 55 7590-6384</a>
                </li>
                <li>
                  <a href="mailto:info@g64.agency">info@g64.agency</a>
                </li>
                <li>
                  <a href="mailto:ventas@g64.agency">ventas@g64.agency</a>
                </li>
                <li>
                  <a href="mailto:talento@g64.agency">talento@g64.agency</a>
                </li>
              </ul>
            </div>
            <p> © 2019 All Rights Reserved </p>
          </div>
        </footer>
      </section>
    </main>
    <script src="js/bowser.min.js" charset="utf-8"></script>
    <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="js/typeit.min.js" charset="utf-8"></script>
    <script src="js/main-min.js" charset="utf-8"></script>
    <script src="js/home-min.js" charset="utf-8"></script>
    <script src="js/backend.js" charset="utf-8"></script>
    <script>
        window.onload = function(){
          var langMenu = _("#languageMenu"),
              clientsHome = _("#clientsHome"),
              servicesHome = _("#servicesHome");
          if(checkMobile){
              langMenu.style.display = "none";
              clientsHome.setAttribute("class", " ");
              servicesHome.setAttribute("class", " ");
          }
          wipesScroll();
          homeTriggersLogo();
          animationSectionsHome();

          sliderHomeFun(0);
          scrollHomeCover();

          setTimeout(function(){
            panicLoad();
          },3000);
        };
    </script>
  </body>
</html>
