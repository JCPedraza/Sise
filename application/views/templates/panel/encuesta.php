	<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Evaluación</h3>
                        <p class="animated fadeInDown">
                         carrera: <?php  ?>
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Evaluar Desempeño del los Docentes</h3></div>
                    <div class="panel-body">
                      <?php  if(empty($evaluacion)){?>
                    	<div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/eva">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Comenzar evaluación</span>
                                 </div>
                                </button>
                            </a>
                      	</div>
                      <?php }else{?>
                        <div class="col-md-6">
                              <div class="alert alert-success col-md-12 col-sm-12  alert-icon alert-dismissible fade in" role="alert">
                                <div class="col-md-2 col-sm-2 icon-wrapper text-center">
                                  <span class="fa fa-check fa-2x"></span></div>
                                  <div class="col-md-10 col-sm-10">
                                   <p><strong>Excelente </strong>Has contestado la evaluación</p>
                                  </div>
                                </div>
                              </div>
                        <?php  }?>
                      <div class="responsive-table">

                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->