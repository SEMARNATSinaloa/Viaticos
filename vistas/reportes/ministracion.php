<?php
require('../../public/plugins/fpdf181/fpdf.php');
setlocale(LC_ALL,"es_ES");

//Implementamos un metodo para editar los registros
function acompletar($dato)
{
    $tamaño = strlen($dato);
    //echo($tamaño);
    if($tamaño<60)
    {
        //$tamaño=60-$tamaño;
        //echo($tamaño);
        //for($tamaño;$tamaño<60;$tamaño++)
        //{
            $dato=$dato."\n";
        //}
    }
    return $dato;
}

$noficio=isset($_POST["noficio"])?$_POST["noficio"]:"Error";
$fechaof=isset($_POST["fechaof"])?$_POST["fechaof"]:"Error";
$folio=isset($_POST["folio"])?$_POST["folio"]:"Error";
$clavep=isset($_POST["clavep"])?$_POST["clavep"]:"Error";
$nombre=isset($_POST["nombre"])?acompletar($_POST["nombre"]):"Error";
$nivel=isset($_POST["nivel"])?$_POST["nivel"]:"Error";
$puesto=isset($_POST["puesto"])?acompletar($_POST["puesto"]):"Error";
$base=isset($_POST["base"])?$_POST["base"]:"Error";
$lugar=isset($_POST["lugar"])?$_POST["lugar"]:"Error";
$transporte=isset($_POST["transporte"])?$_POST["transporte"]:"Error";
$fechacoinicio=isset($_POST["fechacoinicio"])?$_POST["fechacoinicio"]:"Error";
$fechacofin=isset($_POST["fechacofin"])?$_POST["fechacofin"]:"Error";
$tarifa=isset($_POST["tarifa"])?$_POST["tarifa"]:"Error";
$cuota=isset($_POST["cuota"])?$_POST["cuota"]:"Error";
$duracion=isset($_POST["duracion"])?$_POST["duracion"]:"Error";
//$importe=isset($_POST["importe"])?$_POST["importe"]:"Error";
$objetivo=isset($_POST["objetivo"])?$_POST["objetivo"]:"Error";
$jefei=isset($_POST["jefei"])?acompletar($_POST["jefei"]):"Error";
$puestojefei=isset($_POST["puestojefei"])?acompletar($_POST["puestojefei"]):"Error";
$autorizador=isset($_POST["autorizador"])?acompletar($_POST["autorizador"]):"Error";
$puestojefe=isset($_POST["puestojefe"])?acompletar($_POST["puestojefe"]):"Error";
$adscripcion=isset($_POST["adscripcion"])?$_POST["adscripcion"]:"Error";
$leyenda="\"Con fundamento en lo dispuesto por el artículo 84 del Reglamento Interior de la Secretaría de Medio Ambiente y Recursos Naturales, en suplencia, por ausencia del Titular de la Delegación Federal en los términos del artículo 17 Bis en relación con los artículos Octavo y Décimo Tercero Transitorios del Decreto por el que se reforman, adicionan y derogan diversas disposiciones de la Ley Orgánica de la Administración Pública Federal, publicado en el Diario Oficial de la Federación el 30 de noviembre de 2018 de la SEMARNAT en el estado de Sinaloa, previa designación, firma el presente el Subdelegado de Gestión para la Protección Ambiental y Recursos Naturales\"";

$delegado=acompletar($delegado="Francisco Javier Ochoa Loza \n ");


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
$pdf->Row(array($lugar.', del '.$fechacoinicio.' al '.$fechacofin,$nivel,number_format($cuota, 2, '.', ' '),$duracion, number_format($importe, 2, '.', ' ') ));
//for($i=0;$i<4;$i++)
$pdf->Row(array('','','','',''));

$pdf->Cell(157,10,'REALMENTE GASTADO',1,0,'R');
$pdf->Cell(29,10,'$ '.number_format($importe, 2, '.', ' '),1,1,'C');

$pdf->SetXY(10,195);
$pdf->Cell(50,30,'',1,0,'C');
$pdf->Cell(136,30,'',1,0,'C');
$pdf->SetXY(10,195);

$pdf->SetWidths(array(50,136));
$pdf->SetBorder(array(0,0));
$pdf->SetAligns(array('C','L'));
$pdf->Row(array('Motivo de la comisión:', $objetivo));


$pdf->SetXY(10,230);
$pdf->Cell(46.5,10,'COMISIONADO(A)','LTR',0,'C');
$pdf->Cell(46.5,10,'JEFE INMEDIATO','LTR',0,'C');
$pdf->Cell(46.5,10,'Vo.Bo.','LTR',0,'C');
$pdf->Cell(46.5,10,'AUTORIZA','LTR',1,'C');
$pdf->Cell(4.75,20,'','L',0,'C');
$pdf->Cell(37,20,'','B',0,'C');
$pdf->Cell(4.75,20,'','R',0,'C');
$pdf->Cell(4.75,20,'','L',0,'C');
$pdf->Cell(37,20,'','B',0,'C');
$pdf->Cell(4.75,20,'','R',0,'C');
$pdf->Cell(4.75,20,'','L',0,'C');
$pdf->Cell(37,20,'','B',0,'C');
$pdf->Cell(4.75,20,'','R',0,'C');
$pdf->Cell(4.75,20,'','L',0,'C');
$pdf->Cell(37,20,'','B',0,'C');
$pdf->Cell(4.75,20,'','R',1,'C');


//$pdf->SetXY(32,250);
$pdf->MultiCell(46.5,5,$nombre."\r".$puesto,0,'C');
$pdf->SetXY(56.5,260);
$pdf->MultiCell(46.5,5,$jefei."\r".$puestojefei,0,'C');
$pdf->SetXY(103,260);
$pdf->MultiCell(46.5,5,$autorizador."\r".$puestojefe,0,'C');
$pdf->SetXY(149.5,261);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(46.5,4,$delegado,0,'C');
$pdf->SetFont('Arial','',3.5);
$pdf->SetXY(149.5,270);
$pdf->MultiCell(46.5,2,$leyenda,0,'C');

$pdf->SetXY(10,260);
$pdf->Cell(46.5,30,"",'LBR',0,"C");
$pdf->Cell(46.5,30,"",'LBR',0,"C");
$pdf->Cell(46.5,30,"",'LBR',0,"C");
$pdf->Cell(46.5,30,"",'LBR',0,"C");

$pdf->Output();
?>