  <!-- start: Content infinitum2016 infinitum 
    b  infinitum2018-->
            <div id="content">
             <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Instrucciones</h3></div>
                     <div class="panel-body">
                      <p>
                              De acuerdo 
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

                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                      </thead>
                      <tbody>
                         <?php  $a="";$b="";
       foreach ($cuestionario as $c) {
        ?>
          <tr>
            <td><?php if ($c->pregunta!=$a) {
              echo $c->pregunta,"<br>";
              $a=$c->pregunta;
            }
              if ($c->nombre!=$b) {
                echo '<li><input name="valor" type="radio" value="'.$c->id_cuestionario.'"><span>'.$c->nombre.'</span></li>';
              }

            ?></td>
            
          </tr>
         
                              
                            </tr>
                           <?php
                         }
                        ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->