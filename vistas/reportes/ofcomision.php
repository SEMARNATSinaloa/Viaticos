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


    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image('logoh.jpg',15,20,-1100);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln(10);
    $pdf->Cell(65, 5, '', 1, 0, 'L');
    $pdf->Cell(0, 5, 'Delegación Federal en el Estado de Sinaloa', 1, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(65, 5, '', 1, 0, 'L');
    $pdf->Cell(0, 5, $departamento, 1, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(65, 5, '', 1, 0, 'L');
    $pdf->Cell(20, 5, 'Oficio No.:', 1, 0, 'L');
    $pdf->Cell(60, 5, $noficio, 1, 0, 'L');
    $pdf->Ln(20);
    $pdf->Cell(65, 5, '', 1, 0, 'L');
    $pdf->Cell(20, 5, 'Fecha:', 1, 0, 'L');
    $pdf->Cell(105, 5, strftime("%A %d de %B del %Y"), 1, 0, 'L');
    $pdf->Ln(20);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Nombre del comisionado:', 1, 0, 'L');
    $pdf->Cell(130, 5, $nombre, 1, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Puesto:', 1, 0, 'L');
    $pdf->Cell(130, 5, $puesto, 1, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'P r e s e n t e .', 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(180, 5, 'Hago de su conocimiento la comisión oficial que le ha sido conferida, cuyos principales datos se detallan', 1, 0, 'L');
    $pdf->Ln(5);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(180, 5, 'a continuacion:', 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Nombre del Viaticante:', 1, 0, 'L');
    $pdf->Cell(130, 5, $nombre, 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Destino(s) de Comisión:', 1, 0, 'L');
    $pdf->Cell(130, 5, $destino, 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Días que dura la comisión:', 1, 0, 'L');
    $pdf->Cell(15, 5, $duracion, 1, 0, 'L');
    $pdf->Cell(115, 5, 'Días.', 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Fechas que comprende:', 1, 0, 'L');
    $pdf->Cell(30, 5, $fechainicio, 1, 0, 'L');
    $pdf->Cell(20, 5, 'al:', 1, 0, 'C');
    $pdf->Cell(30, 5, $fechafin, 1, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(10, 5, '', 1, 0, 'L');
    $pdf->Cell(50, 5, 'Objetivo de la comisión:', 1, 0, 'L');
    $pdf->MultiCell(130, 5, $objetivo, 1, 'L', false);
    $pdf->Output();
?>