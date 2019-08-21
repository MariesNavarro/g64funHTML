<?php
date_default_timezone_set('America/Mexico_City');

require_once('conexion.php');

/* Insertar Contacto */
function insertContacto($nombre,$idrole,$email,$coment,$ip) {
  $result ="error";
  $link=connect();

  $query ="INSERT INTO  g64_contactos (nombre, idrole, email, comentario, ip, updatetime) VALUES ('".$nombre."',".$idrole.",'".$email."','".$coment."','".$ip."',NOW())";
  if (mysqli_query($link, $query)) {
    mysqli_commit($link);
    $result = "success";
  } else {
    $result = $query;
  }
  Close($link);
  return $result;
}

/* Obtener lista de roles segun idioma */
function getRoles($lang) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT id,nombre FROM g64_roles WHERE idioma = '".$lang."' ORDER BY orden";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

/* Obtener lista de roles segin idioma */
function getRolName($idRole) {
  $link=connect();
  $resultado = null;

  $consulta = "SELECT nombre FROM g64_roles WHERE id = ".$idRole;

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado = $fila['nombre'];
     }
  }

  Close($link);
  return $resultado;
}

function getClientes($orden) {
  $link      = connect();
  $resultado = array();

  if ($orden=='Alfa') { // alfabeticamente
      $consulta = "SELECT id,nombre,url FROM g64_clientes WHERE activo = 'S' ORDER BY nombre";
  } else {
      $consulta = "SELECT id,nombre,url FROM g64_clientes WHERE activo = 'S' ORDER BY orden";
  }

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getYears() {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT distinct year FROM g64_proyectos  ORDER BY year";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getCategorias($lang) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT id,nombre FROM g64_categorias  WHERE idioma = '".$lang."' ORDER BY orden";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getServicios($lang) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT id,nombre,descripcion,url,thumbnail,orden FROM g64_servicios  WHERE idioma = '".$lang."' and Activo = 'S' ORDER BY orden";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getEquipo($lang) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT id,nombre,cargo,url,background, orden FROM g64_equipo  WHERE idioma = '".$lang."' and Activo = 'S' ORDER BY orden";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getproyectos($lang,$idcliente,$year,$idcategoria) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT a.id,b.nombre, a.year, e.nombre categoria, c.nombre cliente, d.url thumbnail
     FROM g64_proyectos a
LEFT JOIN g64_proyectos_txt b ON a.id = b.idproyecto
LEFT JOIN g64_clientes c ON a.idcliente = c.id
LEFT JOIN g64_proyectos_img d ON a.id = d.idproyecto
LEFT JOIN g64_categorias e ON e.id = b.idcategoria
    WHERE b.idioma = '".$lang."'
      AND d.seccion = 'TH'
      AND a.activo = 'S'
      AND a.activo = 'S'";
  if ($idcliente > 0) {  $consulta .="AND c.id =".$idcliente;  }
  if ($year > 0) {  $consulta .="AND a.year=".$year;  }
  if ($idcategoria > 0) {  $consulta .="AND b.idcategoria=".$idcategoria;  }
  $consulta .=" ORDER BY a.orden";
  /* TH=thumbnail */

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getproyectosExcluir($lang,$idproyecto) {
  $link      = connect();
  $resultado = array();

  $consulta = "SELECT  a.idproyecto id,a.url thumbnail
     FROM g64_proyectos_img a
    WHERE a.seccion = 'TH'
      AND a.activo = 'S'
      AND a.idproyecto != $idproyecto
 ORDER BY a.idproyecto";
 /* TH=thumbnail */

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado[] = $fila;
     }
  }

  Close($link);
  return $resultado;
}

function getproyecto($lang,$idproyecto) {
  $resultado = null;

  if ($idproyecto>0) {
      $link      = connect();
      $consulta = "SELECT a.id,b.nombre, b.descripcion, b.resultado, a.year, e.nombre categoria, c.nombre cliente, d.url, d.tipo
         FROM g64_proyectos a
    LEFT JOIN g64_proyectos_txt b ON a.id = b.idproyecto
    LEFT JOIN g64_clientes c ON a.idcliente = c.id
    LEFT JOIN g64_proyectos_img d ON a.id = d.idproyecto
    LEFT JOIN g64_categorias e ON e.id = b.idcategoria
        WHERE b.idioma = '".$lang."'
          AND d.seccion = 'CO'
          AND a.id = ".$idproyecto."
          AND a.activo = 'S'
     ORDER BY a.orden";
     /* CO=Cover */

      if ($registros = mysqli_query($link, $consulta)) {
        while ($fila = mysqli_fetch_array($registros)) {
            $resultado = $fila;
         }
      }
      Close($link);
 }
  return $resultado;
}

function getproyectoSlider($lang,$idproyecto) {
    $resultado = array();

  if ($idproyecto>0) {
      $link      = connect();
      $consulta = "SELECT a.url, a.tipo
                   FROM g64_proyectos_img a
                  WHERE a.idproyecto = ".$idproyecto."
                    AND a.seccion = 'CA'
                    AND a.Activo = 'S'
               ORDER BY a.orden";
              /* CA=Case */

      if ($registros = mysqli_query($link, $consulta)) {
        while ($fila = mysqli_fetch_array($registros)) {
            $resultado[] = $fila;
         }
      }
      Close($link);
 }
  return $resultado;
}

?>
