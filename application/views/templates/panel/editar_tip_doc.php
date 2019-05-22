

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
                <p class="animated fadeInDown"> Nuevo Pribilegio
                </p>
            </div>
          </div>
        </div>

        <div class="form-element">
            <div class="col-md-12 padding-0">
              <div class="col-md-8">
                <div class="panel form-element-padding">
                  <div class="panel-heading">
                      <h4>Datos del Privilegio</h4>
                  </div>
                    <?php foreach ($info as $info) {?>
					            <form action="<?php echo base_url();?>index.php/sise/editar_tipo_doc/<?php echo($info->clave_tipo_doc); ?>" method="post">
                        
                        <div class="panel-body" style="padding-bottom:30px;">
                          
                          <div class="col-md-12">
                            <div class="form-group">
                              <table border="0">
                                <tr>
                                  <td class="col-sm-2">Nombre: </td>
                                  <td>
                                    <input type="text" id="nombre" class="form-control android" name="nombre" value="<?php echo $info->nombre_tipo_doc; ?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Carpeta donde se almacenaran los documentos: </td>
                                  <td><input type="text" id="ruta" readonly="" class="form-control android" name="ruta" value="<?php echo $info->ruta_tipo_doc; ?>"></td>
                                </tr>
                                <tr>
                                  <td><label class="col-sm-2 control-label text-right" >Activo</label></td>
                                  <td>
                                    <div class="mini-onoffswitch onoffswitch-success">
                                      <input class="onoffswitch-checkbox" id="myonoffswitch1A" type="checkbox" name="activo" value="1" <?php if ($info->activo_tipo_doc=='1') echo "checked=\"\"";?>>
                                      <label class="onoffswitch-label" for="myonoffswitch1A"></label>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                              <button type="submit" name="formulario" class="btn ripple-infinite btn-round btn-warning pull-right">
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
                        </div>
                      </form>
                    <?php  }; ?>
                </div>
              </div>
              <div class="col-md-4 padding-0">
                    <div class="panel bg-light-blue">
                      <div class="panel-body text-white">
                         <p class="animated fadeInUp quote">Edita los campos</p>
                      </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
  </div>