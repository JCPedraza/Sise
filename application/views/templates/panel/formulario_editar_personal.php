<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Edicion de personal
                          
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del personal</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_personal/'.$datos['id_personal'],$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre </label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nombre" value="<?php if(set_value('nombre')) echo set_value('nombre'); else {if($datos) echo $datos['nombres_personal'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Apellido Materno </label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="am" value="<?php if(set_value('am')) echo set_value('am'); else {if($datos) echo $datos['ap_materno_personal'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Apellido Paterno </label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="ap" value="<?php if(set_value('ap')) echo set_value('ap'); else {if($datos) echo $datos['ap_paterno_personal'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >RFC </label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="rfc" value="<?php if(set_value('rfc')) echo set_value('rfc'); else {if($datos) echo $datos['rfc_personal'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Fecha de ingreso </label>
                              <div class="col-sm-10"><input type="date" class="form-control android" name="fecha" value="<?php if(set_value('fecha')) echo set_value('fecha'); else {if($datos) echo $datos['fecha_ingreso_ciidet'];}?>"></div>
                            </div>
                            <div class="form-group" style="margin-top:40px !important;">
                             <label class="col-sm-2 control-label text-right">Genero</label>
                             <div class="col-sm-10">
                              <select name="genero" id="" class="form-control form-control android">
                                    <option value="<?php if($datos['genero_personal']=='M'){ $a="M";}else{$a="F";} echo $a ?>" selected="selected"><?php if($datos['genero_personal']=='M'){ $t="Masculino";}else{ $t="Femenino";}echo $t; ?></option>                          
                                    <option value="<?php if($datos['genero_personal']=='M'){ $a="F";}else{$a="M";} echo $a; ?>"><?php if($datos['genero_personal']=='M'){ $r="Femenino";}else{$r="Masculino";} echo $r; ?></option>
                            </select>
                            </div>
                        </div>
                        
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Especialidad </label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="esp" value="<?php if(set_value('rfc')) echo set_value('rfc'); else {if($datos) echo $datos['especialidad_personal'];}?>"></div>
                            </div>

                            <div class="form-group" style="margin-top:40px !important;">
                             <label class="col-sm-2 control-label text-right">Cambiar el privilegio</label>
                             <div class="col-sm-10">
                              <select name="privilegio" id="" class="form-control form-control android">
                                    <option value="<?php if(set_value('privilegio')) echo set_value('privilegio'); else {if($datos) echo $datos['id_privilegio'];}?>" selected="selected"><?php echo $datos['nombre_privilegio'] ?></option>
                                    <?php foreach ($privilegio as $priv) {?>                                   
                                    <option value="<?php echo $priv->id_privilegio; ?>"><?php echo $priv->nombre_privilegio; ?></option>
                                    <?php } ?>
                            </select>
                            </div>
                        </div>
                            <input type="hidden" name="id" value="<?php echo $datos['id_personal']; ?>">
                            <input type="hidden" name="idu" value="<?php echo $datos['id_usuario']; ?>">
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