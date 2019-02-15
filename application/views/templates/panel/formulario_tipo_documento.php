<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	.switchBtn {
    position: relative;
    display: inline-block;
    width: 110px;
    height: 34px;
	}
	.switchBtn input {display:none;}
	.slide {
	    position: absolute;
	    cursor: pointer;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: #ccc;
	    -webkit-transition: .4s;
	    transition: .4s;
	    padding: 8px;
	    color: #fff;
	}
	.slide:before {
	    position: absolute;
	    content: "";
	    height: 26px;
	    width: 26px;
	    left: 78px;
	    bottom: 4px;
	    background-color: white;
	    -webkit-transition: .4s;
	    transition: .4s;
	}
	input:checked + .slide {
	    background-color: #8CE196;
	    padding-left: 40px;
	}
	input:focus + .slide {
	    box-shadow: 0 0 1px #01aeed;
	}
	input:checked + .slide:before {
	    -webkit-transform: translateX(26px);
	    -ms-transform: translateX(26px);
	    transform: translateX(26px);
	    left: -20px;
	}
	.slide.round {
    border-radius: 34px;
	}
	.slide.round:before {
	    border-radius: 50%;
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

 <script type="text/javascript">
 	$(document).ready(function () {
    $("#nombre").keyup(function () {
        var value = $(this).val();
       	$("#ruta").val(value);
	    });
	});
 </script>

<body>
	
</body>
</html>
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
        