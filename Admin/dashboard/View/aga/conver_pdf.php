<?php
require_once("fpdf184/fpdf.php");

$ogrenci_bolum_adi=$_POST['department_name'];
$ogrenci_okul_no=$_POST['student_number'];
$ogrenci_ad_soyad=$_POST['student_fullName'];
$ogrenci_tc=$_POST['student_tc_kimlik'];
$ogrenci_uyrugu=$_POST['student_nationality'];
$ogrenci_tel=$_POST['student_phone_number'];
$ogrenci_mail=$_POST['student_email'];
$ogrenci_il=$_POST['s_district_name'];
$ogrenci_ilce=$_POST['s_city_name'];
$ogrenci_posta_kod=$_POST['s_post_code'];
//
$staj_baslama_tarih=$_POST['starting_date'];
$staj_bitis_tarih=$_POST['ending_date'];
$is_gunu=$_POST['working_day'];
$cumartesi_calisma=$_POST['saturday_work'];
//
$saglik_hizmet=$_POST['saglik_hizmet'];
$genel_saglik_sigorta=$_POST['genel_saglik_sigorta'];
$yirmibes_doldurdum=$_POST['25_doldurdum'];
//
//$date_now=$_POST['date_now'];
//
$devlet_katkisi=$_POST['3308_sayili_devlet_katkisi_yararlanmak'];
//
// $not=$_POST['not'];
//
$firma_isim=$_POST['company_name'];
$firma_calısmaalanı=$_POST['company_workspace'];
$firma_il=$_POST['company_district_name'];
$firma_ilce=$_POST['company_city_name'];
$firma_posta_kod=$_POST['company_post_code'];

$firma_tel=$_POST['company_phone_number'];
$firma_fax=$_POST['company_fax'];
$firma_email=$_POST['company_email_address'];
$firma_yetkili_adsoyad=$_POST['company_owner_fullName'];
$firma_yetkili_unvan=$_POST['company_owner_degree'];


$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

   
//logo
$pdf->Image('kou-logo.png',10,5,22);
$pdf->Image('Bservatory-logo.png',170,14,22);
$pdf->Image('Europeanuniversityassociation-logo.png',170,3,22);
// Arial bold 8
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
$pdf->Cell(30,5,'(Staj Basvuru ve Kabul Formu)',0,1,'C');
$pdf->Cell(160);
$pdf->Cell(30,20,date ("Y-m-d"),0,1,'L');
//Line break
$pdf->Ln(-6);
//page a content
$pdf->Cell(185,3,'ILGILI MAKAMA',0,1,'C'); 
//cell(witdh,height,text,border,endline.[align]) 189 olacak şekilde satırlar ayarlanıyo ilk kısımdakilerin toplamı,
$pdf->SetFont('Arial','',8);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(189,5,"   Teknoloi Fakultesı  {$ogrenci_bolum_adi}  Muhendılıgı Bolumu  $ogrenci_okul_no  numaralı ogrencisiyim. Kurumunuzda staj yapmamın uygun gorulmesı halınde bu formun alttakı kısmını doldurularak fakultemız ılgılı bolum baskanlıgına gonderılmesını saygılarımla arz ederim.
Isyerı uygulaması suresı ıcerısınde alınan rapor, ıstırahat vb. belgelerın aslını alınan gun ıcerisinde bolum baskanlıgına bıldırebılecegımı beyan ve taahhut ederım.
",'LRTB','false');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,7,'Ad Soyad',1,0,'L');
$pdf->Cell(159,7,$ogrenci_ad_soyad,1,1,'L');//end of line   
$pdf->Cell(45,7,'TC Kımlık Numarası',1,0,'L');
$pdf->Cell(49.5,7,$ogrenci_tc,1,0,'L');   
$pdf->Cell(45,7,'Uyrugu',1,0,'L');
$pdf->Cell(49.5,7,$ogrenci_uyrugu,1,1,'L');
$pdf->Cell(30,7,'Ev TeL/ GSM',1,0,'L');
$pdf->Cell(40,7,$ogrenci_tel,1,0,'L');
$pdf->Cell(20,7,'E-Posta',1,0,'L');
$pdf->Cell(99,7,$ogrenci_mail,1,1,'L');
//
$pdf->Cell(15,10,'Adres',1,0,'L');
$pdf->Cell(10,10,'ıl',1,0,'L');
$pdf->Cell(50,10,$ogrenci_il,1,0,'L');
$pdf->Cell(12,10,'ılce',1,0,'L');//39
$pdf->Cell(50,10,$ogrenci_ilce,1,0,'L');
$pdf->Cell(22,10,'Posta Kodu',1,0,'L');
$pdf->Cell(30,10,$ogrenci_posta_kod,1,1,'L');
//
$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->MultiCell(189,5,'Staj Bılgılerı','LRTB','C',false);
// $this->Cell(189,7,'Staj Bilgileri',1,1,'C');
$pdf->Cell(189,5,'Staj I',1,1,'C');
//$pdf->Cell(94.5,7,'Staj II',1,1,'C');
//
$pdf->Cell(47.25,7,"Baslama Tarıhı: {$staj_baslama_tarih}" ,1,0,'C');
$pdf->Cell(40,7,"Bıtıs Tarıhı: {$staj_bitis_tarih}",1,0,'C');
$pdf->Cell(35,7,"Is Gunu: {$is_gunu}",1,0,'C');
$pdf->Cell(66.75,7,"Cumartesı Çalısıyor: {$cumartesi_calisma}",1,1,'C');
//
$pdf->Ln(4);
$pdf->SetFont('Arial','',6);
$pdf->Cell(169,7,'Aılemden,  Kendımden veya  Anne-Baba Uzerınden Genel Saglık Sıgortası Kapsamında Saglık Hızmetı Alıyorum',1,0,'L');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,7,"$saglik_hizmet",1,1,'C');

