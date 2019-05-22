	
 <script type="text/javascript">
 	$(document).ready(function () {
    $("#nombre").keyup(function () {
        var value = $(this).val();
       	$("#ruta").val(value);
	    });
	});
 </script>


<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario</h3>
                        <p class="animated fadeInDown"> Nuevo Documento
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Datos del Documentos</h4>
                        </div>
                        <?php
                             $atributos = array('class'=>'form-horizontal');
                             echo form_open('sise/nuevo_documento/',$atributos);
                          ?>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >Nombre:</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="nombre" id="nombre"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right" >nombre de la carpeta deonde se almacenaran los documentos:</label>
                              <div class="col-sm-10"><input type="text" class="form-control android" name="ruta" id="ruta"></div>
                            </div>
                            <label for="activo" class="switchBtn"> 
                          	   <input id="activo" type="checkbox" name="activo" value="1">
                          	   <div class="slide round">activo</div>
                          	</label>
                          </div>
                          <div class="col-md-6" style="margin-top:5px;">
                                   <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning">
                                    <div>
                                      <span>Guardar Cambios</span>
                                    </div>
                                  </button>
                                  <a href="<?php echo base_url();?>index.php/sise/mostrar_tipos_documento/">
                                          <button type="button" class="btn ripple-infinite btn-round btn-info">
                                           <div>
                                            <span>Regresar</span>
                                           </div>
                                          </button>
                                      </a>
                              </div>
                        </div>
                      </form>
                      </div>
                      </div>
                          <div class="col-md-4 padding-0">
                              <div class="panel bg-light-blue">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Verificar que los datos sean los correctos</p>
                                </div>
                              </div>
                            </div>

                    </div>
                   
                    
                  
                
              </div>
            </div>
        