<?php
include("../Config/conexion.php");
echo"error";

$nombre_cumple =$_POST['nombre_cumple'];
$id_cumple =$_POST['id_cumple'];
$direccionTCu =$_POST['direccionTCu'];
$edadTCu =$_POST['edadTCu'];
$fechaTCu =$_POST['fechaTCu'];
$horaTCu =$_POST['horaTCu'];
$cedula = $_POST['cedula'];


$sql="INSERT into trj_cumple(nombre_cumple,id_cumple,direccion,edad,fecha,hora,cedula_cliente)
    values ('$nombre_cumple','$id_cumple','$direccionTCu','$edadTCu','$fechaTCu','$horaTCu','$cedula')";
$sqr=mysqli_query($conexion,$sql);

if($sqr){
header("location: ../TipoDeTarjeta.html");
}
else{
    echo"ERROR AL INGRESAR";
}
?>