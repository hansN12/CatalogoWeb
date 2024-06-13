<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/disco.png">
</head>

<body>

    <nav class="navbar navbar-expand-lg  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/disco.png" width="35px"></a>


            <div class="justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="albums.php">Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="artistas.php">Artistas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 9%;">
        <div class="text-center mb-4">
            <h3>Editar Informacion de Artista</h3>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="Crud/actualizar_art.php" method="post" style="width:50vw; min-width:300px;">

                <?php
                    include_once('Config/Conexion.php');

                    $sql = "SELECT * FROM artists WHERE ArtistId =".$_REQUEST['Id'];
                    $resultado = $conexion ->query($sql);

                    $row = $resultado -> fetch_assoc();
                ?>

                <input type="hidden" class="form-control" name="id_artist" value ="<?php echo $row['ArtistId']?>">

                <div class="row">
                    <div class="col">
                        <label class="form-label">Nombre Artista: </label>
                        <input type="text" class="form-control" name="name_artist" value ="<?php echo $row['Name']?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Genero: </label>
                        <input type="text" class="form-control" name="gener" value ="<?php echo $row['Genre']?>">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                    <a href="artistas.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>