<?php
  $title = "G64 Agency | Full advertising services for the entertainment industry";
  $site = "https://g64.agency/";
  $background = "#1e1338";
?>
<?php include 'header.php'; ?>

      <section id="homeCover" class="panel">
        <span class="whiteTexture texture"></span>
    		<div class="topCover" class="displayFlex">
    			<div id="sliderHomeWrap"> <!-- flex -->
    				<ul id="sliderHome" class="displayFlex trans5">
    					<li data-service="service-1">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("What We Do?", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service1"></h2>
                  <input type="hidden" id="strServ1" value='<?php echo __("Full advertising services for the entertainment industry", $lang);?>'>
                </div>
    					</li>

    					<li data-service="service-2">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("We Have", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service2"></h2>
                  <input type="hidden" id="strServ2" value='<?php echo __("Experiences, knowledge about the region and the industry", $lang);?>'>
                </div>
    					</li>

    					<li data-service="service-3">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("What We Do?", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service3"></h2>
                  <input type="hidden" id="strServ3" value='<?php echo __("The right mix of services to achieve our clients’ KPIs", $lang);?>'>
                </div>
    					</li>
    					<li data-service="service-4">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("We Have", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service4"></h2>
                  <input type="hidden" id="strServ4" value='<?php echo __("A proven track record of top clients of the industry", $lang);?>'>
                </div>
    					</li>

    					<li data-service="service-5">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("What We Do?", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="services5"></h2>
                  <input type="hidden" id="strServ5" value='<?php echo __("Strengthen the recognition of your product in the entertainment community", $lang);?>'>
                </div>
    					</li>
    					<li data-service="service-6">
    						<div>
                  <h4 class="displayFlex trans5">
      							<b><?php echo __("We Have", $lang);?></b>
      							<span class="trans5"></span>
      						</h4>
      						<h2 id="service6"></h2>
                  <input type="hidden" id="strServ6" value='<?php echo __("A strong media, influencers, gamers and entretainment fans relationship", $lang);?>'>
                </div>
    					</li>
    				</ul>
    				<ul id="interfaceSliderHome" class="displayFlex">
    					<li>
    						<a role="button" name="bullet 1 slider home" onclick="sliderHomeFun(0)">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle class="pointBullet" cx="15" cy="15" r="3"/>
                </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 2 slider home" onclick="sliderHomeFun(1)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle class="pointBullet" cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 3 slider home" onclick="sliderHomeFun(2)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle class="pointBullet" cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 4 slider home" onclick="sliderHomeFun(3)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle class="pointBullet" cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 5 slider home" onclick="sliderHomeFun(4)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle class="pointBullet" cx="15" cy="15" r="3"/>
                  </svg>
    						</a>
    					</li>
    					<li>
    						<a role="button" name="bullet 6 slider home" onclick="sliderHomeFun(5)">
                  <svg viewBox="0 0 30 30">
                    <path class="circleBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                    <circle class="pointBullet" cx="15" cy="15" r="3"/>
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
          <h4 id="clientsTitle"><span style="opacity:0; translateY(100px)"><?php echo __("Clients", $lang);?></span></h4>
          <p id="clientsText" style="opacity:0; translateY(100px)"><?php echo __("We are proud to partner with the <b>greatest</b> in the industry, together we build <b>campaigns that get results</b>.", $lang);?></p>
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
              <span class="gamingExperience"><?php echo __("The", $lang);?></span>
              <a role="button" onmouseover="imagesMoveHome(event, 0)" onmouseout="imagesOutHome()" class="trans5" name="Gaming Experience"><span class="trans5"></span><?php echo __(" Gaming Experience", $lang);?></a>
              <span class="gamingExperience"><?php echo __(" has expanded to more aspects of the everyday lives: from competitive sports to full paid jobs. The public is focusing on", $lang);?></span>
              <a role="button" onmouseover="imagesMoveHome(event, 1)" onmouseout="imagesOutHome()" class="trans5" name="Gaming As A Lifestyle"><span class="trans5"></span><?php echo __(" Gaming As A Lifestyle",$lang);?></a>
              <span class="gamingExperience"><?php echo __("  and we have adopted it, reshaped it to fit the", $lang);?></span>
              <a role="button" onmouseover="imagesMoveHome(event, 2)" onmouseout="imagesOutHome()" class="trans5" name="LATAM Audience"> <span class="trans5"></span><?php echo __(" LATAM Audience", $lang);?></a> <span class="gamingExperience"><?php echo __(" and to generate the best results in the region.", $lang);?></span>
            </p>
          </div>
      </section>

      <section id="servicesHome">
        <span class="whiteTexture texture"></span>
        <div class="sectionMargin">
          <h4 id="servicesTitle"><span style="opacity:0; translateY(100px)"><?php echo __("Services", $lang);?></span></h4>
          <p id="servicesText" style="opacity:0; translateY(100px)"><?php echo __("Our goal is to deliver amazing experiences that connect with the <b>LATAM audience</b> and <b>build strategic value for brands</b>.", $lang);?></p>
          <div class="gridServices">
            <ul class="rowClients displayFlex">
              <li id="anchorServices" class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("Consulting, strategizing, planning and research", $lang);?>">
                  <img src="img/services/consulting.svg" >
                  <h5>Consulting, strategizing, planning and research</h5>
                </a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("PR", $lang);?>">
                  <img src="img/services/pr.svg">
                  <h5>PR</h5>
                </a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("Event production", $lang);?>">
                  <img src="img/services/event.svg">
                  <h5>Event Production</h5>
                </a>
              </li>
            </ul>
            <ul class="rowClients displayFlex">
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("Social media and influencers", $lang);?>">
                  <img src="img/services/influencers.svg">
                  <h5>Social Media and Influencers</h5>
                </a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("Offiline and Online Media Buying and Optimization", $lang);?>">
                  <img src="img/services/media.svg">
                  <h5>Offline and Online Media Buying and Optimization</h5>
                </a>
              </li>
              <li class="trans5 clientSectionHomeOff">
                <a href="#" title="<?php echo __("Websites and App Development", $lang);?>">
                  <img src="img/services/apps.svg">
                  <h5>Websites and App Development</h5>
                </a>
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
            <h4 id="sayhi"></h4>
            <p><?php echo __("For a <b>strategy for the market in LATAM</b> or if you want to <b>work with the best video game studios</b>. <b>Feel free</b> to contact us anytime.", $lang);?></p>
            <form id="contactForm" action="" onsubmit="return false;">
              <div class="question displayFlex">
                <label for=""><b><?php echo __("Your Name", $lang);?></b></label>
                <input type="text" id="name">
              </div>
              <div class="question displayFlex">
                <label for=""><b><?php echo __("Choose Your Role", $lang);?></b></label>
                <select  id="roleList">
                    <?php echo $listRoles; ?>
                </select>
              </div>
              <div class="question displayFlex">
                <label for="" ><b><?php echo __("Your Email", $lang);?></b></label>
                <input type="text" id="email">
              </div>
              <div class="question displayFlex">
                <label for=""><b><?php echo __("Ask Wisely", $lang);?></b></label>
                <textarea id="coment"></textarea>
              </div>
              <button type="button" form="contactForm" value="submit" class="trans5" id="btnSubmit">
                <b><?php echo __("Submit", $lang);?></b>
              </button>
            </form>

          </div>

          <div id="sliderContact" class="displayFlex">
            <ul>
              <li class="slideContact trans5" style="background-image:url('img/workplace/0.jpg'); opacity:1"></li>
              <li class="slideContact trans5" style="background-image:url('img/workplace/1.jpg'); opacity:1"></li>
              <li class="slideContact trans5" style="background-image:url('img/workplace/2.jpg'); opacity:1"></li>
              <li class="slideContact trans5" style="background-image:url('img/workplace/3.jpg'); opacity:1"></li>
            </ul>
            <div id="interfaceSliderContact" class="displayFlex">
              <a role="button">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet bulletContact transBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle class="pointBullet" cx="15" cy="15" r="3"/>
                </svg>
              </a>
              <a role="button">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet bulletContact transBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle class="pointBullet" cx="15" cy="15" r="3"/>
                </svg>
              </a>
              <a role="button">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet bulletContact transBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle class="pointBullet" cx="15" cy="15" r="3"/>
                </svg>
              </a>
              <a role="button">
                <svg viewBox="0 0 30 30">
                  <path class="circleBullet bulletContact transBullet" d="M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3"/>
                  <circle class="pointBullet" cx="15" cy="15" r="3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

<?php include 'footer.php'; ?>

</section>
</main>
<script src="js/bowser.min.js" charset="utf-8"></script>
<script src="js/ScrollMagic.min.js" charset="utf-8"></script>
<script src="js/typeit.min.js" charset="utf-8"></script>
<script src="js/main-min.js" charset="utf-8"></script>
<script src="js/home-min.js" charset="utf-8"></script>
<script src="js/backend.js" charset="utf-8"></script>
<script>
  loadSeq();
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
    sliderContact();
    setTimeout(function(){
      panicLoad();
      animateSeq();
    },3000);
  };
</script>
</body>
</html>
