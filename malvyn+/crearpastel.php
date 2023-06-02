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
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Tipo de leche:</span>
                            </div>
                            <select id="inputLeche" class="form-control">
                            <option selected>Opciones</option>
                            <option>Entera</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Tipo de harina:</span>
                            </div>
                            <select id="inputHarina" class="form-control">
                            <option selected>Opciones</option>
                            <option>Trigo</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Color del betún:</span>
                            </div>
                            <select id="inputBetun" class="form-control">
                            <option selected>Opciones</option>
                            <option>Azul</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sabor de pan:</span>
                            </div>
                            <select id="inputPan" class="form-control">
                            <option selected>Opciones</option>
                            <option>Vainilla</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="inicio.php" class="btn btn-danger">Cancelar</a>
                        <a class="btn btn-primary" href="inicio.php">Crear Pastel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
