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
                    <div class="panel-heading"><h3>Ofertas Adacemicas</h3></div>
                    <div class="panel-body">
                    	<div class="col-md-6" style="margin-top:5px;">
                                  <button type="button" class="btn ripple-infinite btn-raised btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                 <div>
                                  <span>Agregar Nueva Oferta Academica</span>
                                 </div>
                                </button>
                        </div>
                      <div class="responsive-table">

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nombre del Ofertas academicas</th>
                          <th>Descripción</th>
                          <th>Avilitada</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
        foreach ($ofe_aca as $o_a) {
        ?>
		      <tr>
		        <td><?php echo $o_a->nombre_of_aca; ?></td>
		        <td><?php echo $o_a->descripcion_of_aca; ?></td>
            <td><?php 
                                  if ($o_a->activo==1) {
                                    ?>
                                    <span class="badge badge-success">Si</span>
                                    <?php
                                  }else{
                                    ?>
                                    <span class="badge badge-danger">No</span>
                                    <?php
                                  }
                                ?></td>
		        <td>
                              <div class="col-md-6" style="margin-top:5px;">
                                 <a href="<?php echo base_url();?>index.php/sise/edita_oferta_academica/<?php echo $o_a->clave_of_aca;?>">
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
                      <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Nueva Oferta Academica</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/registro_nueva_oferta_academica/',$atributos);
                          ?>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre De la Oferta Academica</label>
                              <div class="col-sm-10"><input type="text" minlength="12" maxlength="100" class="form-control android" name="nom_ofe_aca" required=""></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción de la oferta academica</label>
                              <div class="col-sm-10"><input type="text" minlength="12" maxlength="100" class="form-control android" name="des_ofe_aca" required=""></div>
                          </div>
                          <div style="padding:20px;padding-bottom:0px;">
                          <div class="form-group form-animate-checkbox">
                            <label> Activa</label>
                            <input type="checkbox" class="checkbox" name="e" data-toggle="tooltip" data-placement="right" title="" style="margin:5px;" data-original-title="Marcar si va a estar activa">
                            
                          </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                        </div>
                         </form>
                      </div>
                    </div>
                  </div> 
                <!-- Fin Modal -->
                  </div>
                </div>
              </div>  
              </div>
          <!-- end: content -->