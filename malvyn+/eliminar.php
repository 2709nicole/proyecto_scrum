<?php
    include 'conexion.php';
    $id = $_GET["id"];
    $sql = "DELETE from pasteles where id = ".$id;
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado con éxito<br><a href='consultar.php'>Regresar</a>";
    } else {
        echo "Error: " . $sql. "<br>" . $conexion->error."<br><br><a href='consultar.php>Regresar</a>'";
    }
?>