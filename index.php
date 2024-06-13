<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="albums.php">Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artistas.php">Artistas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="banner">
            <div class="overlay">

                <div class="container pt-5">
                    <br>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card invisible-card">
                                <div class="card-body text-center">
                                    <a href="albums.php">
                                        <img src="img/discos.jpg" class="imag">
                                    </a>
                                    <br>
                                    <br>
                                    <div class="">
                                        <h2>Albums</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card invisible-card">
                                <div class="card-body text-center">
                                    <a href="artistas.php">
                                        <img src="img/micro.jpg" class="imag">
                                    </a>
                                    <br>
                                    <br>
                                    <div class="">
                                        <h2>Artistas</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>

</html>