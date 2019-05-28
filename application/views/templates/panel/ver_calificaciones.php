<div class="container-fluid mimin-wrapper">



          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Registrar Calificación</h3>
                        <p class="animated fadeInDown">
                          Grupo <span class="fa-angle-right fa"></span> Calificaciones de alumnos
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-10">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Calificación de alumno:<?php echo $alumno['nombre_alumno']." ".$alumno['ap_pa_alumno']." ".$alumno['ap_ma_alumno'] ?> </h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <br>
                            <div align="center">
                              <form action="<?php echo base_url('index.php/sise/');?>registro_calificacion" method="post">
                                <input type="hidden" name="alumno" value="<?php echo $alumno['clave_alumno']; ?>">
                                <button type="submit" class="btn ripple-infinite btn-round btn-info">Registrar nueva calificación/Modificar calificación</button>
                              </form>
                            </div>
                            <br>
                            <br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <tr>
                                  <th>Materia</th>
                                  <th>Calificación 1 </th>
                                  <th>Calificación 2 </th>
                                  <th>Calificación 3 </th>
                                  <th>Final </th>
                                </tr>
                                <?php foreach ($materias_obtenidas as $mo): ?>
                                  <tr>
                                    <td><?php echo $mo->nombre_asi; ?></td>
                                    <td><?php echo $mo->calificacion_1; ?></td>
                                    <td><?php echo $mo->calificacion_2; ?></td>
                                    <td><?php echo $mo->calificacion_3; ?></td>
                                    <td><?php echo $mo->calificacion_final; ?></td>
                                  </tr>
                                <?php endforeach ?>
                              </table>
                            </div>
                          </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>


            </div>
          <!-- end: content -->
          
      </div>
