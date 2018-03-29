<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/ by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 07:31:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-v2.png">
    <title>Airline ticket booking system</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
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
                 <li class="active"><a href=""><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="upload.php"><i class="icon mdi mdi-face"></i><span>Upload Flight</span></a>
                    
                  </li>
                  <li class="parent"><a href="Viewbook.php"><i class="icon mdi mdi-chart-donut"></i><span>View Bookings</span></a>
                    
                  </li>
                  <li class="parent"><a href="Viewbook.php"><i class="icon mdi mdi-dot-circle"></i><span>Confirm Bookings</span></a>
                     
                    
                  </li>
                  <li class="parent"><a href="sendmail.php"><i class="icon mdi mdi-dot-circle"></i><span>Send Mail</span></a>
                     
                    
                  </li>
                  <li class="parent"><a href="Viewbook.php"><i class="icon mdi mdi-border-all"></i><span>View Registered Users</span></a>
                   
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Logout</span></a>
                    
                  
                          
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
                  <div class="title">FLIGHT BOOKINGS</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:40%;">S/N</th>
                        <th style="width:40%;">Name</th>
                        <th class="number">Airline</th>
                        <th style="width:20%;">Trip Type</th>
                        <th style="width:20%;">Class</th>
                        <th style="width:20%;">Departing</th>
                        <th style="width:20%;">Arriving</th>
                        <th style="width:20%;">Amount</th>
                        <th style="width:20%;">Flight Date</th>
                        <th style="width:5%;" class="actions"></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>1</td>
                        <td class="text-success">Eze frank</td>
                        <td class="text-success">Airik airline</td>
                        <td class="text-success">one way</td>
                        <td class="text-success">first class</td>
                        <td class="text-success">Enugu</td>
                        <td class="text-success">abuja</td>
                        <td class="text-success">20000</td>
                        <td class="text-success">2/2/17</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-4">
              
                <div id="calendar-widget"></div>
              </div>
            </div>
          </div>
          <div class="row"></div>
        </div>
      </div>
      <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"></li>
              <li role="presentation"></li>
              <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo1" type="checkbox" checked="">
                              <label for="todo1">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo2" type="checkbox">
                              <label for="todo2">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo3" type="checkbox">
                              <label for="todo3">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo4" type="checkbox">
                              <label for="todo4">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo5" type="checkbox">
                              <label for="todo5">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo6" type="checkbox">
                              <label for="todo6">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo7" type="checkbox">
                              <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                <div class="settings-wrapper">
                  <div class="be-scroller"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle2/ by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 07:31:50 GMT -->
</html>