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

/* Obtener lista de roles segin idioma */
function getRoles($lang) {
  $link=connect();
  $resultado = null;

  $consulta = "SELECT id,nombre FROM g64_roles WHERE idioma = '".$lang."' ORDER BY orden";

  if ($registros = mysqli_query($link, $consulta)) {
    while ($fila = mysqli_fetch_array($registros)) {
        $resultado .= "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
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

?>
