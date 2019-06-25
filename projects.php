<?php
  $title = "Projects| G64 Agency | LATAM";
  $site = "https://g64.agency/projects.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>

      <section id="projectsCover" class="backImg backBottom">
        <span class="whiteTexture texture"></span>
    	</section>

      <section id="projectsGallery" class="backImg">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h2><span class="highlight highPurpleBlue"><?php echo __("A Controller <br> For Everyone", $lang);?></span></h2>

          <form action="" class="displayFlex">

            <select name="" id="">
              <option value=""><?php echo __("Client", $lang);?></option>
            </select>

            <select name="" id="">
              <option value=""><?php echo __("Year", $lang);?></option>
            </select>

            <select name="" id="">
              <option value=""><?php echo __("Service", $lang);?></option>
            </select>
          </form>

          <ul class="rowProjects displayFlex">
            <li onmouseover="projectThumb('over', this,999)" onmouseout="projectThumb('out', this,999)" onclick="projectThumb('click', this,999)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/heartstones/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>Heartstones</b> for Blizzard</p>
            </li>
            <li onmouseover="projectThumb('over', this)" onmouseout="projectThumb('out', this)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/gamingnight/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>Gaming Night</b> for Intel</p>
            </li>
            <li onmouseover="projectThumb('over', this)" onmouseout="projectThumb('out', this)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/finalfantasyxv/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>FFXV</b> for Square Enix</p>
            </li>
          </ul>

          <ul class="rowProjects displayFlex">
            <li onmouseover="projectThumb('over', this)" onmouseout="projectThumb('out', this)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/codwwii/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>COD WWII</b> for Activision</p>
            </li>
            <li onmouseover="projectThumb('over', this)" onmouseout="projectThumb('out', this)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/budofwar/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>Bud Of War</b> for Bud Light</p>
            </li>
            <li onmouseover="projectThumb('over', this)" onmouseout="projectThumb('out', this)">
              <div class="thumbnail trans5 greyscaleFull" style="background-image:url('img/projects/bemine/thumbnail.jpg')"></div>
              <div class="thumbnailColor trans5"></div>
              <p class="highlight highWhitePurpleBlue"><b>Be Mine</b> for Bethesda</p>
            </li>
          </ul>
        </div>
      </section>

<?php include 'footer.php'; ?>

</main>
    <script src="js/bowser.min.js" charset="utf-8"></script>
    <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="js/debug.addIndicators.js" charset="utf-8"></script>
    <script src="js/main-min.js" charset="utf-8"></script>
    <script>
        function projectThumb(c, t, id){
          var img = t.children[0];
          if(c == "over"){
            img.setAttribute("class", "thumbnail trans5 greyscaleNone");
          }
          if(c == "out"){
            img.setAttribute("class", "thumbnail trans5 greyscaleFull");
          }
          if(c == "click"){
            window.location.href='project.php?id='+id;
          //  window.location.href='bud-of-war.html';
          }
        }
        window.onload = function(){
          var langMenu = _("#languageMenu");
          if(checkMobile){
              langMenu.style.display = "none";
          }
          setTimeout(function(){
             panicLoad();
           },1000);
          wipesScroll();

          ratioGallery("#sliderProject");
          ratioGallery("#videoProject");
        }
        window.onresize = function(){
          ratioGallery("#sliderProject");
          ratioGallery("#videoProject");
        };
    </script>
  </body>
</html>
