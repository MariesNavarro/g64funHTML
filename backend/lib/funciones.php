<?php
date_default_timezone_set('America/Mexico_City');


function send_email($nombre, $email,$role,$comentario) {
    $texto_mail ='<!DOCTYPE html><html lang="es">
    <head>
      <title>G64 contacto</title>
			<meta charset="utf-8" />
		</head>
		<body style="margin:0 auto;">
      <table style="width:100%;text-align:center;background:#1a3969;padding-bottom:30px;">
        <tr><td  style="width:100%;height:100px;background:#1a3969;display:block;text-align:center; background-repeat: no-repeat; background-position: center; background-image:url(\'http://fun.siguesudando.com/mail/logo-mail.png\'); background-size: 200px 65px"></td></tr>
        <tr><td  style="font-family:sans-serif;font-size:12px;margin:0;color:#ccc;padding:20px 0 5px 0;">NAME</td></tr>
        <tr><td  style="font-family:sans-serif;margin:0;color:#fff;padding:5px 0;">'.$nombre.' </td></tr>
        <tr><td  style="font-family:sans-serif;font-size:12px;margin:0;color:#ccc;padding:20px 0 5px 0;">ROLE</td></tr>
        <tr><td  style="font-family:sans-serif;margin:0;color:#fff;padding:5px 0;">'.$email.' </td></tr>
        <tr><td  style="font-family:sans-serif;font-size:12px;margin:0;color:#ccc;padding:20px 0 5px 0;">EMAIL</td></tr>
        <tr><td  style="font-family:sans-serif;margin:0;color:#fff;padding:5px 0;">'.$role.' </td></tr>
        <tr><td  style="font-family:sans-serif;font-size:12px;margin:0;color:#ccc;padding:20px 0 5px 0;">EMAIL</td></tr>
        <tr><td  style="font-family:sans-serif;margin:0;color:#fff;padding:5px 0;">'.$comentario.' </td></tr>
      </table>
    </body></html>';

    //echo $texto_mail;

    $para  		="carlos.galvez@oetcapital.com";
    $de    		="info@g64.agency";   // email que envia
    $titulo   ='=?UTF-8?B?'.base64_encode("Nuevo contacto G64").'?=';

    // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'Content-Transfer-Encoding: 7bit' . "\r\n";
    $cabeceras .= 'From: G64 '. $de . "\r\n";

    // con copia oculta
    //$cabeceras .= 'BCC: carlos.galvez@oetcapital.com';
    //echo $para.' '.$titulo.' '. $cabeceras,'<br>';
    mail($para, utf8_decode($titulo), utf8_decode($texto_mail), $cabeceras);
    // fin envio email
}

?>
