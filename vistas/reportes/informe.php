<?php
require('../../public/plugins/fpdf181/fpdf.php');

/*
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

*/
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:"Error";
$numero=isset($_POST["numero"])?$_POST["numero"]:"Error";
$fechaInf=isset($_POST["fechaInf"])?$_POST["fechaInf"]:"Error";
$destino=isset($_POST["destino"])?$_POST["destino"]:"Error";
$fechainicio=isset($_POST["fechainicio"])?$_POST["fechainicio"]:"Error";
$fechafin=isset($_POST["fechafin"])?$_POST["fechafin"]:"Error";
$sintesis=isset($_POST["sintesis"])?$_POST["sintesis"]:"Error";
$jefeinmediato=isset($_POST["jefeinmediato"])?$_POST["jefeinmediato"]:"Error";



$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('logov.jpg',15,3,-280);
$pdf->SetFont('Arial','',11);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->MultiCell(0, 5, 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES', 0, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'DELEGACION FEDERAL SINALOA', 0,0, 'C');
$pdf->Ln(25);
$pdf->SetFont('Arial','', 9);
//$pdf->Cell(40, 5, '', 1, 0, 'L');
$pdf->Cell("", 5, 'INFORME DE COMISION', 0, 1, 'R');
$pdf->Ln(5);

$pdf->Cell(40, 10, 'NÚMERO', 1, 0, 'C');
$pdf->Cell(55, 10, $numero, 1, 0, 'C');
$pdf->Cell(40, 10, 'FECHA', 1, 0, 'C');
$pdf->Cell(55, 10, $fechaInf, 1, 1, 'C');
$pdf->Cell("", 5, '', 1, 1, 'C');
$pdf->Cell(40, 10, 'LUGAR', 1, 0, 'C');
$pdf->Cell(55, 10, $destino, 1, 0, 'C');
$pdf->Cell(40, 10, 'PERIODO', 1, 0, 'C');
$pdf->Cell(55, 10, $fechainicio." AL ". $fechafin, 1, 1, 'C');
$pdf->Cell("", 5, '', 1, 1, 'C');
$pdf->Rect(10,90,40,125);
$pdf->Cell(40, 10, 'SINTESIS', 0, 0, 'C');
$pdf->Rect(50,90,150,125);
$pdf->MultiCell("", 5, $sintesis, 0, 'L');
/*

$pdf->Ln(15);
$pdf->Cell(10, 10, "", 1, 0, 'C');
$pdf->Cell(60, 10, $nombre, 1, 0, 'C');
$pdf->Cell(80, 10, "FIRMA DEL SERVIDOR PUBLICO COMISIONADO", 1, 0, 'C');
*/
$pdf->Ln(5);
$pdf->Rect(10,215,190,40);
$pdf->SetWidths(array(20,60,30,60,10));
$pdf->SetAligns(array('C','C','C','C','C'));
//for($i=0;$i<20;$i++)
//$pdf->SetAligns('C');
$pdf->SetFont('Arial','',7);
$pdf->Row(array('',$nombre,'',$jefeinmediato,''));
$pdf->Ln(5);
$pdf->SetWidths(array(20,65,20,65,10));
$pdf->Row(array('',"_____________________________________________",'',"_____________________________________________",''));
$pdf->SetFont('Arial','',9);
$pdf->Row(array('',"FIRMA DEL SERVIDOR PUBLICO COMISIONADO",'',"JEFE INMEDIATO",''));
$pdf->Ln(5);
$pdf->SetFont('Arial','',7);
$pdf->MultiCell("", 5, "Declaro, bajo protesta de decir verdad, que los datos contenidos en este formato son los solicitados y manifiesto tener conocimiento de las sanciones que se aplicarian en caso contrario.", 0, 'L');






$pdf->Output();

?>