<div class="container-fluid mimin-wrapper">



          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Registrar Calificación</h3>
                        <p class="animated fadeInDown">
                          Grupo <span class="fa-angle-right fa"></span> Calificaciones de alumnos
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-10">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Registre la calificación del alumno:<?php echo $alumno['nombre_alumno']." ".$alumno['ap_pa_alumno']." ".$alumno['ap_ma_alumno'] ?> </h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                                <h2>Materia:</h2>
                                <hr>
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0"> 
                                        <label class="control-label" id="select"><h4>Seleccione la materia a registrar:</h4> </label>
                                        <select name="" id="materia">
                                          <option>seleccione una materia</option>
                                          <?php foreach ($materias_obtenidas as $materias): ?>
                                            <option value="<?php echo $materias->materia; ?>"><?php echo $materias->nombre_asi; ?></option>  
                                          <?php endforeach ?>
                                        </select>
                                        <br>
                                        <div class="row">
                                          <div class="col-sm-12 padding-0">
                                            <div id="numero" hidden="true">
                                              <label class="control-label" id="select">Agregar Calificación del parcial: </label>
                                              <select id="numero_parcial">
                                                <option value="">seleccione un parcial</option>
                                                <option value="1">Primer parcial</option>
                                                <option value="2">Segundo parcial</option>
                                                <option value="3">Tercer parcial</option>
                                                <option value="final">Final</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <form method="post" id="datos_calificacion" action="<?php echo base_url('index.php/sise/');?>registrar_calificacion">
                                          <br>
                                          <br>
                                          <input type="hidden" name="alumno" value="<?php echo $alumno['clave_alumno']; ?>">
                                          <input type="hidden" name="materia" value="0" id="materia_selcionada">
                                          <input type="hidden" name="parcial" value="0" id="parcial">
                                          <br>
                                          <h4 id="nombre_materia"></h4>
                                          <div class="responsive-table">
                                            <table id="calificacion">
                                            </table>
                                            <div id="mensaje_a"></div>
                                          </div>
                                          <div class="row">
                                              <div class="col-sm-10"></div>
                                              <div class="col-sm-2">
                                                <button type="submit" id="Registrar_calificacion" style="visibility: hidden;" class="btn ripple-infinite btn-round btn-success">Registrar</button>
                                              </div>
                                          </div>
                                        </form>
                                        <br>
                                        
                                    </div>
                                  </div>
                                </div>
                          
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0">
                                      <a onclick="location.href = '<?php echo base_url('index.php/sise/');?>ver_grupo/<?php echo $grupo;?>'" href="#">
                                        <button type="" class="btn ripple-infinite btn-round btn-warning">Terminar</button>
                                      </a>
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
          
      </div>

    <script>
      $('#materia').on('change', function(){
        var val = $(this).val();
        var nombre = $('#materia option:selected').text();
        $('#materia_selcionada').val(val);
        $('#nombre_materia').html(nombre);
        $('#numero').removeAttr("hidden");
        $("#calificacion").empty();
        $("#Registrar_calificacion").css('display','none');
        
      });
      
      $('#numero_parcial').on('change', function(){
        var numero_parcial = document.getElementById('numero_parcial');
        var val = numero_parcial.options[numero_parcial.selectedIndex].value;
        $('#parcial').val(val);

        html="";
        parcial="";
        
          
          switch(val){
            
            case '1':
              parcial="Parcial Uno";
            break;

            case '2':
              parcial="Parcial Dos";
            break;

            case '3':
              parcial="Parcial Tres";
            break;

            default:
              parcial="Final";
          }
            html +="<table>";
            html +="<tr>";
            html +="<td>";
            html +="<label class=\" control-label text-right\" id=\"select\">"+parcial+" </label>";
            html +="</div>";
            html +="</td>";
            html +="<td>";
            html +="<label class=\"control-label text-right\" id=\"select\">Calificación: </label>";
            html +="<input type=\"number\" step=\"any\" required=\"true\" name=\"calificacion\" class=\"form-control col-sm-10 android\">";
            html +="</td>";
            html +="</tr>";
            html +="</table>";
          $("#calificacion").html(html);
          $("#Registrar_calificacion").removeAttr("style");
      });
      
      $("#datos_calificacion").submit(function (event){
        event.preventDefault();
        $.ajax({
          url:$("#datos_calificacion").attr("action"),
          type:$("#datos_calificacion").attr("method"),
          data:$("#datos_calificacion").serialize(),
          success:function(res){
            var respuesta = jQuery.parseJSON(res);
            if (respuesta.estatus=="correcto") {
              html="";
              html+="<div class=\"alert alert-success col-md-6 col-sm-6  alert-icon alert-dismissible fade in\" role=\"alert\">";
              html+="<div class=\"col-md-2 col-sm-2 icon-wrapper text-center\">";
              html+="<span class=\"fa fa-check fa-2x\"></span>";
              html+="</div>";
              html+="<div class=\"col-md-10 col-sm-10\">";
              html+="<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>";
              html+="<p><strong>Hecho!</strong> se ha registrado.</p>";
              html+="</div>";
              html+="</div>";
              $("#calificacion").empty();

              $("#mensaje_a").html(html);

            };
          }
        });
      });
      
    </script>