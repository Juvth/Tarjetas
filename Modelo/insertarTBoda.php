<?php
include("../Config/conexion.php");
echo"error";

$nombre_Novio =$_POST['nombre_Novio'];
$nombre_Novia =$_POST['nombre_Novia'];
$id_boda =$_POST['id_boda'];
$fechaBoda =$_POST['fechaBoda'];
$horaBoda =$_POST['horaBoda'];
$padrinosBoda =$_POST['padrinosBoda'];
$cedula = $_POST['cedula'];


$sql="INSERT into trj_boda(nombre_Novio,nombre_Novia,id_boda,fecha,hora,padrinos,cedula_cliente)
values ('$nombre_Novio','$nombre_Novia','$id_boda','$fechaBoda','$horaBoda','$padrinosBoda','$cedula')";
$sqr=mysqli_query($conexion, $sql);

if ($sqr) {
header("location: ../TipoDeTarjeta.html");
} else {
    echo"ERROR AL INGRESAR";
}
?>;