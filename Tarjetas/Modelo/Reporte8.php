<?php
    include('../Vista/Plantilla8.php');
    include("../Config/conexion.php");

    $sql= "SELECT cedula_cliente,nombre,edad,padrinos from TrjBautizo";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(20,10,'ID',1,0,'C');
    $pdf->Cell(60,10,'NOMBRE',1,0,'C');
    $pdf->Cell(50,10,'EDAD',1,0,'C');
    $pdf->Cell(65,10,'PADRINOS',1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(20,10,$mostrar['cedula_cliente'],1,0,'C',0);
        $pdf->Cell(60,10,"utf8_decode"($mostrar['nombre']),1,0,'C',0);
        $pdf->Cell(50,10,$mostrar['edad'],1,0,'C',0);
        $pdf->Cell(65,10,"utf8_decode"($mostrar['padrinos']),1,1,'C',0);
    }
    
    $pdf->Output('D','reporteBaP.pdf');
?>