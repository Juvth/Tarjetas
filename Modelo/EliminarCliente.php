<?php 
    include("../Config/conexion.php");
    $Numcedula = $_REQUEST['cedula'];
    //echo $Numcedula;
    $sql = "DELETE from cliente where cedula=$Numcedula";
    $sqr = mysqli_query($conexion,$sql);
    if($sql)
        header("location:../Admin.html");
    else
        echo "error al eliminar";

?>