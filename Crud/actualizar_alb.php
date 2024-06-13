<?php

    include_once("../Config/Conexion.php");

    $id = $_POST['id_album'];
    $album = $_POST['name_album'];
    $fecha = $_POST['dater'];
    $artista = $_POST['name_artist'];

    $sql = "UPDATE albums SET 

                Title='".$album."',
                ReleaseDate='".$fecha."',
                ArtistId ='".$artista."'
                WHERE AlbumId = '".$id."'";

    if ($resultado = $conexion -> query($sql)){
        header("location:../albums.php");
    }
    
        