<!doctype html>
<html lang="en">

<head>
    <title>Actualizar paquetes</title>
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
<main class="container d-flex justify-content-center align-items-center mt-5 ">
    
<form action="actualiza.php" method="post">
    <?php 
    
    include_once 'conectar.php';

    $id = $_POST['id'];
    $sql = "SELECT * FROM paquetes_turisticos WHERE IdPaquete = '$id'";

    $result = mysqli_query($mysqli, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['Nombre'];
        $descripcion = $row['Descripcion'];
        $costo = $row['Costo'];
        $numeropersonas = $row['Num_personas'];
        $edades = $row['Edades'];
        $idiomas = $row['Idiomas'];
        $alojamiento = $row['Alojamiento'];
        $tiempoestimado = $row['Tiempo_estimado'];
        $disponibilidad = $row['Disponibilidad'];
        $categoria = $row['IdCategoria'];
        $ofertas = $row['IdOferta'];
        
    }


    ?>
        <h2>Actualizar Paquetes</h2>
      

            <label for="id">Id:</label>
            <br>
            <input type="text" name="id" value="<?php echo $id?>" readonly>
            <br>

            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre" value="<?php echo $nombre?>">
            <br>

            <label for="descripcion">Descripcion:</label>
            <br>
            <input type="text" name="descripcion" value="<?php echo $descripcion?>">
            <br>

            <label for="costo">Costo (USD):</label>
            <br>
            <input type="number" name="costo" value="<?php echo $costo?>">
            <br>

            <label for="numpersonas">Numero de personas:</label>
            <br>
            <input type="number" name="numpersonas" value="<?php echo $numeropersonas?>">
            <br>

            <label for="edades">Edades:</label>
            <br>
            <select name="edades" id="" value="<?php echo $edades?>">
                <option value="Todas las edades">Todas las edades</option>
                <option value="Mayores de 13 años">Mayores de 13 años</option>
                <option value="Solo Adultos">Solo Adultos</option>
            </select>
            <br>

            
    
            <label for="idiomas">Idiomas:</label>
            <br>
            <select name="idiomas" id="" value="<?php echo $idiomas?>">
                <option value="Español">Español</option>
                <option value="Ingles">Ingles</option>
                <option value="Frances">Frances</option>
                <option value="Todos">Español, Inglés y Frances</option>
            </select>
            <br>

            <label for="alojamiento">Alojamiento:</label>
            <br>
            <select name="alojamiento" id="" value="<?php echo $alojamiento?>">
                <option value="Disponible (Hotel)">Disponible (Hotel)</option>
                <option value="Disponible (A especificar)">Disponible (A especificar)</option>
                <option value="">No disponible</option>
            </select>
            <br>


            <label for="tiempoestimado">Tiempo estimado (En Horas):</label>
            <br>
            <input type="number" name="tiempoestimado" value="<?php echo $tiempoestimado?>">
            <br>

            <label for="disponibilidad">Disponibilidad:</label>
            <br>
            <select name="disponibilidad" id="" value="<?php echo $disponibilidad?>">
                <option value="Disponible">Disponible</option>
                <option value="No disponible">No Disponible</option>
            </select>
            <br>

            <label for="categoria">Categoría:</label>
            <br>
            <select name="categoria" class="form-select" value="<?php echo $categoria?>">
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
            <select name="ofertas" class="form-select" value="<?php echo $ofertas?>">
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
            <center><input type="submit" value="update" name="update" class="btn btn-success ps-5 pe-5 "></center>

</form>
</main>

<footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
