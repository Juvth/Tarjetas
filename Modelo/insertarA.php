<?php
include("../Config/conexion.php");
echo"error";
$nombreA =$_POST['nombreA'];
$contraseñaA =$_POST['contraseñaA'];

$sql="INSERT into administrador(nombre,contraseña) values ('$nombreA','$contraseñaA')";
$sqr=mysqli_query($conexion, $sql);

if ($sqr) {
header("location: ../Admin.html");
} else {
    echo"ERROR AL INGRESAR";
}
?>;