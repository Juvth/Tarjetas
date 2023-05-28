<?php
    include('../Vista/Plantilla3.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from TrjBautizo";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(20,10,'ID',1,0,'C');
    $pdf->Cell(40,10,'IGLESIA',1,0,'C');
    $pdf->Cell(40,10,"utf8_decode"('RECEPCIÓN'),1,0,'C');
    $pdf->Cell(40,10,'FECHA',1,0,'C');
    $pdf->Cell(40,10,'HORA',1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(20,10,$mostrar['id_bautizo'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['iglesia']),1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['recepcion']),1,0,'C',0);
        $pdf->Cell(40,10,$mostrar['fecha'],1,0,'C',0);    
        $pdf->Cell(40,10,$mostrar['hora'],1,1,'C',0); 
    }
    
    $pdf->Output('D','reporteBa.pdf');
?>