<?php

    include 'conexion.php';

    $betun = $_POST['betun'];
    $leche = $_POST['leche'];
    $pan = $_POST['pan'];
    $harina = $_POST['harina'];

    $sql = "INSERT INTO pasteles (betun, leche, pan, harina)". 
            "VALUE('".$betun."', '".$leche."', '".$pan."' , '".$harina."')";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<br><a href='consultar.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" . $conexion->error."<br><br><a href='consultar.php>Regresar</a>'";
    }

    $conexion->close();

?>