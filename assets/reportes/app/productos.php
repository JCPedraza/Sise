<?php 

$productos=array();
$mysqli= new mysqli("localhost", "root", "", "empresa");
$mysqli->set_charset("utf8");
$statement=$mysqli->prepare("SELECT * from empleados");
$statement->execute();
$resultado=$statement->get_result();
while ($row= $resultado->fetch_assoc()) {
	$productos[]=$row;
	
}
$mysqli->close();
 ?>