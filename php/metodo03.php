<?php
if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/gif")) {

            include("conexion.php");
            $Imagen = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $query = "INSERT INTO `tabla imagen` (`nombre`, `imagen`) VALUES ('Prueba', '$Imagen')";
            $Resultado = $conexion -> query($query);
            // echo "image/".$_FILES['file']['name'];  image

            if($Resultado)
            {
                echo "Registro Subido";
            }
            else{
                echo "No entro a query";
            }

    } else {
        echo 0;
    }
} else {
    echo 0;
}