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
$factura=isset($_POST["factura"])?($_POST["factura"]):"";
$fechafac=isset($_POST["fechaFac"])?($_POST["fechaFac"]):"";
$importefac=isset($_POST["importeFac"])?($_POST["importeFac"]):"";
$fechagas=isset($_POST["fechaGas"])?($_POST["fechaGas"]):"";
$conceptogas=isset($_POST["conceptoGas"])?($_POST["conceptoGas"]):"";
$importegas=isset($_POST["importeGas"])?($_POST["importeGas"]):"";
$impFac=0;
$impGas=0;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->Image('logov.jpg',15,3,-280);
$pdf->AddFont("Montserrat", "");
$pdf->AddFont("Montserrat-Bold", "");
$pdf->SetFont('Montserrat','',14);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->MultiCell(0, 5, 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES.', 0, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'DELEGACION FEDERAL SINALOA', 0,0, 'C');
$pdf->SetFont('Montserrat','', 8);
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

if($factura!=""){
    for($i=0;$i<count($factura);$i++){
        $pdf->Cell(24, 8, '', 0, 0, 'L');
        $pdf->Cell(24, 8, $factura[$i], 1, 0, 'C');
        $pdf->Cell(24, 8, $fechafac[$i], 1, 0, 'C');
        $pdf->Cell(24, 8, $importefac[$i], 1, 1, 'C');
    
        $impFac=$impFac+$importefac[$i];
    }
}

for($i=count($factura);$i<10;$i++){
    $pdf->Cell(24, 8, '', 0, 0, 'L');
    $pdf->Cell(24, 8, '', 1, 0, 'C');
    $pdf->Cell(24, 8, '', 1, 0, 'C');
    $pdf->Cell(24, 8, '', 1, 1, 'C');
}

$pdf->SetXY(106,116);

if($conceptogas!=""){
    for($i=0;$i<count($conceptogas);$i++){
        $pdf->SetX(106);
        $pdf->Cell(24, 8, $fechagas[$i], 1, 0, 'C');
        $pdf->Cell(24, 8, $conceptogas[$i], 1, 0, 'C');
        $pdf->Cell(24, 8, $importegas[$i], 1, 1, 'C');
    
        $impGas=$impGas+$importegas[$i];
    }
}

for($i=count($conceptogas);$i<10;$i++){
    $pdf->SetX(106);
    $pdf->Cell(24, 8, '', 1, 0, 'C');
    $pdf->Cell(24, 8, '', 1, 0, 'C');
    $pdf->Cell(24, 8, '', 1, 1, 'C');
}

//Fin de repetir
$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(24, 8, '', "LTB", 0, 'C');
$pdf->Cell(24, 8, 'SUBTOTAL:', "TBR", 0, 'C');
$pdf->Cell(24, 8, $impFac, 1, 0, 'C');
$pdf->Cell(24, 8, '', "T", 0, 'C');
$pdf->Cell(24, 8, 'SUBTOTAL', "T", 0, 'C');
$pdf->Cell(24, 8, $impGas, 1, 1, 'C');
$pdf->Cell(24, 8, '', 0, 0, 'L');
$pdf->Cell(96, 8, '', "LTB", 0, 'C');
$pdf->Cell(24, 8, 'TOTAL:', "RTB", 0, 'C');
$pdf->Cell(24, 8, $impFac+$impGas, "TBR", 1, 'C');




//Firmas
$pdf->Ln(20);

$pdf->Ln(15);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, '', "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "" , "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(5);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->MultiCell(50, 5, "FIRMA DEL SERVIDOR PUBLICO COMISIONADO", 0,  'C');
$pdf->SetXY(120,252);
$pdf->MultiCell(50, 5, "FIRMA DEL ENLACE ADMINISTRATIVO", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');


$pdf->Output();


?>