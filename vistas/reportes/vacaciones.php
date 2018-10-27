<?php
require('../../public/plugins/fpdf181/fpdf.php');

//print "<pre>"; print_r($_REQUEST); print "</pre>\n";

//print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

$fecha=isset($_POST["fecha"])?$_POST["fecha"]:"Error";
$periodo=isset($_POST["periodo"])?$_POST["periodo"]:"Error";
$añop=isset($_POST["añop"])?$_POST["añop"]:"Error";
$rfc=isset($_POST["rfc"])?$_POST["rfc"]:"Error";
$id=isset($_POST["id"])?$_POST["id"]:"Error";
$apaterno=isset($_POST["apaterno"])?$_POST["apaterno"]:"Error";
$amaterno=isset($_POST["amaterno"])?$_POST["amaterno"]:"Error";
$nombre=isset($_POST["nombre"])?($_POST["nombre"]):"Error";
$adscripcion=isset($_POST["adscripcion"])?$_POST["adscripcion"]:"Error";
$puesto=isset($_POST["puesto"])?$_POST["puesto"]:"Error";
$jefe=isset($_POST["jefe"])?$_POST["jefe"]:"Error";
$puestojefe=isset($_POST["puestojefe"])?$_POST["puestojefe"]:"Error";
$fechai=isset($_POST["fechai"])?$_POST["fechai"]:"Error";
$fechaf=isset($_POST["fechaf"])?$_POST["fechaf"]:"Error";
$diasaut=isset($_POST["diasaut"])?$_POST["diasaut"]:"Error";
$diaspen=isset($_POST["diaspen"])?$_POST["diaspen"]:"Error";
$observaciones=isset($_POST["observaciones"])?$_POST["observaciones"]:"Error";


echo $fechai."<br>";
$fechai = str_replace('/','-', $fechai);
$timestamp = strtotime($fechai);
//$fechai = date("Y-m-d", $timestamp);
//echo date("%A %d de %B del %Y", $fechai);
setlocale(LC_TIME, 'spanish');
echo strftime("%A %d de %B del %Y", $timestamp);

die();
$fechai= date('d/m/Y', strtotime(str_replace('-','/', $fechai)));
$fechaf= date('d/m/Y', strtotime(str_replace('/','-', $fechaf)));
//die($fechaf);
$date = new DateTime($fechai);
echo $date->getTimestamp();
echo $fechai=strftime("%A %d de %B del %Y", $fechaf);
//$fechaf=strftime("%A %d de %B del %Y", $fechaf);
die();


//contar dias habiles 

$i=0;/*
while($fechaf>=$fechai){
    $i++;
    $fechai = strtotime ( '+1 day' , strtotime ( $fechai ) ) ;
    echo date( "d/m/Y" , $fechai );
    //echo strtotime($fechai);
}*/

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Rect(25,10,160,275);
$pdf->Rect(26,11,158,273);
$pdf->Rect(25.5,10.5,159,274);

$pdf->Image('logoh.jpg',27,12,-850);
$pdf->SetFont('Arial','',10);
$pdf->Ln(5);
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'SOLICITUD/AUTORIZACION', 0,1, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'INDIVIDUAL DE VACACIONES', 0,1, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'DE SERVIDORES PÚBLICOS', 0,1, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(53, 5, 'FECHA: ', 0,0, 'R');
$pdf->Cell(40, 5, $fecha, "B",0, 'C');
$pdf->Ln(10);
$pdf->Cell(100, 5, '', 0, 0, 'L');
$pdf->Cell(30, 5, $periodo."/".$añop, 1,0, 'C');
$pdf->Cell(30, 5, "Periodo", 0,1, 'L');
$pdf->Ln(1);
$pdf->Cell(100, 5, '', 0, 0, 'L');
$pdf->Cell(30, 5, "", 1,0, 'C');
$pdf->Cell(30, 5, "Modificación", 0,1, 'L');
$pdf->Ln(1);
$pdf->Cell(100, 5, '', 0, 0, 'L');
$pdf->Cell(30, 5, "", 1,0, 'C');
$pdf->Cell(30, 5, "Cancelación", 0,1, 'L');

$pdf->SetFont('Arial','B',10);
$pdf->Ln(1);
$pdf->Cell(20, 5, '', 0, 0, 'L');
$pdf->Cell(30, 5, "DATOS DEL SERVIDOR PUBLICO", 0,0, 'L');

$pdf->SetFont('Arial','',10);
$pdf->Ln(10);
$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, $apaterno, "B",0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, $amaterno, "B",0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, $nombre, "B",0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "Apellido Paterno", 0,0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "Apellido Materno", 0,0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "Nombre (s)", 0,0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Ln(10);
$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, $rfc, "B",0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "", 0,0, 'C');
$pdf->Cell(9, 5, "ID:", 0,0, 'R');
$pdf->Cell(45, 5, $id, "B",0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "R. F. C.", 0,0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'L');
$pdf->Cell(45, 5, "", 0,0, 'C');
$pdf->Cell(9, 5, "", 0,0, 'R');
$pdf->Cell(45, 5, "", 0,0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Ln(10);
$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(74, 5, $adscripcion, "B",0, 'C');
$pdf->Cell(25, 5, "", 0,0, 'C');
$pdf->Cell(54, 5, $puesto, "B",0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(74, 5, "Unidad Administrativa o Área de Adscripción", 0,0, 'C');
$pdf->Cell(25, 5, "", 0,0, 'C');
$pdf->Cell(54, 5, "Puesto", 0,0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Rect(28,120,154,0.2);
$pdf->Line(28,120.7,182,120.7);

$pdf->Ln(5);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->MultiCell(150, 4, "De conformidad con las fracciones III y XIV del apartado B, del articulo 123 Constitucional, y 30 de la Ley Federal de los Trabajadores al Servicio del Estado, solicito disfrutar de vacaciones en el siguiente:",0, 'L');

setlocale(LC_TIME, 'Spanish');
$fechai2=date("l \d\\e d F \d\\e\l Y", strtotime($fechai));
$fechaf2=date("l d F Y", strtotime($fechaf));
$pdf->Ln(5);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(10, 5, "Del:", 0,0, 'L');
$pdf->Cell(50, 5, $fechai2, "B",0, 'L');
$pdf->Cell(30, 5, "Al: ", 0,0, 'R');
$pdf->Cell(50, 5, $fechaf2, "B",0, 'L');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Número de días hábiles autorizados del periodo:", 0,0, 'L');
$pdf->Cell(20, 5, "4", 1,1, 'C');
$pdf->Ln(4);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Número de días pendientes por disfrutar del periodo:", 0,0, 'L');
$pdf->Cell(20, 5, "4", 1,0, 'C');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Número de días hábiles autorizados del periodo:", 0,0, 'L');
$pdf->Cell(20, 5, "4", 1,1, 'C');

$pdf->Output();
?>