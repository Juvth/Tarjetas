<?php 
    //echo "estoy guardando";
    include("../Config/conexion.php");
    $ID_Bautizo = $_POST['id_bautizo'];
    $Iglesia = $_POST['iglesia'];
    $Recepcion = $_POST['recepcion'];
    $Edad = $_POST['edad'];
    $Nombre = $_POST['nombre'];
    $Padrinos = $_POST['padrinos'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];

    $actualizar = "UPDATE trjbautizo SET iglesia='$Iglesia',recepcion='$Recepcion',edad='$Edad',nombre='$Nombre',padrinos='$Padrinos',fecha='$Fecha',hora='$Hora' WHERE id_bautizo='$ID_Bautizo' ";
    $sqr = mysqli_query($conexion,$actualizar);
    if($sqr)
        header("location:../Admin.html");
    else
        echo "error al editar";

?>