
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Programa </h3>
                        <p class="animated fadeInDown">
                         
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Programa</h3></div>
                    <div class="panel-body">
  
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/asignar_asignatura_programa/<?php echo $id_programa; ?>">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Asignar nueva asignatura a programa</span>
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
                                <th>Asignatura</th>
                                <th>Ver información de Asignatura</th>
                                <th>Eliminar de programa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td></td>
                                <td><button class="btn ripple-infinite btn-round btn-warning" data-toggle="modal" data-target="#modaleliminar" data-whaterver="">
                                  <div>
                                    <span>Eliminar</span>
                                  </div>
                                  </button></td>
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

         <!--modal--> 
          <div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="modaleliminar" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
      

