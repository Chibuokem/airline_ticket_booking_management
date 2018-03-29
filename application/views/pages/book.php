<!DOCTYPE html>
<html lang="en">


<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Booking System</title>
    <!--styles files-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet">
    <link href="assets/js/animate/animate.css" rel="stylesheet">
    <link href="assets/js/select2/select2.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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
            <a class="navbar-brand" href="<?php echo base_url();?>"><img src="assets/img/logo-v2.png" alt="logo"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
              
            </ul>
        </div>
    </div>
</nav>
<!--navigation end here-->

<!--inner body start from here-->
<div class="inner-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread-crumb animate-reveal">
                    <h2>AIRLINE TICKET BOOKING SYSTEM</h2>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Booking</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-12">
                <div class="header_box border-box animate-reveal">
                    <div class="pull-left">
                        <h3>AKANU IBAM  INTERNATIONAL AIRPORT</h3>
                        <p><i class="fa fa-map-marker"></i> Enugu State nigeria</p>
                        <p><a href="#" class="btn btn-select">Tour Email</a></p>
                    </div>
                    <div class="pull-right">
                        <strong>Total price</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="flight_detail_sidebar_v2 border-box animate-reveal">

                     <div class="flight-logo"><img  alt="logo" src="<?php echo base_url();?>uploads/<?php echo $result['picture_new'];?>"></div>
                    <div class="details-text">
                        <div class="details-text">
                                <h4><?php echo $result['name'];?><a href="#" class="btn btn-stop-v2"><?php echo $result['trip_type'];?></a> <br><small><?php echo $result['location_from'];?></small> to <small><?php echo $result['location_to'];?></small></h4>
                            </div>
                    </div>
                    <div class="LTT">
                        <span class="skin-clr"> <i class="fa fa-clock-o"></i>Total Time  <span class="pull-right">8 hours, 45 minutes</span> </span><br>
                    </div>
                    <div class="LTT">
                        <span class="skin-clr"> <i class="fa fa-plane"></i>Take Off
                        <span class="pull-right"><?php echo $result['date_take_off'];?></span> </span><br>
                    </div>
                    <div class="LTT">
                        <span class="skin-clr"> <i class="fa fa-plane fa-rotate-90"></i>Landing
                        <span class="pull-right"><?php echo $result['date_landing'];?></span> </span><br>
                    </div>
                    
                    <div class="LTT">
                        <span class="skin-clr"><b>Prices:</b>
                        <span class="pull-right"><b>First class:<?php echo $result['first_class_price'];?></b></span> </span><br>
                      <span class="skin-clr"><span class="pull-right"><b>Business class:<?php echo $result['business_class_price'];?></b></span> </span><br>
                       <span class="skin-clr"> <span class="pull-right"><b>Economy class:<?php echo $result['economy_class_price'];?></b></span> </span><br>
                       
                    </div>
                </div>
                <div class="help-to-do-v2 border-box">
                    <h4>Need Our Help?</h4>
                    <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                    <div class="LTT">
                        <span class="skin-clr"> <i class="fa fa-phone"></i> +92301765030286</span>
                        <span class="skin-clr"> <i class="fa fa-envelope"></i> teamwork@mail.com</span>
                        <span class="skin-clr"> <i class="fa fa-skype"></i> teamwork@skype</span>
                        <span class="skin-clr"> <i class="fa fa-twitter"></i> @account twitter</span>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="booking_detail_v2 border-box animate-reveal">
                    <h4>Personal information</h4>
                    <form id="book_form" method="post">
                    <div id="success" style="font-weight:bold; color:green"></div>
                    <div id="message" style="font-weight:bold; color:red"></div>
                    <input type="hidden" name="id" value="<?php echo $result['id'];?>"/>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name.." name="name" id="name" required>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter Email Address.."name="email" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <select class="select_booking" name="country" id="country">
                                <option  value="" selected="selected">Country</option>
                                <option >Nigeria</option>
                              
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4>More information</h4>
                        </div>
                        <div class="col-md-6">
                            <select class="select_booking" name="state" id="state">
                                <option selected="selected" value="0">State of origin</option>
                                <option value="Abuja FCT">Abuja FCT</option>
                                                  <option value="Abia">Abia</option>
                                                  <option value="Adamawa">Adamawa</option>
                                                  <option value="Akwa Ibom">Akwa Ibom</option>
                                                  <option value="Anambra">Anambra</option>
                                                  <option value="Bauchi">Bauchi</option>
                                                  <option value="Bayelsa">Bayelsa</option>
                                                  <option value="Benue">Benue</option>
                                                  <option value="Borno">Borno</option>
                                                  <option value="Cross River">Cross River</option>
                                                  <option value="Delta">Delta</option>
                                                  <option value="Ebonyi">Ebonyi</option>
                                                  <option value="Edo">Edo</option>
                                                  <option value="Ekiti">Ekiti</option>
                                                  <option value="Enugu">Enugu</option>
                                                  <option value="Gombe">Gombe</option>
                                                  <option value="Imo">Imo</option>
                                                  <option value="Jigawa">Jigawa</option>
                                                  <option value="Kaduna">Kaduna</option>
                                                  <option value="Kano">Kano</option>
                                                  <option value="Katsina">Katsina</option>
                                                  <option value="Kebbi">Kebbi</option>
                                                  <option value="Kogi">Kogi</option>
                                                  <option value="Kwara">Kwara</option>
                                                  <option value="Lagos">Lagos</option>
                                                  <option value="Nassarawa">Nassarawa</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Ogun">Ogun</option>
                                                  <option value="Ondo">Ondo</option>
                                                  <option value="Osun">Osun</option>
                                                  <option value="Oyo">Oyo</option>
                                                  <option value="Plateau">Plateau</option>
                                                  <option value="Rivers">Rivers</option>
                                                  <option value="Sokoto">Sokoto</option>
                                                  <option value="Taraba">Taraba</option>
                                                  <option value="Yobe">Yobe</option>
                                                  <option value="Zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address" id="address" required>
                            </div>
                        </div>
                       
                        
                        <div class="col-md-3">
                            <select class="select_booking" name="sex" id="sex">
                                <option selected="selected">sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
           
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="select_booking" name="marital_status" id="marital_status">
                                <option selected="selected">marital status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                 
                            </select>
                        </div>
                         <div class="col-md-6">
                            <select class="select_booking" name="price" id="price">
                                <option selected="selected" value="0">Choose Class</option>
                                <option value="<?php echo $result['first_class_price'];?>">FIRST CLASS</option>
                                <option value="<?php echo $result['business_class_price'];?>">BUSINESS CLASS</option>
                                <option value="<?php echo $result['economy_class_price'];?>">ECONOMY CLASS</option>
                                
                            </select>
                        </div>
                        <!--<div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Billing Zip Code.." required>
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" value="agree" id="agree"> By continuing, you agree to the Terms and Conditions.</label>
                                <>
                            </div>
                        </div>
                    </form>
                        <div class="col-md-12">
                            <p><button class="btn_book_v3" id="book">Book</button></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--inner body end here-->
