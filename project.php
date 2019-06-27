<?php
  $title = "Project| G64 Agency | LATAM";
  $site = "https://g64.agency/project.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>
<?php
  /* Obtener datos */
  $proyecto       =  getproyecto($lang,$idproyecto);
  $proyectoSlider =  getproyectoSlider($lang,$idproyecto);
  $proyectos      =  getproyectosExcluir($lang,$idproyecto);
?>
</main>

  <div id="projectSectionWrap">
    <div class="projectSection heightAuto">
      <div class="marginProject">
        <h2><?php echo $proyecto['nombre']; ?></h2>
        <h3><?php echo __("for", $lang)." ".$proyecto['cliente']; ?></h3>
        <div id="headerProject" class="displayFlex">
          <div class="column1">
            <h4><?php echo __("The Challenge", $lang); ?></h4>
            <p><?php echo $proyecto['descripcion']; ?></p>
          </div>
          <div class="column2">
            <h4><?php echo __("Year", $lang);?></h4>
            <p><?php echo $proyecto['year']; ?></p>

            <h4><?php echo __("Service", $lang);?></h4>
            <p><?php echo $proyecto['categoria']; ?></p>
          </div>
        </div>

        <div id="sliderProject">
          <?php
            foreach ($proyectoSlider as $item) {
              echo "<div style=\"background-image:url('".$item['url']."')\"></div>";
            }
          ?>
        </div>

        <div id="sliderInterface" class="displayFlex">
          <?php
            for( $i= 0 ; $i < sizeof($proyectoSlider) ; $i++ ) {
              echo "<a href=''>
                    <svg viewBox='0 0 30 30'>
                      <path class='circleBullet bulletContact transBullet' d='M15,3c6.6,0,12,5.4,12,12s-5.4,12-12,12S3,21.6,3,15C3,8.5,8.1,3.2,14.6,3L16,3'/>
                      <circle class='pointBullet' cx='15' cy='15' r='3'/>
                    </svg>
                  </a>";
            }
          ?>
        </div>
      </div> <!-- margin -->
    </div>
    <div class="projectSection panel">
      <div class="marginProject">
        <div id="outcome" class="displayFlex">
          <img src="img/ic/outcome.svg" width="40" height="40">
          <div>
            <h4><?php echo __("The Outcome", $lang); ?></h4>
            <p><?php echo $proyecto['resultado']; ?></p>
          </div>
        </div>
        <div id="videoProject">
          <div style="background-image:url('<?php echo $proyecto['url']; ?>')"></div>
        </div>
      </div>
    </div>
    <div id="insideGallery" class="panel">
      <?php
          $i = 0;
          foreach ($proyectos as $item) {
            if (($i % 3) == 0) { echo "<ul class=\"rowProject displayFlex\">" ; }
            echo "<li style=\"background-image:url('".$item['thumbnail']."');cursor:pointer;\" onclick=\"location.href='project.php?lang=".$lang."&idpro=".$item['id']."';\"></li>";
            if (($i % 3) == 2 || (sizeof($proyectos)-1 == $i) ) { echo "</ul>";}
            $i++;
          }
      ?>
    </div>
  </div>

  <!--<?php include 'footer.php'; ?>-->

    <script src="js/bowser.min.js" charset="utf-8"></script>
    <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="js/debug.addIndicators.js" charset="utf-8"></script>
    <script src="js/main-min.js" charset="utf-8"></script>
    <script>
    changeColorMenu("purple");
      loadSeq();
      function projectThumb(c, t){
        var img = t.children[0];
        if(c == "over"){
          img.setAttribute("class", "thumbnail trans5 greyscaleNone");
        }
        if(c == "out"){
          img.setAttribute("class", "thumbnail trans5 greyscaleFull");
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
