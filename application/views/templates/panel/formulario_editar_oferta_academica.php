<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de programa
                          
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del programa</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_oferta_academica/'.$ofe_aca['clave_of_aca'],$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_ofe_aca" value="<?php if(set_value('nom_ofe_aca')) echo set_value('nom_ofe_aca'); else {if($ofe_aca) echo $ofe_aca['nombre_of_aca'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Descripción</label>
                              <div class="col-sm-10"><input type="text" name="des_ofe_aca" class="form-control android" value="<?php if(set_value('des_ofe_aca')) echo set_value('des_ofe_aca'); else {if($ofe_aca) echo $ofe_aca['descripcion_of_aca'];}?>"></div>
                            </div>
                            <div style="padding:20px;padding-bottom:0px;">
                          <div class="form-group form-animate-checkbox"><label>Activa</label>
                            <input type="checkbox" class="checkbox" name="e" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa" <?php if ($ofe_aca['activo']==1) {
                              echo 'checked';
                            }else{ echo '';}?>>
                            
                          </div>
                          </div>
                            <input type="hidden" name="id" value="<?php echo $ofe_aca['clave_of_aca']; ?>">
      </br>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                                  <a href="<?php echo base_url();?>index.php/sise/oferta_academica/">
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