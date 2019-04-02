<?php 
$tooltip="data-toggle=\"tooltip\" data-placement=\"top\" title=\"Recuerda que tu correo es tu forma de acceder a la plataforma, si lo cambias usa el nuevo correo para ingresar\"";

$activado_m="";
$activado_f="";


#anidados

$nombre="";
$genero="";
$fecha_nac="";

$rfc="";
$curp="";
$residencia="";
$ciudad="";
$estado="";
$pais="";
$institucion="";
$cargo="";
$ec="";



if ($alumno["genero_alumno"]=='M') {
  $activado_m="checked=\"checked\"";
}else{
  $activado_f="checked=\"checked\"";
}

 ?>
<div class="container-fluid mimin-wrapper">


          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Form Element</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-10">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Basic Element</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <form action="<?php echo base_url('index.php/sise/'); ?>ingresar_datos_alumnos" method="post">
                              <?php if ($url=='editar') {
                                
                                $nombre='<div class="form-group"><label class="col-sm-2 control-label text-right">Nombre(s): </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" name="nombre" value="'.$alumno['nombre_alumno'].'"></div>
                                </div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Paterno: </label>
                                  <div class="col-sm-8"><input type="text" value="'.$alumno['ap_pa_alumno'].'" class="form-control android" name="ap_p"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Materno: </label>
                                  <div class="col-sm-8"><input type="text" value="'.$alumno['ap_ma_alumno'].'" class="form-control android" name="ap_m"></div>
                                </div>';

                                $genero='<div class="form-group"><label class="col-sm-2 control-label text-right">Genero</label>
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                      <input type="radio" name="genero" '.$activado_m.'> Masculino
                                    </div>
                                    <div class="col-sm-12 padding-0">
                                      <input type="radio" name="genero" '.$activado_f.'> Femenino
                                    </div>
                                  </div>
                                </div>';

                                $fecha_nac='<div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de Nacimiento:  </label>
                                  <div class="col-sm-8"><input type="date" value="'.$alumno['fec_nac_alumno'].'" class="form-control android" name="fecha_nac"></div>
                                </div>';

                                $tel='<div class="form-group"><label class="col-sm-2 control-label text-right">Telefono de contacto:  </label>
                                  <div class="col-sm-8"><input type="number" value="'.$alumno['telefono_alumno'].'" class="form-control android" maxlength="10" name="telefono"></div>
                                  </div>';

                                $email='<div class="form-group"><div '.$tooltip.'><label class="col-sm-2 control-label text-right">Correo electrónico:  </label>
                                  <div class="col-sm-8"><input type="email" class="form-control android" value="'.$alumno['usuario'].'" name="email"></div>
                                  </div></div>';

                                $rfc=$alumno['RFC_alumno'];
                                $curp=$alumno['CURP_alumno'];
                                $residencia=$alumno['residencia_alumno'];
                                $ciudad=$alumno['ciudad_alumno'];
                                $estado=$alumno['estado_alumno'];
                                $pais=$alumno['pais_alumno'];
                                $institucion=$alumno['institucion_alumno'];
                                $cargo=$alumno['cargo_alumno'];
                                $ec=$alumno['estado_civil_alumno'];

                                } 
                              ?>

                              <h1>Información General</h1>

                              <?php echo $nombre; ?>
                              <?php echo $fecha_nac; ?>
                              <?php echo $genero; ?>
                              

                              <?php if ($url=='editar'): ?>
                                <div class="row">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label text-right">Estado Civil: </label>
                                    <div class="col-sm-8">
                                        <select name="ec" class="form-control">
                                            <option>Seleccione un estado civil</option>
                                            <option <?php if($ec=='D'){ echo 'selected=""';} ?> value="d">Divorciad@</option>
                                            <option <?php if($ec=='C'){ echo 'selected=""';} ?> value="c">Casad@</option>
                                            <option <?php if($ec=='S'){ echo 'selected=""';} ?> value="s">Solter@</option>
                                            <option <?php if($ec=='V'){ echo 'selected=""';} ?> value="v">Viud@</option>                                        
                                        </select>
                                    </div>
                                  </div>
                                </div>  
                              <?php endif ?>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">RFC:  </label>
                                  <div class="col-sm-8"><input type="text"  value="<?php echo $rfc; ?>" class="form-control android" minlength="12" maxlength="13" name="rfc"></div>
                              </div>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">CURP:  </label>
                                  <div class="col-sm-8"><input type="text"  value="<?php echo $curp; ?>" class="form-control android" minlength="18" maxlength="18" name="curp"></div>
                              </div>
                              <br>
                              
                              <h2>información de Vivienda</h2>
                                
                              <div class="form-group"><label class="col-sm-2 control-label text-right">Residencia:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $residencia; ?>" name="residencia"></div>
                              </div>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">Ciudad:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $ciudad; ?>" name="ciudad"></div>
                              </div>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">Estado:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $estado; ?>" name="estado"></div>
                              </div>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">País:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $pais; ?>" name="pais"></div>
                              </div>

                              <?php if ($url=="editar"): ?>
                              
                              <br>
                              <h3>información de contacto</h3>
                              <?php echo $tel; ?>
                              <?php echo $email; ?>

                              <?php endif ?>

                              <br>
                              <h3>información de cargo desempañado</h3>
                              <div class="form-group"><label class="col-sm-2 control-label text-right">Institución:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $institucion ?>" name="instituto"></div>
                              </div>
                              <div class="form-group"><label class="col-sm-2 control-label text-right">Cargo desempeñado en la Institución:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" value="<?php echo $cargo;?>" name="cargo"></div>
                              </div>


                              <br>
                              <br>
                              <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                        <button type="submit" class="btn ripple-infinite btn-round btn-warning">Enviar</button>
                                    </div>
                                </div>
                              </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <!-- end: content -->
          
      </div>