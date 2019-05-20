
<style type="text/css">
  /* Multi Select ================================ */
.ms-container {
  width: auto !important; }
  .ms-container .ms-list {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    -ms-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-border-radius: 0 !important;
    -moz-border-radius: 0 !important;
    -ms-border-radius: 0 !important;
    border-radius: 0 !important; }
  .ms-container .ms-list.ms-focus {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    -ms-box-shadow: none !important;
    box-shadow: none !important; }
  .ms-container .ms-selectable,
  .ms-container .ms-selection {
    min-width: 250px !important; }
    .ms-container .ms-selectable li.ms-hover,
    .ms-container .ms-selection li.ms-hover {
      color: #000000 !important;
      background-color: #e6e6e6 !important; }
    .ms-container .ms-selectable li.ms-elem-selectable,
    .ms-container .ms-selectable li.ms-elem-selection,
    .ms-container .ms-selection li.ms-elem-selectable,
    .ms-container .ms-selection li.ms-elem-selection {
      padding: 9px 15px 6px 15px !important; }
  .ms-container .ms-optgroup-label {
    padding: 5px 0 0 8px !important; }
</style>


<div class="container-fluid mimin-wrapper">



          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Asignar Alumnos al Grupo</h3>
                        <p class="animated fadeInDown">
                          Grupo <span class="fa-angle-right fa"></span> Asignara alumnos
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-10">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Seleccione los alumnos que se asignaran al grupo</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <form action="<?php echo base_url('index.php/sise/'); ?>conformacion_grupo" method="post">

                              <input type="hidden" name="grupo" value="<?php echo $grupo; ?>">
                              <input type="hidden" name="generacion" value="<?php echo $generacion_perteneciente; ?>">
                              <input type="hidden" name="oferta_academica" value="<?php echo $oferta_academica_origen; ?>">
                      
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0"> 
                                      <div class="row">
                                        
                                        <div class="col-sm-4" style="text-align: center">
                                          <h5 style="font-weight: bold">Alumnos Disponibles</h5>
                                        </div>
                                        
                                        <div class="col-sm-4"></div>

                                        <div class="col-sm-4">
                                          <h5 style="font-weight: bold">Alumnos Seleccionados</h5>
                                        </div>

                                      </div>
                                      <select id="optgroup" name="alumnos_sin_grupos_agregar[]" class="ms" multiple="multiple">
                                          <?php foreach ($alumnos_sin_grupos as $alumnos): ?>
                                            <option value="<?php echo $alumnos->clave_alumno; ?>"><?php echo $alumnos->nombre_alumno." ".$alumnos->ap_pa_alumno." ".$alumnos->ap_ma_alumno;?></option>
                                          <?php endforeach ?>                                          
                                      </select>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                          
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                        <button type="submit" class="btn ripple-infinite btn-round btn-warning">Enviar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>


            </div>
          <!-- end: content -->
          
      </div>


      <script>
      $(function () {
            //Multi-select
            $('#optgroup').multiSelect({ selectableOptgroup: true });
      });

    </script>