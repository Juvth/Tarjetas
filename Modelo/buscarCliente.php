<?php
$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];
include("../Config/conexion.php");
$sql="SELECT *FROM cliente WHERE usuario='$usuario'";

$resultado=mysqli_query($conexion,$sql); 
    header("location:../Vista/loginCliente.php");
    echo"usuario no encontrado";
while($mostrar = mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td> <?php $U= $mostrar['usuario'] ?> </td>
        <td> <?php $C= $mostrar['contraseña'] ?> </td>
        <?php if($U==$usuario && $C==$contraseña){
    echo"usuario encontrado";
    header("location:../Cliente.html");
}?>
</tr>
<?php
}
?>
