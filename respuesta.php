<?php
  require_once('backend/lib/db.php');
  require_once('backend/lib/funciones.php');

  /* Obtener parametros  */
  $accion   = $_POST['acc'];

  /* Ontener la IP */
  $ip = '';

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  $ip = $_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
  else {  $ip = $_SERVER['REMOTE_ADDR']; }

  switch ($accion) {
    case 1:  /* registrar y mandar email datos del formulario de contacto  */
        $nombre   = $_POST['nom'];
        $idrole   = $_POST['rol'];
        $email    = $_POST['ema'];
        $coment   = $_POST['com'];

        $result = insertContacto($nombre,$idrole,$email,$coment,$ip);
        $role   = getRolName($idrole);
        send_email($nombre,$email,$role,$coment);
        echo $result;

        break;
    default:
        echo "Sin parametros";
   }

?>
