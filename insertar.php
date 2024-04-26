<?php 

//incluimos la conexion de php
include_once 'conectar.php';

if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['costo'], $_POST['numpersonas'], $_POST['edades'], $_POST['idiomas'], $_POST['alojamiento'], $_POST['tiempoestimado'], $_POST['disponibilidad'], $_POST['categoria'], $_POST['ofertas'])) {
    # code...

//obtenemos los valores de los elementos del form 
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$numeropersonas = $_POST['numpersonas'];
$edades = $_POST['edades'];
$idiomas = $_POST['idiomas'];
$alojamiento = $_POST['alojamiento'];
$tiempoestimado = $_POST['tiempoestimado'];
$disponibilidad = $_POST['disponibilidad'];
$categoria = $_POST['categoria'];
$ofertas = $_POST['ofertas'];

//consulta sql
$sqlinsert = "INSERT INTO paquetes_turisticos values(0, '$nombre', '$descripcion', 
'$costo', '$numeropersonas', '$edades', '$idiomas', '$alojamiento', '$tiempoestimado'
, '$disponibilidad', '$categoria', '$ofertas');";

//ejecutamos la consulta de sql 
mysqli_query($mysqli, $sqlinsert);

//agregamos esto para volver a la pagina del form enviado
header ("location:./index.php?insert=success");

}

?>

