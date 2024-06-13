<?php

    include ("../Config/Conexion.php");

    $nombre = $_POST['name_artist'];
    $genero = $_POST['gener'];

    $sql = "INSERT INTO artists(Name,Genre) VALUES('$nombre','$genero')";

    $resultado = mysqli_query($conexion,$sql);

    if ($resultado === TRUE){
        header("location:../artistas.php");
    }else {
        echo "Error al insertar";
    }