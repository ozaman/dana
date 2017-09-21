<!DOCTYPE html>

<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->

<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    

    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->

    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>dana tours asia</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <meta name="viewport" content="width=device-width">

    <!-- Canonical SEO -->

   

    <!-- Bootstrap core CSS     -->

    <link href="../js/bootstrap.min.css" rel="stylesheet">

    <!--  Material Dashboard CSS    -->

    <link href="../files/css-/material-dashboard.css?v=<?=time()?>" rel="stylesheet">

      <link href="../files/css-/main.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet">

    <!--     Fonts and icons     -->

    

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">

   



</head>



<body ng-app="myApp" ng-controller="myCtrl">

    <div class="wrapper">

        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="">

            <!--

        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"

        Tip 2: you can also add an image using data-image tag

        Tip 3: you can change the color of the sidebar with data-background-color="white | black"

    -->

            <div class="logo">

                <a href="" class="simple-text">

                Dana tours 

                </a>

            </div>

            <div class="logo logo-mini">

                <a href="" class="simple-text">

                    DN

                </a>

            </div>

            <div class="sidebar-wrapper ">

               <!--  <div class="user">

                    <div class="photo">

                        <img src="img/profile.png">

                    </div>

                    <div class="info">

                        <a >

                            USERS ADMIN

                           

                        </a>

                       

                    </div>

                </div> -->

                <ul class="nav">

                    <li >

                        <a href="../index.php">

                            <i class="material-icons">dashboard</i>

                            <p>Dashboard</p>

                        </a>

                    </li>

                    <li >

                        <a data-toggle="collapse" href="index.php#pagesExamples" >

                            <i class="material-icons">home</i> 

                           

                            <p>Main Menu

                                <b class="caret"></b>

                            </p>

                        </a>

                        <div class="collapse " id="pagesExamples" >

                            <ul class="nav"> 

                                <li >

                                    <a href="../main/tours-package.php">

                                        <i class="material-icons">local_offer</i> Tour Packages

                                    </a>

                                </li>

                                <li >

                                    <a href="../report/transfer-package.php">

                                        <i class="material-icons">directions_car</i> Transfer Packages

                                    </a>

                                </li>

                                <li>

                                    <a href="../main/add-booking.php">

                                        <i class="material-icons">note_add</i>Add Bookings

                                    </a>

                                </li>

                                <li>

                                    <a href="../main/company.php">

                                        <i class="material-icons">dns</i>Companies

                                    </a>

                                </li>

                                <li>

                                    <a href="../main/agent.php">

                                        <i class="material-icons">recent_actors</i> Agents

                                    </a>

                                </li>

                                

                                <li>

                                    <a href="../main/users.php">

                                        <i class="material-icons">people</i> Users

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li class="active">

                        <a data-toggle="collapse" href="index.php#componentsExamples">

                            <i class="material-icons">assignment</i> 

                            <p>Report

                                <b class="caret"></b>

                            </p>

                        </a>

                        <div class="collapse in" id="componentsExamples"  aria-expanded="true">

                            <ul class="nav">

                             <li  class="active">

                                    <a href="complete-booking.php">

                                    <i class="material-icons">check_circle</i>

                                         Complete Booking

                                    </a>

                                </li>

                               <li>

                                    <a href="new-booking.php">

                                        <i class="material-icons">insert_drive_file</i> New Bookings

                                    </a>

                                </li>

                               

                                <li>

                                    <a href="cancel-booking.php">

                                        <i class="material-icons">cancel</i> Cancel Bookings

                                    </a>

                                </li>

                                <li>

                                    <a href="account.php">

                                    <i class="material-icons">account_balance_wallet</i>

                                         Account

                                    </a>

                                </li>
                                 <li>
                                    <a href="manage-tour.php">
                                    <i class="material-icons">account_balance_wallet</i>
                                         Manage Account Tours
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a data-toggle="collapse" href="index.php#formsExamples">

                            <i class="material-icons">folder_special</i> 

                            <p>Logs

                                <b class="caret"></b>

                            </p>

                        </a>

                        <div class="collapse" id="formsExamples">

                            <ul class="nav">

                               <!-- <li>

                                    <a href="../logs/add-booking.php">

                                        <i class="material-icons">note_add</i> Add Bookings

                                    </a>

                                </li> -->

                                <li class="active">

                                    <a href="../logs/confirm-booking.php">

                                        <i class="material-icons">check_circle</i>  Confirm Bookings

                                    </a>

                                </li>

                                <!-- <li>

                                    <a href="../logs/cancel-booking.php">

                                        <i class="material-icons">cancel</i>  Cancel Bookings

                                    </a>

                                </li> -->

                            </ul>

                        </div>

                    </li>

                

                </ul>

           <!--  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div> --><!-- <div class="ps-scrollbar-y-rail" style="top: 0px; height: 563px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 435px;"></div></div> --></div>

        <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)"></div></div>

        <div class="main-panel ">

            <nav class="navbar navbar-transparent navbar-absolute">

                <div class="container-fluid">

                    <div class="navbar-minimize">

                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">

                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>

                            <i class="material-icons visible-on-sidebar-mini">view_list</i>

                        </button>

                    </div>

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href=""> Report </a>



                    </div>

                    <div class="collapse navbar-collapse">

                        <ul class="nav  navbar-nav navbar-right">

                            <!-- <li>

                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#pablo" class="dropdown-toggle" data-toggle="dropdown">

                                    <i class="material-icons">dashboard</i>

                                    <p class="hidden-lg hidden-md">Dashboard</p>

                                </a>

                            </li> -->

                            <li class="dropdown ">

                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

                                      <i class="material-icons">notifications</i>

                                    <span class="notification">5</span>

                                   

                                    <p class="hidden-lg hidden-md">

                                        Notifications

                                        <b class="caret"></b>

                                    </p>

                                       

                                <div class="ripple-container"></div></a>

                                <ul class="dropdown-menu" id="login-down">

                                    <li>

                                        <a href="">

                                            <i class="material-icons">access_alarms</i> Bookings

                                        </a>

                                    </li>

                                   <!--  <li>

                                        <a href="" >

                                            <i class="material-icons">power_settings_new</i>Logout

                        

                                        </a>

                                    </li> -->

                                </ul>

                            </li>

                            <!-- <li class="dropdown">

                                <a href="" class="dropdown-toggle" data-toggle="dropdown">

                                    <i class="material-icons">notifications</i>

                                    <span class="notification">5</span>

                                    <p class="hidden-lg hidden-md">

                                        Notifications

                                        <b class="caret"></b>

                                    </p>

                                </a>

                               

                            </li> -->

                            <li class="dropdown ">

                                <a href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

                                      <i class="material-icons">person</i>

                                   <!--  <span class="notification">5</span> -->

                                   

                                    <p class="hidden-lg hidden-md">Profile<b class="caret"></b></p>

                                       

                                <div class="ripple-container"></div></a>

                                <ul class="dropdown-menu" id="login-down">

                                    <li class="">

                                      <a href="../main/users.php" >

                                       <i class="material-icons">settings</i>Settings

                        

                                        </a>

                                    </li>

                                    <li>

                                        <a href="" data-toggle="modal" data-target="#logout">

                                            <i class="material-icons">power_settings_new</i>Logout

                        

                                        </a>

                                    </li>

                                </ul>

                            </li>

                         

                            <li class="separator hidden-lg hidden-md"></li>

                        </ul>

                        <form class="navbar-form navbar-right" role="search">

                            <div class="form-group form-search is-empty">

                                <input type="text" class="form-control" placeholder="Search" style="    border: 0;

    background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#ffffff, #ffffff);

    background-size: 0 2px, 100% 1px;

    background-repeat: no-repeat;

    background-position: center bottom, center calc(100% - 1px);

    background-color: transparent;

    transition: background 0s ease-out;

    float: none;

    box-shadow: none;

    border-radius: 0;

    font-weight: 400;">

                                <span class="material-input"></span>

                            <span class="material-input"></span></div>

                            <button type="submit" class="btn btn-white btn-round btn-just-icon">

                                <i class="material-icons">search</i>

                                <div class="ripple-container"></div>

                            </button>

                        </form>

                    </div>

                </div>

            </nav>

            <style ></style>

          

            <div class="content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12"> 

                            <div class="row">                            

                                <div class="" style="background: #fff; padding-left: 10px;">                                

                                    <div class="navigate" >

                                        <!-- <a href="new-package.php">

                                            <button type="button" class="btn btn-success btn-sm" style=""><i class="fa fa-plus padding-icon" aria-hidden="true"></i> New</button></a> -->

                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;background: #fff; display: inline-block; ">

                                            <!-- <li><a href="package.php">Main Menu</a></li> -->

                                            <li class="active"><span>/</span>  Complete bookings

                                    </li>

                                        </ol>

                                    </div>

                                </div>

                            </div>

                        </div>

                     

                      

                       <div class="col-md-12">

                         <div class="row form-group form-inline">

                    <div class="booking_searchengine">

                            <p style="font-weight: 300;display: inline-block;margin-right:15px;">Search</p>

                            <div class="select">

                                <div class='span6'>

                                    <i class="fa fa-sort-desc"></i>

                                    <input type="text" class="form-control" size="17" placeholder="Search By" value="{{search_box_list}}" ng-click="openlist()" style="color: transparent;" x-webkit-speech />

                                    <ul class="search_list">

                                        <li ng-click="clicklist('Booking ID')">Booking ID</li>

                                       <li ng-click="clicklist('Invoice')">Invoice</li>



                                        <li ng-click="clicklist('Package')">Product Name</li>

                                        

                                    </ul>

                                </div>

                            </div>

                            <div class="search-box">

                             

                                <input type="text" class="search_booking form-control" ng-model="search.id" placeholder="Booking ID">

                                <input type="text" class="search_product form-control" ng-model="search.invoice" placeholder="Invoice">

                                <input type="text" class="search_name form-control" ng-model="search.package_name" placeholder="Product Name">

                                

                                

                               

                            </div>

                            <a ng-click="reset_search_click()" class="reset_search">Reset</a>

                        </div>

                        </div>

                            <div class="card">

                                <!-- <div class="card-header card-header-icon" data-background-color="rose">

                                    <i class="material-icons">assignment</i>

                                </div> -->

                                <!-- <h4 class="card-title">Simple Table</h4> -->

                                <!-- <div class="card-header" data-background-color="blue"> -->

                                    

                                    <!-- <h4 class="title">Users </h4> -->

                                    <!-- <p class="category">Here is a subtitle for this table</p> -->

                                <!-- </div> -->

                                <div class="card-content table-responsive">

                                    <table class="table">

                                        <thead class="text-primary" >

                                             <th></th>

                                           

                                            <th>Status</th>

                                            <th>Invoice</th>

                                            <th class="col-md-4">Package Name</th>
                                            <th>Customer name</th> 
                                            <th>Flight</th> 
                                             <th>Pickup place</th>
                                            <th>To place</th>     

                                            <!-- <th>Adult Price</th>

                                            <th>Child Price</th> -->

                                            <th>Total Price</th>

                                            <th>Departure Date</th>

                                            <th>On time</th>

                                            <th>Adult</th>

                                            <th>Child</th>

                                            <th>No. of Guest</th>

                                            <th>Type</th>

                                            <th>Agent Name</th>

                                            <th>Post By</th>

                                            <th></th>
                                            <th></th>

                                        </thead>

                                        <tbody >

                                            <tr ng-repeat="item in databook | filter:search:strict  ">

                                                <td align="center" ng-bind="$index+1"></td>

                                                 

                                                 <td align="center"><i class="material-icons" style="color: #4CAF50;font-size: 18px;">check_circle</i><!-- <i class="fa fa-check-circle fa-lg" aria-hidden="true" ></i> --><!-- <i class="material-icons" >assignment_turned_in</i> --></td>

                                                <td  ng-bind="item.invoice"></td>

                                                <td class="col-md-4" ng-bind="item.package_name"></td>
                                                <td class="col-md-2" ng-bind="item.name" ></td>
                                                <td class="col-md-2" ng-bind="item.flight" ng-if="item.flight != ''" ></td>
                                                <td align="center" class="col-md-2" ng-if="item.flight == ''"><span >-</span></td>
                                                
                                                <td ng-bind="item.pickup_place"></td>
                                                <td ng-bind="item.to_place"></td>


