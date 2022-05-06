<?php
if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/gif")) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "../image/".$_FILES['file']['name'])) {
            //more code here...
            
            include "conexion.php";
            $urlImagen = "image/".$_FILES['file']['name'];
            $nombreImage= $_FILES['file']['name'];
            $query = "INSERT INTO `tabla imagen` ( nombre, `url`) VALUES ('$nombreImage', '$urlImagen')";
            
            $Resultado = $conexion -> query($query);
           

            echo "image/".$_FILES['file']['name'];

        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}