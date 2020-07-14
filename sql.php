<?php
	include "conexion.php";
	$nombres=$_POST["t1"];
	$apellidos=$_POST["t2"];
	$correo_electronico=$_POST["t3"];
	$mensaje=$_POST["t4"];

$colocar="INSERT INTO informacion(nombres, apellidos, correo_electronico, mensaje) values('$nombres', '$apellidos', '$correo_electronico', '$mensaje')";

$mens=mysqli_query($conexion, $colocar);
if (!$mens) {
	echo "No se guardo la informacion";
}else{
	echo'Si se guardo la informacion';

}
mysqli_close($conexion);