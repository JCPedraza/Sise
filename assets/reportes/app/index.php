<?php  
require_once('../vendor/autoload.php');

require_once('plantillas/formato_grupos/grupos.php');
//Codigo css de la plantilla
$c=file_get_contents('plantillas/formato_grupos/main.css');
$cs=file_get_contents('plantillas/formato_grupos/fancy.min.css');
$cd=file_get_contents('plantillas/formato_grupos/base.min.css');
$css=$c+cs+cd;
require_once('productos.php');
//Base de datos

$mpdf=new \Mpdf\Mpdf([

]);

$plantilla = getPlantilla($productos);

$mpdf->writeHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->writeHTML($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("reporte.pdf","I");
?>