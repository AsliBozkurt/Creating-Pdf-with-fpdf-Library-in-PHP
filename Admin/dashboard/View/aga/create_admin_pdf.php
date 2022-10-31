<?php
require_once("fpdf184/fpdf.php");
$today_date=date("Y-m-d");

$pdf=new FPDF();
$pdf->AddPage('P','A4');
$pdf->SetFont("Arial","B",12);
$pdf->Image('kou-logo.png',10,5,22);
$pdf->SetFont('Arial','B',8);
// Move to the right
$pdf->Cell(80);
// Title
$pdf->Cell(30,2,'T.C',0,1,'C');
$pdf->Cell(80);
$pdf->Cell(30,5,'KOCAELI UNIVERSITESI',0,1,'C');
$pdf->Cell(80);
$pdf->Cell(30,5,'TEKNOLOJI FAKULTESI',0,1,'C');
$pdf->Cell(80);
$pdf->Cell(30,5,"ADMIN LISTESI",0,1,"C");
$pdf->Cell(160);
$pdf->Cell(30,20,"Tarih: {$today_date} ",0,1,'L');
$pdf->Ln(10);
//table column

$pdf->SetFont("Arial","B",12);
$pdf->Cell(15,10,"#",1,0,"C");
$pdf->Cell(46,10,"Full Name",1,0,"C");
$pdf->Cell(45,10,"E-mail",1,0,"C");
$pdf->Cell(75,10,"Password",1,1,"C");

// table rows 
$pdf->SetFont("Arial","B",8);
$connection =mysqli_connect('localhost','root','','yazgeldb');
$sql='SELECT * FROM admin';
$result=mysqli_query($connection,$sql);
$i = 1;
while($row=mysqli_fetch_assoc($result)){
    $pdf->SetFont("Arial","",8);
   // $pdf->MultiCell(15,10,$row['user_id'],'LRTB','false');
    //$pdf->MultiCell(86.5,10,$row['user_fullName'],'LRTB','false');
    $pdf->Cell(15,10,$i,1,0,"L");
    $pdf->Cell(46,10,$row['admin_full_name'],1,0,"L");
    $pdf->Cell(45,10,$row['admin_email'],1,0,"L");
    $pdf->Cell(75,10,$row['admin_password'],1,1,"L");
    $i++;
}
    //for($i=1;$i<$i+1;$i++)
    //$pdf->Cell(0,10,'',0,1);
     
$pdf->Output();
?>



