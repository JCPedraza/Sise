<?php 
$datos_completos=false;
	foreach ($datos_alumno as $alumno) {
		if (!is_null($alumno)||!empty($alumno)) {
			$datos_completos=true;
		}
	}

	if(!isset($edicion_administrativa)){
		$edicion_administrativa=false;
	}
?>

<div class="container-fluid mimin-wrapper">
    <!-- start: Content -->
      <div id="content">

            <div class="panel box-shadow-none content-header">
              <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Panel de Datos del Alumno</h3>
                    <p class="animated fadeInDown">
                      Form <span class="fa-angle-right fa"></span> Form Element
                    </p>
                </div>
              </div>
            </div>
	        
	        <div class="form-element">
	            <div class="col-md-12 padding-0">
	                
	                <div class="col-md-6">
		                
		                <div class="panel form-element-padding">
		                    <div class="panel-heading">
		                     	<h4>Información del Alumno</h4>
		                    </div>

		                    <div class="panel-body" style="padding-bottom:30px;">
		                      	<div class="col-md-12">
			                        
			                        <div class="responsive-table">
				                        <table>
											<tr>
												<td>Nombre: </td>
												<td><?php echo $datos_alumno['nombre_alumno']; ?></td>
											</tr>
											<tr>
												<td>Apellido Paterno: </td>
												<td><?php echo $datos_alumno['ap_pa_alumno']; ?></td>
											</tr>
											
											<tr>
												<td>Apellido Materno: </td>
												<td><?php echo $datos_alumno['ap_ma_alumno']; ?></td>	
											</tr>

											<tr>
												<td>Fecha de Nacimiento: </td>
												<td><?php echo $datos_alumno['fec_nac_alumno']; ?></td>
											</tr>

											<tr>
												<td>Genero: </td>
												
												<td>
													<?php if ($datos_alumno['genero_alumno']='m') {
														echo "Masculino";
													}else{
														echo "Femenino";
													} ?>
												</td>

											</tr>

											<tr>
												<td>Estado Civil del Alumno: </td>
												
												<td>
													<?php switch (strtolower($datos_alumno['estado_civil_alumno'])) {
														case 'd':
																echo "Divorciad@";
															break;
														
														case 'c':
																echo "Casad@";
															break;
														
														case 's':
																echo "Solter@";
															break;

														default:
															 echo "Viud@";
															break;
													}?>
												</td>
											</tr>
											
											<tr>
												<td>CURP: </td>
												<td><?php echo $datos_alumno['CURP_alumno']; ?></td>
											</tr>

											<tr>
												<td>RFC: </td>
												<td><?php echo $datos_alumno['RFC_alumno']; ?></td>
											</tr>
											
											<tr>
												<td>Teléfono del Alumno: </td>
												<td><?php echo $datos_alumno['telefono_alumno']; ?></td>
											</tr>

											<tr>
												<td>Correo Electrónico: </td>
												<td><?php echo $datos_alumno['usuario']; ?></td>
											</tr>

											<tr>
												<td>Dirección del Alumno: </td>
												<td><?php echo $datos_alumno['residencia_alumno']." ".$datos_alumno['ciudad_alumno']." ".$datos_alumno['estado_alumno']." ".$datos_alumno['pais_alumno']; ?></td>
											</tr>
											
											<tr>
												<td>Institución del Alumno: </td>
												<td><?php echo $datos_alumno['institucion_alumno']; ?></td>
											</tr>

											<tr>
												<td>Cargo del Alumno: </td>
												<td><?php echo $datos_alumno['cargo_alumno']; ?></td>
											</tr>
										</table>
			                        </div>

										<?php if (!$datos_completos||$edicion_administrativa): ?>
											<a onclick="location.href = '<?php echo base_url('index.php/sise/');?>ingreso_datos_alumno/<?php echo 'editar' ;?>'" href="#">
									        	<button type="" class="btn ripple-infinite btn-round btn-warning">completar</button>
									        </a>
										<?php endif ?>	

		                      	</div>
		                    </div>
		                </div>

	                </div>
	                
	                <div class="col-md-6">
		                
		                <div class="panel form-element-padding">
		                    <div class="panel-heading">
		                     	<h4>Documentos</h4>
		                    </div>
		                    <div class="panel-body" style="padding-bottom:30px;">
		                      	<div class="col-md-12">
			                        
			                        <div class="responsive-table">
				                        <table>
											<?php foreach ($documentos as $d): ?>
												<tr>
													<td><?php echo $d->nombre_tipo_doc; ?>: </td>
													<td>Completado/<a href="#" id="archivo" data-target="<?php echo base_url().substr($d->ruta_doc, 2); ?>">descargar</a></td>
												</tr>	
											<?php endforeach ?>
										</table>
			                        </div>
									<br>

									<a onclick="location.href = '<?php echo base_url('index.php/sise/');?>subir_documentos/'" href="#">
	        							<button type="" class="btn ripple-infinite btn-round btn-warning">Subir</button>
	        						</a>	

		                      	</div>
		                    </div>
		                </div>

	                </div>
	            </div>
	        </div>
      </div>
    <!-- end: content -->
</div>
<script>
	$('#archivo').click( function(event){
		event.preventDefault();
    	var archivo = {
    		archivo: $(this).attr("data-target")
    	};
    	alert(archivo);
    	$.ajax({
    		data:archivo,
    		url:<?php echo base_url('index.php/sise/descargar_archivo'); ?>,
    		type:"POST",
    		success:  function (response) {
    			alert(response);
    		}
    	});
	});
</script>