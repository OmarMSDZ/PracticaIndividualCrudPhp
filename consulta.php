<!doctype html>
<html lang="en">
    <head>
        <title>consulta</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <h2>Datos Consultados</h2>
                <hr>
                <table class="table table-bordered">
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Costo</th>
                    <th>N° Personas</th>
                    <th>Edades</th>
                    <th>Idiomas</th>
                    <th>Alojamiento</th>
                    <th>Tiempo estimado</th>
                    <th>Disponibilidad</th>
                    <th>Categoria</th>
                    <th>Ofertas</th>
                    <th>Acciones</th>
                    </tr>

                    <?php 
 
include_once "conectar.php";

$nombre = $_POST['nombrebuscar'];

$query = "SELECT p.IdPaquete, p.Nombre, p.Descripcion, p.Costo, p.Num_personas, 
p.Edades, p.Idiomas, p.Alojamiento, p.Tiempo_estimado, p.Disponibilidad, c.CategoriaPaq, o.Descripcion as DescripcionOferta FROM paquetes_turisticos
as p INNER JOIN categorias_paquetes as c on p.IdCategoria=c.IdCategoriaPaq INNER JOIN ofertas as o on 
p.IdOferta=o.IdOferta WHERE p.Nombre like '%$nombre%'"; 
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {

    while ($row = mysqli_fetch_assoc($data)) {
        echo "<tr><td>".$row['IdPaquete']
            ."</td><td>".$row['Nombre'] .
            "</td><td>".$row['Descripcion'].
            "</td><td>".$row['Costo'] .
            "</td><td>".$row['Num_personas']."</td><td>"
            .$row['Edades']."</td><td>".$row['Idiomas'].
            "</td><td>".$row['Alojamiento']."</td><td>"
            .$row['Tiempo_estimado']."</td><td>"
            .$row['Disponibilidad']."</td><td>"
            .$row['CategoriaPaq']."</td><td>"
            .$row['DescripcionOferta']."</td><td>"
            . "<a href='delete.php?rn=$row[IdPaquete]'>Eliminar</td></tr>";
    }

}



?>

                </table>
                </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


