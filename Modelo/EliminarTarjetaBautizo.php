<?php
    include("../Config/conexion.php");
    $ID_bautizo = $_REQUEST['id_bautizo'];
    
    $sql = "DELETE from trjbautizo where id_bautizo=$ID_bautizo";
    $sqr = mysqli_query($conexion, $sql);
    if ($sql) {
        header("location:../Admin.html");
    } else {
        echo "error al eliminar";
    }
?>;