<!-- 
                                                <td ng-bind="item.adult_price | currency:'':0"></td>

                                                <td ng-bind="item.child_price | currency:'':0"></td> -->

                                                <td ng-bind="item.total_price | currency:'':0"></td>

                                                <td ng-bind="item.ondate"></td>

                                                <td ng-bind="item.ontime"></td>

                                                <td ng-bind="item.adult"></td>

                                                <td ng-bind="item.child"></td>

                                                <td ng-bind="item.total"></td>

                                                <td ng-bind="item.type"></td>

                                                <td ><button  ng-click="getagent(item.agent_id)" class="btn btn-primary btn-xs"><span ng-bind="item.agent_name"></span></button></td>

                                                <td ><button  ng-click="getpostby(item.agent_id)" class="btn btn-rose btn-xs"><span ng-bind="item.user_name"></td>

                                                

                                              

                                                 <td class="col-md-1" align="center"><a href="view-booking.php#?data={{item.id}}"  target="_blank"><i class="material-icons"  style="color: #9E9E9E; font-size: 25px;">find_in_page</i></a></td>
                                                  <td class="col-md-1" align="center"><i class="material-icons" ng-click="removepackage(item)" style="color: #e91e1e; font-size: 25px;padding-top: 5px;">delete</i></td>



                                            </tr>

                                           

                                        </tbody>

                                    </table>



                                </div>

                            </div>

                        </div>

                    </div>

                    

                </div>

            </div>

             <div class="modal fade" id="logout">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                <h4 class="modal-title" >Logout</h4>

                            </div>

                            <div class="modal-body">

                                <div>Do you really want to log out of the backend system?</div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button>

                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal fade" id="getagent">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" style="z-index: 100"  aria-hidden="true">&times;</button>

                                <h4  class="modal-title">Agent</h4>

                                

                            </div>

                            

                            <form class="form-inline"  >

                                <div class="modal-body">

                                    <div class="form-group">

                                        <label class="label-editUser">First Name<span> :</span></label>

                                        <input type="text"  class="form-control" ng-model="dataagentid.fname" na-value="dataagentid.fname" disabled size="53">

                                       

                                    </div>

                                    <div class="form-group">

                                        <label class="label-editUser">Last Name<span> :</span></label>

                                        <input type="text"  class="form-control" name="lastname"  ng-model="lastname" ng-value="dataagentid.lname" disabled  size="53">

                                       

                                    </div>

                                    <div class="form-group">

                                        <label class="label-editUser">Phone<span> :</span></label>

                                        <input type="text" class="form-control" ng-model="phone" name="phone" size="53" ng-value="'+'+dataagentid.phonecode+dataagentid.phone" disabled>

                                       

                                    </div>

                                    

                                    <div class="form-group">

                                        <label class="label-editUser">Email<span> :</span></label>

                                        <input  class="form-control" ng-model="email" ng-value="dataagentid.email" disabled required size="53">

                                       

                                    </div>

                                    <div class="form-group">

                                        <label class="label-editUser">Company<span> :</span></label>

                                        <input type="text" class="form-control" ng-model="company" ng-value="dataagentid.company"  disabled size="53">

                                        <!-- <label class="typeUser" >{{edit_du.username}}</label> -->

                                    </div>

                                      <div class="form-group">

                                        <label class="label-editUser">Address<span> :</span></label>

                                        <textarea type="text" class="form-control"  rows="4" cols="53" ng-model="dataagentid.address" ng-value="dataagentid.address" disabled size="100"></textarea>

                                    </div>



                                </div>

                                <div class="modal-footer">

                                    

                                    <button type="reset" class="btn btn-default" data-dismiss="modal" onclick="reset()" id="bt-view">Close</button>

                                </div>

                            </form>

                            

                           





                        </div>

                    </div>

                </div>
                <div class="modal fade" id="remove">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <input type="hidden" name="" ng-model="idremovebooking">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Booking</h4>
                            </div>
                            <div class="modal-body">
                                <div>Are you sure to delete booking invoice {{removeinvoice}}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletebooking(idremovebooking)">Remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="getuser">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                <h4  class="modal-title">User</h4>

                                

                            </div>

                            

                            <form class="form-inline"   >

                                <div class="modal-body">

                                    <div class="form-group">

                                        <label class="label-editUser">First Name<span> :</span></label>

                                        <input type="text"  class="form-control" ng-model="firstname" ng-value="datauserid.firstname" disabled size="53">

                                        <!-- <label class="typeUser" >{{edit_du.firstname}}</label> -->

                                    </div>

                                    <div class="form-group">

                                        <label class="label-editUser">Last Name<span> :</span></label>

                                        <input type="text"  class="form-control" name="lastname"  ng-model="lastname" ng-value="datauserid.lastname" disabled size="53">

                                        

                                    </div>

                                    <div class="form-group">

                                        <label class="label-editUser">Phone<span> :</span></label>

                                        <input type="text" class="form-control" ng-model="phone" name="phone"   size="53" ng-value="'+'+datauserid.phonecode+datauserid.phone">

                                        

                                    </div>

                                    

                                    <div class="form-group">

                                        <label class="label-editUser">Email<span> :</span></label>

                                        <input type="email"  class="form-control" name="email" ng-model="email" id="email" ng-value="datauserid.email" disabled required size="53">

                                        <!-- <label class="typeUser" >{{edit_du.email}}</label> -->

                                    </div>

                                      <div class="form-group">

                                        <label class="label-editUser">Address<span> :</span></label>

                                        <textarea type="text" class="form-control"  rows="4" cols="53" name="address" ng-model="address" ng-value="datauserid.address" disabled size="100"></textarea>

                                    </div>



                                </div>

                                <div class="modal-footer">

                                    

                                    <button type="reset" class="btn btn-default" data-dismiss="modal"  id="bt-view">Cancel</button>

                                </div>

                            </form>

                            

                            

                            





                        </div>

                    </div>

                </div>

            <footer class="footer">

                <div class="container-fluid">

                    <nav class="pull-left">

                        <ul>

                            <li>

                                <a href="">

                                    Home

                                </a>

                            </li>

                            <li>

                                <a href="">

                                    Company

                                </a>

                            </li>

                            

                        </ul>

                    </nav>

                    <p class="copyright pull-right">

                        ©

                     <!--  <script async="" src="/analytics.js.ดาวน์โหลด"></script> -->

                      <script>

                            document.write(new Date().getFullYear())

                        </script>2017

                        <a href="">Dana Tours & Travel. All Rights Reserved.</a>

                    </p>

                </div>

            </footer>

      <!--   <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 638px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 245px;"></div></div> --></div>

    </div>

    <style>

    

    </style>



    <!-- <div class="fixed-plugin">

        

    </div> -->



