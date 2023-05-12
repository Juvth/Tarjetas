<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/login.css">
    <script src="../Modelo/Ajax.js"></script>
</head>
<body>

<div class="content-fluid">
    <div class="row justify-content-md-center">
        <div class="box col-lg-auto box">
            <div class="login register">
                <form action="../Modelo/buscarCliente.php" id="frmCliente" method= "POST">
                    <div class="login-header row">
                        <div class="col-4 return">
                            <a href="../index.html"><i style="font-size: 30pt; color:black" 
                            class="uim uim-arrow-circle-left"></i></a>
                        </div>
                        <div class="col-4">
                            <p>CLIENTE</p>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group login-info">
                        <div class="datos">
                            <label for="user">Usuario</label>
                            <input class="form-control" type="text" name="usuario" id="usuario" required>
                        </div>
                        
                        <div class="datos">
                            <label for="">Contraseña</label><br>
                            <input class="form-control" type="password" name="contraseña" id="contraseña" required>
                        </div>

                        <div class="buttons">
                            <a class="btn btn-info" href="../Vista/registrarCliente.php" name="registrar" value="Registrar" id="btnregistrarC">Registrar</a>
                            <input class="btn btn-success" type="submit" name="ingresar" value="Ingresar" id="btningresarC">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
</body>
</html>

