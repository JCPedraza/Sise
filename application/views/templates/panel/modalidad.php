<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tabla de modalidades</h3>
                        <p class="animated fadeInDown">
                         modalidad
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-6 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Datos De Las modalidades</h3></div>
                    <div class="panel-body">
                      <div class="col-md-6" style="margin-top:5px;">
                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                 <div>
                                  <span>Agregar Nueva Modalidad</span>
                                 </div>
                                </button>
                        </div>
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre de la Modalidad</th>
                          <th>Descripción de la Modalidad</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($modalidad as $mod) {
                        ?>
                            <tr>
                              <td><?php echo $mod->nombre_mod; ?></td>
                              <td><?php echo $mod->descripcion_mod; ?></td>
                              <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_modalidad/<?php echo $mod->clave_mod;?>">
                                   <button class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
                                  </a>
                              </div>
                            </td>
                            </tr>
                           <?php
                          }
                        ?>
                      </tbody>
                        </table>
                      </div>

                  </div>
                </div>

              </div>

            </div>
            <div class="col-md-6 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Datos del nivel Academico</h3></div>
                    <div class="panel-body">
                      <div class="col-md-6" style="margin-top:5px;">
                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#hola">
                                 <div>
                                  <span>Agregar Nuevo nivel academico</span>
                                 </div>
                                </button>
                        </div>
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nivel</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($nivel as $niv) {
                        ?>
                            <tr>
                              <td><?php echo $niv->nombre_exp_aca; ?></td>
                              <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_nivel_academico/<?php echo $niv->clave_exp_aca;?>">
                                   <button class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
                                  </a>
                              </div>
                            </td>
                            </tr>
                           <?php
                          }
                        ?>
                      </tbody>
                        </table>
                      </div>

                  </div>
                </div>

              </div>
              
            </div>
                <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Nueva Modalidad</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nueva_modalidad/',$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la modalidad</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_mod"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripcion de la modalidad</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="des_mod"></div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div> 
                <!-- Fin Modal --> 
                <!-- Modal 2 -->
                  <div class="modal fade" id="hola" tabindex="-1" role="dialog" aria-labelledby="xampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="xampleModalLong1Title">Nuevo nivel Academico</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nuevo_nivel_academico/',$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre del nivel Academici</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_niv"></div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal1">Close</button>
                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div>
                <!-- Fin Modal 2-->
              </div>
            </div>
          <!-- end: content -->
          <script>
              $(document).ready(function(){ 
              $("#submitButton").click(function(){ 
               $("#myModal").modal(); 
              }); 
          </script>
