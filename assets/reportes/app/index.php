<?php  
require_once('../vendor/autoload.php');

require_once('plantillas/reporte/lolo.php');
//Codigo css de la plantilla
$css=file_get_contents('plantillas/reporte/style.css');
require_once('productos.php');
//Base de datos

$mpdf=new \Mpdf\Mpdf([
	"format"=>"A4"

]);
$mpdf->setFooter('{PAGENO}');

$plant
illa2=getPlantilla($productos);

$mpdf->writeHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->writeHTML($plantilla2,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->AddPage('L');
$mpdf->writeHTML("<p>Pagina Orizontal</p>",\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->AddPage('P','','','','',0,0,0,0);
$mpdf->writeHTML("<p>Pagina Vertical</p>",\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("reporte.pdf","I");
?>