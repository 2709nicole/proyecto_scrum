<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakebymalvyn</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #F9CB9C;">
    <?php include 'menu.php';?>
    <?php
    include 'conexion.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM pasteles WHERE id=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
    ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <hr>
                <div class="card text-center">
                    <div class="card-header">
                        Ingredientes
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ingredientes a elegir por el usuario, los ingredientes base no se toman en cuenta</h5>
                        <input name="id" type="hidden" value="<?php echo $registro["id"];?>">
                        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Color Betun</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="betun" value="Negro" <?php if ($registro["betun"]=="Negro") echo "checked"; ?>>
                    </div>
                    <input type="betun" class="form-control bg-white" value="Negro" aria-label="betun" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="betun" value="Azul" <?php if ($registro["betun"]=="Azul") echo "checked"; ?>>
                    </div>
                    <input type="betun" class="form-control bg-white" value="Azul" aria-label="betun" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="betun" value="Rojo" <?php if ($registro["betun"]=="Rojo") echo "checked"; ?>>
                    </div>
                    <input type="betun" class="form-control bg-white" value="Rojo" aria-label="betun" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Tipo de Leche</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="leche" value="Entera" <?php if ($registro["leche"]=="Entera") echo "checked"; ?>>
                    </div>
                    <input type="leche" class="form-control bg-white" value="Entera" aria-label="leche" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="leche" value="Deslactosada" <?php if ($registro["leche"]=="Deslactosada") echo "checked"; ?>>
                    </div>
                    <input type="leche" class="form-control bg-white" value="Deslactosada" aria-label="leche" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="leche" value="Ligth" <?php if ($registro["leche"]=="Ligth") echo "checked"; ?>>
                    </div>
                    <input type="leche" class="form-control bg-white" value="Ligth" aria-label="leche" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Tipo de Harina</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="harina" value="Trigo"<?php if ($registro["harina"]=="Trigo") echo "checked"; ?>>
                    </div>
                    <input type="harina" class="form-control bg-white" value="Trigo" aria-label="harina" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="harina" value="Maiz"<?php if ($registro["harina"]=="Maiz") echo "checked"; ?>>
                    </div>
                    <input type="harina" class="form-control bg-white" value="Maiz" aria-label="harina" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="input-group-text" id="basic-addon2">Sabor del Pan</span>
                    </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="pan" value="Vainilla"<?php if ($registro["pan"]=="Vainilla") echo "checked"; ?>>
                    </div>
                    <input type="pan" class="form-control bg-white" value="Vainilla" aria-label="pan" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="pan" value="Chocolate"<?php if ($registro["pan"]=="Chocolate") echo "checked"; ?>>
                    </div>
                    <input type="pan" class="form-control bg-white" value="Chocolate" aria-label="pan" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="pan" value="Fresa"<?php if ($registro["pan"]=="Fresa") echo "checked"; ?>>
                    </div>
                    <input type="pan" class="form-control bg-white" value="Fresa" aria-label="pan" aria-describedby="basic-addon2" readonly>
                    </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="inicio.php" class="btn btn-danger">Cancelar</a>
                        <a class="btn btn-primary" href="consultar.php">Actualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>