<?php
require('../../public/plugins/fpdf181/fpdf.php');
setlocale(LC_ALL,"es_ES");

$noficio=isset($_POST["noficio"])?$_POST["noficio"]:"Error";
$fechaof=isset($_POST["fechaof"])?$_POST["fechaof"]:"Error";
$folio=isset($_POST["folio"])?$_POST["folio"]:"Error";
$clavep=isset($_POST["clavep"])?$_POST["clavep"]:"Error";
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:"Error";
$nivel=isset($_POST["nivel"])?$_POST["nivel"]:"Error";
$puesto=isset($_POST["puesto"])?$_POST["puesto"]:"Error";
$base=isset($_POST["base"])?$_POST["base"]:"Error";
$lugar=isset($_POST["lugar"])?$_POST["lugar"]:"Error";
$transporte=isset($_POST["transporte"])?$_POST["transporte"]:"Error";
$fechacoinicio=isset($_POST["fechacoinicio"])?$_POST["fechacoinicio"]:"Error";
$fechacofin=isset($_POST["fechacofin"])?$_POST["fechacofin"]:"Error";
$tarifa=isset($_POST["tarifa"])?$_POST["tarifa"]:"Error";
$cuota=isset($_POST["cuota"])?$_POST["clavep"]:"Error";
$duracion=isset($_POST["duracion"])?$_POST["duracion"]:"Error";
$importe=isset($_POST["importe"])?$_POST["importe"]:"Error";
$objetivo=isset($_POST["objetivo"])?$_POST["objetivo"]:"Error";
$autorizador=isset($_POST["autorizador"])?$_POST["autorizador"]:"Error";
$puestojefe=isset($_POST["puestojefe"])?$_POST["puestojefe"]:"Error";



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,$noficio);
$pdf->Ln();
$pdf->Cell(40,10,$fechaof);
$pdf->Ln();
$pdf->Cell(40,10,$folio);
$pdf->Ln();
$pdf->Cell(40,10,$clavep);
$pdf->Ln();
$pdf->Cell(40,10,$nombre);
$pdf->Ln();
$pdf->Cell(40,10,$nivel);
$pdf->Ln();
$pdf->Cell(40,10,$puesto);
$pdf->Ln();
$pdf->Cell(40,10,$base);
$pdf->Ln();
$pdf->Cell(40,10,$lugar);
$pdf->Ln();
$pdf->Cell(40,10,$transporte);
$pdf->Ln();
$pdf->Cell(40,10,$fechacoinicio);
$pdf->Ln();
$pdf->Cell(40,10,$fechacofin);
$pdf->Ln();
$pdf->Cell(40,10,$tarifa);
$pdf->Ln();
$pdf->Cell(40,10,$cuota);
$pdf->Ln();
$pdf->Cell(40,10,$duracion);
$pdf->Ln();
$pdf->Cell(40,10,$importe);
$pdf->Ln();
$pdf->Cell(40,10,$objetivo);
$pdf->Ln();
$pdf->Cell(40,10,$autorizador);
$pdf->Ln();
$pdf->Cell(40,10,$puestojefe);



$pdf->Output();
?>