<?php
    include('../Vista/Plantilla5.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from Trj_cumple";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(15,10,'ID',1,0,'C');
    $pdf->Cell(40,10,'NOMBRE',1,0,'C');
    $pdf->Cell(40,10,"utf8_decode"('DIRECCIÓN'),1,0,'C');
    $pdf->Cell(15,10,'EDAD',1,0,'C');
    $pdf->Cell(20,10,'FECHA',1,0,'C');
    $pdf->Cell(20,10,'HORA',1,0,'C');
    $pdf->Cell(40,10,"utf8_decode"('CÉDULA'),1,0,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(15,10,$mostrar['id_cumple'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['nombre_cumple']),1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['direccion']),1,0,'C',0);
        $pdf->Cell(15,10,$mostrar['edad'],1,0,'C',0);
        $pdf->Cell(20,10,$mostrar['fecha'],1,0,'C',0);
        $pdf->Cell(20,10,$mostrar['hora'],1,0,'C',0);
        $pdf->Cell(40,10,$mostrar['cedula_cliente'],1,1,'C',0);   
    }
    
    $pdf->Output('D','reporteCUMPLE.pdf');
?>