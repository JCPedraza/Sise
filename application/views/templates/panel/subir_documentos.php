	<div class="container-fluid mimin-wrapper">


	          <!-- start: Content -->
	            <div id="content">
	                <div class="panel box-shadow-none content-header">
	                  <div class="panel-body">
	                    <div class="col-md-12">
	                        <h3 class="animated fadeInLeft">Documentos</h3>
	                        <p class="animated fadeInDown">
	                          Subir <span class="fa-angle-right fa"></span> Documentos
	                        </p>
	                    </div>
	                  </div>
	                </div>
	                <div class="form-element">
	                  <div class="col-md-12 padding-0">
	                    <div class="col-md-12">
	                      <div class="panel form-element-padding">
	                        <div class="panel-heading">

	                         <h4>Documentos</h4> 
	                        	<a href="<?php echo base_url();?>index.php/sise/datos_alumno/">
					                                <button type="button" class="btn ripple-infinite btn-raised btn-info">
					                                 <div>
					                                  <span>Regresar</span>
					                                 </div>
					                                </button>
					                            </a>  
	                        </div>
	                         <div class="panel-body" style="padding-bottom:30px;">
	                          <div class="col-md-12">

		                            <h1>Faltantes</h1>

		                            <?php 
										if(count($documentos)==0){
										}else{?>

											<form method="post" action="<?php echo base_url('index.php/sise/');?>subir_archivos" enctype="multipart/form-data">	
												<?php 
													$contador = 0 ;
													foreach ($documentos as $documentos) {
														$contador++;
														$especiales=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã","ÃŠ","ÃŽ","Ã","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã","Ã‹","Ñ","*","%"," ");
														$normales=array("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","N","","","_");
													?>
														
														<br>
															<div class="form-group">
																<label class="col-sm-2 control-label text-right" for="<?php echo $contador ;?>"><?php echo $documentos->nombre_tipo_doc;?>:</label> 
																<div class="col-sm-6">
																	<input type="file" class="form-control" id="file_<?php echo $contador ;?>" name="<?php echo str_replace($especiales, $normales, $documentos->nombre_tipo_doc);?>">
																</div>
															</div>
														<br>
														
												<?php };?>

												<div class="form-group" align="right">
					                                <div class="col-sm-10">
					                                    <div class="col-sm-12 padding-0">
					                                        <button type="submit" disabled="disabled" class="btn ripple-infinite btn-round btn-warning">Subir</button>
					                                    </div>
					                                </div>
					                            </div>
											</form>
									<?php }?>

	                            </form>
	                            </div>
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
		
		var desbloquea=<?php echo $contador ?>;
		var desbloquear=1;

		<?php 

			for ($i=1; $i<=$contador ; $i++) { ?>

				$("#file_<?php echo $i; ?>").change(function(){

    				if (desbloquear==desbloquea) {
    					$("button").prop("disabled", this.files.length == 0);
    				}else{
    					$("button").prop("disabled","disabled");
    				};
    				if (this.files.length != 0) {
    					desbloquear=desbloquear+1;
    				}else{
    					desbloquear=desbloquear-1;
    				};
    				
				});	

			<?php }

		 ?>
		

	</script>