$pdf->SetFont('Arial','',6);
$pdf->Cell(169,7,'Genel Saglık Sıgortası (GSS) (Gelır Testı Yaptırdım Pırım Oduyorum)',1,0,'L');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,7,"$genel_saglik_sigorta",1,1,'C');

$pdf->SetFont('Arial','',6);
$pdf->Cell(169,7,'25 Yasını Doldurdum',1,0,'L');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(20,7,"$yirmibes_doldurdum",1,1,'C');
//
$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->MultiCell(189,5,'Staj Yapılacak Kurum Bılgılerı','LRTB','C',false);
$pdf->Cell(30,7,'Resmı Adı',1,0,'L');
$pdf->Cell(159,7,$firma_isim,1,1,'C');
$pdf->Cell(30,7,'Faalıyet Alanı',1,0,'L');
$pdf->Cell(159,7,$firma_calısmaalanı,1,1,'C');
//
$pdf->Cell(15,10,'Adres',1,0,'L');
$pdf->Cell(10,10,'Il',1,0,'L');
$pdf->Cell(50,10,$firma_il,1,0,'L');
$pdf->Cell(12,10,'Ilce',1,0,'L');//39
$pdf->Cell(50,10,$firma_ilce,1,0,'L');
$pdf->Cell(22,10,'Posta Kodu',1,0,'L');
$pdf->Cell(30,10,$firma_posta_kod,1,1,'L');
//
$pdf->MultiCell(189,7,'İletisim Bılgılerı','LRTB','C',false);
//$pdf->Cell(30,7,'Iletısım Bılgılerı',1,0,'L');
$pdf->Cell(63,7,"Telefon: {$firma_tel}",1,0,'L');
$pdf->Cell(63,7,"Fax:{$firma_fax} ",1,0,'L');
$pdf->Cell(63,7,"E-Posta: {$firma_email} ",1,1,'L');

$pdf->Cell(50,7,'Staj Sorumlusunun Unvanı',1,0,'L');
$pdf->Cell(139,7,$firma_yetkili_unvan,1,1,'L');
$pdf->Cell(136,7,'Kurum olarak 3308 sayılı kanundakı devlet katkısından yararlanmak ıstıyor musunuz?',1,0,'L');
$pdf->Cell(54,7,"$devlet_katkisi",1,1,'C');
//
$pdf->SetFont('Arial','',8,);
$pdf->Cell(180,6,'Yukarıda adı geçen ogrencının ılgılı tarıhlerde staj uygulamasını kurumumuzda yapması uygun gorulmustur',0,0,'L');
$pdf->SetFont('Arial','B',8,);
$pdf->Cell(-16,12,"Fırma Yetkılısının Adı Soyadı: {$firma_yetkili_adsoyad}",0,1,'R');
$pdf->Cell(158,-2,"Unvanı: {$firma_yetkili_unvan}",0,1,'R');
$pdf->Cell(158,8,'Kaşe ve Imza: ',0,1,'R');
$pdf->SetFont('Arial','',6,);
//
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8,);
$pdf->MultiCell(189,5,'T.C. Kocaelı Unıversıtesı Teknolojı Fakultesı Bölüm Iş YerI ve Staj Komısyonu Onayı','','C',false);
$pdf->MultiCell(189,5,'  Yukarıda adı geçen ogrencının ılgılı tarıhlerde staj uygulamasını ılgılı kurumda yapması','LRTB','C',false);
$pdf->Cell(94.5,5,'Uygundur ',1,0,'C');
$pdf->Cell(94.5,5,'Uygun Değildir ',1,1,'C');
$pdf->Cell(189,10,'Not: ',1,1,'L');
$pdf->Cell(180,10,'ONAY',0,1,'R');
          
//$pdf->AddPage('P','A4');

$pdf->Output();

?>