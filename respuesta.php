<?php
  require_once('backend/lib/db.php');

  /* Obtener parametros  */
  $accion   = $_POST['acc'];

  /* Ontener la IP */
  $ip = '';

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  $ip = $_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
  else {  $ip = $_SERVER['REMOTE_ADDR']; }

  switch ($accion) {
    case 1:  /* registrar datos del formulario de contacto  */
        $nombre   = $_POST['nom'];
        $role     = $_POST['rol'];
        $email    = $_POST['ema'];
        $coment   = $_POST['com'];
        echo insertContacto($nombre,$role,$email,$coment,$ip);
        break;
    default:
        echo "Sin parametros";
   }


?>
