<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Grupo
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Grupo</h4>
                        </div>
                        <form action="<?php echo base_url(); ?>index.php/sise/registrar_nuevo_grupo/" method="post">
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="form-group">
                                <label class="col-sm-2 control-label text-right" >Nombre grupo:</label>
                                <div class="col-sm-10"><input type="text" class="form-control android" name="nombre" id="nombre"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <label class="col-sm-2 control-label text-right" >Docente encargado:</label>
                                <div class="col-sm-8">
                                  <select name="docente" id="">
                                    <?php foreach ($docentes_disponibles as $docentes_disponibles): ?>
                                    
                                      <option value="<?php echo $docentes_disponibles->id_personal ?>">
                                        <?php echo $docentes_disponibles->nombres_personal." ".$docentes_disponibles->ap_paterno_personal." ".$docentes_disponibles->ap_materno_personal; ?>
                                      </option>
                                    
                                    <?php endforeach ?>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="row"> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right" >Generación del Grupo:</label>
                                <div class="col-sm-8">
                                  <select name="generacion" id="">
                                    <?php foreach ($generaciones as $generaciones): ?>
                                      <option value="<?php echo $generaciones->id_generacion ?>">
                                        <?php echo $generaciones->nombre_generacion; ?>
                                      </option>
                                    <?php endforeach ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-right" >Oferta educativa al cual pertenece:</label>
                                <div class="col-sm-8">
                                  <select name="generacion" id="">
                                    <?php foreach ($oferta_academica as $oferta_academica): ?>
                                      <option value="<?php echo $oferta_academica->id_generacion ?>">
                                        <?php echo $generaciones->nombre_generacion; ?>
                                      </option>
                                    <?php endforeach ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                            <br>
                            <br>
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
                                   <p class="animated fadeInUp quote">Verificar que los datos sean los correctos</p>
                                </div>
                              </div>
                            </div>
                    </div>
              </div>
            </div>
        