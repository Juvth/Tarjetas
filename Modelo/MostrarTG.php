<?php
    include("../Config/conexion.php");
    $sql="SELECT * from trj_grado";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td> <?php echo $mostrar['id_grado'] ?> </td>
            <td> <?php echo $mostrar['direccion'] ?> </td>
            <td> <?php echo $mostrar['fecha'] ?> </td>
            <td> <?php echo $mostrar['hora'] ?> </td>
            <td> <?php echo $mostrar['descripcion'] ?> </td>
//<<<<<<< HEAD
            <td> <?php echo $mostrar['Nombre_grado'] ?> </td>     
            <td> <a href="../Modelo/EliminarTarjetaGrado.php ?id_grado=<?php echo $mostrar['id_grado'] ?>" ><i class="uil uil-trash-alt"></i></a> </td>
//=======
            <td> <?php echo $mostrar['Nombre_grado'] ?> </td>
            <td> <a href="../Modelo/EliminarTarjetaGrado.php ?id_grado=<?php 
            echo $mostrar['id_grado'] ?>" ><i class="uil uil-trash-alt"></i></a> </td>
//>>>>>>> e31d544e74111816c1fd6c9835b6f350eda06bc2
            <td> <a href="../Modelo/EditarTarjetaGrado.php ?id_grado=<?php echo $mostrar['id_grado'] ?>" ><i class="uil uil-pen"></i> </a> </td>         
        </tr>
    <?php
    }
?>