<?php 
$datos_completos=false;
	foreach ($datos_alumno as $alumno) {
		if (!is_null($alumno)||!empty($alumno)) {
			$datos_completos=true;
		}
	}

 $a=true;
 #$a=false;
if ($a) {?>
	
		<table>
			<tr>
				<td>nombre: </td>
				<td><?php echo $datos_alumno['nombre_alumno']; ?></td>
			</tr>
			<tr>
				<td>apellido paterno: </td>
				<td><?php echo $datos_alumno['ap_pa_alumno']; ?></td>
			</tr>
			
			<tr>
				<td>apellido materno: </td>
				<td><?php echo $datos_alumno['ap_ma_alumno']; ?></td>	
			</tr>

			<tr>
				<td>fecha de nacimiento: </td>
				<td><?php echo $datos_alumno['fec_nac_alumno']; ?></td>
			</tr>

			<tr>
				<td>genero: </td>
				<td><?php echo $datos_alumno['genero_alumno']; ?></td>
			</tr>

			<tr>
				<td>Estado Civil del Alumno: </td>
				<td><?php echo $datos_alumno['estado_civil_alumno']; ?></td>
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
				<td>teléfono del alumno: </td>
				<td><?php echo $datos_alumno['telefono_alumno']; ?></td>
			</tr>

			<tr>
				<td>Correo electrónico: </td>
				<td><?php echo $datos_alumno['usuario']; ?></td>
			</tr>

			<tr>
				<td>Dirección del alumno: </td>
				<td><?php echo $datos_alumno['residencia_alumno']." ".$datos_alumno['ciudad_alumno']." ".$datos_alumno['estado_alumno']." ".$datos_alumno['pais_alumno']; ?></td>
			</tr>
			
			<tr>
				<td>institución del alumno: </td>
				<td><?php echo $datos_alumno['institucion_alumno']; ?></td>
			</tr>

			<tr>
				<td>cargo del alumno: </td>
				<td><?php echo $datos_alumno['cargo_alumno']; ?></td>
			</tr>
		</table>

		<?php if (!$datos_completos): ?>
			<a onclick="location.href = '<?php echo base_url('index.php/sise/');?>ingreso_datos_alumno/'" href="#">
	        	<button type="" class="btn ripple-infinite btn-round btn-warning">completar</button>
	        </a>
		<?php endif ?>
	
<?php } ;

$b=true;
#$b=false;

if ($b) {?>
<br>	
		<table>
			<?php foreach ($documentos as $d): ?>
				<tr>
					<td><?php echo $d->nombre_tipo_doc; ?>: </td>
					<td></td>
				</tr>	
			<?php endforeach ?>
			
			
		</table>

		
			<a onclick="location.href = '<?php echo base_url('index.php/sise/');?>subir_documentos/'" href="#">
	        	<button type="" class="btn ripple-infinite btn-round btn-warning">completar</button>
	        </a>
		
	
<?php } ;?>