	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Niveles Academicos</h3>
                        <p class="animated fadeInDown">
                         Niveles a los que se dan cursos
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Niveles academicos</h3></div>
                    <div class="panel-body">
                      <div class="col-md-6" style="margin-top:5px;">
                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                 <div>
                                  <span>Agregar Nuevo Nivel Academico</span>
                                 </div>
                                </button>
                        </div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nivel Academico</th>
                          <th>Activo</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($niv_academico as $n_a) {
        ?>
		      <tr>
		        <td><?php echo $n_a-> nombre_exp_aca; ?></td>
		        <td><?php 
                                  if ($n_a->activo==1) {
                                    ?>
                                    <span class="badge badge-success">Si</span>
                                    <?php
                                  }else{
                                    ?>
                                    <span class="badge badge-danger">No</span>
                                    <?php
                                  }
                                ?></td>
                              <td><div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_nivel_academico/<?php echo $n_a->clave_exp_aca;?>">
                                   <button class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
                                  </a>
                              </div>
                            </td>
		      </tr>
		     
                              
                            </tr>
                           <?php
                          }
                        ?>
                      </tbody>
                        </table>
                      </div>
                      <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Nivel Academico</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nuevo_nivel_academico/',$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre del Nivel Academico</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_nivel"></div>
                          </div>
                          <div style="padding:20px;padding-bottom:0px;">
                          <div class="form-group form-animate-checkbox"><label>Esta Activo</label>
                            <input type="checkbox" class="checkbox" name="e" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa">
                            
                          </div>
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
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->