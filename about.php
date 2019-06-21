<?php
  $title = "About Us | G64 Agency | LATAM";
  $site = "https://g64.agency/about.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>

      <section id="aboutCover" class="backImg">
        <span class="whiteTexture texture"></span>
    	</section>
      <section id="aboutRulebook" class="">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h2><span class="highlight highBlueSky"><?php echo __("The LATAM", $lang);?> <br> <?php echo __("Rulebook", $lang);?></span></h2>
          <ul id="pointsRulebook" class="displayFlex">
            <li>
              <img src="img/ic/point_1.svg" width="30" height="30">
              <p><?php echo __("The <b>need of recognition</b> is a key driver in the region.", $lang);?></p>
            </li>
            <li>
              <img src="img/ic/point_2.svg" width="30" height="30">
              <p><?php echo __("The <b>LATAM</b> fans are extremely <b>loyal to the franchise</b>.", $lang);?></p>
            </li>
            <li>
              <img src="img/ic/point_3.svg" width="30" height="30">
              <p><?php echo __("The players in <b>LATAM</b> think twice before <b>buying a game</b>.", $lang);?></p>
            </li>
            <li>
              <img src="img/ic/point_4.svg" width="30" height="30">
              <p><?php echo __("<b>Regional/local</b> influencers & social media are crucial.", $lang);?></p>
            </li>
          </ul>
        </div>
    	</section>
      <div id="videoWrap"></div>
      <section id="teamAbout">
        <div class="marginAbout">
          <h3><?php echo __("This Is Us", $lang);?></h3>
          <p><?php echo __("A team creating <b>great work</b> for <b>extraordinary brands</b> and <b>audiences</b>.", $lang);?></p>
          <ul class="rowTeam displayFlex">
            <li style="background-image:url('img/team/oscar-ordaz.jpg')"></li>
            <li style="background-image:url('img/team/marcela-giraldo.jpg')"></li>
            <li style="background-image:url('img/team/gabo-sanchez.jpg')"></li>
          </ul>
          <ul class="rowTeam displayFlex">
            <li style="background-image:url('img/team/eduardo-ake.jpg')"></li>
            <li style="background-image:url('img/team/armando-ruiz.jpg')"></li>
            <li style="background-image:url('img/team/carlos-galvez.jpg')"></li>
          </ul>
          <ul class="rowTeam displayFlex">
            <li style="background-image:url('img/team/adriana-rangel.jpg')"></li>
          </ul>
        </div>
      </section>
      <section id="jobAbout">
        <div class="marginAbout">
          <h4><?php echo __("Want To Join Our Team?", $lang);?></h4>
          <p><?php echo __("We are always glad to receive CV’s books and reels. Get in contact with us through.", $lang);?></p>
          <a href="mailto:talento@g64.agency">talento@g64.agency</a>
        </div>
      </section>

<?php include 'footer.php'; ?>

</main>
   <script src="js/bowser.min.js" charset="utf-8"></script>
   <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
   <script src="js/debug.addIndicators.js" charset="utf-8"></script>
   <script src="js/main-min.js" charset="utf-8"></script>
   <script>
       window.onload = function(){
         var langMenu = _("#languageMenu");
         if(checkMobile){
             langMenu.style.display = "none";
         }
         setTimeout(function(){
            panicLoad();
          },1000);
       }
   </script>
 </body>
</html>
