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
												<div class="col-md-12" style="margin-top:5px;">
													<div class="col-sm-5">
					                                  <button type="button" class="btn ripple-infinite btn-raised btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $evaluacion_preguntas['id_encuesta'];?>">
					                                 <div>
					                                  <span>Agregar Pregunta</span>
					                                 </div>
					                                </button>
					                            </div>
					                                <div class="col-sm-5">
													<a href="<?php echo base_url();?>index.php/sise/evaluaciones/">
					                                <button type="button" class="btn ripple-infinite btn-raised btn-success">
					                                 <div>
					                                  <span>Regresar a las evaluaciónes</span>
					                                 </div>
					                                </button>
					                            </a>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="panel-body">
					                          	<?php foreach ($cuestionario as $c) {?>
					                          <div class="badges-v1">

					                            	<br>
					                            	<div class="col-md-2">
					                            		  	
							                              <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-danger" data-toggle="modal" data-target="#exampleModalLongBorrar<?php echo $c->id_cuestionario;?>" >
							                                <div class="flip">
							                                  <div class="side">
							                                    Borrar <span class="fa fa-trash"></span>
							                                  </div>
							                                  <div class="side back">
							                                    Esta segur@?
							                                  </div>
							                                </div>
							                                <span class="icon"></span>
							                              </button>
							                          </div>
							                          <div class="col-md-2">
							                              <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-warning" data-toggle="modal" data-target="#exampleModalLongOpcion<?php echo $c->id_cuestionario;?>" >
							                                <div class="flip">
							                                  <div class="side">
							                                    agregar opción <span class="fa fa-pencil-square-o"></span>
							                                  </div>
							                                  <div class="side back">
							                                    Esta segur@?
							                                  </div>
							                                </div>
							                                <span class="icon"></span>
							                              </button>

							                          </div>
							                          <div class="col-md-1">
							                          	<button class=" btn btn-circle btn-outline btn-sm btn-default" value="primary" data-toggle="modal" data-target="#exampleModalLongVer<?php echo $c->id_cuestionario;?>">
						                                <span class="fa fa-eye"></span>
						                              </button>
							                          </div>
					                            	<div class="col-md-5">
										                    <center><h4 class="text-black"><?php echo $c->pregunta;?></h4></center>
										              </div>
					                             <div class="badges-ribbon">
					                              <div class="badges-ribbon-content badge-primary">Pregunta</div>
					                            </div>
					                          </div>
					                      <?php } ?>
									</div>
								</div>
								<!-- Modal -->
				                  <div class="modal fade" id="exampleModalLong<?php echo $evaluacion_preguntas['id_encuesta'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLongTitle">Pregunta</h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <div class="modal-body">
				                        	<script>
												/*function habilitar(value){
													if (value==true) {
														//Habilitamos
														document.getElementById("segundo").disabled=false;
													}else if(value==false){
														//deshabilitamos
														document.getElementById("segundo").disable=true;
													}
												}*/
												function habilitar1(campor1)
												{
												    var estadoActual = document.getElementById(campor1);
												 
												    estadoActual.disabled = !estadoActual.disabled;
												}
												function habilitar2(campor2)
												{
												    var estadoActual = document.getElementById(campor2);
												 
												    estadoActual.disabled = !estadoActual.disabled;
												}
												function habilitar3(campor3)
												{
												    var estadoActual = document.getElementById(campor3);
												 
												    estadoActual.disabled = !estadoActual.disabled;
												}
												function habilitar4(campor4)
												{
												    var estadoActual = document.getElementById(campor4);
												 
												    estadoActual.disabled = !estadoActual.disabled;
												}
											</script>
				                          <?php
				                             $atributos = array('class'=>'form-horizontal');
				                             echo form_open('sise/nueva_pregunta/',$atributos);
				                          ?>
				                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Pregunta</label>
				                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_mod"></div>
				                              <input type="hidden" name="id" value="<?php echo $evaluacion_preguntas['id_encuesta'];?>">
				                          </div>
				                          <?php if ($evaluacion_preguntas['id_encuesta']!=2) {?>
				                          
				                          <table>
				                          <div class="form-group">
				                          	  <div class="col-md-12">
				        						<tr>
				                          		<td><label class="control-label text-top">Respuesta 1</label></td>
				                          			<td><input type="text" class="form-control android" id="r1" name="preg[]" disabled="true"></td>
				                          			<td>
				                          				<div class="form-group form-animate-checkbox">
														<input type="checkbox"  onclick="habilitar1('r1')" class="checkbox" name="l"  data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar utilizar">
													</div>
												</td>
				                              </tr>
				                              <tr>
				                          		<td><label class="control-label text-top">Respuesta 2</label></td>
				                              			<td><input type="text" class="form-control android" id="r2" name="preg[]" disabled="true"></td>
				                              			<td>
				                          				<div class="form-group form-animate-checkbox">
														<input type="checkbox" onclick="habilitar2('r2')" class="checkbox" name="l" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar utilizar">
													</div>
												</td>
				                              	</tr>
				                              	<tr>
				                          		<td><label class="control-label text-top">Respuesta 3</label></td>
				                              			<td><input type="text" class="form-control android" id="r3" name="preg[]" disabled="true"></td>
														<td>
				                          				<div class="form-group form-animate-checkbox">
														<input type="checkbox" onclick="habilitar3('r3')" class="checkbox" name="l" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar utilizar">
													</div>
												</td>
				                              	</tr>
				                              	<tr>				                          		<td><label class="control-label text-top">Respuesta 4</label></td>
				                              			<td><input type="text" class="form-control android" id="r4" name="preg[]" disabled="true"></td>
				                              			<td>
				                          				<div class="form-group form-animate-checkbox">
														<input type="checkbox" onclick="habilitar4('r4')" class="checkbox" name="l" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar utilizar">
													</div>
												</td>
				                              	</tr>
				                      
				                          </div>
				                          </div>
				                          	</table>
				                              <div class="panel bg-light-blue">
				                                <div class="panel-body text-white">
				                                   <p class="animated fadeInUp quote">seleccione el número de opciones correspondientes a la pregunta, Minimo 2</p>
				                                </div>
				                              </div>
				                          <?php } ?>
				                         </div>
				                        <div class="modal-footer">
				                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
				                <?php foreach ($cuestionario as $c) { ?>
				                <!-- Modal -->
				                  <div class="modal fade" id="exampleModalLongOpcion<?php echo $c->id_cuestionario;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLongTitle">Pregunta</h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <script>
												function habilita1(campor1)
												{
												    var estadoActual = document.getElementById(campor1);
												 
												    estadoActual.disabled = !estadoActual.disabled;
												}
											</script>
				                        <div class="modal-body">
				                          <?php
				                             $atributos = array('class'=>'form-horizontal');
				                             echo form_open('sise/nueva_opcion/',$atributos);
				                          ?>
				                          
				                          <table>
				                          <div class="form-group">
				                          	  <div class="col-md-12">
				        						<tr>
				                          		<td><label class="control-label text-top">opcion</label></td>
				                          			<td><input type="text" class="form-control android" minlength="2" maxlength="15" id="e1" name="preg" disabled="true"></td>
				                          			<td>
				                          				<div class="form-group form-animate-checkbox">
														<input type="checkbox"  onclick="habilita1('e1')" class="checkbox" name="l"  data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar utilizar">
													</div>
												</td>
				                              </tr>
				                      
				                          </div>
				                          </div>
				                          	</table>
				                          	<input type="hidden" name="id_cuestionario" value="<?php foreach ($cuestionario as $c) { echo $c->id_cuestionario;}?>">
				                          	<input type="hidden" name="id" value="<?php echo $evaluacion_preguntas['id_encuesta'];?>">
				                         </div>
				                        <div class="modal-footer">
				                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
				                <!-- Modal -->
				                  <div class="modal fade" id="exampleModalLongBorrar<?php echo $c->id_cuestionario;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLongTitle">Esta realmente seguro</h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <div class="modal-body">
				                          <form action="<?php echo base_url('index.php/sise/'); ?>eliminar_pregunta/<?php  echo $c->id_cuestionario;?>" method="post">
																<input type="hidden" name="id" value="<?php echo $evaluacion_preguntas['id_encuesta'];?>">
				                          
				                         <div class="col-md-12">
				                          <div class="alert col-md-12 col-sm-12 alert-icon alert-danger alert-dismissible fade in" role="alert">
				                            <div class="col-md-2 col-sm-2 icon-wrapper text-center">
				                              <span class="fa fa-flash fa-2x"></span></div>
				                              <div class="col-md-10 col-sm-10">
				                                <p><strong>Precaución!</strong> Una vez que sea eliminado no hay forma de volver a recuperarlo</p>
				                              </div>
				                            </div>
				                          </div>
				                          	
				                         </div>
				                        <div class="modal-footer">
				                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
				                                    <div>
				                                      <span>Continuar</span>
				                                    </div>
				                                  </button>
				                        </div>
				                         </form>
				                      </div>
				                    </div>
				                  </div> 
				                <!-- Fin Modal -->
				                <!-- Modal -->
				                  <div class="modal fade" id="exampleModalLongVer<?php echo $c->id_cuestionario;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLongTitle">Opciones que tiene la pregunta</h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <div class="modal-body">
				                          <form action="<?php echo base_url('index.php/sise/'); ?>actualizar_opciones/" method="post">
																<input type="hidden" name="id" value="<?php echo $evaluacion_preguntas['id_encuesta'];?>">
				                          
				                         <div class="col-md-12">
				                          <div class="alert alert-warning col-md-12 col-sm-12 alert-icon alert-dismissible fade in" role="alert">
				                            <div class="col-md-2 col-sm-2 icon-wrapper text-center">
				                              <span class="fa fa-exclamation-triangle fa-2x"></span></div>
				                              <div class="col-md-10 col-sm-10">
				                                <p><strong>Precaución!</strong> En caso de cambiar las opciones ya que asi es como se van a guardar</p>
				                              </div>
				                            </div>
				                          </div>
				                          	<?php foreach ($opciones as $o) {
				                          		$a=0;
				                          		$a++?>
				                          		<div class="form-group"><label class="col-sm-2 control-label text-right" >Opcion <?php echo $a; ?></label>
				                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_mod" value="<?php echo $o->nombre?>"></div>
				                          </div>
				                          	<?php } ?>
				                         </div>
				                        <div class="modal-footer">
				                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
				                                    <div>
				                                      <span>Continuar</span>
				                                    </div>
				                                  </button>
				                        </div>
				                         </form>
				                      </div>
				                    </div>
				                  </div> 
				                <!-- Fin Modal -->
				            <?php } ?>
							</div>
							
						</div>
						
						</div>
					<!-- end: content -->
							</div>
