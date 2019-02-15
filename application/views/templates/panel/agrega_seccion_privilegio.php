	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Agregar Secciones a los Privilegios</h3>
                        <p class="animated fadeInDown">
                         Para que accedan
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Agraga Secciones a Privileos</h3></div>
                    <div class="panel-body">
                       <div class="responsive-table">
                      <form class="form-inline" method="POST" action="<?php echo base_url()?>index.php/sise/agrega_seccion/<?php echo $id_privilegio; ?>">
                           <div class="form-group">

                        <select name="campo_seccion">
                          <div class="col-md-6" style="margin-top:5px;">
                          <option value="">Elija una sección</option>
                          <?php
                          foreach($secciones_faltan as $sf){
                          ?>
                            <option value="<?php echo $sf->id_seccion;?>"><?php echo $sf->nombre_seccion;?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <input type="hidden" name="id_privilegio" value="<?php echo $id_privilegio;?>">
                      </div>
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Asignar</span>
                                 </div>
                                </button>
                        </div>
                        <?php echo form_error('campo_seccion');?>
                    </form>
                    	
                     

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Seccion</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                          foreach ($secciones as $s){
                          ?>
		      <tr>
		        <td><?php echo $s->nombre_seccion; ?></td>
		        <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/eliminar_seccion/<?php echo $s->id_privilegio?>/<?php echo $s->id_seccion;?>">
                                   <button class="btn ripple-infinite btn-round btn-danger">
                                    <div>
                                      <span>Eliminar</span>
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