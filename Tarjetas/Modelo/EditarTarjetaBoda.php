<?php
    include("../Config/conexion.php");
    $ID_boda = $_GET['id_boda'];
    $DatosBoda = "SELECT *from trj_boda where id_boda = $ID_boda";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../CSS/tablas.css">
</head>

<body>
<div class="container-fluid">
<div class="row header">
        <div class="col-1 image">
            <img src="../IMG/logo.jpeg" alt="logo">
        </div>
        <div class="col-6 title">
            <h3>Administrador</h3>
        </div>
        <div class="col users">
            <div class="col-6 user">
            </div>
            <div class="col-6 user">
                <h3><a href="../Admin.html">Volver</a></h3>
            </div>
        </div>
    </div>

    <div class="title-table col-12">
        <p class>Editar Tarjeta de Boda</p>
    </div>

    <div class="datos bautizo">
        <table class="table col-lg-auto bautizo" border="1">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NOMBRE_NOVIO</td>
                    <th scope="col">NOMBRE_NOVIA</th>
                    <th scope="col">ID_BODA</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">PADRINOS</th>
                    <th scope="col">GUARDAR</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $resultado = mysqli_query($conexion, $DatosBoda);
                while($mostrar = mysqli_fetch_array($resultado)){
                ?>
                <form action="ProcesarEditarTarjetaBoda.php" id="frmRCliente" method= "POST">
                    <td><input type="text" value=<?php echo $mostrar['nombre_Novio'] ?> name = "nombre_Novio"></td>
                    <td><input type="text" value=<?php echo $mostrar['nombre_Novia'] ?> name = "nombre_Novia"></td>
                    <td><input type="text" value=<?php echo $mostrar['id_boda'] ?> name = "id_boda"></td>
                    <td><input type="text" value=<?php echo $mostrar['fecha'] ?> name = "fecha"></td>
                    <td><input type="text" value=<?php echo $mostrar['hora'] ?> name = "hora"></td>
                    <td><input type="text" value=<?php echo $mostrar['padrinos'] ?> name = "padrinos"></td>
                    <td><input type="submit" class="btn btn-success" value="Guardar"></td>
                </form>
                <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
