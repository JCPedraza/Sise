	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Privilegios y Secciones</h3>
                        <p class="animated fadeInDown">
                         A los que se tiene acceso
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Privilegio y Secciones</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre del privilegio</th>
                          <th>Seccion</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($privilegios_secciones as $pri_sec) {
        ?>
		      <tr>
		        <td><?php echo $pri_sec->nombre_privilegio; ?></td>
		        <td><?php echo $pri_sec->total; ?></td>
                              <td><div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/agrega_seccion/<?php echo $pri_sec->id_privilegio;?>">
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