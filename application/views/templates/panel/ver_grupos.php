  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Grupos</h3>
                        <p class="animated fadeInDown">
                         Grupos con los que se cuenta
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Grupos</h3></div>
                    <div class="panel-body">
                    	  
                        <div class="row">
                           <div class="col-md-6" style="margin-top:5px;">
                              <a href="<?php echo base_url();?>index.php/sise/registrar_nuevo_grupo">
                                  <button class="btn ripple-infinite btn-raised btn-success">
                                   <div>
                                    <span>Agregar Nuevo Grupo</span>
                                   </div>
                                  </button>
                              </a>
                          </div> 
                        </div>
                        <br>
                        <br>

                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                            
                            <?php if(isset($oferta_academica)){ ?>
                              <thead>
                                <tr>
                                  <th>Oferta Académica</th>
                                  <th>Descripción</th>
                                  <th>Ver Grupos Pertenecientes</th>
                                  <th>Descripcion</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($oferta_academica as $oferta){ ?>
                                    <tr>
                                      <td><?php echo $oferta->nombre_of_aca;?></td>
                                      <td><?php echo $oferta->descripcion_of_aca;?></td>
                                      <td>
                                        <div class="col-md-6" style="margin-top:5px;">
                                           <a href="<?php echo base_url();?>index.php/sise/grupos/<?php echo str_replace(" ", "_", $oferta->nombre_of_aca) ; ?>">
                                             <button class="btn ripple-infinite btn-round btn-warning">
                                              <div>
                                                <span>Ver</span>
                                              </div>
                                            </button>
                                            </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="col-md-6" style="margin-top:5px;">
                                           <a href="<?php echo base_url();?>index.php/sise/calif/<?php echo $oferta->clave_of_aca;?>">
                                             <button class="btn ripple-infinite btn-round btn-warning">
                                              <div>
                                                <span>Ver</span>
                                              </div>
                                            </button>
                                            </a>
                                        </div>
                                      </td>
                                    </tr>
                                  <?php }; ?>
                              </tbody>
                            <?php ;}?>


                            <?php if(isset($grupos)){ ?>
                              <thead>
                                <tr>
                                  <th>Grupo</th>
                                  <th>Generación</th>
                                  <th>Encargado</th>
                                  <th>Conformación</th>
                                  <th>Eliminar</th>

                                </tr>
                              </thead>
                              <tbody>
                        		      
                                    <?php foreach ($grupos as $grupo){ ?>
                                      <tr>
                            		        <td><?php echo $grupo->nombre_grupo;?></td>
                            		        <td><?php echo $grupo->nombre_generacion;?></td>
                                        <td><?php echo $grupo->nombres_personal." ".$grupo->ap_paterno_personal." ".$grupo->ap_materno_personal;?></td>
                            		        <td>
                                          <div class="col-md-6" style="margin-top:5px;">
                                            <form method="post" action="<?php echo base_url();?>index.php/sise/ver_grupo/">
                                             <input type="hidden" name="grupo" value="<?php echo $grupo->clave_grupo ; ?>">
                                               <button class="btn ripple-infinite btn-round btn-warning">
                                                <div>
                                                  <span>Ver</span>
                                                </div>
                                              </button>
                                            </form>
                                          </div>
                                        </td>
                                        <td>
                                          <button class="btn ripple-infinite btn-round btn-warning borrar" data-toggle="modal" data-target="#modaleliminar" id="filaeliminar<?php echo $grupo->clave_grupo;?>" onclick="borrar(<?php echo $grupo->clave_grupo;?>)"  value="Eliminar" data-whaterver="<?php echo $grupo->clave_grupo;?>">
                                            <div>
                                              <span>Eliminar</span>
                                            </div>
                                          </button>
                                        </td>
                                      </tr>
                                    <?php }; ?>
        		                      
                              </tbody>
                            <?php ;}?>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
          <!--modal--> 
          <div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="modaleliminarLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">¿Seguro que desea eliminar?</h4>
                </div>
                <form method="post" id="formulario_eliminar" action="<?php echo base_url();?>index.php/sise/eliminar_grupo/">
                  <input type="hidden" name="eliminar_grupo" id="eliminar_modal">
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="cerrar" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </div>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

            <script>
              var fila =0;
              function borrar(i){
                fila=i;
              }
                $(document).on('click', '.borrar', function (event) {
                  event.preventDefault();
                  $('#modaleliminar').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);
                    var recipient = button.data('whaterver');
                    $('#eliminar_modal').val(recipient);
                  })
                });
               $("#formulario_eliminar").submit(function (event){
                event.preventDefault();
                $.ajax({
                  url:$("#formulario_eliminar").attr("action"),
                  type:$("#formulario_eliminar").attr("method"),
                  data:$("#formulario_eliminar").serialize(),
                });
                $('#modaleliminar').modal("hide");
                document.getElementById('filaeliminar'+fila).closest('tr').remove();
              });
            </script>