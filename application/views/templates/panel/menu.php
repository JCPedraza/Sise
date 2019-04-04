 <div class="container-fluid mimin-wrapper">

<!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <?php
                          foreach ($menu as $m ){
                            echo $ruta = base_url('index.php/sise/').$m->url;

                          ?>

                          <li <?php if(current_url()==$ruta) echo "class=\"active\""; ?> ><a href="<?php echo $ruta;?>"><span class="fa fa-<?php echo $m->icono;?>"></span><?php echo $m->nombre_seccion;?></a></li>
                         <?php
                        }
                         ?>
                    </li>
                    
                    
                    
                   
                  
                    
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

          
      </div>

       <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <?php
            foreach ($menu as $m ){
              $ruta = base_url('index.php/sise/').$m->url;
            ?>

            <li <?php if(current_url()==$ruta) echo "class=\"active\""; ?>><a href="<?php echo $ruta;?>"><?php echo $m->nombre_seccion;?></a></li>
           <?php
          }
           ?>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-success">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
 