<!--button back to top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--footer start here-->
<footer class="main-footer">
    <!--end button here-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="inner-footer">
                    <a href="index.php"><img src="assets/img/logo-v2.png" alt="logo" class="img-responsive"></a>
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
</footer>
<!--footer end here-->
<!--page loader-->
<!--<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_big">
                <img src="assets/img/img-loader.png" alt="loader">
            </div>
        </div>
    </div>
</div>-->
<!--end here-->

<!--script start-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jqwidgets/scripts/date-picker.js"></script>
<script src="assets/js/jqwidgets/range/ranger.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function() {
//profile update starts here 
	 $("#book").click(function(u){	
	 u.preventDefault();
	  
   var name=$("#name").val();
   var phone=$("#phone").val();
    var emaill=$("#email").val();
      var address=$("#address").val();
     var price=$("#price").val();
        var state=$("#state").val();
		 var sex=$("#sex").val();
		 var marital_status=$("#marital_status").val();
		 var country=$("#country").val();
		 var agree=$("#agree").val();
		 
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=emaill.match(pattern);
	    
		   //check_mobile(errorDiv,phoneInput);
		
		 
		 if(emaill==""){
		   	 $("#message").html("Please enter email ");
			
		}
		  
		  
		else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
		
		else if(name==""){
		   	 $("#message").html("Please enter your first name ");
			
		}
		
 
         else if(phone==""){
		   	 $("#message").html("Please enter your phone number");
		}
		
		 else if(address==""){
		   	 $("#message").html("Please enter your address");
		}
		 else if(price=="0"){
		   	 $("#message").html("Please choose your plane class");
		}
		
		 else if(state=="0"){
		   	 $("#message").html("Please choose your state of origin");
		}
		 else if(marital_status=="0"){
		   	 $("#message").html("Please choose your marital status");
		}
		 else if(agree==""){
		   	 $("#message").html("You have not agreed to our terms and conditions. tick the box ");
		}
		  else{
		  
		  var data = $("#book_form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>process/book",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Booking successful!");
			   $("#book").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Booked ');
			 
			}
			else    {
			
			 $("#message").html(data);
			  $("#book").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Booking  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#book").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; booking ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});

	//profile update ends here 
	
	});
	

</script>  
<!--script end-->

</body>

<!-- Mirrored from teamworktec.com/demo/travel-gateway/html/flight/flights_booking_two/left_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 24 Jul 2017 11:11:23 GMT -->
</html>