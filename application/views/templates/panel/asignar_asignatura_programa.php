
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
                        <h3 class="animated fadeInLeft">Form Element</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-10">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Basic Element</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <form action="<?php echo base_url('index.php/sise/'); ?>asignar_asignatura_programa" method="post">

                              <input type="hidden" name="programa" value="<?php echo $id_programa; ?>">
                            
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                      <select name="periodo" id="">
                                        <?php foreach ($periodo as $per): ?>
                                          <option value="<?php echo $per->id_periodo; ?>"><?php echo $per->nombre_periodo; ?></option>
                                        <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              <br>
                              <br>
                                
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0"> 
                                      <select id="optgroup" name="asignaturas_agregar[]" class="ms" multiple="multiple">
                                          <?php foreach ($asignaturas as $asignatura): ?>
                                            <option value="<?php echo $asignatura->clave_asi; ?>"><?php echo $asignatura->nombre_asi; ?></option>
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