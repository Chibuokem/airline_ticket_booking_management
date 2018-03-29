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
            <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo-v2.png" alt="logo"></a>
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
                    <h2>Airline Ticket booking system</h2>
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Result</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="list-sidebar-two animate-reveal">
                    <div class="search-item-two">
                    <span>
                    <?php if($result!==""){
					$num=count($result['id']);
					}
					else{
					$num=0;	
					}
					?>
                      <?php echo $num;?> Result Found Matching
                        <br>
                        Your Search.</span>
                    </div>
                    <div class="detail-sidebar-two">
                       
                        <div class="form-group">
                            
                        </div>
                        <div class="form-group">
                           
                        </div>
                        <div class="form-group">
                           
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <div class="form-group">
                            
                            <div id="demo1" class="collapse">
                                <p id="amount"></p>
                                <div id="slider-range"></div>
                               
                            </div>
                        </div>

                        <div class="form-group">
                           

                            <div id="demo2" class="collapse">
                                <p id="time"></p>
                                <div id="time-range"></div>
                              
                            </div>
                        </div>
                        <div class="form-group">
                            

                            <div id="demo3" class="collapse">
                                <div class="checkbox">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            

                            <div id="demo4" class="collapse">
                              
                            </div>
                        </div>
                        <div class="form-group">
                          
                            <div id="demo5" class="collapse">
                               
                            </div>
                        </div>
                 </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="sort-section-v2 animate-reveal">
                    <div class="row no-margin">
                        <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                         
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                           
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                            
                        </div>
                        <div class="col-md-3  col-sm-6 col-xs-6 no-padding">
                           
                        </div>
                    </div>
                </div>

                <div class="flight_box_detail_v2 border-box animate-reveal">
                <?php if ($result !=""){?>
                            <?php 
							
							for($i=0; $i< $num; $i++){
								
							
							 ?>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="flight-logo"><img  alt="logo" src="<?php echo base_url();?>uploads/<?php echo $result['picture_new'][$i];?>"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="details-text">
                                <h4> <?php echo $result['name'][$i];?> <a href="#" class="btn btn-stop-v2"><?php echo $result['trip_type'][$i];?></a> <br><small><?php echo $result['location_from'][$i];?></small> to <small><?php echo $result['location_to'][$i];?></small></h4>
                            </div>
                            <div class="details-feature">
                                <ul class="list-inline list-unstyled">
                                    <li><i class="fa fa-wifi "></i></li>
                                    <li><i class="fa fa-music"></i></li>
                                    <li><i class="fa fa-briefcase"></i></li>
                                    <li><i class="fa fa-cutlery"></i></li>
                                </ul>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane"></i> Take off</span><br>
                                        <span class="time"><?php echo $result['date_take_off'][$i];?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane fa-rotate-90"></i> Landing</span><br>
                                        <span class="time"><?php echo $result['date_landing'][$i];?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT no-border">
                                        <span class="skin-clr"> <i class="fa fa-clock-o fa-spin"></i> Time</span><br>
                                        <span class="time"> 45mins </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="LTT no-border">
                                        <span class="skin-clr"> <i class="fa fa-money"></i> Prices</span><br>
                    <br> <span class="skin-clr">FIRST CLASS PRICE <?php echo $result['first_class_price'][$i];?></span>
                       <br> <span class="skin-clr">BUSINESS CLASS PRICE:<?php echo $result['business_class_price'][$i];?></span></span>
                        <br> <span class="skin-clr">ECONOMY CLASS PRICE:<?php echo $result['economy_class_price'][$i];?></span></span>
                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="select-sec">
                      <br> <span class="skin-clr">PLANE CAPACITY:<?php echo $result['capacity'][$i];?></span></span>
                     <span>SPACE REMAINING <br> <span class="pri"><?php echo ($result['capacity'][$i]-$result['number_booked'][$i]);?></span></span>
               
                             <a href="<?php echo base_url();?>book?id=<?php echo $result['id'][$i];?> " class="btn btn_select-v2">BOOK</a>   
                            </div>
                        </div>
                    </div>
                </div>


      

               <!--
                <a href="#" class="btn btn-more-v2 "> <i class="fa fa-eye"></i>Loading More</a>
                <div class="border-box write_review_v2 animate-reveal">
                    <h3>Write a Review</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Name <span>*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Email <span>*</span> </label>
                                <input type="email" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Review Title <span>*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Reviews <span>*</span></label>
                                <br>
                                <span class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Review Text <span>*</span></label>
                                <textarea class="form-control" rows="6" cols="6"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="#" class="btn_book">Leave a review</a>
                            </div>
                        </div>-->

                    </div>
<?php } }?>
                </div>
            </div>
        </div>
    </div>
</div>

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
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_big">
                <img src="assets/img/img-loader.png" alt="loader">
            </div>
        </div>
    </div>
</div>
<!--end here-->

<!--Start java script files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jqwidgets/scripts/date-picker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/jqwidgets/range/ranger.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
<!--end files-->
</body>

<!-- Mirrored from teamworktec.com/demo/travel-gateway/html/flight/flights_list_two/left_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 24 Jul 2017 11:10:40 GMT -->
</html>