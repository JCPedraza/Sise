<form method="post" action="<?php echo base_url('index.php/sise/');?>subir_archivos" enctype="multipart/form-data">
	
	<?php 
	$contador = 0 ;
	foreach ($documentos as $documentos) {
		$contador++;
		$especiales=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã","ÃŠ","ÃŽ","Ã","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã","Ã‹","Ñ","*","%"," ");
		$normales=array("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","N","","","_");
	?>
		
		<br><label for="<?php echo $contador ;?>"><?php echo $documentos->nombre_tipo_doc;?>:</label> <input type="file" id="<?php echo $contador ;?>" name="<?php echo str_replace($especiales, $normales, $documentos->nombre_tipo_doc);?>"><br>
		
	 <?php 
	 	};
	 ?>
	
	<br><button type="submit">subir</button>

</form>