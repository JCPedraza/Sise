  <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">programas</h3>
                        <p class="animated fadeInDown">
                         programas con los que se cuenta
                        </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12  padding-0">

              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Programa</h3></div>
                    <div class="panel-body">
                        
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <select name="ofer_aca" id="oferta_academica" onchange="buscarprogramas()">
                              <option value="">Seleccione la oferta academica</option>
                              <?php foreach ($oferta_academica as $oferta_academica): ?>
                                <option value="<?php echo $oferta_academica->clave_of_aca ;  ?>"><?php echo $oferta_academica->nombre_of_aca ; ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>                      
  
                        <div class="row">
                          <div class="col-md-6" style="margin-top:5px;">
                            <a id="nuevoprogramas" href="<?php echo base_url();?>index.php/sise/registro_nuevo_programa">
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
                                <th>Programa</th>
                                <th>Descripción</th>
                                <th>Ver conformación</th>
                                <th>Editar</th>
                              </tr>
                            </thead>
                            <tbody id="listaprogramas">
                                
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
  function buscarprogramas () {
    var oferta_academica = document.getElementById('oferta_academica');
    var ofer_aca = oferta_academica.options[oferta_academica.selectedIndex].value;
    $.ajax({
      url:window.location,
      data:{"ofer_aca":ofer_aca},
      type:"post",
      success:function(respuesta){
        
      var registros = eval(respuesta);
      html="";

      for (var i = 0; i < registros.length; i++) {
        html +="<tr><td>"+registros[i]["nombre_programa"]+"</td><td>"+registros[i]["descripcion_programa"]+"</td><td>";
        html +="<a href=\"http://localhost/Sise/index.php/sise/conformacion_programamas/"+registros[i]["clave_programa"]+"\">";
        html +="<button class=\"btn ripple-infinite btn-round btn-warning\">";
        html +="<div><span>Ver</span></div></button></a>";
        html +="</td>";
        html += "<td>"
        html += "<a href=\"<?php echo base_url();?>index.php/sise/edita_programa/"+registros[i]["clave_programa"]+"\">";
        html += "<button class=\"btn ripple-infinite btn-round btn-warning\">";
        html += "<div>";
        html += "<span>Editar</span>";
        html += "</div>";
        html += "</button>";
        html += "</a>";
        html += "</td></tr>";
      };
      
      $("#listaprogramas").html(html);
    
      }
    });
  }
  
  $(document).ready(function(){
     $('#datatables-example').DataTable();
  });
                  
  
</script>

  
