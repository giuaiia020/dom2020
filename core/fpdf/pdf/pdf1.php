<?php
$domainku = $_SERVER['HTTP_HOST'];
include('config.php');
include ('fungsi.php');
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('AGCMASTERCLASS/', '', $url);
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('_', ' ', $file);
$title = str_replace('.txt', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', '', $title); 
$judul = ucwords($title);
$judulnya = cutjudul($judul, 6);
$domen = $_SERVER['HTTP_HOST'];
$acak = acak($singledesc);
$contentdesc = spinner($acak);
$contentdesc = str_replace('%booktitle%', $title, $contentdesc);
$spinjudul = spinner($spinjudul);
$spinjudul2 = spinner($spinjudul2);
?>

<?php
require('fpdf.php');

class PDF extends FPDF
{
function Header()
{
	global $title;

	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Calculate width of title and position
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((210-$w)/2);
	// Colors of frame, background and text
	$this->SetDrawColor(0,206,209);
	$this->SetFillColor(220,220,220);
	$this->SetTextColor(0,0,0);
	// Thickness of frame (1 mm)
	$this->SetLineWidth(0.5);
	// Title
	$this->Cell($w,9,$title,1,1,'C',true);
	// Line break
	$this->Ln(10);
}

function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Text color in gray
	$this->SetTextColor(128);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Background color
	$this->SetFillColor(200,220,255);
	// Title
	$this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
	// Line break
	$this->Ln(4);
}

function ChapterBody($file)
{
	// Read text file
	$txt = file_get_contents($file);
	// Times 12
	$this->SetFont('Times','',12);
	// Output justified text
	$this->MultiCell(0,5,$txt);
	// Line break
	$this->Ln();
	// Mention in italics
	$this->SetFont('','I');
	$this->Cell(0,5,'(end of excerpt)');
}

function PrintChapter($num, $title, $file)
{
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}
$pdf = new PDF();
$title = ''.$judulnya.' PDF Books';
$pdf->SetTitle($judul,'.strtoupper($domen).');
$pdf->SetAuthor(''.$domen.'');
$pdf->SetCreator(''.$domen.'');
$pdf->SetSubject(''.$spinjudul.' '.$title.''.$contentdesc.' or '.$spinjudul2.' at '.strtoupper($domen).'');
$pdf->SetKeywords(''.keyword($judul).','.$site_keyword.',Download Books '.$judul.' , Download Books '.$judul.' Online , Download Books '.$judul.' Pdf , Download Books '.$judul.' For Free , Books '.$judul.' To Read , Read Online '.$judul.' Books , Free Ebook '.$judul.' Download , Ebooks '.$judul.' Free Download Pdf , Free Pdf Books '.$judul.' Download , Read Online Books '.$judul.' For Free Without Downloading');
$pdf->PrintChapter(1,'Download '.$judulnya.' Pdf books','http://159.65.238.77/Download_'.$url.'.txt');
$pdf->PrintChapter(2,'Read Online '.$judulnya.' Pdf Books','http://159.65.238.77/Read_Online_'.$url.'.txt');
$pdf->Output($judul, 'I');
?>
