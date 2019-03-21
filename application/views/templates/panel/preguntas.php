<!-- start: Content -->
						<div id="content">
							 <div class="panel box-shadow-none content-header">
									<div class="panel-body">
										<div class="col-md-12">
												<h3 class="animated fadeInLeft"><?php echo $evaluacion_preguntas['nom_encuesta']; ?></h3>
												<p class="animated fadeInDown">
												 Agregar Preguntas a la evaluacion 
												</p>
										</div>
									</div>
							</div>
							<div class="col-md-12 top-20 padding-0">
								<div class="col-md-12">
									<div class="panel">
										<div class="panel-heading"><h3>Numero de preguntas con las que cuenta <?php echo $num_preguntas['num']; ?></h3></div>
										<div class="panel-body">
											<div class="responsive-table">
											<table id="datatables-example" width="100%" cellspacing="0">
											<?php
        // esto es simplemente un formulario, pero aqui hacemos una condicion, identificamos si se ha definido un numero de opciones, si es si hacemos un bucle, si es no mostramos el select para definir un numero de opciones, como es obvio por defecto se mostrara el bucle:
	if(isset($_POST['opc'])){
		$num = $_POST['opciones']; // guardamos el valor del numero de opciones
		for($i=1;$i<=$num;$i++){ // hacemos el bucle mostrando los campos respectivos.
	?>
	<div class="cf">
		<label>Opcion <?php echo $i; ?>: </label>
		<input name="opc<?php echo $i; ?>" type="text" size="43">
	</div>
	<?php } // aqui termina el bucle ?>
	<div class="cf">
    	<input name="enviar" type="submit" value="Enviar">
        <input name="opciones" type="hidden" value="<?php echo $num; // le pasamos el valor de num al proceso del formulario mediante un campo oculto. ?>">
        <input name="cont" type="hidden" value="<?php echo cont; ?>">
    </div>
	<?php }else{ // sino se ha definido nro de opciones: ?>
	<div class="fl">
    	<label>Nº de opciones:</label>
    	<select name="opciones">
    		<?php for($i=2;$i<=20;$i++){ // esto es un loop simple, solo para ahorrarnos trabajo, este select tendra de 2 a 20 opciones, si deseas cambiarlo lo puedes hacer aqui. ?>
    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    		<?php } ?>
		</select>
	</div>

    <div class="cf">
      	<input name="opc" type="submit" value="Continuar">
    </div>

      <?php } // Sino se han definido opciones, que en vez de salir el boton de Enviar, salga uno que sea Continuar. ?>
											</table>
											</div>

									</div>
								</div>

							</div>

						</div>
						
								<!-- Modal -->
									<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Nueva Modalidad</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<?php
														 $atributos = array('class'=>'form-horizontal');
														 echo form_open('sise/nueva_encuesta/',$atributos);
													?>
													<div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre De la encuesta</label>
															<div class="col-sm-10"><input type="text" minlength="12" maxlength="100" class="form-control android" name="nom_enc" required=""></div>
													</div>
													<div class="" style="margin-top:40px !important;">
															<label>Selecciona a quien va a contestar la encuesta</label>
															<select name="hola" id="" class="form-control form-control android">
																		<option value="" selected="selected">Seleccionar</option>
																		<?php foreach ($privi as $pr) {?>                                   
																		<option value="<?php echo $pr->id_privilegio; ?>"><?php echo $pr->nombre_privilegio; ?></option>
																		<?php } ?>
														</select>
														<div style="padding:20px;padding-bottom:0px;">
													<div class="form-group form-animate-checkbox">
														<label> Activa</label>
														<input type="checkbox" class="checkbox" name="l" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa">
														
													</div>
													</div>
														
												</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
													<button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
																		<div>
																			<span>Guardar Cambios</span>
																		</div>
																	</button>
												</div>
												 </form>
											</div>
										</div>
									</div> 
								<!-- Fin Modal --> 
							</div>
						</div>
					<!-- end: content -->
					<script>
							$(document).ready(function(){ 
							$("#submitButton").click(function(){ 
							 $("#myModal").modal(); 
							}); 
					</script>
