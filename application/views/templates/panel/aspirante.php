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
                                  <button type="button" data-toggle="modal" class="btn ripple-infinite btn-raised btn-success" data-toggle="tooltip" data-placement="bottom" title="Precionar para editar el estatus"  data-target="#exampleModalLong">
                                   
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
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Cambiar el estatus</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" align="center">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/noexiste/',$atributos);
                             foreach ($privilegios as $pr) {
                          ?>

                              <?php 
                                  if($pr->id_privilegio==3){
                               ?>
                              <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-success">
                              <?php }elseif ($pr->id_privilegio==4) { ?>
                                <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-warning">
                                <?php }elseif ($pr->id_privilegio==5) {?>
                                <button style="margin-top:0px !important;" class="btn-flip btn btn-3d btn-info">
                                <?php } ?>
                                <div class="flip">
                                  <div class="side">
                                    <?php echo $pr->nombre_privilegio; ?> <span class="fa"></span>
                                  </div>
                                  <div class="side back">
                                    ¿Esta Seguro?
                                  </div>
                                </div>
                                <span class="icon"></span>
                              </button>
                        <?php } ?>
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
