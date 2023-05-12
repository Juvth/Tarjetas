<?php
    include('../Vista/Plantilla4.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from Trj_Boda";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(15,10,'ID',1,0,'C');
    $pdf->Cell(40,10,'NOMBRE NOVIO',1,0,'C');
    $pdf->Cell(40,10,'NOMBRE NOVIA',1,0,'C');
    $pdf->Cell(20,10,'FECHA',1,0,'C');
    $pdf->Cell(20,10,'HORA',1,0,'C');
    $pdf->Cell(40,10,'PADRINOS',1,0,'C');
    $pdf->Cell(20,10,"utf8_decode"('CÉDULA'),1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(15,10,$mostrar['id_boda'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['nombre_Novio']),1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['nombre_Novia']),1,0,'C',0);
        $pdf->Cell(20,10,$mostrar['fecha'],1,0,'C',0);
        $pdf->Cell(20,10,$mostrar['hora'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['padrinos']),1,0,'C',0);
        $pdf->Cell(20,10,$mostrar['cedula_cliente'],1,1,'C',0);   
    }
    
    $pdf->Output('D','reporteB.pdf');
?>