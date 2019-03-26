<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Pribilegio
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
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nueva_asignatura/',$atributos);
                          ?>
                        
                        <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la Asignatura</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_asi"></div>
                            </div>
                            <?php echo form_error('nom_asi'); ?>

                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción de la Asignatura</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="des_asi"></div>
                            </div>
                            <?php echo form_error('des_asi'); ?>

                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Duración de la Asignatura</label>
                              <div class="col-sm-4"><input type="number" placeholder="En Horas" class="form-control android" name="dur_asi"></div>
                            

                            <label class="col-sm-2 control-label text-right" >Créditos de la Asignatura</label>
                              <div class="col-sm-4"><input type="number" class="form-control android" name="cre_asi"></div>
                            </div>
                            <?php echo form_error('dur_asi');echo form_error('cre_asi'); ?>

                            <div class="form-group"><label class="col-sm control-label text-right">Tipo de Asignatura</label>
                              
                              <select name="tipo_asi">
                                <option value="">seleccione un campo</option>
                                <?php foreach ($tp_asi as $tp): ?>
                                  <option value="<?php echo $tp->clave_tipo_asi; ?>"><?php echo $tp->nombre_tipo_asi; ?></option>
                                <?php endforeach ?>
                              </select>

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
                                   <p class="animated fadeInUp quote">Verifique los campos estén correctos</p>
                                </div>
                              </div>
                            </div>

                    </div>
                </div>
              </div>
            </div>
          <!-- end: content -->