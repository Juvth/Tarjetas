<?php
    include('../Vista/Plantilla.php');
    include("../Config/conexion.php");

    $sql= "SELECT * from Cliente";
    $resultado = mysqli_query($conexion, $sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();   
    
    $pdf->SetFont('Arial','B',16);
    $pdf->SetFillColor(230,230,0);

    $pdf->Cell(40,6,"utf8_decode"('CÉDULA'),1,0,'C');
    $pdf->Cell(40,6,'USUARIO',1,0,'C');
    $pdf->Cell(40,6,'TELEFONO',1,0,'C');
    $pdf->Cell(40,6,"utf8_decode"('DIRECCIÓN'),1,0,'C');
    $pdf->Cell(30,6,"utf8_decode"('CLAVE'),1,1,'C');
    $pdf->SetFont('Arial','B',8);

    while($mostrar = mysqli_fetch_array($resultado)){
        $pdf->Cell(40,10,$mostrar['cedula'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['usuario']),1,0,'C',0);
        $pdf->Cell(40,10,$mostrar['telefono'],1,0,'C',0);
        $pdf->Cell(40,10,"utf8_decode"($mostrar['direccion']),1,0,'C',0);
        $pdf->Cell(30,10,"utf8_decode"($mostrar['contraseña']),1,1,'C',0);
    }
    
    $pdf->Output('D','reporteC.pdf');
?>