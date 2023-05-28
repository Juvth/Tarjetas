<?php
include("../Config/conexion.php");
echo"error";
$direccion =$_POST['direccion'];
$usuario =$_POST['usuario'];
$telefono =$_POST['telefono']; 
$cedula =$_POST['cedula']; 
$contraseña =$_POST['contraseña']; 

$sql="INSERT into cliente(direccion,usuario,telefono,cedula,contraseña) values ('$direccion','$usuario','$telefono','$cedula','$contraseña')";
$sqr=mysqli_query($conexion,$sql);


if($sqr){
header("location: ../index.html");
}
else{
    echo"ERROR AL INGRESAR";
}
?>