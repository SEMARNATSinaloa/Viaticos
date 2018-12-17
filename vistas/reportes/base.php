<?php
require('../../public/plugins/fpdf181/fpdf.php');

/*
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

print "<p>Su nombre es $_REQUEST[nombre]</p>\n";

*/

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hola, Múndo!');
$pdf->Output();
?>