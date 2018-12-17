<?php
require('../../public/plugins/fpdf181/fpdf.php');
/*
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

*/
$unidad=isset($_POST["unidad"])?$_POST["unidad"]:"Error";
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:"Error";
$destino=isset($_POST["destino"])?$_POST["destino"]:"Error";
$fechamininicio=isset($_POST["fechamininicio"])?$_POST["fechamininicio"]:"Error";
$fechaminfin=isset($_POST["fechaminfin"])?($_POST["fechaminfin"]):"Error";



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->Image('logov.jpg',15,3,-280);
$pdf->SetFont('Arial','',15);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->MultiCell(0, 5, 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES.', 0, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'DELEGACION FEDERAL SINALOA', 0,0, 'C');
$pdf->SetFont('Arial','', 9);
$pdf->Ln(10);
$pdf->Cell(40, 5, '', 0, 0, 'L');
$pdf->Cell(170, 5, 'D E S G L O S E   D E   G A S T O S   P O R M E N O R I Z A D O', 0, 1, 'C');
$pdf->Ln(25);

$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(50, 5, 'UNIDAD:', 1, 0, 'L');
$pdf->Cell(100, 5, $unidad, 1, 1, 'L');
$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(50, 5, 'Nombre del comisionado:', 1, 0, 'L');
$pdf->Cell(100, 5, $nombre, 1, 1, 'L');
$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(50, 5, 'Destino de la comisión:', 1, 0, 'L');
$pdf->Cell(100, 5, $destino, 1, 1, 'L');
$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(50, 5, 'Periodo de la comisión:', 1, 0, 'L');

if($fechamininicio===$fechaminfin)
{
    $pdf->Cell(100, 5, "El día " . $fechaminfin, 1, 1, 'L');
}
else
{
    $pdf->Cell(100, 5, "Del día ". $fechamininicio . " al " . $fechaminfin, 1, 1, 'L');
}

$pdf->Ln(10);

$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(72, 8, 'CON DOCUMENTACIÓN COMPROBATORIA', 1, 0, 'C');
$pdf->Cell(72, 8, 'SIN DOCUMENTACIÓN COMPROBATORIA', 1, 1, 'C');
$pdf->SetFont('Arial','',8);


$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(24, 8, 'No.DOCUMENTO', 1, 0, 'C');
$pdf->Cell(24, 8, 'FECHA', 1, 0, 'C');
$pdf->Cell(24, 8, 'IMPORTE', 1, 0, 'C');
$pdf->Cell(24, 8, 'FECHA', 1, 0, 'C');
$pdf->Cell(24, 8, 'CONCEPTO', 1, 0, 'C');
$pdf->Cell(24, 8, 'IMPORTE', 1, 1, 'C');

//repetir en funcion del tamaño de los arreglos de facturas y gastos
for($i=0;$i<10;$i++){
    $pdf->Cell(24, 8, '', 0, 0, 'L');
    $pdf->Cell(24, 8, 'No.DOCUMENTO', 1, 0, 'C');
    $pdf->Cell(24, 8, 'FECHA', 1, 0, 'C');
    $pdf->Cell(24, 8, 'IMPORTE', 1, 0, 'C');
    $pdf->Cell(24, 8, 'FECHA', 1, 0, 'C');
    $pdf->Cell(24, 8, 'CONCEPTO', 1, 0, 'C');
    $pdf->Cell(24, 8, 'IMPORTE', 1, 1, 'C');
}


//Fin de repetir

$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(24, 8, '', "LTB", 0, 'C');
$pdf->Cell(24, 8, 'SUBTOTAL:', "TBR", 0, 'C');
$pdf->Cell(24, 8, 'Suma del importe', 1, 0, 'C');
$pdf->Cell(24, 8, '', 0, 0, 'C');
$pdf->Cell(24, 8, 'SUBTOTAL', 0, 0, 'C');
$pdf->Cell(24, 8, 'Suma del importe', 1, 1, 'C');
$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(96, 8, '', "LTB", 0, 'C');
$pdf->Cell(24, 8, 'TOTAL:', "RTB", 0, 'C');
$pdf->Cell(24, 8, 'Suma de los subtotales', "TBR", 1, 'C');




$pdf->Output();


?>