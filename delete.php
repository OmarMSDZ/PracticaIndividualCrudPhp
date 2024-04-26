<?php 

include_once("conectar.php");
// Codigo para el delete

$id = $_GET['rn'];
$query = "DELETE FROM paquetes_turisticos WHERE IdPaquete='$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./index.php?insert=success");

?>