<?php  
require_once('../vendor/autoload.php');

require_once('formato_evaluación/lolo.php');
//Codigo css de la plantilla
$css=file_get_contents('formato_evaluación/main.css');
//Base de datos

$mpdf=new \Mpdf\Mpdf([
	"format"=>"A4"

]);
$mpdf->setFooter('{PAGENO}');


$mpdf->writeHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->writeHTML(Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->AddPage('L');
$mpdf->writeHTML("<p>Pagina Orizontal</p>",\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->AddPage('P','','','','',0,0,0,0);
$mpdf->writeHTML("<p>Pagina Vertical</p>",\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("reporte.pdf","I");
?>