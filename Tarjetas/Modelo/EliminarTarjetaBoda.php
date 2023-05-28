<?php 
    include("../Config/conexion.php");
    $ID_boda = $_REQUEST['id_boda'];
    //echo $Numcedula;
    $sql = "DELETE from trj_boda where id_boda=$ID_boda";
    $sqr = mysqli_query($conexion,$sql);
    if($sql)
        header("location:../Admin.html");
    else
        echo "error al eliminar";

?>