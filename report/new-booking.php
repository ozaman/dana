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
   <link rel="stylesheet" type="text/css" href="../files/css-/default.css">
    <link rel="stylesheet" type="text/css" href="../files/css-/default.date.css">
   

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
                    <img width="50" src="../files/img/logo.png">
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
                                    <a href="../main/transfer-package.php">
                                        <i class="material-icons">directions_car</i> Transfer Packages
                                    </a>
                                </li>
                                <li >
                                    <a href="../main/hotel.php">
                                       <i class="material-icons">location_city</i>Hotels
                                    </a>
                                </li>
                                <li>
                                    <a href="../main/hotels-package.php">
                                       <i class="material-icons">hotel</i>Hotels package
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
                             <li  >
                                    <a href="complete-booking.php">
                                    <i class="material-icons">check_circle</i>
                                         Complete Booking
                                    </a>
                                </li>
                               <li class="active">
                                    <a href="new-booking.php">
                                        <i class="material-icons">insert_drive_file</i> New Bookings
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="cancel-booking.php">
                                        <i class="material-icons">cancel</i> Cancel Bookings
                                    </a>
                                </li>
                                <li >
                                    <a href="reservation-invoice.php">
                                        <i class="material-icons">notifications_active</i> Reservation - Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="account.php">
                                    <i class="material-icons">account_balance_wallet</i>
                                         Account
                                    </a>
                                </li>
                                  <li >
                                    <a href="account-tour.php">
                                    <i class="material-icons">business_center</i>
                                         Account Tours
                                    </a>
                                </li>
                                <li >
                                    <a href="manage-booking.php">
                                     <i class="material-icons">dvr</i>
                                         Manage Booking
                                    </a>
                                </li>
                                <li >
                                    <a href="revenue-expenses.php">
                                   <i class="material-icons">monetization_on</i>
                                         Revenue - Expenses
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
                                    <span class="notification"><span ng-bind="datanoti.length"></span></span>
                                   
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
                                            <li class="active"><span>/</span>  New bookings
                                    </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                      
                       <div class="col-md-12">
                       <div class="form-group form-inline">
                                    <div class="radio" id="radioin" >
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Tour" >
                                            Tour
                                        </label>
                                    </div>

                                    <div class="radio" id="radiotarnsfer">
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Transfer">
                                            Transfer
                                        </label>
                                    </div>
                                    <div class="radio" id="radiotarnsfer">
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Hotel">
                                            Hotel
                                        </label>
                                    </div>
                                    <div class="radio" id="radioall">
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="All">
                                            All
                                        </label>
                                    </div>
                            </div>
                             <div class="row form-group form-inline">
                     
                   
                      <p style="font-weight: 300;display: inline-block;margin-right:15px;">From</p>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_date form-control" ng-model="dateselectionfrom" placeholder="Date" />
                        </div>
                        <p style="font-weight: 300;display: inline-block;margin-right:15px;">To</p>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_dateto form-control" ng-model="dateselectionto" placeholder="Date" />
                        </div>
                  </div>
                          <div class="row form-group form-inline">
                    <div class="booking_searchengine">
                            <p style="font-weight: 300;display: inline-block;margin-right:5px;">Search</p>
                            <div class="select">
                          <div class='span6'>
                              
                              <label type="text" class="form-control" placeholder="Search By"  ng-click="openlist()"  x-webkit-speech  style="width: 100%;margin: 0"><span ng-bind="search_box_list"></span><i class="fa fa-sort-desc"></i></label>
                              <ul class="search_list">
                                  <li ng-click="clicklist('Booking ID')">Booking ID</li>
                                       <li ng-click="clicklist('Invoice')">Invoice</li>
                                        <li ng-click="clicklist('Package Name')">Package Name</li>
                                        <li ng-click="clicklist('Agent Name')">Agent Name</li>
                                  

                                 
                              </ul>
                          </div>
                      </div>
                            
                            <div class="search-box">
                             
                                <input type="text" class="search_booking form-control" ng-model="search.id" placeholder="Booking ID">
                                <input type="text" class="search_product form-control" ng-model="search.invoice" placeholder="Invoice">
                                <input type="text" class="search_name form-control" ng-model="search.package_name" placeholder="Package Name">
                                <input type="text" class="search_agentname form-control" ng-model="search.agent_name" placeholder="Agent Name">
                                
                                
                               
                            </div>
                            <a ng-click="reset_search_click()" class="reset_search">Reset</a>
                        </div>
                        </div>
                        <div class="form-group form-inline " style="width: 100%">
                                            <label for="class" class="label-tour" style="    margin-right: 4px;color: #555">Agent<span> :</span></label>
                                             <select class="form-control" ng-change="changeagent(selectagent)" id="selectagent" ng-model="selectagent" data-ng-options="i as i.fname for i in dataAgent" id="label-addbooking" style="width: 170px;">
                                                    <option value="">- None -</option>
                                              </select>
                                                <!--<label for="class" class="label-tour" style="    margin-right: 4px;color: #555">Print booking on date <span> :</span></label>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_date form-control" ng-model="datepdf" placeholder="Date" />
                        </div>
                        <button type="reset" class="btn btn-default" data-dismiss="modal" onclick="getPrintPDF()"><i class="material-icons">picture_as_pdf</i>Print</button>-->
                                    </div>
                                    <div class="form-group form-inline " style="width: 100%;border-top: 1px solid #fff;
    padding-top: 15px;
    padding-bottom: 0;">
                                            
                                                <label for="class" class="label-tour" style="    margin-right: 4px;color: #555">Print booking <span> :</span></label>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_date form-control" ng-model="datepdf" placeholder="Date" />
                        </div>

                                            <select name="class" id="class"  class="form-control col-md-8"  style=" border: 1px solid #ccc; border-radius: 5px;display: inline-block" ng-model="typebook">

                                                <option value="">-None-</option>
                                                <option value="Transfer">Transfer</option>

                                                <option value="Tour">Tour</option>

                                                <!-- <option>First Class</option> -->

                                                <!--<option>Standard Class</option>-->

                                            </select>
                        <button type="reset" class="btn btn-info "  ng-click="getPrintPDF()" style="padding: 3px 15px;
    margin-left: 15px;"><i class="material-icons" style="font-size: 28px;">picture_as_pdf</i></button>
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
                                        <thead class="text-primary">
                                             <th></th>
                                             <th></th>
                                            <th>Status</th>
                                            <th>Invoice</th>
                                            <th class="col-md-4">Package Name</th> 
                                            <th>Customer name</th> 
                                            <th>Flight</th>   
                                            <th>Pickup place</th>
                                            <th>To place</th>
                                            <th>Total Price</th>
                                            <th>Departure Date</th>
                                            <th>On time</th>
                                            <th>Adult</th>
                                            <th>Child</th>
                                            <th>No. of Guest</th>
                                            <th>Type</th>
                                            <th>Response by</th>
                                            <th>Agent Name</th>
                                            <th>Post By</th>
                                            <th>Lab </th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody >
                                            <tr ng-repeat="item in selsedataformonth | filter:search:strict | dateselect:dateselectionfrom:dateselectionto:this">
                                                <td align="center" ng-bind="$index+1"></td>
                                                 <td align="center" class="col-md-1" ng-if="item.noti == 0"><button data-toggle="modal" data-target="#confirm" ng-click="confirmbooking(item)" class="btn btn-info btn-sm">Wait</button></td>
                                                 <td align="center" class="col-md-1" ng-if="item.noti == 1"><button data-toggle="modal" id="notibutton" data-target="#confirm" ng-click="confirmbooking(item)" class="btn btn-info btn-sm">Wait</button></td>
                                                <td align="center" class="col-md-1"><i class="fa fa-clock-o fa-lg" aria-hidden="true" style="color: #FF9800"></i><!-- <button data-toggle="modal" data-target="#confirm" ng-click="confirmbooking(item)" class="btn btn-info btn-sm">"Wait"</button> --></td>
                                                <td  ng-bind="item.invoice"></td>
                                                <td class="col-md-4" ng-bind="item.package_name" ></td>
                                                <td class="col-md-2" ng-bind="item.name" ></td>
                                                <td class="col-md-2" ng-bind="item.flight" ng-if="item.flight != ''" ></td>
                                                <td align="center" class="col-md-2" ng-if="item.flight == ''"><span >-</span></td>

                                                <td ng-bind="item.pickup_place"></td>
                                                <td ng-bind="item.to_place"></td>
                                                <td ng-bind="item.total_price | currency:'':0"></td>
                                                <td ng-bind="item.ondate"></td>
                                                <td ng-bind="item.ontime"></td>
                                                <td align="center"  ng-bind="item.adult"></td>
                                                <td align="center" ng-bind="item.child"></td>
                                                <td ng-bind="item.total"></td>
                                                <td ng-bind="item.type"></td>
                                                <td ng-bind="item.owner"></td>
                                                <td ><button  ng-click="getagent(item.agent_id)" class="btn btn-primary btn-xs"><span ng-bind="item.agent_name"></span></button>
                                                </td>
                                                <td ><button  ng-click="getpostby(item.user_id)" class="btn btn-rose btn-xs"><span ng-bind="item.user_name"></td>
                                                <td align="center"><button class="btn btn-rose btn-xs" ng-if="item.alert == 0 && item.type == 'Transfer'" style="background: #ff0000">Acknowledge</button>
                                                <button class="btn btn-success btn-xs" ng-if="item.alert == 1 && item.type == 'Transfer'">Acknowledge<img src="../files/img-/yes.png" style="width: 23px;
    position: absolute;
    right: 0;
    margin-top: -12px;
    margin-right: -5px;
    border: solid 3px #fff;
    border-radius: 50%;"></button>
                                                <span ng-if="item.type == 'Tour'">-</span>
                                                </td>
                                                
                                              
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


                                <!-- <div class="form-group " style="width: 100%" >
                                    <div class="checkbox-popular">
                                        <div class="checkbox" style="padding: 0 20px 0 0">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="checkconfirm" id="echekrecommend">Confirm Bookings
                                        </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="checkcancel" id="echekpopular">Cancellation Bookings
                                                                </label>
                                                            </div>
                                        </div>
                                       
                                        
                                    </div> -->
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="confirm">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <div>Do you really want to confirm or cancel booking:{{coninvoice}} </div>
                                 <div class="form-group  " style="width: 100%;padding-left: 100px;margin-top: 35px;">
                                    <div class="checkbox" style="padding: 0 20px 0 0" id="checkforagent">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" value="checked" ng-model="checkconfirm" ng-click="Acceptconfirm($event,checkconfirm)"><!-- <span class="checkbox-material"><span class="check"></span></span> -->Confirm Bookings
                                            </label>
                                    </div>
                                    <div class="checkbox" style="padding: 0 20px 0 0" id="checkforagent">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" value="checked" ng-model="checkcancel" ng-click="Acceptcancel($event,checkcancel)"><!-- <span class="checkbox-material"><span class="check"></span></span> -->Cancellation Bookings
                                            </label>
                                    </div>
                                    <!-- <div class="radio-type" style="padding-left: 120px;  margin-top: 51px;">
                                        
                                        <div class="radio" style="padding: 0 20px 0 0">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" ng-model="checkcancel"><p style="display: inline-block; margin-left: 10px;margin-bottom:  0"> Cancellation Bookings</p>
                                                    </label>
                                                </div>
                                        <div class="radio " style="padding: 0 20px 0 0">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" ng-model="checkconfirm" ><p style="display: inline-block; margin-left: 10px;margin-bottom:  0"></p>
                                                    </label>
                                                </div>
                                                
                                                </div> -->
                                       
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="confirm()">Yes</button>
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
                <div class="modal fade" id="selecttype">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <input type="hidden" name="" ng-model="idremovebooking">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" ></h4>
                            </div>
                            <div class="modal-body">
                                <div>Please select type product or date</div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletebooking(idremovebooking)">Remove</button> -->
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<script src="../files/js-/picker.js" type="text/javascript"></script>
    <script src="../files/js-/picker.date.js" type="text/javascript"></script>
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
    <style>
                        @keyframes blink { 
                           50% { background-color: #ff9800; /*background-color: #ff0000;*/ } 
                        }
                        #notibutton{ /*or other element you want*/
                            animation-name: blink ;
                            animation-duration: .5s ;
                            animation-timing-function: step-end ;
                            animation-iteration-count: infinite ;
                            animation-direction: alternate ;
                        }
                        #notibutton{
                            background-color: #ff0000;
                            /*background-color: #06c10e;*/
                        }
                        #notinputroom2{ /*or other element you want*/
                            animation-name: blink ;
                            animation-duration: .5s ;
                            animation-timing-function: step-end ;
                            animation-iteration-count: infinite ;
                            animation-direction: alternate ;
                        }
                        #haveinputroom2{
                            border-color: #06c10e;
                        }
                    </style>
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
#radioin{
    margin-left: 55px;
}
.booking_searchengine {
    margin:  0; 
    margin-bottom: 1px;
}
.booking_searchengine_one .search-box-date input {
    display: block;
}
.search-box-date .form-control {
     display: inline-block; 
}
.booking_searchengine{
    margin-top: 0;
}
.booking_searchengine .select{
    width: 170px;
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
#radioin{
    margin-left: 0;
    margin-bottom: 20px;

}
#radiotarnsfer{
     margin-bottom: 20px;

}

}

    </style>
    <script>
    var app = angular.module('myApp',['ngCookies']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){
         loadpage();
        function loadpage(){
            $scope.datanoti = [];
            $scope.checktype = 'All';
             $scope.selsedataformonth = [];
             var today = new Date();
                var date = new Date(today.getFullYear()+'-'+(today.getMonth()-1)+'-1');
                //console.log(today);
                //console.log(date);
                $scope.dateselectionfrom = date;
                $scope.dateselectionto = today;
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
                    $scope.nameconfirm = res[0].username;
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
                url : "../php/getTours.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $scope.dataTour = res;
                 $scope.allTour = res;
                       
            });
                 $http({
                method : 'POST',
                url : "../php/getBooknew.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log(res[0].flight)
                 $scope.databook = res;
                  $scope.newdate = $filter('date')(new Date(),'dd/MM/yyyy');
                    //console.log($scope.newdate)
                angular.forEach($scope.databook, function (data) {
                    //console.log(data.ondate)
                     $scope.selsedataformonth.push(data)
                            if ($scope.newdate == data.ondate) { 
                                data.noti = '1';                                    
                                $scope.datanoti.push(data);
                                            
                            }
                            else{
                                data.noti = '0'; 
                            }
                        });
                    //console.log($scope.databook)
                 
                       
            });
                $http({
                    method: 'post',
                    url: "../php/getAgent.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    
                    $scope.dataAgent = res;
                    //console.log($scope.dataAgent)
                    
                    
             }); 


            }
            else
            {
                $window.location.href = '../login.php';
            }
        }
        $scope.getPrintPDF = function(){
            console.log($scope.typebook)
            console.log($scope.datepdf)
             console.log($filter('date')(new Date($scope.datepdf),'dd/MM//yyyy'));
                $scope.ondatepdf = $filter('date')(new Date($scope.datepdf),'dd/MM/yyyy')
            if ($scope.typebook == undefined) {
                $('#selecttype').modal('show')
            }
            else{
               
                if($scope.ondatepdf != 'undefined'){
                    $window.open('printPDF.php?date=' + $scope.ondatepdf+'&type='+$scope.typebook);

                    //$window.location.href="http://danatoursasia.com/back/report/printPDF.php?date="+$scope.ondatepdf;
                }
                else{
                     $('#selecttype').modal('show')
                }
            }
            
        }
        $scope.logtype=function(x){

            $scope.selsedataformonth = [];
            $scope.checktype = x;
            //console.log($scope.checktype)
            if ($scope.checktype == 'Tour') {
            $scope.checktour = true;             
            $scope.checktransfer = false;
                angular.forEach($scope.databook, function (data) {

                    if (x == data.type) {
                        // alert(x)
                        $scope.selsedataformonth.push(data)
                    }
                    
                                 
                                    
                });
            }
             if ($scope.checktype == 'Transfer') {
                $scope.checktour = false;             
                $scope.checktransfer = true;
                angular.forEach($scope.databook, function (data) {

                    if (x == data.type) {
                         //alert(x)
                        $scope.selsedataformonth.push(data)
                    }
                    
                                 
                                    
                });
             }
             if ($scope.checktype == 'Hotel') {
                $scope.checktour = false;             
                $scope.checktransfer = true;
                angular.forEach($scope.databook, function (data) {

                    if (x == data.type) {
                         //alert(x)
                        $scope.selsedataformonth.push(data)
                    }
                    
                                 
                                    
                });
             }
             if ($scope.checktype == 'All') {
                // $scope.checktour = false;             
                // $scope.checktransfer = true;
                angular.forEach($scope.databook, function (data) {

                   // if (x == data.type) {
                         //alert(x)
                        $scope.selsedataformonth.push(data)
                    //}
                    
                                 
                                    
                });
             }
         }
         $scope.changeagent = function(agent){
            $scope.agentid = agent.id;
            $scope.selsedataformonth = [];
            // var total_sele_adult = 0;
            // var total_sele_child = 0;
            // var total_net_adult = 0;
            // var total_net_child = 0;
            // var total_price = 0;
            // var total_transfer_price = 0;
            angular.forEach($scope.databook, function(data){
            if(agent.id == data.agent_id)
            {   
                
                $scope.selsedataformonth.push(data)
                 
            }
            // if ($scope.selsedataformonth.length == 0) {
            //         total_net_adult = 0;
            //         total_net_child = 0;                                    
            //         total_sele_adult = 0;
            //         total_sele_child = 0;
            //         total_price = 0;
            //         total_transfer_price = 0;
                                    
            //         $scope.returnvalue( total_sele_adult,total_sele_child,total_net_adult,total_net_child,total_price,total_transfer_price)
            // }
            // else{
            //     angular.forEach($scope.selsedataformonth, function(data){
              
            //         total_net_adult += parseInt(data.net_price_adult);
            //         total_net_child += parseInt(data.net_price_child);
            //         total_sele_adult += parseInt(data.adult_price);
            //         total_sele_child += parseInt(data.child_price);
            //         total_price += parseInt(data.total_price);
            //         total_transfer_price += parseInt(data.transfer_price);
                                    
            //         $scope.returnvalue( total_sele_adult,total_sele_child,total_net_adult,total_net_child,total_price,total_transfer_price)
            //     });
            //     }
            
                 
            
        });
            //console.log($scope.dataselectagent)
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
        $scope.confirmbooking = function(data){
            $scope.coninvoice = data.invoice;
            $scope.conid = data.id;
            $scope.package_name = data.package_name;
            $scope.class = data.class;

        }
        
        

        
        $scope.Acceptconfirm =function(even, state){
           
            if (state == true) {
                
                  $scope.checkconfirm = true;
                   
                        $scope.checkcancel = false;
                         //console.log( $scope.checkconfirm)
            //console.log( $scope.checkcancel)
                   
            }
            else{
                  $scope.checkconfirm = false;
                
                 
                }
                

        }
        $scope.Acceptcancel =function(even, state){

            if (state == true) {
              $scope.checkcancel = true;
             
            $scope.checkconfirm = false;
             //console.log( $scope.checkconfirm)
            //console.log( $scope.checkcancel)
                    

              
            }
            else{
              $scope.checkcancel = false;
            
             
            }

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
        $scope.confirm = function(){
           if ($scope.checkconfirm == true && $scope.checkcancel == false) {
                $http({
                method : 'POST',
                url : "../php/confirmBooking.php",
                data: $.param({'id': $scope.conid,'package_name':$scope.package_name,'confirmby': $scope.nameconfirm,'classs': $scope.class}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $window.location.reload();
                 
                       
            });
           }
            if ($scope.checkconfirm == false && $scope.checkcancel == true) {
                $http({
                method : 'POST',
                url : "../php/cancelBooking.php",
                data: $.param({id: $scope.conid}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 //console.log(res)
                 $window.location.reload();
                 
                       
            });
           }
            
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
                 result = document.getElementsByClassName("search_agentname");
                angular.element(result).css('display','none');                       
                result = document.getElementsByClassName("search_list");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("reset_search");
                angular.element(result).css('display','inline-block');
                $scope.list = false;
                $scope.search = new Array();
                $scope.search.package_name = '';
                $scope.search.invoice = '';
                $scope.search.agent_name = '';
                        
                        
                       
            }
            else if(input=='Invoice')
            {
                result = document.getElementsByClassName("search_booking");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("search_product");
                angular.element(result).css('display','inline-block'); 
                result = document.getElementsByClassName("search_name");
                angular.element(result).css('display','none'); 
                 result = document.getElementsByClassName("search_agentname");
                angular.element(result).css('display','none');                       
                result = document.getElementsByClassName("search_list");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("reset_search");
                angular.element(result).css('display','inline-block');
                $scope.list = false;
                $scope.search = new Array();
                $scope.search.id = '';
                $scope.search.package_name = '';
                $scope.search.agent_name = '';
                       
            }
            else if(input=='Package Name')
            {
                result = document.getElementsByClassName("search_booking");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("search_product");
                angular.element(result).css('display','none'); 
                
                result = document.getElementsByClassName("search_name");
                angular.element(result).css('display','inline-block');
                result = document.getElementsByClassName("search_agentname");
                angular.element(result).css('display','none');                        
                result = document.getElementsByClassName("search_list");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("reset_search");
                angular.element(result).css('display','inline-block');
                $scope.list = false;
                $scope.search = new Array();
                $scope.search.package_name = '';
                $scope.search.id = '';
                $scope.search.agent_name = '';
                       
            }
            else if(input=='Agent Name')
            {
                //alert('aaa')
                result = document.getElementsByClassName("search_booking");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("search_product");
                angular.element(result).css('display','none'); 
                 result = document.getElementsByClassName("search_name");
                angular.element(result).css('display','none');
                                       
                result = document.getElementsByClassName("search_list");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("search_agentname");               
                angular.element(result).css('display','inline-block'); 
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
            result = document.getElementsByClassName("search_agentname");
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
        $scope.returnvalue = function (a,b,c,d,e) {
                    $scope.total_sell = a;
                    $scope.total_start = b;
                    $scope.total_percen = c;
                    $scope.total_omise = d;
                    $scope.total_sum = e;
                } 
                 
    });
// app.filter('startFromin',function(){
//                 return function(data,start){
//                     return data.slice(start);
//                 }
//             })
//             app.filter('startFrom',function(){
//                 return function(data,start){
//                     //console.log('in filter');
//                     return data.slice(start);
//                 }
//             })
//             app.filter('startFrompen',function(){
//                 return function(data,start){
//                     return data.slice(start);
//                 }
//             })
            app.filter('dateselect',function(){
                return function(data,input1,input2,scope){
                    ////console.log(admin);
                    //console.log("In filter here");
                    var result = new Array();
                    var total_sell = 0;
                    var x = 0;
                    var total_start = 0;
                    var total_percen = 0;
                    var total_omise = 0;
                    var total_sum = 0;
                    //$scope.total_sell = 0;
                    if(input2 != null)
                    {
                        //console.log("In case here 1");
                        //console.log(input1);
                        ////console.log("And");
                        ////console.log(input2);
                        var current;
                        var current1;
                        current = new Date(input1);
                        ////console.log(current);
                        var x =current.setHours(00, 00, 00);
                        var setx = new Date(x).getTime();
                        //console.log(new Date(x).getTime());
                        //console.log(setx)
                        current1 = new Date(input2);
                        var y =current1.setHours(24, 00, 00);
                        //console.log(y);
                        for (var i=0; i<data.length; i++){
                            //console.log(data[i].post_date *1000)
                            if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                ////console.log(data[i]);
                                ////console.log(new Date(data[i].booking_date).getTime());
                                //console.log('Round'+i);
                                ////console.log(new Date(x).getTime());
                                
                                   
                                    result.push(data[i]);
                                
                                
                                
                                
                            }
                            else
                            {
                                ////console.log('Not Bwtween');
                            }
                        }
                        return result;
                    }
                    else if(input2 == null && input1 == null)
                    {
                        //console.log("In case here 2");
                        var nowdate = new Date();
                        var month = nowdate.getMonth()+1;
                        var year = nowdate.getFullYear();
                        

                        var datefrom = new Date(year+'-'+month+'-1');
                       
                        var current;
                        current = new Date(datefrom);
                        var x =current.setHours(00, 00, 00);
                        current = new Date(nowdate);
                        var y =current.setHours(24, 00, 00);
                        for (var i=0; i<data.length; i++){
                            if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                ////console.log('Date Between');
                                
                                    
                                    result.push(data[i]);
                               
                            }
                            else
                            {
                                    ////console.log('Not Bwtween');
                            }
                        }
                        return result;
                    }
                    else
                    {
                        //console.log("In case here 3");
                        var current = new Date(input1);
                        var x =current.setHours(00, 00, 00);
                        var y =current.setHours(24, 00, 00);
                        for (var i=0; i<data.length; i++){
                            ////console.log(i);
                            ////console.log(data[i]);
                            if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                //console.log(new Date(x).getTime());
                                ////console.log('Date Between');
                                
                                    
                                    result.push(data[i]);
                               
                            }
                            else
                            {

                                ////console.log('Not Bwtween');

                            }
                        }

                        return result;
                    }
                    //return result;
                }
            })
            

    </script>
</html>