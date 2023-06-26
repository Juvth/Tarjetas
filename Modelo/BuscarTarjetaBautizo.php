
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
<script src="../Modelo/AjaxTB.js"></script>
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
        <p class>Datos de Cliente</p>
    </div>

    <div class="datos">
        <form action="../index.html" id="frmRTarjetaBautizo" method= "POST">           
            <table class="table col-lg-auto" border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID_BAUTIZO</th>
                        <th scope="col">IGLESIA</th>
                        <th scope="col">RECEPCION</th>
                        <th scope="col">EDAD</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PADRINOS</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">HORA</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $cedula = $_POST['cedula'];
                        include("../Config/conexion.php");

                        
                        if (preg_match('/^[0-9]{10}$/', $cedula)) {
                            $sql = "SELECT * FROM trjbautizo WHERE cedula_cliente='$cedula'";
                            $resultado = mysqli_query($conexion, $sql);

                            if(mysqli_num_rows($resultado) > 0) {
                                while($mostrar = mysqli_fetch_array($resultado)){

                    ?>
                        <tr>
                            <td> <?php echo $mostrar['id_bautizo'] ?> </td>
                            <td> <?php echo $mostrar['iglesia'] ?> </td>
                            <td> <?php echo $mostrar['recepcion'] ?> </td>
                            <td> <?php echo $mostrar['edad'] ?> </td>
                            <td> <?php echo $mostrar['nombre'] ?> </td>
                            <td> <?php echo $mostrar['padrinos'] ?> </td>
                            <td> <?php echo $mostrar['fecha'] ?> </td>
                            <td> <?php echo $mostrar['hora'] ?> </td>
                        </tr>
                        <?php
                                }
                            } else {
                        ?>
                            <p>El cliente no esta registrado en el sistema.</p>
                        <?php
                            }
                        } else {
                        ?>
                            <p>El número de cédula ingresado no es válido.</p>
                        <?php
                        }   
                        ?>
                </tbody>
            </table>      
        </form>
    </div>
</div>
</body>
</html> 

        