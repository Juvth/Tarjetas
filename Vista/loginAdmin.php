<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/login.css">
    <script src="../Modelo/AjaxA.js"></script>
</head>
<body>
<div class="content-fluid">
    <div class="row justify-content-md-center">
        <div class="box col-lg-auto box">
            <div class="login register">
                <form action="../Admin.html" id="frmAdmin" method= "POST">
                    <div class="login-header row">
                        <div class="col-4 return">
                            <a href="../index.html"><i style="font-size: 30pt; color:black" class="uim uim-arrow-circle-left"></i></a>
                        </div>
                        <div class="col-4">
                            <p>Administrador</p>
                            <center><i style="font-size: 40pt;" class="uim uim-unlock"></i></center>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group login-info">
                        <div class="datos">
                            <label for="user">Usuario</label>
                            <input class="form-control" type="text" name="nombreA" id="nombreA" required>
                        </div>
                        
                        <div class="datos">
                            <label for="">Contraseña</label><br>
                            <input class="form-control" type="password" name="contraseñaA" id="contraseñaA" required>
                            <span class="fa fa-fw fa-eye password-icon show-password"></span>
                        </div>

                        <div class="buttons admin">
                            <input class="btn btn-info" type="submit" value="Registrar" id="btnIngresarA" onclick="registrarA()">
                            <input class="btn btn-success" type="submit" value="Ingresar" nombre="ingresar" id="btningresar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</body>
</html>
