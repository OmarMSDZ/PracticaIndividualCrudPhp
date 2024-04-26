<!doctype html>
<html lang="en">

<head>
    <title>Admin Paquetes Turisticos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body {
            background-color: aliceblue;
        }

        form {
            background-color: white;
            padding: 20px;
            margin: 5px;
            border-radius: 14px;
        }
    </style>
</head>

<body>
    <header>

    </header>
    <main class="container d-flex justify-content-center align-items-center mt-5 ">
        <!-- el action es para especificar quien va a procesar la informacion de ese formulario -->
        <form action="insertar.php" method="post">

            <h2>Administrar Paquetes Turísticos</h2>
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre">
            <br>

            <label for="descripcion">Descripcion:</label>
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
            <br>

            <label for="costo">Costo (USD):</label>
            <br>
            <input type="number" name="costo">
            <br>

            <label for="numpersonas">Numero de personas:</label>
            <br>
            <input type="number" name="numpersonas">
            <br>

            <label for="edades">Edades:</label>
            <br>
            <select name="edades" id="">
                <option value="Todas las edades">Todas las edades</option>
                <option value="Mayores de 13 años">Mayores de 13 años</option>
                <option value="Solo Adultos">Solo Adultos</option>
            </select>
            <br>

            
    
            <label for="idiomas">Idiomas:</label>
            <br>
            <select name="idiomas" id="">
                <option value="Español">Español</option>
                <option value="Ingles">Ingles</option>
                <option value="Frances">Frances</option>
                <option value="Todos">Español, Inglés y Frances</option>
            </select>
            <br>

            <label for="alojamiento">Alojamiento:</label>
            <br>
            <select name="alojamiento" id="">
                <option value="Disponible (Hotel)">Disponible (Hotel)</option>
                <option value="Disponible (A especificar)">Disponible (A especificar)</option>
                <option value="">No disponible</option>
            </select>
            <br>


            <label for="tiempoestimado">Tiempo estimado (En Horas):</label>
            <br>
            <input type="number" name="tiempoestimado">
            <br>

            <label for="disponibilidad">Edades:</label>
            <br>
            <select name="disponibilidad" id="">
                <option value="Disponible">Disponible</option>
                <option value="No disponible">No disponible</option>
            </select>
            <br>

            <label for="categoria">Categoría:</label>
            <br>
            <select name="categoria" class="form-select">
                <!-- Para mostrar las categorias y registrar su id al seleccionar -->
                <?php 
                include_once "conectar.php";

                $query="Select * from categorias_paquetes";
                $data = mysqli_query($mysqli, $query);
                $total = mysqli_num_rows($data);

                if ($total != 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<option value=".$row['IdCategoriaPaq'].">".$row['CategoriaPaq']."</option>";
                    }
                }
                ?>
            </select>
            
            <label for="ofertas">Ofertas aplicadas:</label>
            <br>
            <select name="ofertas" class="form-select">
                <!-- Para mostrar las categorias y registrar su id al seleccionar -->

              

                <?php 
                include_once "conectar.php";

                $query="Select * from ofertas";
                $data = mysqli_query($mysqli, $query);
                $total = mysqli_num_rows($data);

                if ($total != 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<option value=".$row['IdOferta'].">".$row['Descripcion']."</option>";
                    }
                }
                ?>
            </select>
            

            <br>
            <!--La fecha va en automatico al guardar el form -->


            <center><input type="submit" value="Guardar" class="btn btn-success ps-5 pe-5 "></center>
        </form>

        <br>

        

        <form action="update.php" method="post">
            <h2>Editar Paquetes Por Id</h2>
            <input type="text" name="id" placeholder="ID">
            <button type="sumbit" class="btn btn-success">Editar</button>
        </form>

        

        <br>
        <form action="consulta.php" method="post">
            <h2>Buscar Paquete</h2>
            <label for="nombre">Nombre Paquete:</label>
            <br>
            <input type="text" name="nombrebuscar">
            <br>
            <br>
            <input type="submit" value="Buscar y Visualizar" class="btn btn-success ">

        </form>

    </main>
    <br>
    <br>
    <h2>Visualizar Paquetes Turisticos Registrados</h2>
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

        $query = "SELECT p.IdPaquete, p.Nombre, p.Descripcion, p.Costo, p.Num_personas, 
        p.Edades, p.Idiomas, p.Alojamiento, p.Tiempo_estimado, p.Disponibilidad, c.CategoriaPaq, o.Descripcion as DescripcionOferta FROM paquetes_turisticos
        as p INNER JOIN categorias_paquetes as c on p.IdCategoria=c.IdCategoriaPaq INNER JOIN ofertas as o on 
        p.IdOferta=o.IdOferta";

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

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>