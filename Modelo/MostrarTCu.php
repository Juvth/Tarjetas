<?php
    include("../Config/conexion.php");
    $sql="SELECT * from trj_cumple";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_cumple'] ?> </td>
            <td> <?php echo $mostrar['id_cumple'] ?> </td>
            <td> <?php echo $mostrar['direccion'] ?> </td>
            <td> <?php echo $mostrar['edad'] ?> </td>
            <td> <?php echo $mostrar['fecha'] ?> </td>
            <td> <?php echo $mostrar['hora'] ?> </td>     
            <td> <a href="../Modelo/EliminarTarjetaCumple.php ?id_cumple=<?php echo $mostrar['id_cumple'] ?>" ><i class="uil uil-trash-alt"></i></a> </td>
            <td> <a href="../Modelo/EditarTarjetaCumple.php ?id_cumple=<?php echo $mostrar['id_cumple'] ?>" ><i class="uil uil-pen"></i></a></td>          
        </tr>
    <?php
    }
?>