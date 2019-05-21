<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tabla de generaciones</h3>
                        <p class="animated fadeInDown">
                        Generación
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Datos De Las generaciones</h3></div>
                    <div class="panel-body">
                      <div class="col-md-12" style="margin-top:5px;">
                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                 <div>
                                  <span>Agregar Nueva generación</span>
                                 </div>
                                </button>
                        </div>
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Generaciones</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($generacion as $gen) {
                        ?>
                            <tr>
                              <td><?php echo $gen->nombre_generacion; ?></td>
                              <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_generacion/<?php echo $gen->id_generacion;?>">
                                   <button class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
                                  </a>
                              </div>
                            </td>
                             <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-danger" data-toggle="modal" data-target="#exampleModalLongBorrar<?php echo $gen->id_generacion;?>" >
							                                <div class="flip">
							                                  <div class="side">
							                                    Borrar <span class="fa fa-trash"></span>
							                                  </div>
							                                  <div class="side back">
							                                    Esta segur@?
							                                  </div>
							                                </div>
							                                <span class="icon"></span>
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

              </div>

            </div>
            
                <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Nueva generaci[on</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nueva_generacion/',$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre de la generación</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nom_gen"></div>
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
                 <!-- Modal eliminar -->
                 			<?php
                          foreach ($generacion as $gen) {
                        ?>
				                  <div class="modal fade" id="exampleModalLongBorrar<?php echo $gen->id_generacion;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				                    <div class="modal-dialog" role="document">
				                      <div class="modal-content">
				                        <div class="modal-header">
				                          <h5 class="modal-title" id="exampleModalLongTitle">Esta realmente seguro</h5>
				                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                          </button>
				                        </div>
				                        <div class="modal-body">
				                          <form action="<?php echo base_url('index.php/sise/'); ?>eliminar_generacion/<?php  echo $gen->id_generacion;?>" method="post">
																<input type="hidden" name="id" value="<?php echo $gen->id_generacion;?>">
				                          
				                         <div class="col-md-12">
				                          <div class="alert col-md-12 col-sm-12 alert-icon alert-danger alert-dismissible fade in" role="alert">
				                            <div class="col-md-2 col-sm-2 icon-wrapper text-center">
				                              <span class="fa fa-flash fa-2x"></span></div>
				                              <div class="col-md-10 col-sm-10">
				                                <p><strong>Precaución!</strong> Una vez que sea eliminado no hay forma de volver a recuperarlo</p>
				                              </div>
				                            </div>
				                          </div>
				                          	
				                         </div>
				                        <div class="modal-footer">
				                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
				                                    <div>
				                                      <span>Continuar</span>
				                                    </div>
				                                  </button>
				                        </div>
				                         </form>
				                      </div>
				                    </div>
				                  </div> 
				                <!-- Fin Modal -->
                				<?php } ?>
              </div>
            </div>
          <!-- end: content -->
          <script>
              $(document).ready(function(){ 
              $("#submitButton").click(function(){ 
               $("#myModal").modal(); 
              }); 
          </script>
