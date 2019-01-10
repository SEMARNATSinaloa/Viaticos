<?php
require('../../public/plugins/fpdf181/fpdf.php');

//print "<pre>"; print_r($_REQUEST); print "</pre>\n";

//print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

$fecha=isset($_POST["fecha"])?$_POST["fecha"]:"Error";
$periodo1=isset($_POST["periodo1"])?$_POST["periodo1"]:"Error";
$añop1=isset($_POST["añop1"])?$_POST["añop1"]:"Error";
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
$periodo2=isset($_POST["periodo2"])?$_POST["periodo2"]:"Error";
$añop2=isset($_POST["añop2"])?$_POST["añop2"]:"Error";
$fechaip1=isset($_POST["fechaip1"])?$_POST["fechaip1"]:"Error";
$fechafp1=isset($_POST["fechafp1"])?$_POST["fechafp1"]:"Error";
$fechaip2=isset($_POST["fechaip2"])?$_POST["fechaip2"]:"Error";
$fechafp2=isset($_POST["fechafp2"])?$_POST["fechafp2"]:"Error";



//echo $fechai."<br>";
$fechai = str_replace('/','-', $fechai);
$fechaf = str_replace('/','-', $fechaf);
$fechaip1 = str_replace('/','-', $fechaip1);
$fechaip2 = str_replace('/','-', $fechaip2);
$fechafp1 = str_replace('/','-', $fechafp1);
$fechafp2 = str_replace('/','-', $fechafp2);
$timestampi = strtotime($fechai);
$timestampf = strtotime($fechaf);
$timestampip1 = strtotime($fechaip1);
$timestampip2 = strtotime($fechaip2);
$timestampfp1 = strtotime($fechafp1);
$timestampfp2 = strtotime($fechafp2);
setlocale(LC_TIME, 'spanish');
$fechai= strftime("%A %d de %B del %Y", $timestampi);
$fechaf= strftime("%A %d de %B del %Y", $timestampf);
$fechaip1= strftime("%A %d de %B del %Y", $timestampip1);
$fechaip2= strftime("%A %d de %B del %Y", $timestampip2);
$fechafp1= strftime("%A %d de %B del %Y", $timestampfp1);
$fechafp2= strftime("%A %d de %B del %Y", $timestampfp2);







//die();

/*
$fechai= date('d/m/Y', strtotime(str_replace('-','/', $fechai)));
$fechaf= date('d/m/Y', strtotime(str_replace('/','-', $fechaf)));
//die($fechaf);
$date = new DateTime($fechai);
echo $date->getTimestamp();
echo $fechai=strftime("%A %d de %B del %Y", $fechaf);
//$fechaf=strftime("%A %d de %B del %Y", $fechaf);
die();
*/

//contar dias habiles 
/*
$i=0;
while($fechaf>=$fechai){
    $i++;
    $fechai = strtotime ( '+1 day' , strtotime ( $fechai ) ) ;
    echo date( "d/m/Y" , $fechai );
    //echo strtotime($fechai);
}*/

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('logov.jpg',35,5,-300);
$pdf->Rect(25,10,160,275);
$pdf->Rect(26,11,158,273);
$pdf->Rect(25.5,10.5,159,274);


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
$pdf->Cell(30, 5, $periodo1."/".$añop1, 1,0, 'C');
$pdf->Cell(30, 5, "Periodo", 0,1, 'L');

if($periodo2==="-")
{
    $pdf->Ln(1);
}
else{
    if($periodo1===$periodo2 && $añop1===$añop2){
        $pdf->Ln(1);
    }
    else{
        $pdf->Ln(1);
        $pdf->Cell(100, 5, '', 0, 0, 'L');
        $pdf->Cell(30, 5, $periodo2."/".$añop2, 1,0, 'C');
        $pdf->Cell(30, 5, "Periodo", 0,1, 'L');
        $pdf->Ln(1);
    }
}

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
$pdf->Ln(5);
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

$pdf->Ln(5);
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

