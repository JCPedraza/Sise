<!--hola naruto-->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nueva Sección
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos de la sección</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/registra_nueva_seccion/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la sección</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_sec"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="des_sec"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Url</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="url"></div>
                            </div>
                            <div style="padding:20px;padding-bottom:0px;">
                          <div class="form-group form-animate-checkbox"><label>Aparece en en menu</label>
                            <input type="checkbox" class="checkbox" name="e" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa">
                            
                          </div>
                          </div>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                                   <a href="<?php echo base_url();?>index.php/sise/secciones/">
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
                                   <p class="animated fadeInUp quote">Modifica Solamente Los Campos Que Se Necesiten</p>
                                </div>
                              </div>
                            </div>

                    </div>
                   
                    
                  
                
              </div>
            </div>
          <!-- end: content -->