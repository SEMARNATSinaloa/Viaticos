<?php

//print "<pre>"; print_r($_REQUEST); print "</pre>\n";

//print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

require('../../public/plugins/fpdf181/fpdf.php');

$fecha=isset($_POST["fecha"])?$_POST["fecha"]:"Error";
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:"Error";
$caracter=isset($_POST["caracter"])?$_POST["caracter"]:"Error";
$adscripcion=isset($_POST["adscripcion"])?$_POST["adscripcion"]:"Error";
$jefe=isset($_POST["jefe"])?$_POST["jefe"]:"Error";
$asunto=isset($_POST["asunto"])?($_POST["asunto"]):"Error";

$fecha = str_replace('/','-', $fecha);
$timestamp = strtotime($fecha);

setlocale(LC_TIME, 'spanish');
$fecha=strftime("%A %d de %B del %Y", $timestamp);
//$fecha=strftime("%A, %d de %B del %Y", strtotime($fecha));
//$fecha=strftime($fecha); 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Image('logoh.jpg',15,15,-300);
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES", 0, 1,  'C');
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "DELEGACION FEDERAN EN EL ESTADO DE SINALOA", 0, 1,  'C');
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "SUBDELEGACION DE ADMINISTRACION E INNOVACION", 0, 1,  'C');
$pdf->Cell(70, 5, "", 0, 0,  'L');
$pdf->Cell(110, 5, "DEPTO. DE RECURSOS HUMANOS Y MATERIALES", 0, 1,  'C');


$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 5, "PASE DE SALIDA", 0, 1,  'C');

$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(60, 5, "ASUNTO DE CARACTER:", 0, 0,  'L');
$pdf->Cell(30, 5, "OFICIAL", 0, 0,  'L');
$pdf->Cell(30, 5, "PERSONAL", 0, 0,  'L');
$pdf->Cell(30, 5, "OTRO", 0, 1,  'L');
if($caracter=='Oficial'){
    $pdf->Image('check.png',110,65.5, -240);
    $pdf->Image('uncheck.png',142,65.5, -240);
    $pdf->Image('uncheck.png',165,65.5, -240);
}
else if($caracter=='Personal'){
    $pdf->Image('uncheck.png',110,65.5, -240);
    $pdf->Image('check.png',142,65.5, -240);
    $pdf->Image('uncheck.png',165,65.5, -240);
}
else{
    $pdf->Image('UNcheck.png',110,65.5, -240);
    $pdf->Image('uncheck.png',142,65.5, -240);
    $pdf->Image('check.png',165,65.5, -240);
}

$pdf->Ln(5);
$pdf->Cell(40, 5, "", 0, 0,  'C');

$pdf->Cell(120, 5, "FECHA:   ". utf8_encode(strtoupper($fecha)), 0, 1,  'R');
$pdf->Ln(10);

$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(20, 5, "NOMBRE:", 0, 0,  'L');
$pdf->Cell(70, 5, $nombre, 0, 0,  'L');
$pdf->Cell(15, 5, "AREA:", 0, 0,  'L');
$pdf->MultiCell(0, 5, $adscripcion, 0, 'L');

$pdf->Ln();
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(35, 5, "HORA DE SALIDA:", 0, 0,  'L');
$pdf->Cell(30, 5, "______________________", 0, 0,  'L');
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(30, 5, "VERIFICA:", 0, 0,  'L');
$pdf->Cell(70, 5, "______________________", 0, 0,  'L');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(35, 5, "HORA DE REGRESO:", 0, 0,  'L');
$pdf->Cell(30, 5, "______________________", 0, 0,  'L');
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(30, 5, "VERIFICA:", 0, 0,  'L');
$pdf->Cell(70, 5, "______________________", 0, 0,  'L');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(40, 5, "TIEMPO DE AUSENCIA:", 0, 0,  'L');
$pdf->Cell(35, 5, "___________________", 0, 0,  'L');
$pdf->Cell(15, 5, "HORAS", 0, 0,  'L');

$pdf->Ln(15);
$pdf->Cell(20, 5, "", 0, 0,  'L');
$pdf->Cell(35, 5, "ASUNTO:", 0, 0,  'L');
$pdf->MultiCell(0, 5, $asunto, 0, 'L');

$pdf->Ln(15);
$pdf->Cell(0, 5, "EMPLEADO", 0, 1,  'C');
$pdf->Ln(10);
$pdf->Cell(55, 5, "", 0, 0,  'C');
$pdf->Cell(80, 5, "$nombre", "B", 0,  'C');
$pdf->Cell(55, 5, "", 0, 1,  'C');

$pdf->Ln(10);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, "AUTORIZA", 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "Vo. Bo." , 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(15);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, $jefe, "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "" , "B", 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');

$pdf->Ln(5);
$pdf->Cell(30, 5, "", 0, 0, 'C');
$pdf->Cell(50, 5, "JEFE INMEDIATO", 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');
$pdf->Cell(50, 5, "SUBDELEGACION DE ADMINISTRACION" , 0, 0,  'C');
$pdf->Cell(30, 5, "", 0, 0,  'C');


$pdf->Output();

?>