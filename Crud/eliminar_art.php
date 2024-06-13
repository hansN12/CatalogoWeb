<?php

    include("../Config/Conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM artists WHERE ArtistId = '$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE){
        header("location:../artistas.php");
    }