<?php

    include("conexion.php");
    $URL	= $_POST['direccion'];
    $query = "SELECT * FROM `tabla imagen` WHERE `url` LIKE '".$URL."'";

    $Resultado = $conexion->query($query);

    echo $query;


?>