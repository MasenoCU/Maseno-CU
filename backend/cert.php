<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}


require_once'app/components/tcpdf.php';

$userName = $_SESSION['user_name'];
$completionDate = date("F j, Y");

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('MASENO UNIVERSITY CHRISTIAN UNION');
$pdf->SetTitle('Certificate of MEMBERSHIP');
$pdf->SetSubject('Certificate');

// Remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Set background image
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'path/to/your/canva-template.png'; 
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();

// Set font for the user's name
$pdf->SetFont('helvetica', 'B', 30);
$pdf->SetTextColor(0, 0, 0);

// Position the user's name (adjust the coordinates to fit your template)
$pdf->SetXY(50, 100); // Adjust these coordinates
$pdf->Cell(0, 15, $userName, 0, 1, 'C', 0, '', 0, false, 'T', 'M');

// Set font for the date
$pdf->SetFont('helvetica', 'B', 20);

$pdf->SetXY(50, 200); // Adjust these coordinates
$pdf->Cell(0, 15, 'on ' . $completionDate, 0, 1, 'C', 0, '', 0, false, 'T', 'M');

// Output PDF
$pdf->Output('certificate.pdf', 'D');
?>
