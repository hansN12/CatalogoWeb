<?php

    include ("../Config/Conexion.php");

    $nombre = $_POST['name_album'];
    $fecha = $_POST['dater'];
    $artista  = $_POST['name_artist'];

    $sql = "INSERT INTO albums(title,ReleaseDate,ArtistId) VALUES('$nombre','$fecha','$artista')";

    $resultado = mysqli_query($conexion,$sql);

    if ($resultado === TRUE){
        header("location:../albums.php");
    }else {
        echo "Error al insertar";
    }