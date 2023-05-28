<?php
include("../Config/conexion.php");
echo"error";

$idBautizo =$_POST['id_bautizo'];
$iglesia =$_POST['iglesia']; 
$recepcion =$_POST['recepcion']; 
$edad =$_POST['edad']; 
$nombreTB =$_POST['nombreTB']; 
$padrinos =$_POST['padrinos']; 
$fechaTB =$_POST['fechaTB']; 
$horaTB =$_POST['horaTB'];
$cedula = $_POST['cedula'];

$sql="INSERT into trjbautizo(id_bautizo,iglesia,recepcion,edad,nombre,padrinos,fecha,hora,cedula_cliente) values ('$idBautizo','$iglesia','$recepcion','$edad','$nombreTB','$padrinos','$fechaTB','$horaTB','$cedula')";
$sqr=mysqli_query($conexion,$sql);

if($sqr){
header('location: ../TipoDeTarjeta.html');
}
else{
    echo"ERROR AL INGRESAR";
}
?>