<?php
    include('../Vista/Plantilla6.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from Trj_Grado";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(15,6,'ID',1,0,'C');
    $pdf->Cell(40,6,'NOMBRE',1,0,'C');
    $pdf->Cell(40,6,"utf8_decode"('DIRECCIÓN'),1,0,'C');
    $pdf->Cell(20,6,'FECHA',1,0,'C');
    $pdf->Cell(20,6,'HORA',1,0,'C');
    $pdf->Cell(20,6,"utf8_decode"('CÉDULA'),1,0,'C');
    $pdf->Cell(40,6,"utf8_decode"('DESCRIPCIÓN'),1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(15,6,$mostrar['id_grado'],1,0,'C',0);
        $pdf->Cell(40,6,"utf8_decode"($mostrar['Nombre_grado']),1,0,'C',0);
        $pdf->Cell(40,6,"utf8_decode"($mostrar['direccion']),1,0,'C',0);
        $pdf->Cell(20,6,$mostrar['fecha'],1,0,'C',0);
        $pdf->Cell(20,6,$mostrar['hora'],1,0,'C',0);
        $pdf->Cell(20,6,$mostrar['cedula_cliente'],1,0,'C',0);
        $pdf->Cell(40,6,"utf8_decode"($mostrar['descripcion']),1,1,'C',0);   
    }
    
    $pdf->Output('D','reporteG.pdf');
?>