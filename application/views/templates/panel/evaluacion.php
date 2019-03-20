<!-- start: Content -->
						<div id="content">
							 <div class="panel box-shadow-none content-header">
									<div class="panel-body">
										<div class="col-md-12">
												<h3 class="animated fadeInLeft">Tabla de Evaluaciones</h3>
												<p class="animated fadeInDown">
												 Evaluación
												</p>
										</div>
									</div>
							</div>
							<div class="col-md-12 top-20 padding-0">
								<div class="col-md-12">
									<div class="panel">
										<div class="panel-heading"><h3>Datos De Las Evaluaciones</h3></div>
										<div class="panel-body">
											<div class="col-md-6" style="margin-top:5px;">
																	<button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
																 <div>
																	<span>Agregar Nueva Evaluación</span>
																 </div>
																</button>
												</div>
											<div class="responsive-table">
											<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Nombre de la Evaluación</th>
													<th>Editar</th>
													<th>Agegar Peguntas a la evaluación</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($evaluacion as $evalu) {
												?>
														<tr>
															<td><?php echo $evalu->nom_encuesta; ?></td>
															<td>
															<div class="col-md-6" style="margin-top:5px;">
																 <a href="<?php echo base_url();?>index.php/sise/edita_evaluacion/<?php echo $evalu->id_encuesta;?>">
																	 <button class="btn ripple-infinite btn-round btn-warning">
																		<div>
																			<span>Editar</span>
																		</div>
																	</button>
																	</a>
															</div>
														</td>
															<td>
															<div class="col-md-6" style="margin-top:5px;">
																 <a href="<?php #echo base_url();?>index.php/sise/edita_modalidad/<?php #echo $mod->clave_mod;?>">
																	 <button class="btn ripple-infinite btn-round btn-warning">
																		<div>
																			<span>Agregar</span>
																		</div>
																	</button>
																	</a>
															</div>
														</td>
														</tr>
													 <?php
													}
												?>
											</tbody>
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
														<input type="checkbox" class="checkbox" name="l" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa">
														<label> Activa</label>
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
