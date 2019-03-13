<?php 
$nombre="";
$genero="";
$fecha_nac="";
$tel="";
$email="";

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
                            <form action="#" method="get">
                              <?php if ($url=='editar') {
                                
                                $nombre='<div class="form-group"><label class="col-sm-2 control-label text-right">Nombre(s): </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" name="nombre"></div>
                                </div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Paterno: </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" name="ap_p"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label text-right">Apellido Materno: </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" name="ap_m"></div>
                                </div>';

                                $genero='<div class="form-group"><label class="col-sm-2 control-label text-right">Genero</label>
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                      <input type="radio" name="Masculino"> Masculino
                                    </div>
                                    <div class="col-sm-12 padding-0">
                                      <input type="radio" name="Femenino"> Femenino
                                    </div>
                                  </div>
                                </div>';

                                $fecha_nac='<div class="form-group"><label class="col-sm-2 control-label text-right">Fecha de Nacimiento:  </label>
                                  <div class="col-sm-8"><input type="date" class="form-control android" name="fecha_nac"></div>
                                </div>';

                                $tel='<div class="form-group"><label class="col-sm-2 control-label text-right">Telefono de contacto:  </label>
                                  <div class="col-sm-8"><input type="number" class="form-control android" maxlength="10" name="telefono"></div>
                                  </div>';

                                $email='<div class="form-group"><label class="col-sm-2 control-label text-right">Telefono de contacto:  </label>
                                  <div class="col-sm-8"><input type="email" class="form-control android" name="email"></div>
                                  </div>';


                                } 
                              ?>

                              <h1>Información General</h1>

                              <?php echo $nombre; ?>
                              <?php echo $fecha_nac; ?>
                              <?php echo $genero; ?>
                            
                              <div class="row">
                                <div class="form-group">
                                  <label class="col-sm-2 control-label text-right">Estado Civil: </label>
                                  <div class="col-sm-8">
                                      <select name="ec" class="form-control">
                                        <option value="d">Divorciad@</option>
                                        <option value="c">Casad@</option>
                                        <option value="s">Solter@</option>
                                        <option value="v">Viud@</option>
                                      </select>
                                  </div>
                                </div>
                              </div>  
                              
                              <div class="form-group"><label class="col-sm-2 control-label text-right">RFC:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" minlength="12" maxlength="13" name="rfc"></div>
                              </div>

                              <div class="form-group"><label class="col-sm-2 control-label text-right">CURP:  </label>
                                  <div class="col-sm-8"><input type="text" class="form-control android" minlength="18" maxlength="18" name="curp"></div>
                              </div>
                              <br>

                              <?php if ($url=="editar"): ?>
                                
                              <?php endif ?>
                              <h2>información de contacto</h2>
                              <?php echo $tel; ?>

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