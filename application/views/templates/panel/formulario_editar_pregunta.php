<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de preguntas
                          
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del la pregunta</h4>
                        </div>
                        <?php
                        foreach ($pregunta as $p) {
                          $a="";
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/c/'.$p->id_cuestionario,$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Pregunta</label>
                              <?php if ($p->pregunta!=$a) {?>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_pre" value="<?php if(set_value('nom_pre')) echo set_value('nom_pre'); else {if($p) echo $p->pregunta;}?>"></div>
                            </div>
                          <?php $a=$p->pregunta; } ?>
                           <?php } ?>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">opcion</label>
                            <?php foreach ($pregunta as $p) {?>
                            
                              <div style="padding:20px;padding-bottom:0px;">
                              <div class="form-group form-animate-checkbox"><label><?php echo $p->nombre; ?></label>
                                <input type="checkbox" class="checkbox" name="e" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa" >
                                
                              </div>
                              </div>
                            
                            <?php } ?>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $p->id_cuestionario; ?>">
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