<!--   Core JS Files   -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="../js/jquery/jquery-ui.min.js" type="text/javascript"></script>

<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script src="../js/material.min.js" type="text/javascript"></script>

<script src="../js/jquery/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->

<script src="../js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->

<script src="../js/moment.min.js"></script>

<!--  Charts Plugin -->

<!-- <script src="js/chartist.min.js"></script> -->

<!--  Plugin for the Wizard -->

<script src="../files/js-/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin    -->

<!-- <script src="files/js-/bootstrap-notify.js"></script> -->

<!--   Sharrre Library    -->

<script src="../js/jquery/jquery.sharrre.js"></script>

<!-- DateTimePicker Plugin -->

<script src="../files/js-/bootstrap-datetimepicker.js"></script>

<!-- Vector Map plugin -->

<script src="../files/js-/jquery-jvectormap.js"></script>

<!-- Sliders Plugin -->

<script src="../files/js-/nouislider.min.js"></script>

<!--  Google Maps Plugin    -->

<!-- <script src="files/js-/js"></script> -->

<!-- Select Plugin -->

<script src="../files/js-/jquery.select-bootstrap.js"></script>

<!--  DataTables.net Plugin    -->

<script src="../files/js-/jquery.datatables.js"></script>

<!-- Sweet Alert 2 plugin -->

