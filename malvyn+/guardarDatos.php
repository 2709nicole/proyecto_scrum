<?php

    include 'conexion.php';


    $leche = $_POST['leche'];
    $pan = $_POST['pan'];
    $harina = $_POST['harina'];
    $betun = $_POST['betun'];

    $sql = "INSERT INTO pasteles (leche, pan, harina, betun)". 
            "VALUE('".$leche."', '".$pan."', '".$harina."' , '".$betun."')";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<br><a href='consultar.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" . $conexion->error."<br><br><a href='consultar.php>Regresar</a>'";
    }

    $conexion->close();

?>