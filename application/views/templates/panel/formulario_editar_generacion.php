<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de 
                          
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del las Generaciones</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_generacion/'.$emod['id_generacion'],$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Modalidad</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_gen" value="<?php if(set_value('nom_gen')) echo set_value('nom_gen'); else {if($emod) echo $emod['nombre_generacion'];}?>"></div>
                            </div>
                            <input type="hidden" name="clave_generacion" value="<?php echo $emod['id_generacion']; ?>">
                        <div class="modal-footer">
                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
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