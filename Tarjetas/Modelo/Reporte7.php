<?php
    include('../Vista/Plantilla7.php');
    include("../Config/conexion.php");

    $sql= "SELECT usuario,cedula,totalpagar from Cliente";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(65,10,'USUARIO',1,0,'C');
    $pdf->Cell(65,10,"utf8_decode"('CÉDULA'),1,0,'C');
    $pdf->Cell(65,10,'TOTAL A PAGAR',1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(65,10,"utf8_decode"($mostrar['usuario']),1,0,'C',0);
        $pdf->Cell(65,10,$mostrar['cedula'],1,0,'C',0);
        $pdf->Cell(65,10,$mostrar['totalpagar'],1,1,'C',0);
    }
    
    $pdf->Output('D','reporteUsu.pdf');
?>