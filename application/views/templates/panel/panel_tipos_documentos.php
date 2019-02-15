<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tabla de los documentos solicitados</h3>
                        <p class="animated fadeInDown">
                            Aquí se Presentan los documentos.#trabajar en la descripción
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Datos de los Documentos #trabajar en la descripción</h3></div>
                    <div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/registrar_tipos_documentos">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nuevo Documento</span>
                                 </div>
                                </button>
                            </a>
                        </div>
                        <br>  
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Nombre del documento</th>
                              <th>Activo</th>
                              <th>Nombre de carpeta contenedora</th>
                              <th>Editar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php  foreach ($documentos as $doc) {;?>
                              <tr>
                                <th><?php echo $doc->nombre_tipo_doc; ?></th>
                                <th><?php 
                                  if ($doc->activo_tipo_doc==1) {
                                    ?>
                                    <span class="badge badge-success">Si</span>
                                    <?php
                                  }else{
                                    ?>
                                    <span class="badge badge-danger">No</span>
                                    <?php
                                  }
                                ?>
                                </th>
                                <th><?php echo $doc->ruta_tipo_doc; ?></th>
                                <th>
                                  <a href="<?php echo base_url('index.php')."/sise/editar_tipo_documento/".$doc->clave_tipo_doc; ?>">
                                    <button class="btn ripple-infinite btn-round btn-warning">
                                      <div>
                                        <span>Editar</span>
                                      </div>
                                    </button>
                                  </a>
                                </th>
                              </tr>
                              <?php  };?>
                          </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
