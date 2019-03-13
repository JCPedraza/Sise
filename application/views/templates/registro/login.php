 <div class="container">


 <?php
           $atributos = array('class' => 'form-signin');
           echo form_open('sise',$atributos)
            ?>
              <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Hola</h1>
                  <p class="atomic-mass">Ingresa los datos solicitados</p>
                  <p class="element-name">:)</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" class="form-text"  id="inputEmail3" required name="usuario">
                    <span class="bar"></span>
                    <label>Usuario</label>
                    <?php echo form_error('usuario'); ?>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" required name="contrasena">
                    <span class="bar"></span>
                    <label>Password</label>
                    <?php echo form_error('contrasena'); ?>
                 
                  </div>
                  <input type="submit" class="btn col-md-12" value="Ingresar"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="<?php echo base_url();?>index.php/sise/registro_aspirante">| Crear una Cuenta</a>
                </div>
          </div>
        </form>
       

      </div>