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
protected $col = 0; // Current column
protected $y0;      // Ordinate of column start

function Header()
{
	// Page header
	global $title;

	$this->SetFont('Arial','B',15);
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((210-$w)/2);
	$this->SetDrawColor(0,206,209);
	$this->SetFillColor(220,220,220);
	$this->SetTextColor(0,0,0);
	$this->SetLineWidth(1);
	$this->Cell($w,9,$title,1,1,'C',true);
	$this->Ln(10);
	// Save ordinate
	$this->y0 = $this->GetY();
}

function Footer()
{
	// Page footer
	$this->SetY(-15);
	$this->SetFont('Arial','I',8);
	$this->SetTextColor(128);
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
	// Set position at a given column
	$this->col = $col;
	$x = 10+$col*63;
	$this->SetLeftMargin($x);
	$this->SetX($x);
}

function AcceptPageBreak()
{
	// Method accepting or not automatic page break
	if($this->col<2)
	{
		// Go to next column
		$this->SetCol($this->col+1);
		// Set ordinate to top
		$this->SetY($this->y0);
		// Keep on page
		return false;
	}
	else
	{
		// Go back to first column
		$this->SetCol(0);
		// Page break
		return true;
	}
}

function ChapterTitle($num, $label)
{
	// Title
	$this->SetFont('Arial','',12);
	$this->SetFillColor(200,220,255);
	$this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
	$this->Ln(4);
	// Save ordinate
	$this->y0 = $this->GetY();
}

function ChapterBody($file)
{
	// Read text file
	$txt = file_get_contents($file);
	// Font
	$this->SetFont('Times','',12);
	// Output text in a 6 cm width column
	$this->MultiCell(65,5,$txt);
	$this->Ln();
	// Mention
	$this->SetFont('','I');
	$this->Cell(0,5,'(end of excerpt)');
	// Go back to first column
	$this->SetCol(0);
}

function PrintChapter($num, $title, $file)
{
	// Add chapter
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}

$pdf = new PDF();
$title = ''.$judulnya.' PDF Books';
$pdf->SetTitle($judul);
$pdf->SetAuthor(''.$domen.'');
$pdf->SetCreator(''.$domen.'');
$pdf->SetSubject(''.$spinjudul.' '.$title.''.$contentdesc.' or '.$spinjudul2.' at '.strtoupper($domen).'');
$pdf->SetKeywords(''.keyword($judul).','.$site_keyword.',Download Books '.$judul.' , Download Books '.$judul.' Online , Download Books '.$judul.' Pdf , Download Books '.$judul.' For Free , Books '.$judul.' To Read , Read Online '.$judul.' Books , Free Ebook '.$judul.' Download , Ebooks '.$judul.' Free Download Pdf , Free Pdf Books '.$judul.' Download , Read Online Books '.$judul.' For Free Without Downloading');
$pdf->PrintChapter(1,'Download '.$judulnya.' Pdf books','http://159.65.238.77/Download_'.$url.'.txt');
$pdf->PrintChapter(2,'Read Online '.$judulnya.' Pdf Books','http://159.65.238.77/Read_Online_'.$url.'.txt');
$pdf->Output($judul, 'I');
?>
