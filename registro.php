<?php

$conexion = mysql_connect("localhost", "root", "", "enfermo");

$dpi = $_POST["dpi"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$depto = $_POST["depto"];
$email = $_POST["email"];


echo $dpi;
echo $nombre;
echo $apellido;
echo $depto;
echo $email;

mysql_query($conexion, "INSERT INTO 'enfermo'.'zuniga'('dpi', 'nombre', 'apellido', 'depto', 'email') VALUES ('$dpi', '$nombre', '$apellido', '$depto', '$email')");
echo "Exito...";
mysql_close($conexion);

?>