<?php 

// string de conexion
$mysqli = new mysqli("localhost", "root", "", "bd_practicaindividualphp");

// Para manejar los errores de conexión 
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL";
    echo mysqli_connect_errno() . mysqli_connect_error();
} 
// else {
//     echo "<h1>"."Conexion exitosa"."</h1>";
// }

?>