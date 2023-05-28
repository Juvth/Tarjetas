<?php
include("../Config/conexion.php");
$sql="SELECT * from cliente";
$resultado = mysqli_query($conexion, $sql);
while($mostrar = mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td> <?php echo $mostrar['usuario'] ?> </td>
        <td> <?php echo $mostrar['cedula'] ?> </td>
        <td> <?php echo $mostrar['telefono'] ?> </td>
        <td> <?php echo $mostrar['direccion'] ?> </td>
        <td> <?php echo $mostrar['contraseña'] ?> </td>
        <td> <a href="../Modelo/EliminarCliente.php ?cedula=<?php echo $mostrar['cedula'] ?>"><i class="uil uil-trash-alt"></i> </a> </td>
        <td> <a href="../Modelo/EditarCliente.php ?cedula=<?php echo $mostrar['cedula'] ?>"><i class="uil uil-pen"></i> </a> </td>
</tr>
<?php
}
?>