
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Periodo </h3>
                        <p class="animated fadeInDown">
                         
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Periodo</h3></div>
                    <div class="panel-body">
                    	  
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/nuevo_periodo">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nuevo Periodo</span>
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
                                <th>Periodo</th>
                                <th>Duración del Periodo </th>
                                <th>Editar</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($periodo as $periodo){?>
                      		      <tr>
                                  <th><?php echo $periodo->nombre_periodo;?></th>
                                  <th><?php echo $periodo->duracion_periodo;?></th>
                                  <th>
                                    <a href="<?php echo base_url();?>index.php/sise/editar_periodo/<?php echo $periodo->id_periodo;?>">
                                      <button class="btn ripple-infinite btn-raised btn-success">
                                         <div>
                                          <span>Editar Periodo</span>
                                         </div>
                                      </button>
                                    </a>
                                  </th>
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