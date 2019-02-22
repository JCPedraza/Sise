	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Ofertas academicas</h3>
                        <p class="animated fadeInDown">
                         Ofertas academicas con los que se cuenta
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>experiencia Adacemicas</h3></div>
                    <div class="panel-body">
                    	<div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/registro_nueva_experiencia_academica">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nueva esperiencia</span>
                                 </div>
                                </button>
                            </a>
                      	</div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Experiencia academicas</th>
                          <th>Descripción</th>
                          <th>Institución</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($ex_aca as $e_a) {
        ?>
		      <tr>
		        <td><?php echo $e_a->nombre_exp_aca; ?></td>
		        <td><?php echo $e_a->programa_exp_aca; ?></td>
            <td><?php echo $e_a->institucion_exp_aca; ?></td>
		        <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_oferta_academica/<?php echo $e_a->clave_exp_aca;?>">
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