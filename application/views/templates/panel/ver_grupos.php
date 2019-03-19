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
                    	  
                        <div class="row">
                           <div class="col-md-6" style="margin-top:5px;">
                              <a href="<?php echo base_url();?>index.php/sise/nuevo_privilegio">
                                  <button class="btn ripple-infinite btn-raised btn-success">
                                   <div>
                                    <span>Conformar Grupo</span>
                                   </div>
                                  </button>
                              </a>
                          </div> 
                        </div>
                        <br>
                        <br>

                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>Grupo</th>
                                <th>Generación</th>
                                <th>Encargado</th>
                                <th>Conformación</th>
                              </tr>
                            </thead>
                            <tbody>
                      		      <tr>
                                  <?php foreach ($grupos as $grupo){ ?>
                        		        <td><?php echo $grupo->nombre_grupo;?></td>
                        		        <td><?php echo $grupo->nombre_generacion;?></td>
                                    <td><?php echo $grupo->nombres_personal." ".$grupo->ap_paterno_personal." ".$grupo->ap_materno_personal;?></td>
                        		        <td>
                                      <div class="col-md-6" style="margin-top:5px;">
                                         <a href="<?php echo base_url();?>index.php/sise/ver_grupo/<?php echo $grupo->clave_grupo ; ?>">
                                           <button class="btn ripple-infinite btn-round btn-warning">
                                            <div>
                                              <span>Ver</span>
                                            </div>
                                          </button>
                                          </a>
                                      </div>
                                    </td>
                                  <?php }; ?>
      		                      </tr>
                            </tbody>
                        </table>
                      </div>

                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->