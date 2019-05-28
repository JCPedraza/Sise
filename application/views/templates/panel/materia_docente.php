  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Grupos</h3>
                        <p class="animated fadeInDown">
                         Materias
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Materias</h3></div>
                    <div class="panel-body">
                        <br>
                        <br>

                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                            
                            <?php if(isset($materia_docentes)){ ?>
                              <thead>
                                <tr>
                                  <th>Grupo</th>
                                  <th>Materia</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($materia_docentes as $md){ ?>
                                    <tr>
                                      <td><?php echo $md->grupo;?></td>
                                      <td><?php echo $md->materia;?></td>
                                     
                                      
                                    </tr>
                                  <?php }; ?>
                              </tbody>
                            <?php ;}?>


                            
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
          <!--modal--> 