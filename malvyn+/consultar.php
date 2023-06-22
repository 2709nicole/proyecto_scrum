<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakesbymalvyn</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #F9CB9C;">
    <?php include 'menu.php';?>
    <?php
      include 'conexion.php';
      $sql = "select * from pasteles";
      $datos = $conexion->query($sql);

    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Betún</th>
                            <th>Tipo de leche</th>
                            <th>Tipo de harina</th>
                            <th>Sabor Pan</th>
                            <th>Opciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($datos->num_rows > 0) { 
                            while($row = $datos->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["betun"]; ?></td>
                            <td><?php echo $row["leche"]; ?></td>
                            <td><?php echo $row["harina"]; ?></td>
                            <td><?php echo $row["pan"]; ?></td>
                            <td>
                                <a href="actualizarpastel.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>