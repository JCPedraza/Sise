<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de Experiencia Academica
                          
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos de la experiencia</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_programa/'.$exp_aca['clave_exp_aca'],$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la experiencia academica</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_ex" value="<?php if(set_value('nom_ex')) echo set_value('nom_ex'); else {if($exp_aca) echo $exp_aca['nombre_exp_aca'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Descripción</label>
                              <div class="col-sm-10"><input type="text" name="des_ex" class="form-control android" value="<?php if(set_value('des_ex')) echo set_value('des_ex'); else {if($exp_aca) echo $exp_aca['programa_exp_aca'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Descripción</label>
                              <div class="col-sm-10"><input type="text" name="ins_ex" class="form-control android" value="<?php if(set_value('ins_ex')) echo set_value('ins_ex'); else {if($exp_aca) echo $exp_aca['institucion_exp_aca'];}?>"></div>
                            </div>
                            <input type="hidden" name="clave_of_aca" value="<?php echo $exp_aca['clave_exp_aca']; ?>">
                            <input type="hidden" name="clave_ex" value="<?php echo $exp_aca['clave_externa']; ?>">
      </br>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
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
                                   <p class="animated fadeInUp quote">Modifica Solamente Los Campos Que Se Necesiten</p>
                                </div>
                              </div>
                            </div>

                    </div>
                   
                    
                  
                
              </div>
            </div>
          <!-- end: content -->