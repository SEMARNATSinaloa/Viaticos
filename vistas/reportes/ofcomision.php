<?php
require_once "../../config/global.php";
//require_once "../../config/Conexion.php";
require "../../public/plugins/fpdf181/fpdf.php";


    $oculto=isset($_POST["oculto"]);
    $pwd=isset($_POST["pwd"]);
    $apellidop=isset($_POST["apellidop"]);
    $apellidom=isset($_POST["apellidom"]);
    $nombre=isset($_POST["nombre"]);
    $correo=isset($_POST["correo"]);
    $estado=isset($_POST["estado"]);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hola, Múndo!');
$pdf->Output();
?>