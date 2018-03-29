<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from teamworktec.com/demo/travel-gateway/html/pages/log_in.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 24 Jul 2017 11:15:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Booking system</title>
    <!--styles files-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="favicon.ico">
    <!--end here-->
</head>
<body>
<!--start top-bar-->
<div class="top_bar_travel hidden-xs text-center">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6">
            <ul class="list-unstyled list-inline top_contact">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="assets/img/r-flag.png" alt="flag">English
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="assets/img/frence-flag.ico" alt="flag">Fransh</a></li>
                        <li><a href="#"><img src="assets/img/turkey-flag.ico" alt="flag">Spanish </a></li>
                        <li><a href="#"><img src="assets/img/russia-flag.ico" alt="flag">Russian</a></li>
                        <li><a href="#"><img src="assets/img/garmen-flg.png" alt="flag">German</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-5 hidden-sm">
           
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="top_email">
                <ul class="list-unstyled list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

            </div>
        </div>

        </div>
    </div>
</div>
<!--end top-bar-->

<!--start navigation bar-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url();?>assets/img/logo-v2.png" alt="logo"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
                
              
                <!--Flights-->
           
                <!--Hotels-->
              
                <!--Travels-->
              
                <!--ShortCodes-->
                
                
                            
               
            </ul>
        </div>
    </div>
</nav>
<!--navigation end here-->

<!--inner body start from here-->
<div class="inner-body">
    <div class="login_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                 
                    <div class="login-widget animte-reavel">
                   
                            <div class="sec-img">
                            <a
                                <h3>Sign in to admin panel</h3>
                            </div>
                        <div class="login-box">
                            <form id="login-form">
                            <h3 id="errorr" style="color:red; font-weight:bold;"></h3>
                            <h3 id="success" style="color:green; font-weight:bold;"></h3>
                                <div class="form-group">
                                <strong></strong>
         <span><i class="fa fa-user"></i></span>  <input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                <span><i class="fa fa-lock"></i></span>      <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                </div>
                                <div class="form-actions clearfix">
                                    <div class="remember-me pull-left">
                                        <input type="checkbox"> <span>Remember me?</span>
                                    </div>
                                    <div class="submit-form text-center">
                                    <button class="btn submit-btn" id="btn-login">Sign In</button>
                                        
                                        <div class="login-footer"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="register">
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--inner body end from here-->
<!--back_to_top-->
<div id="back_to_top" class="no-margin">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--end-->
<!--footer start here-->
<footer class="main-footer">
    <!--end button here-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="inner-footer">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo" class="img-responsive"></a>
                    <p class="footer-content">
                        AIRLINE TICKET BOOKING SYSTEM</p>
                    <br>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-phone"></i></a></span> Call Us 0191366759  Or 0174912978</p>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-envelope"></i></a></span>  Email info.madhu786@gmail.com</p>
                    <p class="footer-text"><span><a href="#"><i class="fa fa-map-marker"></i></a></span> Visit Us -154 Upashor , Sylhet Bangladesh</p>
                    <ul class="list-unstyled list-inline ">
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-facebook-f"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-futbol-o"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-google-plus-official"></i></span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="social-icon"><i class="fa fa-linkedin"></i></span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 hidden-sm hidden-xs col-xs-12">
                <div class="list-of-nav">
                    <div class="inner-footer1">
                        
                        <ul class="list-unstyled">
   
                            <li><a href="log_in.php"><i class="fa fa-hand-o-right"></i> Admin Log In</a></li>
                            
                    
                          
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="inner-footer1">
                    
                    <h3>Newsletter</h3>
                    <p class="footer-content1">
                        Sign up for our newsletter
                        to get offers  and uspadates
                    </p>

                    <form class="search-mail">
                        <input class="search-input" placeholder="Email Address..">
                        <input class="search-Button" type="submit">
                    </form>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs col-xs-12">
               
                        <li>
                            <div class="img-news">
                                <img src="assets/img/new-index3-3.jpg" alt="image" class="img-responsive">
                            </div>
                            <div class="content-news">
                                
                             
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <p class="footer-bottom">&copy; copyright 2017 by <a href="">Felicia</a></p>
    <!--button back to top-->

</footer>
<!--footer end here-->


<!--page loader-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_big">
                <img src="<?php echo base_url();?>assets/img/img-loader.png" alt="loader">
            </div>
        </div>
    </div>
</div>
<!--end here-->

<!--script files-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/parallax/parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jqwidgets/scripts/date-picker.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script>
$(document).ready(function() {


	 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>/admin/enter",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>admin"; ',2000);
			 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	});
</script>  
<!--end script files-->
</body>


</html>