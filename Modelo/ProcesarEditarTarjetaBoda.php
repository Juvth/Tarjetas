<?php 
    //echo "estoy guardando";
    include("../Config/conexion.php");
    $ID_Boda = $_POST['id_boda'];
    $Nombre_Novio = $_POST['nombre_Novio'];
    $Nombre_Novia = $_POST['nombre_Novia'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    $Padrinos = $_POST['padrinos'];
    

    $actualizar = "UPDATE trj_boda SET nombre_Novio='$Nombre_Novio',nombre_Novia='$Nombre_Novia',fecha='$Fecha',hora='$Hora',padrinos='$Padrinos' WHERE id_boda='$ID_Boda' ";
    $sqr = mysqli_query($conexion,$actualizar);
    if($sqr)
        header("location:../Admin.html");
    else
        echo "error al editar";

?>