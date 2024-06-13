<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "musiccatalog";

    $conexion = mysqli_connect($host,$user,$pass,$db);

    if (!$conexion){
        echo 'Error de conexion';
    }