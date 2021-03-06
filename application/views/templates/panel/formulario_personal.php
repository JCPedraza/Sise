<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Alta de Personal
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Personal</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/personal/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" required="" name="nombre" value="<?php echo set_value('nombre');?>"></div>
                              <?php echo form_error('nombre'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Paterno</label>
                              <div class="col-sm-10"><input type="text" name="a_p" required="" class="form-control android" value="<?php echo set_value('a_p');?>"></div>
                              <?php echo form_error('a_p'); ?>
                            </div>
                           <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Materno</label>
                              <div class="col-sm-10"><input type="text" name="a_m" required="" class="form-control android" value="<?php echo set_value('a_m');?>"></div>
                              <?php echo form_error('a_m'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">RFC</label>
                              <div class="col-sm-10"><input type="text" required="" maxlength="13" minlength="13" name="rfc" class="form-control android" value="<?php echo set_value('rfc');?>"></div>
                              <?php echo form_error('rfc'); ?>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de ingreso</label>
                              <div class="col-sm-10"><input type="date" class="form-text mask-placeholder" name="fecha" placeholder="__/__/____" required="">
                            <span class="bar"></span></div>
                            </div>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Genero</label>
                              <div class="col-sm-10"><select name="g" id="" required="" class="form-text mask-placeholder">
                                    <option value="" selected="selected">Seleccionar</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                            </select></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right">Especialidad</label>
                              <div class="col-sm-10"><input type="text" required="" name="especialidad" class="form-control android" value=""></div>
                          </div>
                          <div class="form-group" style="margin-top:40px !important;">
                             <label class="col-sm-2 control-label text-right">Seleccionar cargo para la persona</label>
                             <div class="col-sm-10">
                              <select name="privilegio" id="" required="" class="form-control form-control android">
                                    <option value="" selected="selected">Seleccionar</option>
                                    <?php foreach ($cargo as $c) {?>                                   
                                    <option value="<?php echo $c->id_privilegio; ?>"><?php echo $c->nombre_privilegio; ?></option>
                                    <?php } ?>
                            </select>
                            </div>
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
                                  <a href="<?php echo base_url();?>index.php/sise/personal_registrado/">
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
                              <div class="panel bg-orange">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Asegurese de que todos los campos este llenados de manera correcta</p>
                                </div>
                              </div>
                            </div>

                    </div>
                   
                    
                  
                
              </div>
            </div>
          <!-- end: content -->