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
												 <div class="panel-body">
					                        <div class="col-md-12 padding-0">
					                          <tr><div class="col-md-2 padding-0">
					                          	<?php foreach ($cuestionario as $c) {?>
					                          
					                            <td><div class="badges-v1">

					                            	<br>
					                            	<div class="col-md-12">
										                <div class="panel bg-dark-indigo box-shadow-none">
										                  <div class="panel-body">
										                    <center><h4 class="text-white"><?php echo $c->pregunta;?></h4></center>
										                  </div>
										                </div>
										              </div>
					                             <div class="badges-ribbon">
					                              <div class="badges-ribbon-content badge-primary">Pregunta</div>
					                            </div>
					                          </div></td>
					                      <?php } ?>
					                          </div>
					                        </div></tr>
					                    </div>								
										
																			    
											</table>
											</div>

									</div>
								</div>

							</div>

						</div>
						
							</div>
						</div>
					<!-- end: content -->
