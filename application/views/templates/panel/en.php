  <!-- start: Content infinitum2016 infinitum 
    b  infinitum2018-->
            <div id="content">
             <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Instrucciones</h3></div>
                     <div class="panel-body">
                      <p>
                      Considerando la necesidad de evluar los cursos a las que asistió, se le solicita que conteste las siguiente preguntas, marcando con una letra la respuesta que a su juicio correponda a la afirmación propuesta.
                      </p>

                    </div>
                  </div>
                </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>
          <p>Evaluacion del Docente <?php echo $evaluacio['nombres_personal']; ?></p></h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/guardar_respuestas/',$atributos);
                          ?>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                      </thead>
                      <tbody>
                         <?php  $a="";$b="";$aa="";$f="";
                             foreach ($cuestionario as $c) {
                              ?>
                                <tr>
                                  <td><?php if ($c->pregunta!=$a) {
                                    $aa.='<h4>';
                                    $f.='</h4>';
                                   echo $aa,$c->pregunta,$f;
                                    $a=$c->pregunta;
                                  }?>
                                  <div class="form-group form-animate-checkbox">
                            <label><?php echo $c->nombre; ?></label>
                            <input type="checkbox" class="checkbox" name="l[]" data-toggle="tooltip" data-placement="right" title="" value="<?php echo $c->id_opcion; ?>" style="margin:5px;" >
                            
                          </div>
                                  
                                     <?php  #echo '<li><input name="valor" type="radio" name="hola[]" value="'.$c->id_cuestionario.'"><span>'.$c->nombre.'</span></li>';
                                   }
                                  ?></td>
                                  
                                </tr>
         
                              
                            </tr>
                      </tbody>
                        </table>
                        <input type="hidden" name="clave_evaluacion" value="<?php echo $evaluacio['id_encuesta']; ?>">
                        <input type="hidden" name="clave_alumno" value="<?php echo $sesion['id_persona'];?>">
                        <div class="col-md-6" style="margin-top:5px;">
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
              </div>  
              </div>
            </div>
          <!-- end: content -->