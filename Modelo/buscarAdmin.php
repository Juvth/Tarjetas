<?php
$nombre= $_POST['nombre'];
$contraseña= $_POST['contraseña'];
include("../Config/conexion.php");
$sql="SELECT *FROM administrador WHERE nombre='$nombre'";

$resultado=mysqli_query($conexion, $sql);
    header("location:../Vista/loginAdmin.php");
    echo"usuario no encontrado";
while ($mostrar = mysqli_fetch_array($resultado)) {
    ?>
    <tr>
        <td> <?php $U= $mostrar['nombre'] ?> </td>

        <td> <?php $C= $mostrar['contraseña'] ?> </td>
        <?php if ($U==$nombre && $C==$contraseña) {
    echo"usuario encontrado";
    header("location:../Admin.html");
}?>
</tr>
<?php
}
?>
