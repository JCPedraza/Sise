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
		                      <form action="<?php echo base_url('index.php/sise/'); ?>nuevo_periodo" method="post">
		                        <div class="panel-body" style="padding-bottom:30px;">
		                          <div class="col-md-12">
		                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre periodo</label>
		                              <div class="col-sm-10"><input type="text" required="" class="form-control android" placeholder="Ejemplo: Semestere" name="nom_pe"></div>
		                            </div>
		                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Duración</label>
		                              <div class="col-sm-10"><input type="text" required="" placeholder="Ejemplo: 6 meses" class="form-control android" name="dur"></div>
		                            </div>
		                          </div>
			                        <div class="col-md-6" style="margin-top:5px;">
		                               <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
		                                <div>
		                                  <span>Guardar</span>
		                                </div>
		                              </button>
                                  <a href="<?php echo base_url();?>index.php/sise/periodo/">
                                          <button type="button" class="btn ripple-infinite btn-round btn-info">
                                           <div>
                                            <span>Regresar</span>
                                           </div>
                                          </button>
                                      </a> 
			                        </div>
		                        </div>
		                      </form>
                      	</div>
                    </div>
                          <div class="col-md-4 padding-0">
                              <div class="panel bg-light-blue">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Verifique los campos estén correctos</p>
                                </div>
                              </div>
                            </div>

                    </div>
              	</div>
            </div>
          <!-- end: content -->