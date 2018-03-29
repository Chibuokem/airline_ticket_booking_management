<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from teamworktec.com/demo/travel-gateway/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 24 Jul 2017 11:06:00 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Booking System</title>
    <!--styles files-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/jqwidgets/styles/jqx.base.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/animate/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>jon.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap-datepicker.css" rel="stylesheet">
    
    <!--script files-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>jon.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/js/isotop/isotope-docs.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url();?>assets/js/parallax/parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/scrollreveal.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>assets/js/jqwidgets/scripts/date-picker.js"></script>
  <script src="<?php echo base_url();?>bootstrap-datepicker.js"></script>
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
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo-v2.png" alt="logo"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
                <li class="dropdown">
                    <a href="javascript:;"> <i class="fa fa-home"></i>Home
                        <span class="caret"></span></a>
                    
  
                   
                </li>
                <!--Flights-->
           
                <!--Hotels-->
                <li class="dropdown">
                    <a  href="#about"><i class="fa fa-hotel"></i>About Us
                    <span class="caret"></span></a>
                     
                </li>
                <!--Travels-->
                <li class="dropdown">
                    <a href="#feature"><i class="fa fa-car"></i>Airlines
                   <span class="caret"></span></a>     
                  
                </li>
                <!--ShortCodes-->
                
                      
                <!--Find My Flight-->
                <li class="visible-lg"><span><a href="#contact" class="btn btn_order_now">Contact Us</a></span></li>
            </ul>
        </div>
    </div>
</nav>
<!--navigation end here-->

