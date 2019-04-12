 <div class="container">


 <?php
           $atributos = array('class' => 'form-signin');
           echo form_open('sise',$atributos)
            ?>
              <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"><img src="<?php echo base_url();?>assets/img/ciidet.png" width="250" height="250"></h1>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" class="form-text"  id="inputEmail3" required name="usuario">
                    <span class="bar"></span>
                    <label>Correo Electronico</label>
                    <?php echo form_error('usuario'); ?>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" required name="contrasena">
                    <span class="bar"></span>
                    <label>Contraseña</label>
                    <?php echo form_error('contrasena'); ?>
                 
                  </div>
                  <input type="submit" class="btn col-md-12" value="Ingresar"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="<?php echo base_url();?>index.php/sise/registro_aspirante">Crear una Cuenta</a>
                </div>
          </div>
        </form>
       

      </div>