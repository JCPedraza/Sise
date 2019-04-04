
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Programa </h3>
                        <p class="animated fadeInDown">
                         
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Programa</h3></div>
                    <div class="panel-body">
  
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/asignar_asignatura_programa/<?php echo $id_programa; ?>">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Asignar nueva asignatura a programa</span>
                                 </div>
                                </button>
                            </a>
                          </div>
                        </div>

                        <br>
                        <br>


                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                            
                            <thead>
                              <tr>
                                <th>Asignatura</th>
                                <th>Ver información de Asignatura</th>
                                <th>Eliminar de programa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($asignaturas_encontradas as $asignaturas): ?>
                                <tr>
                                  <td><?php echo $asignaturas->nombre_asi;?></td>
                                  <td>Duración: <?php echo $asignaturas->duracion_asi;?><br>Descripción: <?php echo $asignaturas->descripcion_asi;?></td>
                                  <td><button class="btn ripple-infinite btn-round btn-warning" data-toggle="modal" data-target="#modaleliminar" id="filaeliminar" data-whaterver="<?php echo $asignaturas->clave_asi;?>">
                                    <div>
                                      <span>Eliminar</span>
                                    </div>
                                    </button></td>
                                </tr>
                              <?php endforeach ?>
                            </tbody>
                            

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
                <form method="post" action="<?php echo base_url();?>index.php/sise/eliminar_asignatura_programa/">
                  <input type="hidden" name="eliminar_asignatura" id="eliminar_modal">
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="cerrar" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

          <script>
            $(document).ready(function(){
              $('#modaleliminar').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var recipient = button.data('whaterver');
                $('#eliminar_modal').val(recipient);
              })
            })
            $("form").submit(function (event){
    
                event.preventDefault();

                $.ajax({
                  url:$("form").attr("action"),
                  type:$("form").attr("method"),
                  data:$("form").serialize(),
                });

                $('#modaleliminar').modal("hide");
                
              });

          </script>