<!--inner body start from here-->
 <div class="wrapper_inspiration">
        <div class="container">
            <div class="div ">
                <h3> Find <span>My</span> Flight</h3>
                <div class="container odey">
                <!--main-fill-->
                <div class="main-fill ">
                    <!--tabs-->
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tabtravel" data-toggle="tab"><i class="fa fa-plane"></i> Flight</a></li>
                               
                            </ul>
                        </div>
                        <!--panel-body-->
                        <div class="panel-body">
                            <!--tab-content-->
                            <div class="tab-content">
                                <!--tabtravel-->
                              <div class="tab-pane fade in active" id="tabtravel">
                                    <h3>Come Fly With Us</h3>
                                    <form  action="<?php echo base_url();?>search">
                                    <ul class="list-inline list-unstyled">
                                    
                                        <li>
                                            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Departing from" name="location_from" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Arriving At" name="location_to" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                          
                            <!-- <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>-->
                                   <input type="text" class="form-control"  placeholder="Flight Date" id="datepicker" required/>
                                            </div>
                                        </li>
                                        <li>
                                            
                                        <li>
                                        
                                            <select class="select-one">
                                                <option selected="selected" value="0">Select Class</option>
                                                <option value="First Class">First Class</option>
                                                <option value="Economy Class">Economy Class</option>
                                                <option value="Business Class">Business  Class</option>

                                            </select>
                                        </li>

                                       
                                      
                                        
                                        <li>
                                        <div class="form-group">
                                            <select class="select-one">
                                                <option selected="selected">Trip Type</option>
                                                <option value="One way">One Way</option>
                                                <option value="Round">Round</option>
                                                <option value="Multi City">Multi City</option>

                                            </select>
                                        </li>
                                        <li>
                                        </li>
                                        <button type="submit" class="btn btn-search-travel">Search Now</button>
                                           <!-- <a href="" target="_blank" class="btn btn-search-travel">Search Now</a>-->
                                        </li>
                                        
                                    </ul>
                                    </form>
                                </div>
                                <!--tabhotel-->
                                <div class="tab-pane fade in" id="tabhotel">
                                    <h3>Search and Book Hotels</h3>
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your Hotel Name?" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check In" id="datepicker3" required/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check Off" id="datepicker4" required/>
                                            </div>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Room</option>
                                                <option>2 Room</option>
                                                <option>3 Room</option>
                                                <option>4 Room</option>

                                            </select>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Guest</option>
                                                <option>1 Guest</option>
                                                <option> 2 Guest</option>
                                                <option>No One</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Children</option>
                                                <option>1 Children</option>
                                                <option>2 Children</option>
                                                <option>3 Children</option>
                                                <option>No One</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Max budget (Optional)">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="html/hotel/hotels_list_one/left_sidebar.html" class="btn btn-search-travel">Search Now</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--tabtour-->
                                <div class="tab-pane fade in" id="tabtour">
                                    <h3>Where do you want to go (Searching For Car)?</h3>
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Picking up?" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dropping Off?" required>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Pick Up Date" id="datepicker5" required/>
                                            </div>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">Pick Up Time</option>
                                                <option>11.30 PM</option>
                                                <option>12.00 PM</option>
                                                <option>01.30 PM</option>
                                                <option>02.00 PM</option>
                                                <option>03.30 PM</option>
                                                <option>04.00 PM</option>
                                                <option>04.30 PM</option>
                                                <option>05.00 PM</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Drop Off Date" id="datepicker6" required/>
                                            </div>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">Drop Off Time</option>
                                                <option>11.30 PM</option>
                                                <option>12.00 PM</option>
                                                <option>01.30 PM</option>
                                                <option>02.00 PM</option>
                                                <option>03.30 PM</option>
                                                <option>04.00 PM</option>
                                                <option>04.30 PM</option>
                                                <option>05.00 PM</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Car</option>
                                                <option>1 Car</option>
                                                <option>2 Car</option>
                                                <option>3 Car</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Children</option>
                                                <option>1 Children</option>
                                                <option>2 Children</option>
                                                <option>3 Children</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Max budget">
                                            </div>
                                        </li>

                                        <li>
                                            <a href="html/travel/travels_list_one/left_sidebar.html" target="_blank" class="btn btn-search-v2">Search Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end panel body-->
                    </div>
                    <!--end tabs-->
                </div>
            </div>
               
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">ScrollTop</button>
    <!--wrapper index-->
    <section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="name_pakg text-left ">Featured <span></span> Airlines</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <!--tour_pak-->
                <div class="tour_pak  ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Air Peace</a></span>
                            <span class="pull-right"><span class="counter"></span></span>
                        </div>
                    </div>
                    <img src="assets/img/emirates+airline.jpg" alt="tour img" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <!--tour_pak-->
                <div class="tour_pak  ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Airik Air</a></span>
                            <span class="pull-right"><span class="counter"></span></span>
                        </div>
                    </div>
                    <img src="assets/img/emirates+airline.jpg" alt="tour img" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <!--tour_pak-->
                <div class="tour_pak ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Emirate airline</a></span>
                            <span class="pull-right"><span class="counter"></span></span>
                        </div>
                    </div>
                    <img src="assets/img/delta-plane.png" alt="tour img" class="img-responsive">
                    <span class="pop-feat-two hidden-xs"></span>
                </div>
            </div>
            <div class="col-md-12">
                <!--btn_view_all-->
                <div class="btn_view_all">
                    <p> <a href="#" class="btn btn-view-all"> BOOK TICKET NOW(<span class="counter"></span>)</a></p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--wrapper_inspiration-->
    <section id="about">
    <div class="wrapper_inspiration hidden-sm hidden-xs">
        <div class="container">
            <div class="div ">
                <h3> About <span>airline ticket</span> Booking system</h3>
                <p>
                    Airline Reservation System Project will help the user to book their flight tickets without visiting booking counter or to any other booking vendors, thus saving their money and time. Airline Reservation System Project will be accessible by the user from any location through 24X7. Airline Reservation System Project will be user friendly and providing all the information on single screen just by single click.
                </p>
                
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section>
    <!--end wrapper_inspiration-->

   
    <!--car_boxs-->
   
    <!--car_boxs end-->

    <!--name_pakg-->
   
                    <!--end popular_hotel_box-->
               
    <div class="our-work-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--name_pakg-->
                    <div class="name_pakg text-center ">ADDED FEATURES <span></span> </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-images"></span>
                        </div>
                        <h4><span>+<span class="counter">LIVE</span></span> CHAT</h4>

                        <p>
                        </p>
                       
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                       <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                        <span class="hi-icon hi-icon-user"></span>
                    </div>
                        <h4><span>+<span class="counter">EMAIL</span></span> SUPPORT</h4>
                        <p>
                        </p>
                       
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 hidden-sm">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-images"></span>
                        </div>
                        <h4><span><span class="counter">NEWS</span> </span>LETTER</h4>
                        <p>
                        </p>
                       
                    </div>
                </div>
                <!--end our-work-->
            </div>
        </div>
    </div>
</div>
<!--inner body end from here-->
<!--back_to_top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--end-->
<section id="contact">
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
   
                            <li><a href="log_in.html"><i class="fa fa-hand-o-right"></i> Admin Log In</a></li>
                            
                    
                          
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

</footer></section>
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


<!--end script files-->
</body>

<!-- Mirrored from teamworktec.com/demo/travel-gateway/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 24 Jul 2017 11:06:00 GMT -->
</html>