<?php
    include('../Vista/Plantilla2.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from Administrador";
    $resultado = mysqli_query($conexion, $sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',16);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(20,10,'ID',1,0,'C');
    $pdf->Cell(150,10,'NOMBRE',1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(20,10,$mostrar['id_admin'],1,0,'C',0);
        $pdf->Cell(150,10,"utf8_decode"($mostrar['nombre']),1,1,'C',0);
    }
    
    $pdf->Output('D','reporteA.pdf');
?>