<?php
session_start();

$texto="";
$nombre = $_POST["nombre"];
$fono = $_POST["fono"];
$correo = $_POST["correo"];
$empresa = $_POST["empresa"];
$info = $_POST["info"];

$texto=$texto . "-----------------------------------------------\n" . chr(13);
$texto=$texto . "Mensaje desde Web MAX SEGURIDAD \n" . chr(13);
$texto=$texto . "----------------------------------------------- \n" . chr(13);
$texto=$texto . "Nombre y Apellidos : " . $nombre . "\n" . chr(13);
$texto=$texto . "Telefono           : " . $fono . "\n" . chr(13);
$texto=$texto . "Correo             : " . $correo . "\n" . chr(13);
$texto=$texto . "Empresa            : " . $empresa . "\n" . chr(13);
$texto=$texto . "Comentario         : " . $info . "\n" . chr(13);

$texto=$texto . "-----------------------------------------------\n" . chr(13);
$texto=$texto . "-----------------------------------------------\n" . chr(13);

$texto=$texto . "Gracias por usar los servicios de Intercom\n" . chr(13);
$texto=$texto . "-----------------------------------------------\n" . chr(13);

mail("ventas@maxseguridad.com.pe", "Mensaje desde Web MAX SEGURIDAD: " . $nombre, $texto, "From : " . $correo . "\n");
?>
mail("informes@intercomconsultores.com", "Mensaje desde Web BIG NOSE: " . $nombre, $texto, "From : " . $correo . "\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<script language="javascript">
window.open("gracias.html","_self");
</script>

</body>
</html>
