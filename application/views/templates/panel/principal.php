 <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">nombre</h3>
                        <p class="animated fadeInDown"><span class="fa"></span>otra cosa</p>

                        
                    </div>
                    
                  </div>                    
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 padding-0">
                      <div>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                          <!-- Bottom Carousel Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#quote-carousel" data-slide-to="2" class=""></li>
                          </ol>

                          <!-- Carousel Slides / Quotes -->
                          <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item next left">
                              <blockquote>
                                <div class="col-md-12">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url();?>assets/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>Una descripción</p>
                                    <small>Hola</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                              <blockquote>
                                <div class="col-md-12">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url();?>assets/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>Otra descripción</p>
                                    <small>Hola</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item active left">
                              <blockquote>
                                <div class="row">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="<?php echo base_url();?>assets/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>Algun Otro mensaje</p>
                                    <small>Hola</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                          </div>

                          <!-- Carousel Buttons Next/Prev -->
                          <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                          <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel">
                <div class="panel-heading">
                  <?php if ($sesion['id_privilegio']==1){?>
                  <center><h3>Administrador</h3></center>
                <?php }elseif ($sesion['id_privilegio']==2) { ?>
                  <center><h3>Docentes</h3></center>
                <?php }elseif ($sesion['id_privilegio']==3) {?>
                  <center><h3>Alumnos</h3></center>
                <?php }elseif ($sesion['id_privilegio']==4) {?>
                  <center><h3>Inscritos</h3></center>
                <?php }elseif ($sesion['id_privilegio']==5) { ?>
                  <center><h3>Aspirantes</h3></center>
                <?php } ?>
                </div>
                <div class="panel-body"><div>
                    <?php if ($sesion['id_privilegio']==1){?> 
                    <div>
                      <ol>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante Admin</h3>
                            <p>Contenido del aviso</p>
                          </div>
                        </div>
                        </div>
                      </div>
                      <?php }elseif ($sesion['id_privilegio']==2) { ?> 
                      <div>
                      <ol>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante Docente</h3>
                            <p>HolaS</p>
                          </div>
                        </div>
                        </div>
                      </div>  
                      <?php }elseif ($sesion['id_privilegio']==3) {?> 
                      <div>
                      <ol>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante Alumno</h3>
                            <p>Contenido del aviso</p>
                          </div>
                        </div>
                        </div>
                      </div>
                    <?php }elseif ($sesion['id_privilegio']==4) {?>
                    <div>
                      <ol>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante Inscrito</h3>
                            <p>Contenido del aviso</p>
                          </div>
                        </div>
                        </div>
                      </div>  
                       <?php }elseif ($sesion['id_privilegio']==5) { ?> 
                       <div>
                      <ol>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante Aspirante</h3>
                            <p>Contenido del aviso</p>
                          </div>
                        </div>
                        </div>
                      </div>
                      <?php } ?>           
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="panel">
                <div class="panel-heading">
                  <center><h3>Aviso 2</h3></center>
                </div>
                <div class="panel-body">
                  <div>
                    <div>
                      <ol >
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                        <li>En caso de un listado</li>
                      </ol>
                      <div >
                        <div>
                          <div>
                            <h3>Aviso Importante</h3>
                            <p>Contenido del aviso</p>
                          </div>
                        </div>
                        
                      </div>                    </div>
                  </div>
                </div>
              </div>
            </div>

              </div>
            </div>
              </div>
                </div>
              </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
      		  </div>
          <!-- end: content -->
