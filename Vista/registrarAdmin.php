<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <link rel="stylesheet" href="../Publica/css/banner.css">
    <link rel="stylesheet" href="../Publica/css/keyframes.css">
    <link rel="stylesheet" href="../Publica/css/style.css">
    <link rel="stylesheet" href="../Publica/ext/bootstrap/css/bootstrap.min.css">
    <script src ="../publica/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../Modelo/AjaxA.js"></script>
</head>
<body>

<section>
<form action="../Admin.html" id="frmAdmin" method= "POST">
        <div class="ewk_cont_banner">
            <div class="ewk_sobra">
                
                <p>Registrar Administrador</p>
                
                <br>

                   <label for="">&nbsp&nbsp&nbsp&nbsp&nbspNombre:</label>
                   <input type="text" name="nombreA" id="nombreA">
                   <br>
               
                   <label for="">Contraseña:</label>
                   <input type="text" name="contraseñaA" id="contraseñaA">
                   <br>
                   
                    <input type="button" value="Ingresar" id="btnIngresarA" onclick="registrarA()">
                    <input type="submit" value="Inicio" id="btnInicio" >
                    
                   
            </div>
        </div>
</form>
    </section>
    <script src="ext/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>