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
$cuota=isset($_POST["cuota"])?$_POST["cuota"]:"Error";
$duracion=isset($_POST["duracion"])?$_POST["duracion"]:"Error";
$importe=isset($_POST["importe"])?$_POST["importe"]:"Error";
$objetivo=isset($_POST["objetivo"])?$_POST["objetivo"]:"Error";
$autorizador=isset($_POST["autorizador"])?$_POST["autorizador"]:"Error";
$puestojefe=isset($_POST["puestojefe"])?$_POST["puestojefe"]:"Error";
$adscripcion=isset($_POST["adscripcion"])?$_POST["adscripcion"]:"Error";


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->Image('logoh.jpg',15,20,-1100);
$pdf->SetFont('Arial','',15);
$pdf->Ln(10);
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->MultiCell(0, 5, 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES.', 0, 'C');
$pdf->Cell(65, 5, '', 0, 0, 'L');
$pdf->Cell(0, 5, 'DELEGACION FEDERAL SINALOA', 0,0, 'C');
$pdf->SetFont('Arial','', 9);
$pdf->Ln(10);
$pdf->Cell(10, 5, '', 0, 0, 'L');
$pdf->Cell(170, 5, 'O R D E N   D E   M I N I S T R A C I O N   D E   V I A T I C O S', 0, 1, 'C');
//$pdf->Ln(15);
$pdf->MultiCell(30, 5, 'No. de Oficio de Comisión:', 1, 'C');
$pdf->SetXY(40,45);
$pdf->MultiCell(40, 10, $noficio, 1, 'L');
$pdf->SetXY(80,45);
$pdf->MultiCell(29, 10, 'Fecha:', 1, 'L');
$pdf->SetXY(109,45);
$pdf->MultiCell(29, 10, $fechaof, 1, 'L');
$pdf->SetXY(138,45);
$pdf->MultiCell(29, 10, 'Folio:', 1, 'L');
$pdf->SetXY(167,45);
$pdf->MultiCell(29, 10, $folio, 1, 'L');
$pdf->SetXY(10,55);
$pdf->MultiCell(30, 5, 'Clave Presupuestal:', 1, 'C');
$pdf->SetXY(40,55);
$pdf->MultiCell(156, 10, $clavep, 1, 'L');

$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(186, 5, 'DATOS DE COMISIONADO', 1, 0, 'C');
$pdf->SetFont('Arial','', 9);
$pdf->Ln(10);
$pdf->SetXY(10,80);
$pdf->MultiCell(30, 10, 'Nombre:', 1, 'L');
$pdf->SetXY(40,80);
$pdf->MultiCell(100, 10, $nombre, 1, 'L');
$pdf->SetXY(140,80);
$pdf->MultiCell(25, 10, 'Nivel:', 1, 'L');
$pdf->SetXY(165,80);
$pdf->MultiCell(31, 10, $nivel, 1, 'L');

$pdf->MultiCell(30, 10, 'Puesto:', 1, 'L');
$pdf->SetXY(40,90);
$pdf->MultiCell(156, 10, $puesto, 1, 'L');
$pdf->SetXY(10,100);
$pdf->MultiCell(30, 10, 'Categoría:', 1, 'L');
$pdf->SetXY(40,100);
$pdf->MultiCell(156, 10, $base, 1, 'L');

$pdf->Cell(30, 10, 'Área de Adscripción:', 1, 0, 'L');
$pdf->SetXY(40,110);
$pdf->MultiCell(156, 10, $adscripcion, 1, 'L');

$pdf->Ln(5);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(186, 5, 'DATOS DE COMISION', 1, 0, 'C');
$pdf->SetFont('Arial','', 9);
$pdf->Ln(10);

$pdf->Cell(50, 10, 'Viaticos:', 1, 0, 'L');
$pdf->Cell(136, 10, '', 1, 0, 'L');
$pdf->SetXY(100,135);
$pdf->Cell(60,10,'Base',0,0,'L');
$pdf->SetXY(140,135);
$pdf->Cell(60,10,'Confianza',0,1,'L');

if($base=='Base'){
    $pdf->Image('check.png',95,137, -200);
    $pdf->Image('uncheck.png',135,137, -200);
}
else{
    $pdf->Image('uncheck.png',95,137, -200);
    $pdf->Image('check.png',135,137, -200);
}


//$pdf->Ln(10);
$pdf->Cell(50, 10, 'Medio de transporte:', 1, 0, 'L');
//$pdf->SetXY(40,150);
$pdf->Cell(136, 10, '', 0, 0, 'L');
$pdf->SetXY(60,145);
$pdf->Cell(45,10,'                    Avión',1,0,'L');
$pdf->SetXY(105,145);
$pdf->Cell(45,10,'                    Autobús',1,0,'L');
$pdf->SetXY(150,145);
$pdf->Cell(46,10,'                    Automóvil',1,0,'L');


switch ($transporte) {
    case 'Automóvil':
        $pdf->Image('uncheck.png',73,147, -200);
        $pdf->Image('uncheck.png',118,147, -200);
        $pdf->Image('check.png',163,147, -200);
        break;
    case 'Avión':
        $pdf->Image('check.png',73,147, -200);
        $pdf->Image('uncheck.png',118,147, -200);
        $pdf->Image('uncheck.png',163,147, -200);
        break;
    case 'Autobús':
        $pdf->Image('uncheck.png',73,147, -200);
        $pdf->Image('check.png',118,147, -200);
        $pdf->Image('uncheck.png',163,147, -200);
        break;
}
$pdf->Ln();

$pdf->SetWidths(array(70,29,29,29,29));
$pdf->SetBorder(array(1,1,1,1,1));
$pdf->SetAligns(array('C','C','C','C','C'));
$importe=$cuota*$duracion;
$pdf->SetFont('Arial','B',11);
$pdf->Row(array('LUGAR Y PERIODO DE LA COMISIÓN','TARIFA Y NIVEL','CUOTA DIARIA','DIAS','IMPORTE $(pesos)'));
$pdf->SetFont('Arial','',9);
$pdf->Row(array($lugar.', del '.$fechacoinicio.' al '.$fechacofin,$nivel,$cuota,$duracion, $importe ));
//for($i=0;$i<4;$i++)
$pdf->Row(array('','','','',''));

$pdf->Cell(157,10,'REALMENTE GASTADO',1,0,'R');
$pdf->Cell(29,10,'$ '.$importe,1,1,'C');
$pdf->SetWidths(array(50,136));
$pdf->SetBorder(array(1,1));
$pdf->SetAligns(array('C','L'));
$pdf->Row(array('Motivo de la comisión:', $objetivo));
$pdf->SetXY(10,230);
$pdf->Cell(62,10,'COMISIONADO(A)','LTR',0,'C');
$pdf->Cell(62,10,'Vo.Bo.','LTR',0,'C');
$pdf->Cell(62,10,'AUTORIZA','LTR',1,'C');
$pdf->Cell(10,20,'','L',0,'C');
$pdf->Cell(42,20,'','B',0,'C');
$pdf->Cell(10,20,'','R',0,'C');
$pdf->Cell(10,20,'','L',0,'C');
$pdf->Cell(42,20,'','B',0,'C');
$pdf->Cell(10,20,'','R',0,'C');
$pdf->Cell(10,20,'','L',0,'C');
$pdf->Cell(42,20,'','B',0,'C');
$pdf->Cell(10,20,'','R',1,'C');

//$pdf->SetXY(32,250);
$pdf->MultiCell(62,5,$nombre."\n".$puesto,'LBR','C');
$pdf->SetXY(72,260);
$pdf->MultiCell(62,5,$autorizador."\n".$puestojefe."\n ",'LBR','C');
$pdf->SetXY(134,260);
$pdf->MultiCell(62,5,"Jorge Abel Lopez Sanchez \n Delegado Federal de la SEMARNAT \n \n ",'LBR','C');


$pdf->Output();
?>