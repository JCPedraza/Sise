<div class="container-fluid mimin-wrapper">



          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Registrar Calificacion</h3>
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
                         <h4>Seleccione los alumnos que se asignaran al grupo</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                                <h1>Materias</h1>
                                <hr>
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <div class="col-sm-12 padding-0"> 
                                        <select name="" id="materia">
                                          <option>seleccione una materia</option>
                                          <?php foreach ($materias_obtenidas as $materias): ?>
                                            <option value="<?php echo $materias->materia; ?>"><?php echo $materias->nombre_asi; ?></option>  
                                          <?php endforeach ?>
                                        </select>
                                        <br><br>
                                        <form action="#" id="numero" hidden="true">
                                            <label class="col-sm-2 control-label text-right" id="select">Agregar dias: </label>
                                            <div class="col-sm-2"><input type="number" min="1" id="numero_dias" class="form-control android"></div>
                                            <button type="submit" class="btn ripple-infinite btn-round btn-info">Agregar</button>
                                        </form>

                                        <form method="post" id="datos_horario" action="<?php echo base_url('index.php/sise/');?>registrar_horario">
                                          <br>
                                          <br>
                                          <input type="hidden" name="grupo" value="<?php echo $grupo; ?>">
                                          <input type="hidden" name="materia" value="0" id="materia_selcionada">
                                          <br>
                                          <h4 id="nombre_materia"></h4>
                                          <div class="responsive-table">
                                            <table id="horas">
                                            </table>
                                          </div>
                                          <div class="row">
                                              <div class="col-sm-10"></div>
                                              <div class="col-sm-2">
                                                <button type="submit" id="Registrar_horas" style="visibility: hidden;" class="btn ripple-infinite btn-round btn-success">Registrar</button>
                                              </div>
                                          </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br> 
                                        <!--<div class="row">
                                          <div class="col-sm-4" style="text-align: center">
                                            <h5 style="font-weight: bold">Alumnos Disponibles</h5>
                                          </div>
                                          
                                          <div class="col-sm-4"></div>

                                          <div class="col-sm-4">
                                            <h5 style="font-weight: bold">Alumnos Seleccionados</h5>
                                          </div>
                                        </div>-->
                                        
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
        $("#horas").empty();
        $('#numero_dias').val(0);
        $("#Registrar_horas").css('display','none');
      });
      
      $("#numero").submit(function (event){
        event.preventDefault();
        var val = $('#numero_dias').val();
        html="";
        for (var i = 0; i < val; i++) {
          html +="<table>";
          html +="<tr>";
          html +="<td>";
          html +="<label class=\"col-sm-2 control-label text-right\" id=\"select\">Dia: </label>";
          html +="<div class=\"col-sm-4\">";
          html +="<select name=\"dia[]\" required=\"true\" id=\"select\">";
          html +="<option value=\"lunes\">lunes</option>";
          html +="<option value=\"martes\">martes</option>";
          html +="<option value=\"miercoles\">miercoles</option>";
          html +="<option value=\"jueves\">jueves</option>";
          html +="<option value=\"viernes\">viernes</option>";
          html +="</select>";
          html +="</div>";
          html +="</td>";
          html +="<td>";
          html +="<label class=\"col-sm-2 control-label text-right\" id=\"select\">Hora Inicio: </label>";
          html +="<div class=\"col-sm-10\"><input type=\"time\" required=\"true\" name=\"hrs_inicio[]\" class=\"form-control android\"></div>";
          html +="</td>";
          html +="<td>";
          html +="<label class=\"col-sm-2 control-label text-right\" id=\"select\">Hora Fin: </label>";
          html +="<div class=\"col-sm-10\"><input type=\"time\" required=\"true\" name=\"hrs_final[]\" class=\"form-control android\"></div>";
          html +="</td>";
          html +="</tr>";
          html +="</table>";
        };
        $("#horas").html(html);
        $("#Registrar_horas").removeAttr("style");
      });

      $("#datos_horario").submit(function (event){
        event.preventDefault();
        $.ajax({
          url:$("#datos_horario").attr("action"),
          type:$("#datos_horario").attr("method"),
          data:$("#datos_horario").serialize(),
        });
      });
      
    </script>