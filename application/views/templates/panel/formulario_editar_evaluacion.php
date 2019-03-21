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
                         <h4>Datos del la evaluacion</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_evaluacion/'.$evaluacion['id_encuesta'],$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Modalidad</label>
                              <div class="col-sm-10"><input type="text" minlength="12" maxlength="100" class="form-control android" name="nom_eva" value="<?php if(set_value('nom_eva')) echo set_value('nom_eva'); else {if($evaluacion) echo $evaluacion['nom_encuesta'];}?>"></div>
                            </div>
                            <div class="" style="margin-top:40px !important;">
                              <label>Selecciona a quien va a contestar la encuesta</label>
                              <select name="hola" id="" class="form-control form-control android">
                                    <option value="<?php echo $priv['id_privilegio'];?>" selected="selected"><?php echo $priv['nombre_privilegio']; ?></option>
                                    <?php foreach ($nom as $no) {?>                                   
                                    <option value="<?php echo $no->id_privilegio; ?>"><?php echo $no->nombre_privilegio; ?></option>
                                    <?php } ?>
                            </select>
                            <div style="padding:20px;padding-bottom:0px;">
                          <div class="form-group form-animate-checkbox"><label> Activa</label>
                            <input type="checkbox" class="checkbox" name="ll"  data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa" <?php if ($evaluacion['Activo']==1) {
                              echo 'checked';
                            }else{ echo '';}?>>
                            
                          </div>
                          </div>
                            
                        </div>
                            <input type="hidden" name="id" value="<?php echo $evaluacion['id_encuesta']; ?>">
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