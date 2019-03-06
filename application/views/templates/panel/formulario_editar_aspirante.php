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
                             echo form_open('sise/edita_aspirante/'.$aspirante['clave_alumno'],$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nombre" value="<?php if(set_value('nombre')) echo set_value('nombre'); else {if($aspirante) echo $aspirante['nombre_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Paterno</label>
                              <div class="col-sm-10"><input type="text" name="a_p" class="form-control android" value="<?php if(set_value('a_p')) echo set_value('a_p'); else {if($aspirante) echo $aspirante['ap_pa_alumno'];}?>"></div>
                            </div>
                           <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Materno</label>
                              <div class="col-sm-10"><input type="text" name="a_m" class="form-control android" value="<?php if(set_value('a_m')) echo set_value('a_m'); else {if($aspirante) echo $aspirante['ap_ma_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Correo Electronico</label>
                              <div class="col-sm-10"><input type="text" name="email" class="form-control android" value="<?php if(set_value('email')) echo set_value('email'); else {if($aspirante) echo $aspirante['email_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Teléfono</label>
                              <div class="col-sm-10"><input type="text" name="tel" class="form-control android" value="<?php if(set_value('tel')) echo set_value('tel'); else {if($aspirante) echo $aspirante['telefono_alumno'];}?>"></div>
                            </div>
                            <?php
                                  if ($aspirante['estatus']==3) {?>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Ciudad</label>
                              <div class="col-sm-10"><input type="text" name="ciudad" class="form-control android" value="<?php if(set_value('ciudad')) echo set_value('ciudad'); else {if($aspirante)echo $aspirante['ciudad_alumno'];}?>"></div>
                            </div>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Estado</label>
                              <div class="col-sm-10"><input type="text" name="estado" class="form-control android" value="<?php if(set_value('estado')) echo set_value('estado'); else {if($aspirante)echo $aspirante['estado_alumno'];}?>"></div>
                            </div>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Pais</label>
                              <div class="col-sm-10"><input type="text" name="pais" class="form-control android" value="<?php if(set_value('pais')) echo set_value('pais'); else {if($aspirante) echo $aspirante['pais_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de Nacimiento</label>
                              <div class="col-sm-10"><input type="text" name="fecha" class="form-control android" value="<?php  if(set_value('fecha')) echo set_value('fecha'); else {if($aspirante)echo $aspirante['fec_nac_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Genero</label>
                              <div class="col-sm-10"><input type="text" name="g" class="form-control android" value="<?php if(set_value('g')) echo set_value('g'); else {if($aspirante) if($aspirante['genero_alumno']=='M'){ $a='Masculino';}elseif($aspirante['genero_alumno']=="F"){$a="Femenino";} echo $a;}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">RFC</label>
                              <div class="col-sm-10"><input type="text" name="rfc" class="form-control android" value="<?php if(set_value('rfc')) echo set_value('rfc'); else {if($aspirante)echo $aspirante['RFC_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Curp</label>
                              <div class="col-sm-10"><input type="text" name="curp" class="form-control android" value="<?php if(set_value('curp')) echo set_value('curp'); else {if($aspirante) echo $aspirante['CURP_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Estado Civil</label>
                              <div class="col-sm-10"><input type="text" name="e" class="form-control android" value="<?php  if(set_value('e')) echo set_value('e'); else {if($aspirante) if($aspirante['estado_civil_alumno']=='S'){$e='Soltero';}elseif($aspirante['estado_civil_alumno']=='C'){$e='Casado';}elseif($aspirante['estado_civil_alumno']=='D'){$e='Divorciado';}elseif($aspirante['estado_civil_alumno']=='V'){$e='Viudo';}elseif($aspirante['estado_civil_alumno']=='U'){$e='Union Libre';}echo $e;}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Dirección</label>
                              <div class="col-sm-10"><input type="text" name="direc" class="form-control android" value="<?php if(set_value('direc')) echo set_value('direc'); else {if($aspirante) echo $aspirante['residencia_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Institucion</label>
                              <div class="col-sm-10"><input type="text" name="ins" class="form-control android" value="<?php if(set_value('ins')) echo set_value('ins'); else {if($aspirante)echo $aspirante['institucion_alumno'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Cargo</label>
                              <div class="col-sm-10"><input type="text" name="car" class="form-control android" value="<?php if(set_value('car')) echo set_value('car'); else {if($aspirante) echo $aspirante['cargo_alumno'];}?>"></div>
                            </div>
                            <?php }?>
                            <input type="hidden" name="clave_aspirante" value="<?php echo $aspirante['clave_alumno']; ?>">
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