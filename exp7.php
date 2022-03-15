<html>

<body>
   <?php
   ob_start();
   require('fpdf/fpdf.php');
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont('Arial', 16);
   $pdf->Cell(40, 10, 'Hello World!');
   $pdf->Cell(50, 40, 'Hello World!');
   $pdf->Cell(60, 10, 'Hello World!');
   $pdf->Output();
   ob_end_flush();
   ?>
</body>

</html>