<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            <h2>Lista de Artistas</h2>
        </div>

        <a href="agregar_art.php" class="btn btn-dark mb-3">Agregar</a>


        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    require ("Config/Conexion.php");

                    $sql = $conexion -> query("SELECT * FROM artists");

                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $resultado['ArtistId']?></th>
                                <th scope="row"><?php echo $resultado['Name']?></th>
                                <th scope="row"><?php echo $resultado['Genre']?></th>
                                <td>
                                    <a href="editar_art.php?Id=<?php echo $resultado ['ArtistId']?>" class="link-dark"><i class="bi bi-pencil-square fs-5 me-4"></i></a>
                                    <a href="Crud/eliminar_art.php?Id=<?php echo $resultado['ArtistId']?>" class="link-dark"><i class="bi bi-trash-fill fs-5"></i></a>
                                </td>
                            </tr>
                        <?php
                    }               
                ?>
            
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>