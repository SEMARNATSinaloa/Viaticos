<?php
require('../../public/plugins/fpdf181/fpdf.php');

//print "<pre>"; print_r($_REQUEST); print "</pre>\n";

//print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

function separar($text){
    $array=explode("-", $text);

    return $array;
}


$fecha=isset($_POST["fecha"])?$_POST["fecha"]:"Error";
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:"Error";
$nempleado=isset($_POST["nempleado"])?$_POST["nempleado"]:"Error";
$adscripcion=isset($_POST["adscripcion"])?$_POST["adscripcion"]:"Error";
$ext=isset($_POST["ext"])?$_POST["ext"]:"Error";
$base=isset($_POST["base"])?$_POST["base"]:"Error";
$jefe=isset($_POST["jefe"])?$_POST["jefe"]:"Error";
$just1=isset($_POST["just1"])?($_POST["just1"]):"Error";
$just1fin=isset($_POST["just1fin"])?$_POST["just1fin"]:"Error";
$just1ffin=isset($_POST["just1ffin"])?$_POST["just1ffin"]:"Error";
$just2=isset($_POST["just2"])?$_POST["just2"]:"Error";
$just2fin=isset($_POST["just2fin"])?$_POST["just2fin"]:"Error";
$just2ffin=isset($_POST["just2ffin"])?$_POST["just2ffin"]:"Error";
$just3=isset($_POST["just3"])?$_POST["just3"]:"Error";
$just3fin=isset($_POST["just3fin"])?$_POST["just3fin"]:"Error";
$just3ffin=isset($_POST["just3ffin"])?$_POST["just3ffin"]:"Error";
$just4=isset($_POST["just4"])?$_POST["just4"]:"Error";
$just4fin=isset($_POST["just4fin"])?$_POST["just4fin"]:"Error";
$just4ffin=isset($_POST["just4ffin"])?$_POST["just4ffin"]:"Error";
$motivo=isset($_POST["motivo"])?$_POST["motivo"]:"Error";

$txtClaves='CLAVES:1)RETARDO 1 2)RETARDO 2 3)RETARDO 3 4)COM. SINDICAL 5)COM. INTERNA 6)COM. EXTERNA 7)CUIDADOS MATERNOS 8)DIA ECONOMICO 9)LIC. MEDICA 10)ONOMASTICO 11)FALTA RETARDO 12)SALIDA ANTICIP. 13)MATRIMONIO 14)DEFUNSION FAM. DIRECTO 15)VAC. EXTRAORD. TRIM. 16)VAC. EXTRAORD. ANTIG. 17)VAC. EXTRAORD. ESTIM. Y RECOMP. 18)FACILIDADES ADMVAS 19)NACIMIENTO HIJO/A';

