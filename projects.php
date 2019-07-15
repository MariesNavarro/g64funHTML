<?php
  $title = "Projects| G64 Agency | LATAM";
  $site = "https://g64.agency/projects.php";
  $background = "#FFF";
?>
<?php include 'header.php'; ?>
<?php
  /* Obtener datos */
  $listClientes   =  getClientes('Alfa'); // Orden alfabeticamente
  $listYears      =  getYears();
  $listCategorias =  getCategorias($lang);
  $listProyectos  =  getproyectos($lang,$idcliente,$year,$idcategoria);
?>

      <section id="projectsCover" class="backImg backBottom">
        <span class="whiteTexture texture"></span>
    	</section>

      <section id="projectsGallery" class="backImg">
        <span class="blackTexture texture"></span>
        <div class="marginAbout">
          <h2><span class="highlight highPurpleBlue"><?php echo __("A Controller <br> For Everyone", $lang);?></span></h2>

          <form action="" class="displayFlex">

            <select name="" id="lstClient">
              <option value="0"><?php echo __("(All Clients)", $lang);?></option>
                <?php foreach ($listClientes as $item) {
                  if ($idcliente==$item['id']) {
                    echo "<option value='".$item['id']."' selected>".$item['nombre']."</option>";
                  } else {
                    echo "<option value='".$item['id']."'>".$item['nombre']."</option>";
                  }
                } ?>
            </select>

            <select name="" id="lstYear">
              <option value="0"><?php echo __("(All Years)", $lang);?></option>
                <?php foreach ($listYears as $item) {
                  if ($year==$item['year']) {
                    echo "<option value='".$item['year']."' selected>".$item['year']."</option>";
                  } else {
                    echo "<option value='".$item['year']."'>".$item['year']."</option>";
                  }
                } ?>
            </select>

            <select name="" id="lstService">
              <option value="0"><?php echo __("(All Services)", $lang);?></option>
                <?php foreach ($listCategorias as $item) {
                  if ($idcategoria==$item['id']) {
                    echo "<option value='".$item['id']."' selected>".$item['nombre']."</option>";
                  } else {
                    echo "<option value='".$item['id']."'>".$item['nombre']."</option>";
                  }
                } ?>
            </select>
          </form>
          <?php
              $i = 0;
              foreach ($listProyectos as $item) {
                if (($i % 3) == 0) { echo "<ul class=\"rowProjects displayFlex\">" ; }
                echo "<li onmouseover=\"projectThumb('over', this)\" onmouseout=\"projectThumb('out', this)\">
                      <a href=\"project.php?lang=".$lang."&idpro=".$item['id']."\">
                        <div class=\"thumbnail trans5 greyscaleFull\" style=\"background-image:url('".$item['thumbnail']."')\"></div>
                        <div class=\"thumbnailColor trans5\"></div>
                        <p class=\"highlight highWhitePurpleBlue\"><b>".$item['nombre']."</b> ".__("for", $lang)." ".$item['cliente']."</p>
                      </a>
                    </li>";
                if (($i % 3) == 2 || (sizeof($listProyectos)-1 == $i) ) { echo "</ul>";}
                $i++;
              }
          ?>
        </div>
      </section>

<?php include 'footer.php'; ?>

</main>
    <script src="js/bowser.min.js" charset="utf-8"></script>
    <script src="js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="js/debug.addIndicators.js" charset="utf-8"></script>
    <script src="js/main-min.js" charset="utf-8"></script>
    <script src="js/backend.js" charset="utf-8"></script>
    <script>
        projectsGallery();
        loadSeq();
        function projectThumb(c, t){
          var img = t.children[0].children[0];
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
