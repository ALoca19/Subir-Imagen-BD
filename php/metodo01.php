<?php

include("conexion.php");

$nombreImagen = $_POST['nombre'];
$Imagen = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "INSERT INTO `tabla imagen` (`nombre`, `imagen`) VALUES ('$nombreImagen', '$Imagen')";

?>