  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">programas</h3>
                        <p class="animated fadeInDown">
                         programas con los que se cuenta
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>programas</h3></div>
                    <div class="panel-body">
                    	<div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/registro_nuevo_programa">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nuevo programa</span>
                                 </div>
                                </button>
                            </a>
                      	</div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre del programas</th>
                          <th>Descripción</th>
                          <th>Oferta Académica</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($programa as $pro) {
                        ?>
                		      <tr>
                		        <td><?php echo $pro->nombre_programa; ?></td>
                		        <td><?php echo $pro->descripcion_programa; ?></td>
                            <td><?php echo $pro->nombre_of_aca; ?></td>
                		        <td>
                                <div class="col-md-6" style="margin-top:5px;">
                                   <a href="<?php echo base_url();?>index.php/sise/edita_programa/<?php echo $pro->clave_programa;?>">
                                     <button class="btn ripple-infinite btn-round btn-warning">
                                      <div>
                                        <span>Editar</span>
                                      </div>
                                    </button>
                                    </a>
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
              </div>
          <!-- end: content -->