<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de Aspirantes
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Aspirante</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/personal/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nombre" value="<?php echo set_value('nombre');?>"></div>
                              <?php echo form_error('nombre'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Paterno</label>
                              <div class="col-sm-10"><input type="text" name="a_p" class="form-control android" value="<?php echo set_value('a_p');?>"></div>
                              <?php echo form_error('a_p'); ?>
                            </div>
                           <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Materno</label>
                              <div class="col-sm-10"><input type="text" name="a_m" class="form-control android" value="<?php echo set_value('a_m');?>"></div>
                              <?php echo form_error('a_m'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">RFC</label>
                              <div class="col-sm-10"><input type="text" name="rfc" class="form-control android" value="<?php echo set_value('rfc');?>"></div>
                              <?php echo form_error('rfc'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de ingreso</label>
                              <div class="col-sm-10"><input type="date" class="form-text mask-placeholder" name="fecha" placeholder="__/__/____" required="">
                            <span class="bar"></span></div>
                            </div>
                             <div class="form-group"><label class="col-sm-1 control-label text-right">Genero</label>
                              <div class="col-sm-10"><select name="g" id="" class="form-text mask-placeholder">
                                    <option value="" selected="selected">Seleccionar</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                            </select></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right">Especialidad</label>
                              <div class="col-sm-10"><input type="text" name="especialidad" class="form-control android" value=""></div>
                          </div>
                           <hr>
                                <h3 style="color: #918C8C">Información de Cuenta</h3>
                                <p style="colo: #918C8C">Recuerda que tu usuario es tu correo electrónico </p>
                            <hr>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Correo Electronico</label>
                              <div class="col-sm-10"> <input type="email" class="form-text form-control android" value="<?php echo set_value('email');?>" id="" name="email" aria-required="true">
                              <span class="bar"></span></div>
                              <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Contraseaña</label>
                               <div class="col-sm-10"><input type="password" class="form-text form-control android" id="" value="<?php echo set_value('contra');?>" name="contra" aria-required="true">
                              <span class="bar"></span></div>
                              <?php echo form_error('contra'); ?>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">Repite la Contrseña</label>
                               <div class="col-sm-10"><input type="password" class="form-text form-control android" id="" value="<?php echo set_value('contra_conf');?>" name="contra_conf"  aria-required="true">
                              <span class="bar"></span></div>
                              <?php echo form_error('contra_conf'); ?>
                            </div>
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