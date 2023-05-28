<?php 
    //echo "estoy guardando";
    include("../Config/conexion.php");
    $ID_grado = $_POST['id_grado'];
    $Direccion = $_POST['direccion'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    $Descripcion = $_POST['descripcion'];
    $NOMBRE_grado = $_POST['Nombre_grado'];
    
    $actualizar = "UPDATE trj_grado SET direccion='$Direccion',fecha='$Fecha',hora='$Hora',descripcion='$Descripcion',Nombre_grado='$NOMBRE_grado' WHERE id_grado='$ID_grado' ";
    $sqr = mysqli_query($conexion,$actualizar);
    if($sqr)
        header("location:../Admin.html");
    else
        echo "error al editar";

?>