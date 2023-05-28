<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../CSS/tablas.css">
    <script src="../Modelo/Ajax.js"></script>
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
        <p class>Datos de Clientes</p>
    </div>

    <div class="datos">
        <form action="../index.html" id="frmRCliente" method= "POST">    
            <table class="table col-lg-auto" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">USUARIO</th>
                        <th scope="col">CÉDULA</th>
                        <th scope="col">TELÉFONO</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th scope="col">ELIMINAR</th>
                        <th scope="col">EDITAR</th>
                    </tr>
                    <?php include("../Modelo/MostrarC.php");?>
                    
                </thead>
            </table>
        </form>

    </div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</body>
</html>