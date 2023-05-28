<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/tarjetas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="../Modelo/AjaxTCu.js"></script>
</head>
<body style="background-image:none;">
<div class="container-fluid">
    <div class="row header">
        <div class="col-1 image">
            <img src="../IMG/logo.jpeg" alt="logo">
        </div>
        <div class="col-6 title">
            <h3>Tarjeta de Cumpleaños</h3>
        </div>
        <div class="col users">
            <div class="col-6 user">
            </div>
            <div class="col-6 user">
                <h3><a href="../TipoDeTarjeta.html">Volver</a></h3>
            </div>
        </div>
    </div>

    <div class="box col-lg-auto box">
        <div class="register">
            <form  action="../Modelo/insertarTCu.php" id="frmTarjetaCumple" method= "POST">
                <div class="login-header row">
                    <div class="col-12">
                        <p>Ingrese los datos</p>
                    </div>
                </div>
                <div class="form-group login-info">
                    <div class="datos">
                        <label for="">Nombre del/la Cumplañer@:</label>
                        <input class="form-control" type="text" name="nombre_cumple" id="nombre_cumple" required>
                    </div>

                    <div class="datos">
                        <label for="">ID Cumplañer@:</label>
                        <input class="form-control" type="text" name="id_cumple" id="id_cumple" required>
                    </div>

                    <div class="datos">
                        <label for="">Dirección:</label>
                        <input class="form-control" type="text" name="direccionTCu" id="direccionTCu" required>
                    </div>
                    
                    <div class="datos">
                        <label for="">Edad:</label>
                        <input class="form-control" type="number" name="edadTCu" id="edadTCu" min="0" max="200" required>
                    </div>

                    <div class="datos">
                        <label for="">Fecha:</label>
                        <input class="form-control" type="date" name="fechaTCu" id="fechaTCu" required>
                    </div>

                    <div class="datos">
                        <label for="">Hora:</label>
                        <input class="form-control" type="time" name="horaTCu" id="horaTCu" required>
                    </div>

                    <div class="datos">
                        <label for=""> Cédula del cliente:</label>
                        <input class="form-control" type="text" name="cedula" id="cedula" min-value="10" max-value="10" required>
                    </div>                 
                </div>

                <div class=" col-12 buttons">
                    <input class="btn btn-success" type="submit" value="CONFIRMAR" id="btnIngresarTCu">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../jquery-3.2.1.min.js"></script>
</body>
</html>