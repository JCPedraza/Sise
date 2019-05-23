	<?php 


  foreach ($materias_obtenidas as $m) {
      $array[]=get_object_vars($m);
  }

  foreach ($horario as $a) {
      $array_2[]=get_object_vars($a);
  }

  #for ($i=0; $i < count($array) ; $i++) { 
   # foreach ($array_2 as $a) {
    #  if ($a['materia']==$array[$i]['materia']) {
     # }else{
      #}
    #}
  #}
#$array_3=array();
#  for ($i=0; $i <count($array) ; $i++) { 
#    $array_3=array(1,$array[$i]['materia']);
# }


#var_dump($array_3);

#die();
  foreach ($grupo_info as $grupo_info) {
   ?>
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Grupo: <?php echo $grupo_info->nombre_grupo; ?></h3>
                        <p class="animated fadeInDown">
                         Conformación del Grupo 
                        </p>
                    </div>
                  </div>
              </div>
             

            <div class="col-md-12 top-20 padding-0 tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tabs-area-demo" aria-labelledby="tabs1">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="col-md-12 tabs-area">
                      <div class="liner"></div>
                      
                      <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                        <li class="active">
                          <a href="#tabs-demo6-area1" data-toggle="tab" title="Alumnos">
                            <span class="round-tabs one">
                              <i class="glyphicon glyphicon-user"></i>
                            </span> 
                          </a>
                        </li>

                        <li>
                          <a href="#tabs-demo6-area2" data-toggle="tab" title="Horario">
                           <span class="round-tabs two">
                             <i class="glyphicon glyphicon-time"></i>
                           </span> 
                          </a>
                        </li>

                      </ul>

                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabs-demo6-area1">
                            <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6" style="margin-top:5px;">
                                </div> 
                              </div>
                                <br>
                              <form method="post" action="<?php echo base_url('index.php/sise'); ?>/conformacion_grupo">
                                <button class="btn ripple-infinite btn-round btn-success">
                                  <input type="hidden" value="<?php echo $grupo_info->clave_grupo;?>" name="grupo">
                                  <input type="hidden" value="<?php echo $grupo_info->id_generacion;?>" name="generacion">
                                  <input type="hidden" value="<?php echo $grupo_info->oferta_academica;?>" name="oferta_academica">
                                  <div>
                                    <span>Agregar Alumnos</span>
                                  </div>
                                </button>
                              </form>
                                <br>
                                <br>  
                                <br>  
                              <div class="responsive-table">
                                <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Apellido Paterno</th>
                                      <th>Apellido Materno</th>
                                      <th>Eliminar</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($alumnos_grupo as $alumnos){?>
                                      <tr>
                                        <td><?php echo $alumnos->nombre_alumno;?></td>
                                        <td><?php echo $alumnos->ap_pa_alumno;?></td>
                                        <td><?php echo $alumnos->ap_ma_alumno;?></td>
                                        <td>
                                          <button class="btn ripple-infinite btn-round btn-warning borrar" data-toggle="modal" data-target="#modaleliminar" id="filaeliminar<?php echo $alumnos->clave_alumno;?>" onclick="borrar(<?php echo $alumnos->clave_alumno;?>)"  value="Eliminar" data-whaterver="<?php echo $alumnos->clave_alumno;?>">
                                            <div>
                                              <span>Eliminar</span>
                                            </div>
                                          </button>
                                        </td>
                                      </tr>
                                      <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                              <br>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tabs-demo6-area2">
                          <div class="col-md-12">
                            <br>
                            <h4 class="text-center">Aqui se presenta el horario designado para el grupo</h4>
                            <br>
                            
                            <form method="post" action="<?php echo base_url('index.php/sise'); ?>/coformacion_horario">
                              <button class="btn ripple-infinite btn-round btn-success">
                                <input type="hidden" value="<?php echo $grupo_info->clave_grupo;?>" name="grupo">
                              <div>
                                  <span>Modificar Horario</span>
                                </div>
                              </button>
                            </form>

                            <br>
                            <br>
                            <?php #var_dump($materias_obtenidas);die(); ?>
                                <div class="table-responsive-md">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Materia</th>
                                        <th scope="col">Lunes</th>
                                        <th scope="col">Martes</th>
                                        <th scope="col">Miercoles</th>
                                        <th scope="col">Jueves</th>
                                        <th scope="col">Viernes</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($materias_obtenidas as $materias): ?>
                                        <?php foreach ($horario as $h): ?>
                                          <?php if ($materias->materia==$h->materia): ?>
                                            <tr>
                                              <td><?php echo $materias->nombre_asi;?></td>
                                              <td>
                                                <?php if ($h->dia=="lunes"): ?>
                                                  Entrada:<?php echo $h->hrs_entrada; ?>
                                                  Salida:<?php echo $h->hrs_salida; ?>
                                                <?php endif ?>
                                              </td>
                                              <td>
                                                <?php if ($h->dia=="martes"): ?>
                                                  Entrada:<?php echo $h->hrs_entrada; ?>
                                                  Salida:<?php echo $h->hrs_salida; ?>
                                                <?php endif ?>
                                              </td>
                                              <td>
                                                <?php if ($h->dia=="miercoles"): ?>
                                                  Entrada:<?php echo $h->hrs_entrada; ?>
                                                  Salida:<?php echo $h->hrs_salida; ?>
                                                <?php endif ?>
                                              </td>
                                              <td>
                                                <?php if ($h->dia=="jueves"): ?>
                                                  Entrada:<?php echo $h->hrs_entrada; ?>
                                                  Salida:<?php echo $h->hrs_salida; ?>
                                                <?php endif ?>
                                              </td>
                                              <td>
                                                <?php if ($h->dia=="viernes"): ?>
                                                  Entrada:<?php echo $h->hrs_entrada; ?>
                                                  Salida:<?php echo $h->hrs_salida; ?>
                                                <?php endif ?>
                                              </td>
                                            </tr>
                                          <?php endif ?>
                                        <?php endforeach ?>
                                      <?php endforeach ?>                                      
                                      
                                    </tbody>
                                  </table>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



             <!-- <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Grupo</h3></div>
                    <div class="panel-body">
                        <div class="row">
                           <div class="col-md-6" style="margin-top:5px;">
                          </div> 
                        </div>
                        <br>
                        <form method="post" action="<?php echo base_url('index.php/sise'); ?>/conformacion_grupo">
                          <button class="btn ripple-infinite btn-round btn-success">
                            <input type="hidden" value="<?php echo $grupo_info->clave_grupo;?>" name="grupo">
                            <input type="hidden" value="<?php echo $grupo_info->id_generacion;?>" name="generacion">
                            <input type="hidden" value="<?php echo $grupo_info->oferta_academica;?>" name="oferta_academica">
                            <div>
                              <span>Agregar Alumnos</span>
                            </div>
                          </button>
                        </form>
                        <br>
                        <br>  
                        <br>  
                        <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                            
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($alumnos_grupo as $alumnos){?>
                      		      <tr>
                                  <td><?php echo $alumnos->nombre_alumno;?></td>
                                  <td><?php echo $alumnos->ap_pa_alumno;?></td>
                                  <td><?php echo $alumnos->ap_ma_alumno;?></td>
                                  <td>
                                    <button class="btn ripple-infinite btn-round btn-warning borrar" data-toggle="modal" data-target="#modaleliminar" id="filaeliminar<?php echo $alumnos->clave_alumno;?>" onclick="borrar(<?php echo $alumnos->clave_alumno;?>)"  value="Eliminar" data-whaterver="<?php echo $alumnos->clave_alumno;?>">
                                      <div>
                                        <span>Eliminar</span>
                                      </div>
                                    </button>
                                  </td>
      		                      </tr>
                                <?php } ?>
                            </tbody>
                            

                        </table>
                        </div>
                    </div>
                  </div>
                </div>  
              </div>-->

          <!-- end: content -->



          <!--modal--> 
          <div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="modaleliminarLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">¿Seguro que desea eliminar?</h4>
                </div>
                <form method="post" id="formulario_eliminar" action="<?php echo base_url();?>index.php/sise/eliminar_alumno_grupo/">
                  <input type="hidden" name="eliminar_alumno" id="eliminar_modal">
                
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
<?php } ?>