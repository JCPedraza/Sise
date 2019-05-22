<?php 

$activado_m="";
$activado_f="";

if ($aspirante["genero_alumno"]=='M') {
  $activado_m="checked=\"checked\"";
}else{
  $activado_f="checked=\"checked\"";
}



 ?>
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
                              <div class="col-sm-10"><input type="text" name="email" class="form-control android" value="<?php 
                              if(set_value('email')) echo set_value('email'); else {if($aspirante) echo $aspirante['usuario'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Teléfono</label>
                              <div class="col-sm-10"><input type="numbre" minlength="10" maxlength="10" name="tel" class="form-control android" value="<?php if(set_value('tel')) echo set_value('tel'); else {if($aspirante) echo $aspirante['telefono_alumno'];}?>"></div>
                            </div>
                            <?php
                                  if ($aspirante['id_privilegio']==3 || $aspirante['id_privilegio']==4 || $aspirante['id_privilegio']==5) {?>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de Nacimiento</label>
                              <div class="col-sm-10"><input type="date" name="fecha" class="form-control android" value="<?php  if(set_value('fecha')) echo set_value('fecha'); else {if($aspirante)echo $aspirante['fec_nac_alumno'];}?>"></div>
                            </div>
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Genero</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" <?php echo $activado_m; ?> name="genero" value="M"> Masculino
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" <?php echo $activado_f; ?> name="genero" value="F"> Femenino
                                </div>
                              </div>
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
                                  <a href="<?php echo base_url();?>index.php/sise/aspirantes/">
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