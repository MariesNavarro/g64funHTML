<?php
  $title = "About Us | G64 Agency | LATAM";
  $site = "https://g64.agency/about.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>
<?php
  /* Obtener datos */
  $listEquipo   =  getEquipo($lang);
?>
      <input type="hidden" id="strAbout" value='<?php echo __("About", $lang);?>'>
      <input type="hidden" id="strLatamRule" value='<?php echo __("The LATAM Rulebook", $lang);?>'>

      <section id="aboutCover" class="backImg">
        <h1 id="h1CoverAbout" class="highlight highBlueSky trans5 opacityZero"></h1>
        <span class="whiteTexture texture"></span>
    	</section>
      <section id="aboutRulebook" class="">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h2 id="latamRule"></h2>
          <ul id="pointsRulebook" class="displayFlex">
            <li class="clientSectionHomeOff">
              <img src="img/ic/point_1.svg" width="30" height="30">
              <p><?php echo __("The <b>need of recognition</b> is a key driver in the region.", $lang);?></p>
            </li>
            <li class="clientSectionHomeOff">
              <img src="img/ic/point_2.svg" width="30" height="30">
              <p><?php echo __("The <b>LATAM</b> fans are extremely <b>loyal to the franchise</b>.", $lang);?></p>
            </li>
            <li class="clientSectionHomeOff">
              <img src="img/ic/point_3.svg" width="30" height="30">
              <p><?php echo __("The players in <b>LATAM</b> think twice before <b>buying a game</b>.", $lang);?></p>
            </li>
            <li class="clientSectionHomeOff">
              <img src="img/ic/point_4.svg" width="30" height="30">
              <p><?php echo __("<b>Regional/local</b> influencers & social media are crucial.", $lang);?></p>
            </li>
          </ul>
        </div>
    	</section>
      <div id="videoWrap">
        <span class="whiteTexture texture"></span>
        <ul id="sliderAboutMobile" style="display:none">
          <div class="displayFlex">
            <li style="background-image:url('img/sliderAboutMobile/0.jpg')"></li>
            <li style="background-image:url('img/sliderAboutMobile/1.jpg')"></li>
            <li style="background-image:url('img/sliderAboutMobile/2.jpg')"></li>
            <li style="background-image:url('img/sliderAboutMobile/3.jpg')"></li>
            <li style="background-image:url('img/sliderAboutMobile/4.jpg')"></li>
          </div>
        </ul>
        <video autoplay loop muted poster="img/poster-vid.jpg"></video>
        <div id="interfaceVideoAbout" onclick="coolnessCount()">
          <div id="counterThumbs" class="displayFlex">
            <img src="img/ic/ico-white.svg" width="30" class="trans5 rot360">
            <p>x<span>0</span></p>
          </div>
          <div id="phrase" class="displayFlex">
            <p class="trans5 scaleDown"></p>
          </div>
          <div id="cursorVideoAbout" class="wrapIc">
            <img src="img/ic/txt-thumbs.svg">
            <img src="img/ic/ic-thumbs.svg">
          </div>
        </div>
      </div>
      <section id="teamAbout">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h3 style="opacity: 0; transform: translateY(100px);"><?php echo __("This Is Us", $lang);?></h3>
          <p style="opacity: 0; transform: translateY(100px);"><?php echo __("A team creating <b>great work</b> for <b>extraordinary brands</b> and <b>audiences</b>.", $lang);?></p>
          <?php
              $i = 0;
              foreach ($listEquipo as $item) {
                if (($i % 3) == 0) { echo "<ul class=\"rowTeam displayFlex\">" ; }
                echo "<li style=\"background:".$item['background']."\" class=\"displayFlex trans5 clientSectionHomeOff\">
                              <img src=\"".$item['url']."\">
                              <h3>".$item['cargo']."</h3>
                              <h4>".$item['nombre']."</h4>
                      </li>";
                if (($i % 3) == 2 || (sizeof($proyectos)-1 == $i) ) { echo "</ul>";}
                $i++;
              }
          ?>
          <!--
          <ul class="rowTeam displayFlex">
            <li style="background:#007799" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/oscar-ordaz.svg">
              <h3>Founder & CEO</h3>
              <h4>Oscar Órdaz</h4>
            </li>
            <li style="background:#293376" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/marcela-giraldo.svg">
              <h3>Chief Operation Officer</h3>
              <h4>Marcela Giraldo</h4>
            </li>
            <li style="background:#007799" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/eduardo-ake.svg">
              <h3>VP PR Services</h3>
              <h4>Eduardo Aké</h4>
            </li>
          </ul>
          <ul class="rowTeam displayFlex">
            <li style="background:#007799" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/gabo-sanchez.svg">
              <h3>VP Art & Creative Services</h3>
              <h4>Gabriel Sánchez</h4>
            </li>
            <li style="background:#293376" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/armando-ruiz.svg">
              <h3>VP of Media Services</h3>
              <h4>Armando Ruiz</h4>
            </li>
            <li style="background:#007799" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/carlos-galvez.svg">
              <h3>Chief Application Development</h3>
              <h4>Carlos Gálvez</h4>
            </li>
          </ul>
          <ul class="rowTeam displayFlex">
            <li style="background:#293376" class="displayFlex trans5 clientSectionHomeOff">
              <img src="img/team/adriana-rangel.svg">
              <h3>Chief Financial Officer</h3>
              <h4>Adriana Rangel</h4>
            </li>
          </ul>
        -->
        </div>
      </section>
      <section id="pressRoomAbout">
        <div class="marginAbout">
          <h3><?php echo __("Press Room", $lang);?></h3>
          <p><?php echo __("Visit our <b>Media Centers</b>", $lang);?></p>
          <ul class="displayFlex">
            <li>
              <a href="https://activision.g64.mx/" target="_blank" class="displayFlex">
                <img src="img/clients/activision.svg">
              </a>
            </li>
            <li>
              <a href="https://bethesda.g64.mx/" target="_blank" class="displayFlex">
                <img src="img/clients/bethesda.svg">
              </a>
            </li>
            <li>
              <a href="http://press.latam.square-enix.com/territory_select.asp?from=%2Flanding%2Easp%3F" target="_blank" class="displayFlex">
                <img src="img/clients/squareenix.svg">
              </a>
            </li>
          </ul>
        </div>
        <span class="whiteTexture texture"></span>
      </section>
      <section id="jobAbout">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h3><?php echo __("Want To Join Our Team?", $lang);?></h3>
          <p><?php echo __("We are always glad to receive <b>CV’s books and reels.</b>", $lang);?></p>
          <p><?php echo __("Get in contact with us through.", $lang);?></p>
          <h4>
            <a href="openings.html"><?php echo __("See Our Openings", $lang);?></a>
            <span class="trans5"></span>
          </h4>
          <p><?php echo __("-OR-", $lang);?></p>
          <h4>
            <a href="mailto:talento@g64.agency"><?php echo __("Write Us", $lang);?></a>
            <span class="trans5"></span>
          </h4>
        </div>
      </section>

