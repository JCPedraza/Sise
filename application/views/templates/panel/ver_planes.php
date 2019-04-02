
  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Programa </h3>
                        <p class="animated fadeInDown">
                         
                        </p>
                    </div>
                  </div>
              </div>
             
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Programa</h3></div>
                    <div class="panel-body">
                        
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <select name="ofer_aca" id="oferta_academica" onchange="buscarplanes()">
                              <option value="">Seleccione la oferta academica</option>
                              <?php foreach ($oferta_academica as $oferta_academica): ?>
                                <option value="<?php echo $oferta_academica->clave_of_aca ;  ?>"><?php echo $oferta_academica->nombre_of_aca ; ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>                  	  
  
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <a href="<?php echo base_url();?>index.php/sise/nuevo_programa">
                                <button class="btn ripple-infinite btn-raised btn-success">
                                 <div>
                                  <span>Agregar Nuevo Programa</span>
                                 </div>
                                </button>
                            </a>
                          </div>
                        </div>

                        <br>
                        <br>


                      <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            
                            
                            <thead>
                              <tr>
                                <th>Asignatura</th>
                                <th>Duración<!-- de la asignatura--></th>
                                <th>Créditos<!-- de la asignatura--></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php /*foreach ($asignatura as $asignatura){?>
                      		      <tr>
                                  <th><?php echo $asignatura->descripcion_asi;?></th>
                                  <th><?php echo $asignatura->nombre_tipo_asi;?></th>
                                  <th>
                                    <a href="<?php echo base_url();?>index.php/sise/editar_asignatura/<?php echo $asignatura->clave_asi;?>">
                                      <button class="btn ripple-infinite btn-raised btn-success">
                                         <div>
                                          <span>Editar Asignatura</span>
                                         </div>
                                      </button>
                                    </a>
                                  </th>
      		                      </tr>
                                <?php } */?>
                            </tbody>
                            

                        </table>
                      </div>

                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->

<script>

  function buscarplanes () {
    var oferta_academica = document.getElementById('oferta_academica');
    var ofer_aca = oferta_academica.options[oferta_academica.selectedIndex].value;
    $.ajax({
      url:window.location,
      data:{"ofer_aca":ofer_aca},
      type:"post",
      success:function(r){
      alert(r);
      }
    });
  }
</script>