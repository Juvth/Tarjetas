<?php 
    //echo "estoy guardando";
    include("../Config/conexion.php");
    $Usuario = $_POST['usuario'];
    $Cedula = $_POST['cedula'];
    $Telefono = $_POST['telefono'];
    $Direccion = $_POST['direccion'];
    $Contraseña = $_POST['contraseña'];

    $actualizar = "UPDATE cliente SET direccion='$Direccion',usuario='$Usuario',telefono='$Telefono',contraseña='$Contraseña' WHERE cedula='$Cedula'";
    $sqr = mysqli_query($conexion,$actualizar);
    if($sqr)
        header("location:../Admin.html");
    else
        echo "error al editar";

?>