<script src="../files/js-/sweetalert2.js"></script>

<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->

<script src="../files/js-/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin    -->

<script src="../files/js-/fullcalendar.min.js"></script>

<!-- TagsInput Plugin -->

<script src="../files/js-/jquery.tagsinput.js"></script>

<!-- Material Dashboard javascript methods -->

<script src="../js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->

<script src="../js/jquery/demo.js"></script>
<script src="../files/js-/angular.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->

    <script src="../js/angular/angular-cookies.min.js"></script>



<!-- <script src="../files/js-/main.js?v=<?=time()?>"></script> -->

<!-- <script type="text/javascript">

    $(document).ready(function() {



        // Javascript method's body can be found in assets/js/demos.js

        demo.initDashboardPageCharts();



        demo.initVectorMap();

    });

</script> -->



<div class="jvectormap-tip"></div>

    </body>

        <style >

        

label.label-editUser {

    text-align: right;

    width: 115px;

    margin-right: 10px;

}

.form-group {

  margin: 0;

  padding-bottom: 10px;

  margin: 20px 0 0 0;

}

 #InputPassPhone{

        margin-left: 127px;

        /*margin-bottom: 20px;*/



    }

    #select-country {

        text-align: center;

    border: 1px solid #cccccc;

    /*border-radius: 5px;*/

    display: inline-block;

    padding: 6px 65px;

     /*width: 65%; */

    /* margin-left: 5%; */

     margin-bottom: 20px; 

}

        .cu-name{

    display: none;

    background: #fff;

    z-index: 1;

    height: 190px;

    overflow-y: scroll;

    /* overflow: hidden; */

    padding-left: 0;

    border: 1px solid #ddd;

    position: absolute;

   margin-left: 23%; 

   /* margin-top: -16px;

    margin-left: 22.5%;*/



}

