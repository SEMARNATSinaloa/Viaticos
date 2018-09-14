<?php

    require('../../public/plugins/fpdf181/fpdf.php');

    setlocale(LC_ALL,"es_ES");
    //190px de ancho de la hoja con los margenes
    $departamento=isset($_POST["departamento"])?$_POST["departamento"]:"oculto vacio";
    $noficio=isset($_POST["noficio"])?$_POST["noficio"]:"pwd vacio";
    $nombre=isset($_POST["nombre"])?$_POST["nombre"]:"apellidop vacio";
    $puesto=isset($_POST["puesto"])?$_POST["puesto"]:"apellidom vacio";
    $destino=isset($_POST["destino"])?$_POST["destino"]:"nombre vacio";
    $duracion=isset($_POST["duracion"])?$_POST["duracion"]:"correo vacio";
    $fechainicio=isset($_POST["fechainicio"])?$_POST["fechainicio"]:"estado vacio";
    $fechafin=isset($_POST["fechafin"])?$_POST["fechafin"]:"estado vacio";
    $objetivo=isset($_POST["objetivo"])?$_POST["objetivo"]:"estado vacio";
    $jefeinmediato=isset($_POST["jefeinmediato"])?$_POST["jefeinmediato"]:"estado vacio";
    $puestojefe=isset($_POST["puestojefe"])?$_POST["puestojefe"]:"estado vacio";
    $cierreoficio="Asimismo, solicito presente su informe de comisión y entregue el ".
                    "residual del boleto de avión, los pases de abordar, la comprobación documental ".
                    "de su comisión, segun sea el caso, en un lapso no mayor a 6 días hábiles posteriores ".
                    "a su regreso.";

    //$pdf2 = new PDF_MC_Table();
    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->Image('logoh.jpg',15,20,-1100);
    $pdf->SetFont('Arial','',11);
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
    $pdf->Ln(20);
    $pdf->Cell(65, 5, '', 0, 0, 'L');
    $pdf->Cell(20, 5, 'Fecha:', 0, 0, 'L');
    $pdf->Cell(105, 5, strftime("%A %d de %B del %Y"), 0, 0, 'L');
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
    $pdf->Cell(180, 5, 'Hago de su conocimiento la comisión oficial que le ha sido conferida, cuyos principales datos se detallan', 0, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(180, 5, 'a continuacion:', 0, 0, 'L');
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
    $pdf->Ln(15);
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(10, 5, '', 0, 0, 'L');
    $pdf->Cell(50, 5, 'Atentamente:', 0, 1, 'L');
    $pdf->Ln(15);
    $pdf->SetFont('Arial','',11);
    $pdf->SetWidths(array(10,75,20,75,10));
    $pdf->SetAligns(array('C','C','C','C','C'));
    //for($i=0;$i<20;$i++)
    //$pdf->SetAligns('C');
    $pdf->Row(array('',$puestojefe,'','Delegado Federal',''));
    $pdf->Ln(0);
    $pdf->Row(array('',$jefeinmediato,'','Jorge Abel Lopez Sanchez',''));


    $pdf->Output();
?>