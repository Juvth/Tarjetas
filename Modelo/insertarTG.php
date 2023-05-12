<?php
include("../Config/conexion.php");
echo"error";

$id_grado =$_POST['id_grado'];
$direccionTG =$_POST['direccionTG'];
$fechaTG =$_POST['fechaTG'];
$HoraTG =$_POST['HoraTG'];
$descripcionTG =$_POST['descripcionTG'];
$Nombre_grado =$_POST['Nombre_grado'];
$cedula = $_POST['cedula'];


$sql="INSERT into trj_grado(id_grado,direccion,fecha,hora,descripcion,Nombre_grado,cedula_cliente)
values ('$id_grado','$direccionTG','$fechaTG','$HoraTG','$descripcionTG','$Nombre_grado','$cedula')";
$sqr=mysqli_query($conexion,$sql);

if($sqr){
header("location: ../TipoDeTarjeta.html");
}
else{
    echo"ERROR AL INGRESAR";
}
?>