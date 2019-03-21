<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Programa
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Programa</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/registro_nuevo_programa/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre del Programa</label>
                              <div class="col-sm-10"><input type="text" minlength="15" maxlength="100" class="form-control android" name="nom_pro"></div>
                            </div>
                            <?php echo form_error('nom_pro'); ?>
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción</label>
                              <div class="col-sm-10"><input type="text" minlength="12" maxlength="150" class="form-control android" name="des_pro"></div>
                            </div>
                            <?php echo form_error('des_pro'); ?>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">Oferta Académica</label>
                              <div class="col-sm-10">
                                <select name="ofe_aca" id="">
                                    <option value="">Selecciona Una</option>
                                  <?php foreach ($oferta_academica as $of): ?>
                                    <option value="<?php echo $of->clave_of_aca; ?>"><?php echo $of->nombre_of_aca ?></option>
                                  <?php endforeach ?>
                                </select>
                              </div>
                            </div>
                            <?php echo form_error('ofe_aca'); ?>
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
                                   <p class="animated fadeInUp quote">Verifique los campos esten correctos</p>
                                </div>
                              </div>
                            </div>
                   
                    
                  
                
              </div>
            </div>
          <!-- end: content -->