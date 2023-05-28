<?php 
    include("../Config/conexion.php");
    $ID_cumple = $_REQUEST['id_cumple'];
    //echo $Numcedula;
    $sql = "DELETE from trj_cumple where id_cumple=$ID_cumple";
    $sqr = mysqli_query($conexion,$sql);
    if($sql)
        header("location:../Admin.html");
    else
        echo "error al eliminar";

?>