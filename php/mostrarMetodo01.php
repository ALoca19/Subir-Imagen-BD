<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>

<table border="2">

<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Imagenes</th>
    </tr>
</thead>

<tbody>
    

<?php
    include("conexion.php");

    $query = "SELECT * from `tabla imagen`";

    $Resultado = $conexion->query($query);

    while($row = $Resultado->fetch_assoc())
    {
    ?>

    <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['nombre']; ?> </td>
        <td> <img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"> </td>
    </tr>

    <?php
    }
    ?>

    
</tbody>

</table>

</center>
    
</body>
</html>