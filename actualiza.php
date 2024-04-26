<?php

include_once 'conectar.php';
 

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE `paquetes_turisticos` 
    SET Nombre='{$_POST['nombre']}', 
    Descripcion='{$_POST['descripcion']}', 
    Costo='{$_POST['costo']}',
    Num_personas='{$_POST['numpersonas']}',
    Edades='{$_POST['edades']}',
    Idiomas='{$_POST['idiomas']}',
    Alojamiento='{$_POST['alojamiento']}',
    Tiempo_estimado='{$_POST['tiempoestimado']}',  
    Disponibilidad='{$_POST['disponibilidad']}',
    IdCategoria='{$_POST['categoria']}', 
    IdOferta='{$_POST['ofertas']}'
    WHERE IdPaquete = $id;";  

//echo $query;

    mysqli_query($mysqli, $query);
   
}


header("location: ./index.php?insert=success");

?>