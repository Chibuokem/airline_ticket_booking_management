<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/ by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 07:31:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="dash/assets/img/logo-v2.png">
    <title>Airline ticket booking system</title>
    <link rel="stylesheet" type="text/css" href="dash/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="dash/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dash/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dash/assets/lib/jqvmap/jqvmap.min.css"/>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dash/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>-->
    <link rel="stylesheet" href="<?php echo base_url();?>dash/assets/css/style.css" type="text/css"/>
    <link href="<?php echo base_url();?>bootstrap-datepicker.css" rel="stylesheet">
     <script src="<?php echo base_url();?>dash/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
     
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/js/isotop/isotope-docs.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/parallax/parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/scrollreveal.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>assets/js/jqwidgets/scripts/date-picker.js"></script>
  <script src="<?php echo base_url();?>bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.php" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              
            <div class="page-title"><span>Airline Ticket Booking Dashboard</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
             
                   
                           
                               
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                 <li class="active"><a href="<?php echo base_url();?>admin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="<?php echo base_url();?>admin/upload"><i class="icon mdi mdi-face"></i><span>Upload Flight</span></a>
                    
                  </li>
                  <!--<li class="parent"><a href="<?php echo base_url();?>admin/bookings"><i class="icon mdi mdi-chart-donut"></i><span>View Bookings</span></a>
                    
                  </li>
                 
                  <li class="parent"><a href="sendmail.php"><i class="icon mdi mdi-dot-circle"></i><span>Send Mail</span></a>
                     
                    
                  </li>
                  <li class="parent"><a href="<?php echo base_url();?>admin/users"><i class="icon mdi mdi-border-all"></i><span>View Registered Users</span></a>
                   
                  </li>-->
                  <li class="parent"><a href="<?php echo base_url(); ?>admin/logout"><i class="icon mdi mdi-layers"></i><span>Logout</span></a>
                    
                  
                          
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"></div>
            <div class="progress">
             
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row"></div>
          <div class="row"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  <div class="tools dropdown"> <span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>