$pdf->Ln(5);
$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(74, 5, $adscripcion, "B",0, 'C');
$pdf->Cell(15, 5, "", 0,0, 'C');
$pdf->Cell(65, 5, $puesto, "B",0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Cell(18, 5, "", 0,0, 'L');
$pdf->Cell(74, 5, "Unidad Administrativa o Área de Adscripción", 0,0, 'C');
$pdf->Cell(25, 5, "", 0,0, 'C');
$pdf->Cell(54, 5, "Puesto", 0,0, 'C');
$pdf->Cell(19, 5, "", 0,1, 'L');

$pdf->Rect(28,110,154,0.2);
$pdf->Line(28,110.7,182,110.7);

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->MultiCell(150, 4, "De conformidad con las fracciones III y XIV del apartado B, del articulo 123 Constitucional, y 30 de la Ley Federal de los Trabajadores al Servicio del Estado, solicito disfrutar de vacaciones en el siguiente:",0, 'J');

$pdf->Ln(5);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(10, 5, "Del:", 0,0, 'L');
$pdf->Cell(55, 5, utf8_encode($fechai), "B",0, 'L');
$pdf->Cell(25, 5, "Al: ", 0,0, 'R');
$pdf->Cell(55, 5, utf8_encode($fechaf), "B",0, 'L');
if($periodo2 != "-"){
    
    if($fechaip2 != "jueves 01 de enero del 1970"){
        $pdf->Ln(5);
        $pdf->Cell(20, 5, "", 0,0, 'L');
        $pdf->Cell(10, 5, "Del:", 0,0, 'L');
        $pdf->Cell(55, 5, utf8_encode($fechaip1), "B",0, 'L');
        $pdf->Cell(25, 5, "Al: ", 0,0, 'R');
        $pdf->Cell(55, 5, utf8_encode($fechafp1), "B",0, 'L');
        $pdf->Ln(5);
        $pdf->Cell(20, 5, "", 0,0, 'L');
        $pdf->Cell(10, 5, "Del:", 0,0, 'L');
        $pdf->Cell(55, 5, utf8_encode($fechaip2), "B",0, 'L');
        $pdf->Cell(25, 5, "Al: ", 0,0, 'R');
        $pdf->Cell(55, 5, utf8_encode($fechafp2), "B",0, 'L');
    }
    else{
        $pdf->Ln(5);
        $pdf->Cell(20, 5, "", 0,0, 'L');
        $pdf->Cell(10, 5, "Del:", 0,0, 'L');
        $pdf->Cell(55, 5, utf8_encode($fechaip1), "B",0, 'L');
        $pdf->Cell(25, 5, "Al: ", 0,0, 'R');
        $pdf->Cell(55, 5, utf8_encode($fechafp1), "B",0, 'L');
    }
}


$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Número de días hábiles autorizados del periodo:", 0,0, 'L');
$pdf->Cell(20, 5, $diasaut, 1,1, 'C');
$pdf->Ln(4);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Número de días pendientes por disfrutar del periodo:", 0,0, 'L');
$pdf->Cell(20, 5, $diaspen, 1,0, 'C');

$pdf->Ln(10);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->Cell(85, 5, "Observaciones:", 0,1, 'L');
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->MultiCell(150, 4, $observaciones, 0, 'J');

$pdf->Ln(5);
//$pdf->SetY(191);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->MultiCell(150, 4, "Lo anterior, toda vez que me encuentro al corriente del cumplimiento de mis funciones y conforme al derecho que me asiste al contar con mas de seis meses de servicios ininterrumpidos en el de sempeño de mi cargo:", 0, 'J');


//$pdf->Cell(60, 5, "", 1,0, 'L');
$pdf->Ln(10);
$pdf->Cell(60, 5, "", 0,0, 'L');
$pdf->Cell(70, 5, "", "B",1, 'L');
$pdf->Cell(60, 5, "", 0,0, 'L');
$pdf->MultiCell(70, 5, $nombre." ".$apaterno." ".$amaterno, "T", 'C');

$pdf->Ln(5);
$pdf->Cell(20, 5, "", 0,0, 'L');
$pdf->MultiCell(150, 4, "En mi carácter de superior jerárquico del servidor publico solicitante y de conformidad con las disposiciones legales y administrativas, autorizo disfrutar del periodo vacacional señalado.", 0, 'J');

$pdf->Ln(5);
$pdf->Cell(60, 5, "", 0,0, 'L');
$pdf->MultiCell(70, 5, $puestojefe, 0, 'C');
$pdf->Ln(15);
$pdf->Cell(60, 5, "", 0,0, 'L');
$pdf->Cell(70, 5, "", "B",1, 'L');
$pdf->Cell(60, 5, "", 0,0, 'L');
$pdf->MultiCell(70, 5, $jefe, "T", 'C');


/*
$pdf->SetXY(10,245);
$pdf->Cell(18,10,'','LTR',0,'C');
$pdf->Cell(60,10,'JEFE INMEDIATO','LTR',0,'C');
$pdf->Cell(33,10,'','LTR',0,'C');
$pdf->Cell(60,10,'AUTORIZA','LTR',1,'C');
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
*/
$pdf->Output();
?>