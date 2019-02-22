<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Programa
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Programa</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/registro_nueva_experiencia_academica/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="" style="margin-top:40px !important;">
                              <label>Nivel Academico</label>
                              <?php foreach($ex_a as $e_a){?>
                              <select name="nom_experiencia" class="form-control form-control android">
                                <option value="" selected="selected">Seleccionar</option>
                                <option value="<?php echo $e_a->clave_exp_aca;?>"><?php echo $e_a->nombre_exp_aca;?></option>
                                 <?php };?>
                              </select>
                              <span class="bar"></span>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción de la experiencia academica</label>
                              <div class="col-sm-10"><input type="text" minlength="7" maxlength="150" class="form-control android" name="pro_experiencia"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Descripción de la experiencia academica</label>
                              <div class="col-sm-10"><input type="text" minlength="7" maxlength="150" class="form-control android" name="ins_experiencia"></div>
                            </div>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                              </div>
                        </div>
                      </form>
                      </div>
                      </div>
                          <div class="col-md-4 padding-0">
                              <div class="panel bg-light-blue">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Verifique los campos esten correctos</p>
                                </div>
                              </div>
                            </div>
                   
                    
                  
                
              </div>
            </div>
          <!-- end: content -->