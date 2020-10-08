<?Php
require "connection_data.php";//connection to database

//SQL to get 10 records
$count="select * from customers";
require('fpdf/fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();
$title = '20000 Leagues Under the Seas';
$pdf->SetTitle($title);
// Select Arial bold 15
$pdf->SetFont('Arial','B',15);
    // Move to the right
$pdf->Cell(80);
    // Framed title
$pdf->Cell(30,10,'GULFMAX NUETRAL CARE LIMITED',0,0,'C');
$pdf->Ln(20);
$pdf->SetY(15);
$pdf->Cell(80);
$pdf->Cell(30,10,'Delivery Note',0,0,'C');
    // Line break
$pdf->Ln(20);
$pdf->SetY(20);
$pdf->Cell(80);
$pdf->Cell(30,10,'072347272',0,0,'C');
    // Line break
$pdf->Ln(20);
$width_cell=array(30,40,40,40,40);
$pdf->SetFont('Arial','B',12);

//Background color of header//
$pdf->SetFillColor(62,236,22);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'Number',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'CustomerName',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Location',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Address',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Phone',1,1,'C',true); 
//// header ends ///////
$pdf->Cell($width_cell[4],10,'Phone',1,1,'C',true); 
//// header ends ///////

$pdf->SetFont('Arial','I',12);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
foreach ($conn->query($count) as $row) {
$pdf->Cell($width_cell[0],20,$row['customer_no'],1,0,'L',$fill);
$pdf->Cell($width_cell[1],20,$row['customer_name'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],20,$row['customer_location'],1,0,'L',$fill);
$pdf->Cell($width_cell[3],20,$row['customer_address'],1,0,'L',$fill);
$pdf->Cell($width_cell[4],20,$row['customer_phone'],1,1,0,$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 
    // Select Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Print centered page number
    $pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');
$pdf->Output();

?>
