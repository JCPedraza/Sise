	<?php 

  #var_dump($key->alumno);
  #die();

   ?>
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Grupo: </h3>
                        <p class="animated fadeInDown">
                         Conformación del Grupo tal
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Grupo</h3></div>
                    <div class="panel-body">
                    	  
                        <div class="row">
                           <div class="col-md-6" style="margin-top:5px;">
                              
                          </div> 
                        </div>
                        <br>
                        <br>

                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($alumnos_grupo as $alumnos){?>
                      		      <tr>
                                  <th><?php echo $alumnos->nombre_alumno;?></th>
                                  <th><?php echo $alumnos->ap_pa_alumno;?></th>
                                  <th><?php echo $alumnos->ap_ma_alumno;?></th>
      		                      </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                      </div>

                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->