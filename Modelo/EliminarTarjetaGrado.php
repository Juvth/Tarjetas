<?php
    include("../Config/conexion.php");
    $ID_grado = $_REQUEST['id_grado'];
    //hola
    $sql = "DELETE from trj_grado where id_grado=$ID_grado";
    $sqr = mysqli_query($conexion, $sql);
    if ($sql) {
        header("location:../Admin.html");
    } else {
        echo "error al eliminar";
    }
?>;