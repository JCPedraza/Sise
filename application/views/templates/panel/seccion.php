	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Secciones</h3>
                        <p class="animated fadeInDown">
                         Secciones con los que se cuenta
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Secciones</h3></div>
                    <div class="panel-body">
                    	<div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/nueva_seccion">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nueva Seccion</span>
                                 </div>
                                </button>
                            </a>
                      	</div>
                      </div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre de la seccion</th>
                          <th>Descripción</th>
                          <th>Menu</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($seccion as $sec) {
        ?>
		      <tr>
		        <td><?php echo $sec->nombre_seccion; ?></td>
		        <td><?php echo $sec->descripcion; ?></td>
            <td><?php if ($sec->activo>0) {
              
              $r='fa-check';
            }else{ $r='fa-times';}?><i aling="Centerr" class="fa <?php echo $r?>"></i></td>
		        <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_seccion/<?php echo $sec->id_seccion;?>">
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
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->