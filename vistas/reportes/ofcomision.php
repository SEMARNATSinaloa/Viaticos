<?php

    require('../../public/plugins/fpdf181/fpdf.php');

    setlocale(LC_ALL,"es_ES");
    //190px de ancho de la hoja con los margenes
    $fechaof=isset($_POST["fechaof"])?$_POST["fechaof"]:"";
    $departamento=isset($_POST["departamento"])?$_POST["departamento"]:"";
    $noficio=isset($_POST["noficio"])?$_POST["noficio"]:"";
    $nombre=isset($_POST["nombre"])?$_POST["nombre"]:"";
    $puesto=isset($_POST["puesto"])?$_POST["puesto"]:"";
    $destino=isset($_POST["destino"])?$_POST["destino"]:"";
    $duracion=isset($_POST["duracion"])?$_POST["duracion"]:"";
    $fechainicio=isset($_POST["fechainicio"])?$_POST["fechainicio"]:"";
    $fechafin=isset($_POST["fechafin"])?$_POST["fechafin"]:"";
    $objetivo=isset($_POST["objetivo"])?$_POST["objetivo"]:"";
    $jefeinmediato=isset($_POST["jefeinmediato"])?$_POST["jefeinmediato"]:"";
    $puestojefe=isset($_POST["puestojefe"])?$_POST["puestojefe"]:"";
    $cierreoficio="Asimismo, solicito presente su informe de comisión y entregue el ".
                    "residual del boleto de avión, los pases de abordar, la comprobación documental ".
                    "de su comisión, segun sea el caso, en un lapso no mayor a 6 días hábiles posteriores ".
                    "a su regreso.";

        $fechaof = str_replace('/','-', $fechaof);
        $timestamp = strtotime($fechaof);
        
        setlocale(LC_TIME, 'spanish');
        //$fecha=strftime("%A %d de %B del %Y");
        $fechaof=strftime("%A %d de %B del %Y", $timestamp);

    //$pdf2 = new PDF_MC_Table();
    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->AddFont("Montserrat", "");
    $pdf->AddFont("Montserrat-Bold", "");
    $pdf->Image('logov.jpg',20,05,-280);
    $pdf->SetFont('Montserrat','',10);
    $pdf->Ln(10);
    $pdf->Cell(65, 5, '', 0, 0, 'L');
    $pdf->Cell(0, 5, 'Delegación Federal en el Estado de Sinaloa', 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(65, 5, '', 0, 0, 'L');
    $pdf->Cell(0, 5, $departamento, 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(65, 5, '', 0, 0, 'L');
    $pdf->Cell(20, 5, 'Oficio No.:', 0, 0, 'L');
    $pdf->Cell(60, 5, $noficio, 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(65, 5, '', 0, 0, 'L');
    $pdf->Cell(20, 5, 'Fecha:', 0, 0, 'L');
    $pdf->Cell(105, 5, $fechaof, 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Nombre del comisionado:', 0, 0, 'L');
    $pdf->Cell(130, 5, $nombre, 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Puesto:', 0, 0, 'L');
    $pdf->Cell(130, 5, $puesto, 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'P r e s e n t e .', 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(180, 5, 'Hago de su conocimiento la comisión oficial que le ha sido conferida, cuyos principales datos se ', 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(180, 5, 'detallan a continuacion:', 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Nombre del Viaticante:', 0, 0, 'L');
    $pdf->Cell(130, 5, $nombre, 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Destino(s) de Comisión:', 0, 0, 'L');
    $pdf->Cell(130, 5, $destino, 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Días que dura la comisión:', 0, 0, 'L');
    $pdf->Cell(15, 5, $duracion, 0, 0, 'L');
    $pdf->Cell(115, 5, 'Días.', 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Fechas que comprende:', 0, 0, 'L');
    $pdf->Cell(30, 5, $fechainicio, 0, 0, 'L');
    $pdf->Cell(20, 5, 'al:', 0, 0, 'C');
    $pdf->Cell(30, 5, $fechafin, 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Objetivo de la comisión:', 0, 0, 'L');
    $pdf->MultiCell(130, 5, $objetivo, 0, 'L');
    $pdf->Ln(10);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->MultiCell(180, 5, $cierreoficio, 0, 'L');
    $pdf->Ln(5);
    $pdf->SetFont('Montserrat-Bold','',10);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Atentamente:', 0, 1, 'L');
    $pdf->Ln(5);
    $pdf->SetFont('Montserrat','',10);
    $pdf->SetWidths(array(5,75,5,105,0));
    $pdf->SetAligns(array('C','C','C','C','C'));
    //for($i=0;$i<20;$i++)
    //$pdf->SetAligns('C');
    $pdf->SetFont('Montserrat','',8);
    $pdf->Row(array('',$puestojefe,'',"\"Con fundamento en lo dispuesto por el artículo 84 del Reglamento Interior de la Secretaría de Medio Ambiente y Recursos Naturales, en suplencia, por ausencia del Titular de la Delegación Federal en los términos del artículo 17 Bis en relación con los artículos Octavo y Décimo Tercero Transitorios del Decreto por el que se reforman, adicionan y derogan diversas disposiciones de la Ley Orgánica de la Administración Pública Federal, publicado en el Diario Oficial de la Federación el 30 de noviembre de 2018 de la SEMARNAT en el estado de Sinaloa, previa designación, firma el presente el Subdelegado de Gestión para la Protección Ambiental y Recursos Naturales\"",''));
    $pdf->Ln(15);
    $pdf->SetFont('Montserrat','',10);
    $pdf->Row(array('',$jefeinmediato,'','Francisco Javier Ochoa Loza',''));


    $pdf->Output();
?>