#labelcun{

    background-color: #fff;

    margin: 0;

    margin-bottom: 20px;

        border-bottom: 1px solid #ccc;

}

.cu-name li{

   padding: 3px 35px; 

}

.cu-name li:hover{

   background: #e91e63;

    color: #fff !important;

}

@media screen and (max-width: 767px){



#InputPassPhone {

    margin-left: 0;

}

.cu-name{

     margin-left: 0;

}

label.label-editUser {

    text-align: left;

}



}



    </style>

    <script>

    var app = angular.module('myApp',['ngCookies']);

    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){

         loadpage();

        function loadpage(){

            if($cookies.get('login'))

            {

                //console.log("in case login")

                

       

                $http({

                    method: 'post',

                    url: "../php/getUserbyid.php",

                    data: $.param({'id': $cookies.get('login')}),

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    if (res == "invalid") {

                        location.href = "/login";

                        return;

                    }

                    //console.log(res)



                    //console.log(res[0].role)

                     $scope.isSuperAdmin = (res[0].role == 1) ? true : false;

                    $scope.isAdmin = (res[0].role == 2)  ? true : false;

                    $scope.isUsernomal = (res[0].role == 3)  ? true : false;

                    $scope.isUserlab = (res[0].role == 4)  ? true : false;

                    

                    if(res[0].role==1)

                        $scope.role = 1;

                    else if(res[0].role==2)

                        $scope.role = 2;

                    else if(res[0].role==3){

                        $scope.role = 3;

                    }

                    else{

                         $scope.role = 4;

                    }

                  

                   

                    if(res[0].email != undefined){

                        $scope.name = (res[0].email).split('@');

                        $scope.Username = $scope.name[0];

                        //console.log($scope.Username)

                    }

                     

                    

             });

                $http({
                method : 'POST',
                url : "../php/getBookingconfirm.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $scope.databook = res;

            });

            

            }

            else

            {

                $window.location.href = '../login.php';

            }

        }

        $scope.logout = function(){

            $cookies.remove("login");

          

            $window.location.href = '../login.php';

        }
        $scope.removepackage = function(i){
            //console.log(i)
            $scope.idremovebooking = i.id;
            $scope.removeinvoice = i.invoice;
            $('#remove').modal('show');

            //$scope.name
        }
        $scope.deletebooking = function(i){
            //console.log(i)
            $http({
                    method: 'post',
                    url: "../php/removeBooking.php",
                    data: $.param({'id': i}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    //console.log(res)
                    $window.location.reload();
                });
        }
        $scope.edituser = function(id){
            localStorage.setItem("usereditid", id);

            $window.location.href = 'edituser';

        }

        $scope.zoombook = function(id){

            localStorage.setItem("booking-view", id);

            $window.location.href = 'booking-view?bookingid='+id;

        }

        $scope.getagent =function(agent){
            //console.log(agent)
            $http({

                    method: 'post',
                    url: "../php/getAgentbyid.php",
                    data: $.param({'id': agent}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    $scope.dataagentid = res[0];
                    //console.log($scope.dataagentid)
                    $('#getagent').modal('show');
                });
        }

        $scope.getpostby =function(user){
            //console.log(user)
            $http({
                    method: 'post',
                    url: "../php/getUserbyid.php",
                    data: $.param({'id': user}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    $scope.datauserid = res[0];
                    //console.log($scope.datauserid)
                    $('#getuser').modal('show'); 
                });



        }



        $scope.openlist = function(){
            var result = document.getElementsByClassName("search_list");

            if($scope.list == true)

                {

                    angular.element(result).css('display','none');

                    $scope.list = false;

                }

            else

                {

                    angular.element(result).css('display','block');

                    $scope.list = true;

                }

        }

        $scope.clicklist = function(input){

            var result;

            $scope.search_box_list = input;

            ////console.log($scope.search_box_list);

            if(input=='Booking ID')

            {

                result = document.getElementsByClassName("search_booking");

                angular.element(result).css('display','inline-block');

                result = document.getElementsByClassName("search_product");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("search_name");

                angular.element(result).css('display','none');                        

                result = document.getElementsByClassName("search_list");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("reset_search");

                angular.element(result).css('display','inline-block');

                $scope.list = false;

                $scope.search = new Array();

                $scope.search.package_name = '';

                $scope.search.invoice = '';

                        

                        

                       

            }

            else if(input=='Invoice')

            {

                result = document.getElementsByClassName("search_booking");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("search_product");

                angular.element(result).css('display','inline-block'); 

                result = document.getElementsByClassName("search_name");

                angular.element(result).css('display','none');                        

                result = document.getElementsByClassName("search_list");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("reset_search");

                angular.element(result).css('display','inline-block');

                $scope.list = false;

                $scope.search = new Array();

                $scope.search.id = '';

                $scope.search.package_name = '';

                       

            }

            else if(input=='Package')

            {

                result = document.getElementsByClassName("search_booking");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("search_product");

                angular.element(result).css('display','none'); 

                result = document.getElementsByClassName("search_name");

                angular.element(result).css('display','inline-block');                        

                result = document.getElementsByClassName("search_list");

                angular.element(result).css('display','none');

                result = document.getElementsByClassName("reset_search");

                angular.element(result).css('display','inline-block');

                $scope.list = false;

                $scope.search = new Array();

                $scope.search.package_name = '';

                $scope.search.id = '';

                       

            }

                    

        }

        $scope.reset_search_click = function(){

            $scope.search_box_list = null;

            result = document.getElementsByClassName("search_booking");

            angular.element(result).css('display','none');

            result = document.getElementsByClassName("search_product");

            angular.element(result).css('display','none');

            result = document.getElementsByClassName("search_name");

            angular.element(result).css('display','none'); 

            result = document.getElementsByClassName("search_list");

            angular.element(result).css('display','none');

            result = document.getElementsByClassName("reset_search");

            angular.element(result).css('display','none');

            $scope.list = false;

            $scope.search = new Array();

            $scope.search.id = '';

            $scope.search.package_name = '';

                    

        } 

                 

    });

    </script>

</html>