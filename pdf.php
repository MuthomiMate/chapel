<?php
// require('fpdf.php');

// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World!');
// $pdf->Output();
 
require_once 'functions.php';
$db = new functions();
//$RegNO='56677788';
$db->printPdf();

?>
