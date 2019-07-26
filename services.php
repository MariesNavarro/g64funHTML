<?php
  $title = "Services| G64 Agency | LATAM";
  $site = "https://g64.agency/projects.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>
<?php
  /* Obtener datos */
  $listServicios   =  getServicios($lang);
?>

<section id="servicesCover" class="backImg">
  <span class="whiteTexture texture"></span>
  <h1 id="servicesH1" class="highlight highGreenWhite"></h1>
</section>
<section id="servicesInfo" class="">
  <span class="blackTexture texture"></span>
  <div class="marginAbout">
    <h2><span class="highlight highGreenWhite"><?php echo __("We Have", $lang);?></span></h2>
    <ul class="displayFlex">
      <?php
        $i = 0;
        foreach ($listServicios as $item) {
          if (($i % 2) == 0) { echo "<li class=\"serviceLi displayFlex\">" ; } else { echo "<li class=\"serviceLiRetro displayFlex\">"; }
          echo "
            <div class=\"info displayFlex\">
              <p><b>".str_pad($item['orden'], 2, '0', STR_PAD_LEFT)."</b></p>
              <div class=\"displayFlex\">
                <h3>".$item['nombre']."</h3>
                <p>".$item['descripcion']."</p>
              </div>
            </div>
            <div class=\"imgic\" style=\"background-image:url('".$item['url']."')\"></div>
          </li>
          ";
         $i++;
      } ?>
    </ul>
  </div>
</section>

<?php include 'footer.php'; ?>

</main>
    <script src="js/bowser.min.js" charset="utf-8"></script>
    <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="js/debug.addIndicators.js" charset="utf-8"></script>
    <script src="js/typeit.min.js" charset="utf-8"></script>
    <script src="js/main-min.js" charset="utf-8"></script>
    <script src="js/backend.js" charset="utf-8"></script>
    <script>
      triggerServices();
      loadSeq();

      var servicesH1 = new TypeIt('#servicesH1', {
        strings: 'Services',
        cursor: false,
        speed: 60,
        waitUntilVisible: true
      });

      window.onload = function(){
        servicesH1.go();
        var langMenu = _("#languageMenu");
        if(checkMobile){
            langMenu.style.display = "none";
        }
      }
    </script>
  </body>
</html>
