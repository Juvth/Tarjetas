<?php 
    //echo "estoy guardando";
    include("../Config/conexion.php");
    $Nombre_cumple = $_POST['nombre_cumple'];
    $ID_cumple = $_POST['id_cumple'];
    $Direccion = $_POST['direccion'];
    $Edad = $_POST['edad'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    

    $actualizar = "UPDATE trj_cumple SET nombre_cumple='$Nombre_cumple',direccion='$Direccion',edad='$Edad',fecha='$Fecha',hora='$Hora' WHERE id_cumple='$ID_cumple' ";
    $sqr = mysqli_query($conexion,$actualizar);
    if($sqr)
        header("location:../Admin.html");
    else
        echo "error al editar";

?>