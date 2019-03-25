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
					                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
					                                 <div>
					                                  <span>Agregar Nueva Modalidad</span>
					                                 </div>
					                                </button>
					                        </div>
					                    </div>
					                    <div class="panel-body">
					                          	<?php foreach ($cuestionario as $c) {?>
					                          <div class="badges-v1">

					                            	<br>
					                            	<div class="col-md-12">
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
				                             echo form_open('sise/nueva_modalidad/',$atributos);
				                          ?>
				                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Pregunta</label>
				                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_mod"></div>
				                          </div>
				                          <table>
				                          <div class="form-group">
				                          	<tr><td><label class="col-sm-2 control-label text-top" >Respuesta 1</label>
				                              <div class="col-sm-1"><input type="text" class="for0-control android" name="des_mod"></div></td>
				                              <td><label class="col-sm-2 control-label text-top" >Respuesta 2</label>
				                              <div class="col-sm-3"><input type="text" class="form-control android" name="des_mod"></div></td></tr>
				                              <tr><td><label class="col-sm-2 control-label text-top" >Respuesta 3</label>
				                              <div class="col-sm-3"><input type="text" class="form-control android" name="des_mod"></div></td>
				                              <td><label class="col-sm-2 control-label text-top" >Respuesta 4</label>
				                              <div class="col-sm-3"><input type="text" class="form-control android" name="des_mod"></div></td></tr>
				                          </div>
				                          </div>
				                      </div>
				                  </div>
				                          </table>
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
							</div>

						</div>
						
							</div>
						</div>
					<!-- end: content -->
