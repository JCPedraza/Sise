<?php "hola"; ?>
<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Formulario de Registro</h4>
                    </div>

                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                      	<?php
            							$atributos = array('class'=>'form-cmxform');
            							echo form_open('sise/formulario_registro',$atributos);
            						?>                
  						            <div class="col-md-6">
                            <hr>
                                <h3 style="color: #918C8C">Información de Personal</h3>
                            <hr>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" id="nombre" value="<?php echo set_value('nombre');?>" require="" name="nombre">
                              <span class="bar"></span>
                              <label>Nombre</label>
                              <?php echo form_error('nombre');?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" value="<?php echo set_value('a_p');?>" id="validate_lastname" name="a_p" aria-required="true">
                              <span class="bar"></span>
                              <label>Apellido Paterno</label>
                              <?php echo form_error('a_p'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" value="<?php echo set_value('a_m');?>" id="" aria-required="true" name="a_m">
                              <span class="bar"></span>
                              <label>Apellido Materno</label>
                              <?php echo form_error('a_m'); ?>
                            </div>
                            
                            <hr>
                              <h3 style="color: #918C8C">Información Residencia</h3>
                            <hr>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" id="" value="<?php echo set_value('direc');?>" name="direc"  aria-required="true">
                              <span class="bar"></span>
                              <label>Dirección</label>
                              <?php echo form_error('direc'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" value="<?php echo set_value('ciudad');?>" id="" name="ciudad"  aria-required="true">
                              <span class="bar"></span>
                              <label>Ciudad</label>
                              <?php echo form_error('ciudad'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" value="<?php echo set_value('estado');?>" id="" name="estado" aria-required="true">
                              <span class="bar"></span>
                              <label>Estado</label>
                              <?php echo form_error('estado'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text form-control android" value="<?php echo set_value('pais');?>" id="" name="pais" aria-required="true">
                              <span class="bar"></span>
                              <label>País</label>
                              <?php echo form_error('pais'); ?>
                            </div>

                          </div>

                          <div class="col-md-6">
                            
                            <hr>
                                <h3 style="color: #918C8C">Información de Contacto</h3>
                            <hr>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="number" minlength="10" maxlength="10" class="form-text form-control android" id="" value="<?php echo set_value('tel');?>" name="tel" aria-required="true">
                              <span class="bar"></span>
                              <label>Teléfono</label>
                              <?php echo form_error('tel'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="email" class="form-text form-control android" value="<?php echo set_value('email');?>" id="" name="email" aria-required="true">
                              <span class="bar"></span>
                              <label>Correo Electrónico</label>
                              <?php echo form_error('email'); ?>
                            </div>

                            <hr>
                                <h3 style="color: #918C8C">Información de Cuenta</h3>
                                <p style="colo: #918C8C">Recuerda que tu usuario es tu correo electrónico </p>
                            <hr>
  
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text form-control android" id="" value="<?php echo set_value('contra');?>" name="contra" aria-required="true">
                              <span class="bar"></span>
                              <label>Contraseña</label>
                              <?php echo form_error('contra'); ?>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text form-control android" id="" value="<?php echo set_value('contra_conf');?>" name="contra_conf"  aria-required="true">
                              <span class="bar"></span>
                              <label>Repite Contraseña</label>
                              <?php echo form_error('contra_conf'); ?>
                            </div>
                          </div>

                          <div class="col-md-12">
                              <button class="submit btn btn-danger" type="submit" name="formulario" value="Submit"></button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- custom -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });
</script>
<!-- end: Javascript -->