<?php include 'footer.php'; ?>

</main>
   <script src="js/bowser.min.js" charset="utf-8"></script>
   <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
   <script src="js/debug.addIndicators.js" charset="utf-8"></script>
   <script src="js/typeit.min.js" charset="utf-8"></script>
   <script src="js/main-min.js" charset="utf-8"></script>
   <script src="js/ani.js"></script>
   <script>
       preventAboutVideo();
       loadSeq();
       aboutTriggerLogo();
       aboutTriggerLogoPress();
       aboutRuleAni();
       preventPointsAbout();
       fadeInUp("#teamAbout","#teamAbout>div>h3",300, 0);
       fadeInUp("#teamAbout","#teamAbout>div>p",300, 80);
       fadeScaleInFlex("#teamAbout", ".rowTeam>li", -50);
       fadeScaleOutFlex("#aboutRulebook", ".rowTeam>li");

       var videoAboutInterface = _("#interfaceVideoAbout");
       videoAboutInterface.addEventListener("mousemove", function(e){
         clientAboutX = e.clientX;
         clientAboutY = e.clientY;
       });

       var clientAboutX = 150,
           clientAboutY = 150;

       var cursorShake = {
         el: _(".wrapIc"),
         x:0,
         y:0,
         update: function(){
           lx = this.x-0;
           ly = this.y-0;
           this.el.style = "transform: translate("+lx+"px, "+ly+"px)";
         }
       };

       function move(){
         cursorShake.x = clientAboutX - 75;
         cursorShake.y = clientAboutY - 75;
         cursorShake.update();
         requestAnimationFrame(move);
       }

       var latamRuleTx = new TypeIt("#latamRule", {
         strings: "<span class='highlight highBlueSky'>The LATAM Rulebook</span>",
         cursor: false,
         speed: 60,
         afterComplete: function(){
             fadeScaleIn("#aboutRulebook", "#pointsRulebook>li", -50);
         }
       });

       var particles = bodymovin.loadAnimation({
         container: document.getElementById("cursorVideoAbout"),
         render: "svg",
         loop: false,
         autoplay: false,
         path: "js/data.json"
       })

       particles.addEventListener("complete", function(){
         particles.stop();
       });

       var thanksPhrases = [ "Thank You", "Cool, thanks", "Again? You’re so generous", "Thanks, you are so cool!", "Cool, thanks", "More like? You’re breathtaking!", "The team is happy", "Thank You", "We appreciate all the love" ];
       var thanksPhrasesES = [ "Gracias", "Genial, gracias", "¿Otra vez? Eres tan generoso", "Gracias, eres genial!", "Genial, gracias", "¿Más como? ¡Estás impresionante!", "El equipo esta feliz", "Gracias", "Apreciamos todo el amor" ];
       var thanksPhrasesPT = [ "Thank You", "Cool, thanks", "Again? You’re so generous", "Thanks, you are so cool!", "Cool, thanks", "More like? You’re breathtaking!", "The team is happy", "Thank You", "We appreciate all the love" ];
       var countCoolness = 0, txCountCool = 0;
       var rotGem = false;
       function coolnessCount(){
         var txCount = _("#counterThumbs>p>span"),
             txPhrase = _("#phrase>p"),
             gem = _("#counterThumbs>img"),
             hand = _("#cursorVideoAbout").children[1];
             hand.setAttribute("class", "rot45 trans3");
         rotGem = !rotGem;
         countCoolness++;
         txCountCool++;
         if(rotGem){ gem.setAttribute("class", "trans5 rot360"); }
         if(!rotGem){ gem.setAttribute("class", "trans5 rot0"); }
         txPhrase.style.opacity = "1";
         txPhrase.setAttribute("class", "trans5 scaleUp");
         particles.play();
         txCount.innerHTML = countCoolness;
         if(txCountCool >= 9) txCountCool = 0;
         if(txCountCool < 0) txCountCool = 1;
         var lang = $("#lang").val();
         switch(lang) {
            case 'EN':  txPhrase.innerHTML = thanksPhrases[txCountCool];break;
            case 'ES':  txPhrase.innerHTML = thanksPhrasesES[txCountCool];break;
            case 'PT':  txPhrase.innerHTML = thanksPhrasesPT[txCountCool];break;
            default:    txPhrase.innerHTML = thanksPhrases[txCountCool];
          }
         setTimeout(function(){
           txPhrase.style.opacity = "0";
           txPhrase.setAttribute("class", "trans5 scaleDown");
           hand.setAttribute("class", "rot0 trans3");
         },700);
       }

       function preventAboutVideo(){
         var vid = _("#videoWrap>video"),
             slider = _("#sliderAboutMobile");
         if(checkMobile){
           vid.style.display = "none";
           slider.style.display = "block";
           sliderAboutMove();
         }
       }

       var countSliderMob = 0;
       function sliderAboutMove(){
         var slider = _("#sliderAboutMobile>div");
         setInterval(function(){
           countSliderMob -= 100;
           if(countSliderMob < -400) countSliderMob = 0;
           slider.style.left = countSliderMob+"vw";
         },800);
       };

       var strAbout = $("#strAbout").val();
       var aboutH1 = new TypeIt('#h1CoverAbout', {
         strings: strAbout,
         cursor: false,
         speed: 60,
         waitUntilVisible: true
       });

       window.onload = function(){
         var langMenu = _("#languageMenu");
         aboutH1.go();
         h1CoverAbout.style.opacity = "1";
         if(checkMobile){
             langMenu.style.display = "none";
             preventAboutVideo();
         } else {
           requestAnimationFrame(move);
           loadVideoAbout();
         }
         setTimeout(function(){
           animateSeq();
         },3000);
       }
   </script>
 </body>
</html>
