<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tabla de Aspirantes registrados</h3>
                        <p class="animated fadeInDown">
                         Aspirantes 
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Datos De Los Aspirantes</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apeido Paterno</th>
                          <th>Apeido Materno</th>
                          <th>Edad</th>
                          <th>Email</th>
                          <th>Genero</th>
                          <th>Telefono</th>
                          <?php if ($sesion['id_privilegio']==1){?>
                          <th>Modificar</th>
                        <?php }elseif ($sesion['id_privilegio']!=1) {
                        ?><th>Estatus</th>
                        <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($aspirante as $asp) {
                        ?>
                            <tr>
                              <td><?php echo $asp->nombre_alumno; ?></td>
                              <td><?php echo $asp->ap_pa_alumno; ?></td>
                              <td><?php echo $asp->ap_ma_alumno; ?></td>
                              <td><?php $fecha_nac= $asp->fec_nac_alumno;

                                 $dia=date("j");
                                 $mes=date("n");
                                 $anno=date("Y");
                                 //descomponer fecha de nacimiento
                                 $anno_nac=substr($fecha_nac, 0, 4);
                                 $mes_nac=substr($fecha_nac, 5, 2);
                                 $dia_nac=substr($fecha_nac, 8, 2);
                                 //
                                 if($mes_nac>$mes){
                                   $calc_edad= $anno-$anno_nac-1;
                                   }else{
                                   if($mes==$mes_nac AND $dia_nac>$dia){
                                   $calc_edad= $anno-$anno_nac-1;  
                                   }else{
                                   $calc_edad= $anno-$anno_nac;
                                   }
                                   }
                                   echo $calc_edad;?></td>
                              <td><?php echo $asp->email_alumno; ?></td>
                              <td><?php if ($asp->genero_alumno=='M') {
                                $genero='Hombre';
                              }elseif ($asp->genero_alumno=='F') {
                                $genero='Mujer';
                              }
                                echo $genero; ?></td>
                              <td><?php echo $asp->telefono_alumno;?></td>
                              <td>
                              <?php if ($sesion['id_privilegio']==1){?>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_aspirante/<?php echo $asp->clave_alumno;?>">
                                   <button class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Editar</span>
                                    </div>
                                  </button>
                                  </a>
                              </div>
                            <?php }elseif ($sesion['id_privilegio']!=1){?>
                              <div class="col-md-6" style="margin-top:5px;">
                                  <button type="button" data-toggle="modal" data-target="#exampleModalLong<?php echo $asp->id_usuario;?>" class="btn ripple-infinite 
                                    <?php if($asp->id_privilegio==3){ echo "btn-raised btn-success";}elseif($asp->id_privilegio==4){ echo "btn-raised btn-warning";}else echo "btn-raised btn-info";?>" data-toggle="tooltip" data-placement="bottom" title="Precionar para editar el estatus">
                                 <div>
                                  <span><?php  echo $asp->nombre_privilegio; ?></span>
                                 </div>
                                </button>
                        </div>
                            <?php } ?>
                            </td>
                            </tr>
                           <?php
                          }
                        ?>
                      </tbody>
                        </table>
                      </div>
                       <!-- Modal -->
                       <?php foreach ($aspirante as $asp) { ?>
                  <div class="modal fade" id="exampleModalLong<?php echo $asp->id_usuario;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Cambiar el estatus</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" align="center">
                        <div class="modal-footer" align="left">
                                    <?php if ($asp->id_privilegio!=5){
                            echo "<a href=\"".base_url()."index.php/sise/cambio_estatus/$asp->id_usuario/5\" class=\"btn btn-info\">Aspirante</a>";
                                    }if($asp->id_privilegio!=4){
                            echo "<a href=\"".base_url()."index.php/sise/cambio_estatus/$asp->id_usuario/4\" class=\"btn btn-warning\">Inscrito</a>";
                                      }if($asp->id_privilegio!=3){
                            echo "<a href=\"".base_url()."index.php/sise/cambio_estatus/$asp->id_usuario/3\" class=\"btn btn-success\">Alumno</a>";
                                              };?>

                                  </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                <!-- Fin Modal --> 
                <?php } ?>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
