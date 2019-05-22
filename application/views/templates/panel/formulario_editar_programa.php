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
                             echo form_open('sise/edita_programa/'.$programa['clave_programa'],$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre del Prograa</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_pro" value="<?php if(set_value('nom_pro')) echo set_value('nom_pro'); else {if($programa) echo $programa['nombre_programa'];}?>"></div>
                            </div>
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Descripción</label>
                              <div class="col-sm-10"><input type="text" name="des_pro" class="form-control android" value="<?php if(set_value('des_pro')) echo set_value('des_pro'); else {if($programa) echo $programa['descripcion_programa'];}?>"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">Oferta Académica</label>
                              <div class="col-sm-10">
                                <select name="ofe_aca" id="">
                                  <?php foreach ($oferta_academica as $of): ?>
                                    <option <?php if($of->clave_of_aca==$programa['oferta_academica']) echo 'selected=""' ; ?> value="<?php echo $of->clave_of_aca; ?>"><?php echo $of->nombre_of_aca ?></option>
                                  <?php endforeach ?>
                                </select>
                              </div>
                            </div>

                            <input type="hidden" name="clave_programa" value="<?php echo $programa['clave_programa']; ?>">
                          </br>

                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                                  <a href="<?php echo base_url();?>index.php/sise/programas/">
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