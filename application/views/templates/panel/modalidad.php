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
              <div class="col-md-12 top-20 padding-0">
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
                                
                                   <button class="btn ripple-infinite btn-round btn-warning" value="<?php echo $mod->clave_mod;?>"  data-toggle="modal" data-target="#edicion">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
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
                <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
                  <!-- Modal de Edicion-->
                  <div class="modal fade" id="edicion" tabindex="-1" role="dialog" aria-labelledby="edicion" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="edicion">Edición de la modalidad</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/edita_modalidad/'.$emod['clave_mod'],$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Modalidad</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_mod" value="<?php if(set_value('nom_mod')) echo set_value('nom_mod'); else {if($emod) echo $emod['nombre_mod'];}?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Descripción</label>
                              <div class="col-sm-10"><input type="text" name="des_pri" class="form-control android" value="<?php if(set_value('des_pri')) echo set_value('des_pri'); else {if($emod) echo $emod['descripcion_mod'];}?>"></div>
                            </div>
                            <input type="hidden" name="clave_mod" value="<?php echo $emod['clave_mod']; ?>">
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
              </div>  
              </div>
            </div>
          <!-- end: content -->
          <script>
              $(document).ready(function(){ 
              $("#submitButton").click(function(){ 
               $("#myModal").modal(); 
              }); 
          </script>
}); 
