<?php
    include 'conexion.php';

    $id = $_POST["id"];
    $betun = $_POST["betun"];
    $leche = $_POST["leche"];
    $harina = $_POST["harina"];
    $pan = $_POST["pan"];
    
    $sql = "UPDATE pasteles SET betun='".$betun."', leche='".$leche."', harina='".$harina."',
    pan='".$pan."', "."WHERE id=".$id;

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<a href='consultar.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultar.php'>Regresar</a>";
    }
?>