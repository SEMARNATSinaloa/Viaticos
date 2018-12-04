<?php
require('../../public/plugins/fpdf181/fpdf.php');

//print "<pre>"; print_r($_REQUEST); print "</pre>\n";
function separar($text){
    $array=explode("-", $text);

    return $array;
}

$fecha=isset($_POST["fecha"])?$_POST["fecha"]:"Error";
$nombre=isset($_POST["nombre"])?strtoupper($_POST["nombre"]):"Error";
$vehiculo=isset($_POST["vehiculo"])?separar($_POST["vehiculo"]):"Error";
$jefe=isset($_POST["jefe"])?strtoupper($_POST["jefe"]):"Error";
$lugar=isset($_POST["lugar"])?$_POST["lugar"]:"Error";

$fecha = str_replace('/','-', $fecha);
$timestamp = strtotime($fecha);

setlocale(LC_TIME, 'spanish');
$fecha=strftime("%A %d de %B del %Y", $timestamp);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Image('logoh.jpg',15,13,-300);
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES", 0, 1,  'C');
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "DELEGACION FEDERAN EN EL ESTADO DE SINALOA", 0, 1,  'C');
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "SUBDELEGACION DE ADMINISTRACION E INNOVACION", 0, 1,  'C');
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 5, "PASE DE SALIDA VEHÍCULAR", 0, 1,  'C');

$pdf->Ln();
$pdf->SetFont('Arial','',10);
$pdf->Cell(20, 5, "", 0, 0,  'C');
$pdf->Cell(30, 5, "FECHA: ", 0, 0,  'C');
$pdf->Cell(50, 5, $lugar.", SINALOA; A  ", 0, 0,  'L');
$pdf->Cell(70, 5, utf8_encode(strtoupper($fecha)), 0, 0,  'C');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0, 0,  'C');
$pdf->Cell(30, 5, "EL  C: ", 0, 0,  'C');
$pdf->Cell(50, 5, $nombre, 0, 0,  'L');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0, 0,  'C');
$pdf->MultiCell(150, 5, "PORTADOR DEL PRESENTE TIENE AUTORIZACION PARA USAR EL VEHICULO NO. ECONOMICO: ".$vehiculo[0], 0, 'L');
$pdf->Ln(7);
$pdf->Cell(20, 5, "", 0, 0,  'C');
$pdf->MultiCell(150, 5, "PARA CUMPLIR CON LA COMISION OFICIAL SE COMPROMETE AL TERMINO DE LA MISMA, DEPOSITAR LA UNIDAD EN LA PENSION.", 0, 'L');

$pdf->Ln(10);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, "AUTORIZA", 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "RESGUARDANTE" , 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(15);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, $jefe, "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "" , "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(5);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, "NOMBRE Y FIRMA", 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "" , 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(15);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(55, 5, "FECHA Y HORA DEL REGRESO:", 0, 0,  'C');
$pdf->Cell(30, 5, "", "B", 0,  'C');
$pdf->Cell(45, 5, "" , "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');


$pdf->Output();
?>
