<!-- start: Content -->
						<div id="content">
							 <div class="panel box-shadow-none content-header">
									<div class="panel-body">
										<div class="col-md-12">
												<h3 class="animated fadeInLeft">Tabla de personal</h3>
												<p class="animated fadeInDown">
												 Registrado
												</p>
										</div>
									</div>
							</div>
							<div class="col-md-12 top-20 padding-0">
								<div class="col-md-12">
									<div class="panel">
										<div class="panel-heading"><h3>Datos del personal</h3></div>
										<div class="panel-body">
											<div class="col-md-6" style="margin-top:5px;">
												<a href="<?php echo base_url();?>index.php/sise/personal">
																	<button type="button" class="btn ripple-infinite btn-raised btn-success">
																 <div>
																	<span>Registrar nuevo personal</span>
																 </div>
																</button>
												</a>
												</div>
											<div class="responsive-table">
											<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Nombre del personal</th>
													<th>Apellido Materno</th>
													<th>Apellido Paterno</th>
													<th>Cargo</th>
													<th>Editar</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($personal as $per) {
												?>
														<tr>
															<td><?php echo $per->nombres_personal; ?></td>
															<td><?php echo $per->ap_materno_personal; ?></td>
															<td><?php echo $per->ap_paterno_personal; ?></td>
															<td><?php echo $per->nombre_privilegio; ?></td>
															<td>
															<div class="col-md-6" style="margin-top:5px;">
																 <a href="<?php echo base_url();?>index.php/sise/edita_personal/<?php echo $per->id_personal;?>">
																	 <button class="btn ripple-infinite btn-round btn-warning">
																		<div>
																			<span>Editar</span>
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
						
							</div>
						</div>
					<!-- end: content -->
