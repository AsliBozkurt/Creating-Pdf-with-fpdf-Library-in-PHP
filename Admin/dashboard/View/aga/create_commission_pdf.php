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
$pdf->Cell(30,5,"KOMISYON LISTESI",0,1,"C");
$pdf->Cell(160);
$pdf->Cell(30,20,"Tarih: {$today_date} ",0,1,'L');

//table column

$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,10,"#",1,0,"C"); //190
$pdf->Cell(50,10,"Full Name",1,0,"C");
$pdf->Cell(50,10,"University Number",1,0,"C");
$pdf->Cell(70,10,"Department",1,1,"C");


// table rows 
$pdf->SetFont("Arial","B",8);
$connection =mysqli_connect('localhost','root','','yazgeldb');
$sql="SELECT * FROM teacher WHERE role='komisyon' ";
$result=mysqli_query($connection,$sql);
$i = 1;
while($row=mysqli_fetch_assoc($result)){
    $pdf->SetFont("Arial","",8);
    $pdf->Cell(20,10,$i,1,0,"L");
    $pdf->Cell(50,10,$row['ogretmen_ad_soyad'],1,0,"L");
    $pdf->Cell(50,10,$row['ogretmen_okul_no'],1,0,"L");
    $pdf->Cell(70,10,$row['ogretmen_fakulte_adi'],1,1,"L");
    $i++;

}
$pdf->Output();



?>
