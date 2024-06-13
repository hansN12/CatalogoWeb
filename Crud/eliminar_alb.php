<?php

    include("../Config/Conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM albums WHERE AlbumId = '$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE){
        header("location:../albums.php");
    }