
<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apeido Paterno</th>
                          <th>Apeido Materno</th>
                          <th>Edad</th>
                          <th>Email</th>
                          <th>Genero</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($aspirante as $asp) {
                        ?>
                            <tr>
                              <td><?php echo $asp->nombre_aspirante; ?></td>
                              <td><?php echo $asp->ap_pa_aspirante; ?></td>
                              <td><?php echo $asp->ap_ma_aspirante; ?></td>
                              <td><?php 
                              	$fecha_nac= $asp->fec_nac_aspirante;

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
								 //var_dump($calc_edad);
                              	//die();
								 }
								 echo $calc_edad; ?></td>
                              <td><?php echo $asp->email_aspirante; ?></td>
                              <td><?php if ($asp->genero_aspirante=='M') {
                                $genero='Hombre';
                              }elseif ($asp->genero_aspirante=='F') {
                                $genero='Mujer';
                              }
                                echo $genero; ?></td>
                              <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>index.php/sise/edita_privilegio/<?php echo $asp->clave_aspirante;?>" role="button"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                            </tr>
                           <?php
                          }
                        ?>
                      </tbody>
                        </table>