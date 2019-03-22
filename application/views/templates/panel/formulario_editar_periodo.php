            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Privilegio
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
	                    <div class="panel form-element-padding">
	                        <div class="panel-heading">
	                         <h4>Datos del Privilegio</h4>
	                        </div>
		                      <form action="<?php echo base_url('index.php/sise/'); ?>editar_periodo" method="post">
                            <input type="hidden" name="periodo" value="<?php echo $clave_periodo ; ?>">
		                        <div class="panel-body" style="padding-bottom:30px;">
		                          <div class="col-md-12">
		                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre periodo</label>
		                              <div class="col-sm-10"><input type="text" required="" class="form-control android" value="<?php if(set_value('nom_pe')) echo set_value('nom_pe'); else {if($periodo) echo $periodo['nombre_periodo'];}?>" name="nom_pe"></div>
		                            </div>
		                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Duración</label>
		                              <div class="col-sm-10"><input type="text" required=""  class="form-control android" value="<?php if(set_value('dur')) echo set_value('dur'); else {if($periodo) echo $periodo['duracion_periodo'];}?>" name="dur"></div>
		                            </div>
		                          </div>
			                        <div class="col-md-6" style="margin-top:5px;">
		                               <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
		                                <div>
		                                  <span>Guardar</span>
		                                </div>
		                              </button>
			                        </div>
		                        </div>
		                      </form>
                      	</div>
                    </div>
                          <div class="col-md-4 padding-0">
                              <div class="panel bg-light-blue">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Edite los campos necesarios.</p>
                                </div>
                              </div>
                            </div>

                    </div>
              	</div>
            </div>
          <!-- end: content -->