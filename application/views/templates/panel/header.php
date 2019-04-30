  
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control Escolar</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/datatables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/fullcalendar.min.css"/>
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- Multi Select Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <!-- end: Css -->

    <!--start: javascript-->
      <script src="<?php echo base_url();?>assets/js/jquery3-3-1.min.js"></script>
    <!--end: javascript-->

  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>SISE</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                   
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><a href="#"><?php echo $sesion['nombre']." - ".$sesion['nombre_privilegio'];?></a></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url();?>assets/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li class="more">
                      <ul>
                        <li><a href="<?php echo base_url();?>index.php/sise/salir"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>


  
