<?php
    include("../Config/conexion.php");
    $sql="SELECT * from trj_boda";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_Novio'] ?> </td>
            <td> <?php echo $mostrar['nombre_Novia'] ?> </td>
            <td> <?php echo $mostrar['id_boda'] ?> </td>
            <td> <?php echo $mostrar['fecha'] ?> </td>
            <td> <?php echo $mostrar['hora'] ?> </td>
            <td> <?php echo $mostrar['padrinos'] ?> </td>     
            <td> <a href="../Modelo/EliminarTarjetaBoda.php ?id_boda=<?php echo $mostrar['id_boda'] ?>" ><i class="uil uil-trash-alt"></i></a></td>
            <td> <a href="../Modelo/EditarTarjetaBoda.php ?id_boda=<?php echo $mostrar['id_boda'] ?>" ><i class="uil uil-pen"></i></a> </td>          
        </tr>
    <?php
    }
?>