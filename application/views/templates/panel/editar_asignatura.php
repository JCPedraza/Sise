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
                             echo form_open('sise/editar_asignatura/',$atributos);
                          ?>
                        <input type="hidden" name="asignatura" value="<?php echo $asignatura['clave_asi']; ?>">
                        <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la Asignatura</label>
                              <div class="col-sm-10"><input type="text" value="<?php if(set_value('nom_asi')) echo set_value('nom_asi'); else {if($asignatura) echo $asignatura['nombre_asi'];}?>" class="form-control android" name="nom_asi"></div>
                            </div>
                            <?php echo form_error('nom_asi'); ?>

                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción de la Asignatura</label>
                              <div class="col-sm-10"><input type="text" value="<?php if(set_value('des_asi')) echo set_value('des_asi'); else {if($asignatura) echo $asignatura['descripcion_asi'];}?>" class="form-control android" name="des_asi"></div>
                            </div>
                            <?php echo form_error('des_asi'); ?>

                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Duración de la Asignatura</label>
                              <div class="col-sm-4"><input type="number" value="<?php if(set_value('dur_asi')) echo set_value('dur_asi'); else {if($asignatura) echo $asignatura['duracion_asi'];}?>" placeholder="En Horas" class="form-control android" name="dur_asi"></div>
                            

                            <label class="col-sm-2 control-label text-right" >Créditos de la Asignatura</label>
                              <div class="col-sm-4"><input type="number" value="<?php if(set_value('cre_asi')) echo set_value('cre_asi'); else {if($asignatura) echo $asignatura['creditos_asi'];}?>" class="form-control android" name="cre_asi"></div>
                            </div>
                            <?php echo form_error('dur_asi');echo form_error('cre_asi'); ?>

                            <div class="form-group"><label class="col-sm control-label text-right">Tipo de Asignatura</label>
                              
                              <select name="tipo_asi">
                                <option value="">seleccione un campo</option>
                                <?php foreach ($tp_asi as $tp): ?>
                                  <option value="<?php echo $tp->clave_tipo_asi;?>"<?php if($tp->clave_tipo_asi == $asignatura['tipo_asignatura']) echo 'selected="selected"'; ?>><?php echo $tp->nombre_tipo_asi; ?></option>
                                <?php endforeach ?>
                              </select>

                            </div>
                            <div class="form-group"><label class="col-sm control-label text-right">Docente que impartira la Asignatura</label>
                              
                              <select name="doc_asi">
                                <option value="">seleccione un campo</option>
                                <?php foreach ($dc_asi as $da): ?>
                                  <option value="<?php echo $da->id_personal;?>"<?php if($da->id_personal == $doc_asi['clave_asignatura']) echo 'selected="selected"'; ?>><?php echo $da->nombres_personal; ?></option>
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
                                  <a href="<?php echo base_url();?>index.php/sise/asignaturas/">
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
                                   <p class="animated fadeInUp quote">Edite los campos que sean necesarios</p>
                                </div>
                              </div>
                            </div>

                    </div>
                </div>
              </div>
            </div>
          <!-- end: content -->