<?php
    include("../Config/conexion.php");
    $sql="SELECT * from trjbautizo";
    $resultado = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td> <?php echo $mostrar['id_bautizo'] ?> </td>
            <td> <?php echo $mostrar['iglesia'] ?> </td>
            <td> <?php echo $mostrar['recepcion'] ?> </td>
            <td> <?php echo $mostrar['edad'] ?> </td>
            <td> <?php echo $mostrar['nombre'] ?> </td>
            <td> <?php echo $mostrar['padrinos'] ?> </td>
            <td> <?php echo $mostrar['fecha'] ?> </td>
            <td> <?php echo $mostrar['hora'] ?> </td>
            <td> <a href="../Modelo/EliminarTarjetaBautizo.php ?id_bautizo=<?php echo $mostrar['id_bautizo'] ?>">
                <i class="uil uil-trash-alt"></i></a> </td>
            <td> <a href="../Modelo/EditarTarjetaBautizo.php ?id_bautizo=<?php echo $mostrar['id_bautizo'] ?>" >
                <i class="uil uil-pen"></i></a> </td>
        </tr>
    <?php
    }
?>