$just1=separar($just1);
$just2=separar($just2);
$just3=separar($just3);
$just4=separar($just4);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->Image('logoh.jpg',15,20,-1100);
$pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 'LT', 0, 'L');
$pdf->MultiCell(0, 5, 'OFICIALÍA MAYOR', 'TR', 'C');
$pdf->Cell(65, 5, '', 'L', 0, 'L');
$pdf->Cell(0, 5, 'DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y ORGANIZACIÓN', 'R',0, 'C');
$pdf->Ln(5);
$pdf->Cell(65, 5, '', 'L', 0, 'L');
$pdf->Cell(0, 5, 'FORMATO ÚNICO DE JUSTIFICACIÓN DE INCIDENCIAS DE PERSONAL', 'R',0, 'C');
$pdf->Ln(5);
$pdf->Cell(65, 5, '', 'LB', 0, 'L');
$pdf->Cell(0, 5, '', 'BR',0, 'C');
$pdf->Ln(6);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(16, 5, 'NOMBRE:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(95, 5, $nombre, 'TBR', 0,  'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(30, 5, 'No. DE EMPLEADO:', 'TB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(15, 5, $nempleado, 'TBR', 0,  'C');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(16, 5, 'FECHA:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(18, 5, $fecha, 'TBR', 0,  'L');
$pdf->Ln(6);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(25, 5, 'ADSCRIPCIÓN:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(70, 5, $adscripcion, 'TBR', 0,  'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(20, 5, 'EXT. o RED:', 'TB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(15, 5, $ext, 'TBR', 0,  'C');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(25, 5, 'BASE:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, 'CONFIANZA:', 'TBR', 0,  'L');
if($base=='Base'){
    $pdf->Image('check.png',155,47.5, -240);
    $pdf->Image('uncheck.png',192,47.5, -240);
}
else{
    $pdf->Image('uncheck.png',155,47.5, -240);
    $pdf->Image('check.png',192,47.5, -240);
}
$pdf->Ln(8);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, 'CLAVE:', 0, 0,  'C');
$pdf->Cell(90, 5, 'CONFIANZA:', 0, 0,  'C');
$pdf->Cell(65, 5, 'FECHA:', 0, 0,  'C');

$pdf->Ln(5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just1[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just1[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just1fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just1ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just2[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just2[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just2fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just2ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just3[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just3[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just3fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just3ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just4[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just4[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just4fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just4ffin, 1, 0,  'C');

$pdf->Ln(10);
$pdf->Cell(35, 5, 'MOTIVO DE JUSTIFICACIÓN:', 0, 0, 'L');
$pdf->Ln(5);
$pdf->Rect(10,94.5,190,10);
$pdf->MultiCell(0, 5, $motivo, 0, 'L');
$pdf->SetY(105);

$pdf->Cell(0, 5, 'AUTORIZACIÓN', 0, 1, 'C');

//$pdf->Ln(10);

$pdf->Cell(57, 5, 'EMPLEADO', 'LTR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'CARGO DEL SERVIDOR PUBLICO', 'LTR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'SELLO DE LA UNIDAD', 'LTR', 1, 'C');

$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'QUIEN AUTORIZA', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'ADMINISTRATIVA QUE REVIBE LA', 'LR', 1, 'C');

$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'INCIDENCIA', 'LR', 1, 'C');

$pdf->Cell(57, 5, $nombre, 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, $jefe, 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, '', 'LR', 1, 'C');

$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 0, 'C');
$pdf->Cell(9.5, 5, '', 0, 0, 'C');
$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 0, 'C');
$pdf->Cell(9.5, 5, '', 0, 0, 'C');
$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 1, 'C');

$pdf->SetFont('Arial','B',6);
$pdf->SetFillColor(215,215,215);
$pdf->MultiCell(0, 3, $txtClaves, 0, 'L', true);
$pdf->SetFillColor(0,0,0);
$pdf->Cell(0, 5, 'ORIGINAL PARA LA INSTITUCIÓN', 0, 1, 'L');

$pdf->SetDash(1,1);
$pdf->Line(10,148,200,148);
$pdf->Ln(-5);
$pdf->SetDash(0,0);
//---------Segunda mitad del formato




$pdf->Image('logoh.jpg',15,153,-1100);
$pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 'LT', 0, 'L');
$pdf->MultiCell(0, 5, 'OFICIALÍA MAYOR', 'TR', 'C');
$pdf->Cell(65, 5, '', 'L', 0, 'L');
$pdf->Cell(0, 5, 'DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y ORGANIZACIÓN', 'R',0, 'C');
$pdf->Ln(5);
$pdf->Cell(65, 5, '', 'L', 0, 'L');
$pdf->Cell(0, 5, 'FORMATO ÚNICO DE JUSTIFICACIÓN DE INCIDENCIAS DE PERSONAL', 'R',0, 'C');
$pdf->Ln(5);
$pdf->Cell(65, 5, '', 'LB', 0, 'L');
$pdf->Cell(0, 5, '', 'BR',0, 'C');
$pdf->Ln(6);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(16, 5, 'NOMBRE:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(95, 5, $nombre, 'TBR', 0,  'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(30, 5, 'No. DE EMPLEADO:', 'TB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(15, 5, $nempleado, 'TBR', 0,  'C');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(16, 5, 'FECHA:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(18, 5, $fecha, 'TBR', 0,  'L');
$pdf->Ln(6);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(25, 5, 'ADSCRIPCIÓN:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(70, 5, $adscripcion, 'TBR', 0,  'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(20, 5, 'EXT. o RED:', 'TB', 0, 'L');
$pdf->SetFont('Arial','', 7);
$pdf->Cell(15, 5, $ext, 'TBR', 0,  'C');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(25, 5, 'BASE:', 'LTB', 0, 'L');
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, 'CONFIANZA:', 'TBR', 0,  'L');
if($base=='Base'){
    $pdf->Image('check.png',155,181.5, -240);
    $pdf->Image('uncheck.png',192,181.5, -240);
}
else{
    $pdf->Image('uncheck.png',155,181.5, -240);
    $pdf->Image('check.png',192,181.5, -240);
}
$pdf->Ln(8);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, 'CLAVE:', 0, 0,  'C');
$pdf->Cell(90, 5, 'CONFIANZA:', 0, 0,  'C');
$pdf->Cell(65, 5, 'FECHA:', 0, 0,  'C');

$pdf->Ln(5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just1[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just1[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just1fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just1ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just2[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just2[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just2fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just2ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just3[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just3[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just3fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just3ffin, 1, 0,  'C');
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(35, 5, $just4[0], 1, 0,  'C');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(80, 5, $just4[1], 1, 0,  'L');
$pdf->Cell(5, 5, '', 0, 0,  'C');
$pdf->Cell(8, 5, 'DEL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just4fin, 1, 0,  'C');
$pdf->Cell(17, 5, 'AL:', 0, 0,  'R');
$pdf->Cell(20, 5, $just4ffin, 1, 0,  'C');

$pdf->Ln(10);
$pdf->Cell(35, 5, 'MOTIVO DE JUSTIFICACIÓN:', 0, 0, 'L');
$pdf->Ln(5);
$pdf->Rect(10,228.5,190,10);
$pdf->MultiCell(0, 5, $motivo, 0, 'L');
$pdf->SetY(240);

$pdf->Cell(0, 5, 'AUTORIZACIÓN', 0, 1, 'C');

//$pdf->Ln(10);

$pdf->Cell(57, 5, 'EMPLEADO', 'LTR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'CARGO DEL SERVIDOR PUBLICO', 'LTR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'SELLO DE LA UNIDAD', 'LTR', 1, 'C');

$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'QUIEN AUTORIZA', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'ADMINISTRATIVA QUE REVIBE LA', 'LR', 1, 'C');

$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, '', 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, 'INCIDENCIA', 'LR', 1, 'C');

$pdf->Cell(57, 5, $nombre, 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, $jefe, 'LR', 0, 'C');
$pdf->Cell(9.5, 5, '', 'LR', 0, 'C');
$pdf->Cell(57, 5, '', 'LR', 1, 'C');

$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 0, 'C');
$pdf->Cell(9.5, 5, '', 0, 0, 'C');
$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 0, 'C');
$pdf->Cell(9.5, 5, '', 0, 0, 'C');
$pdf->Cell(57, 5, 'NOMBRE Y FIRMA', 'LRB', 1, 'C');
$pdf->Ln(1);
$pdf->SetFont('Arial','B',6);
$pdf->SetFillColor(215,215,215);
$pdf->MultiCell(0, 3, $txtClaves, 0, 'L', true);
$pdf->SetFillColor(0,0,0);
$pdf->Cell(0, 5, 'COPIA PARA EL EMPLEADO', 0, 1, 'L');

$pdf->Output();



?>