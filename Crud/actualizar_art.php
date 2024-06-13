<?php

    include_once("../Config/Conexion.php");

    $id = $_POST['id_artist'];
    $nombre = $_POST['name_artist'];
    $genero = $_POST['gener'];

    $sql = "UPDATE artists SET 

                Name='".$nombre."',
                Genre='".$genero."'
                WHERE ArtistId = '".$id."'";

    if ($resultado = $conexion -> query($sql)){
        header("location:../artistas.php");
    }