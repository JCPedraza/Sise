	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Privilegios</h3>
                        <p class="animated fadeInDown">
                         Privilegios con los que se cuenta
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Privilegios</h3></div>
                    <div class="panel-body">
                    	<div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/nuevo_privilegio">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nuevo Privilegio</span>
                                 </div>
                                </button>
                            </a>
                      	</div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre del privilegio</th>
                          <th>Descripción</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($privilegio as $pri) {
        ?>
		      <tr>
		        <td><?php echo $pri->nombre_privilegio; ?></td>
		        <td><?php echo $pri->descripcion; ?></td>
		        <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_privilegio/<?php echo $pri->id_privilegio;?>">
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