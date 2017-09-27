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
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
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
                               <li >
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
                                <li class="active">
                                    <a href="revenue-expenses.php">
                                   <i class="material-icons">monetization_on</i>
                                         Revenue-Expenses
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
                                <li >
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
                                            <i class="material-icons">access_alarms</i> Manage Account Tours 
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
                                            <li class="active"><span>/</span>  Revenue-Expenses
                                    </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                      
                       <div class="col-md-12">
                       <!-- <div class="form-group form-inline">
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
                                    <div class="radio" id="radioall">
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="All">
                                            All
                                        </label>
                                    </div>
                            </div> -->
                            <div class="row form-group form-inline" style="padding-bottom: 0">
                                <div class="col-md-12 col-md-6 " >
                                    <table width="100%">
                                        <tr style="border-top: none !important;">
                                            <td style="width: 50px" width="50">
                                                <p style="font-weight: 300;width: 40px">From</p>
                                            </td>
                                            
                                            <td>
                                                <div class="search-box-date" style="">
                                                    <input type="date" class="search_date form-control" ng-model="dateselectionfrom" placeholder="Date" />
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="100%" style="margin-top: 15px;">
                                        <tr style="border-top: none !important;">
                                            <td style="width: 50px" width="50">
                                                <p style="font-weight: 300;">To</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="search-box-date" >
                                                    <input type="date" class="search_dateto form-control" ng-model="dateselectionto" placeholder="Date" />
                                                </div>
                                            </td>
                                        </tr>
                                    </table> 
                        
                                </div>

                                <!-- <div class="col-md-6 col-md-4 col-md-3" style="padding-bottom:20px">
                                    
                                </div> -->
                            </div>
                         <!--  <div class="row form-group form-inline" style="margin-top: 0;padding-bottom: 0">
                                <div class="booking_searchengine">
                                    <div class="col-md-6 col-md-4 col-md-3" style="padding-bottom: 20px">
                                    <table width="100%">
                                        <tr>
                                            <td width="50">
                                                <p style="font-weight: 300;">Search</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="select">
                                  <div class='span6'>                                      
                                      <label type="text" class="form-control" placeholder="Search By"  ng-click="openlist()"  x-webkit-speech  style="width: 100%;margin: 0"><span ng-bind="search_box_list"></span><i class="fa fa-sort-desc"></i></label>
                                      <ul class="search_list">
                                          <li ng-click="clicklist('Booking ID')">Booking ID</li>
                                               <li ng-click="clicklist('Invoice')">Invoice</li>
                                                <li ng-click="clicklist('Package Name')">Package Name</li>
                                                <li ng-click="clicklist('Agent Name')">Agent Name</li>
                                                <li ng-click="clicklist('Customer name')">Customer name</li>
                                          

                                         
                                      </ul>
                                  </div>
                              </div>
                                            </td>
                                        </tr>
                                    </table> 
                                </div>
                                 <div class="col-md-6 col-md-4 col-md-3"  id="search_input" style="display: none;padding-bottom: 20px">
                                    <table width="100%">
                                        <tr>
                                            <td id="tdsearch-box" width="50">
                                                
                                            </td>
                                            <td></td>
                                            <td valign="top">
                                                <div class="search-box">
                             
                                                <input type="text" class="search_booking form-control"  ng-model="search.id" placeholder="Booking ID" style="width: 100%">
                                                <input type="text" class="search_product form-control"  ng-model="search.invoice" placeholder="Invoice" style="width: 100%">
                                                <input type="text" class="search_name form-control"  ng-model="search.package_name" placeholder="Package Name" style="width: 100%">
                                                <input type="text" class="search_agentname form-control"  ng-model="search.agent_name" placeholder="Agent Name" style="width: 100%">
                                                <input type="text" class="search_castomername form-control"  ng-model="search.name" placeholder="Customer name" style="width: 100%">
                                
                                
                               
                            </div>
                           
                                            </td>
                                            <td> <a ng-click="reset_search_click()" class="reset_search">Reset</a></td>
                                        </tr>
                                    </table> 
                                </div>
                                
                                
                            
                            
                            
                        </div>
                        </div> -->
                        <!-- <div class="form-group form-inline " style="width: 100%;margin-top: 0">
                            <div class="col-md-6 col-md-4 col-md-3" style="padding-bottom: 20px">
                                    <table width="100%">
                                        <tr>
                                            <td width="50">
                                                <label for="class" class="label-tour" style="color: #555">Agent</label>
                                            </td>
                                            <td></td>
                                            <td>
                                                 <select class="form-control" ng-change="changeagent(selectagent)" id="selectagent" ng-model="selectagent" data-ng-options="i as i for i in dataAgent" id="label-addbooking" style="width: 170px;">
                                                    <option value="">- None -</option>
                                              </select>
                                             
                                            </td>
                                        </tr>
                                    </table> 
                                </div>
                                <div class="col-md-6 col-md-4 col-md-3" style="padding-bottom: 10px">
                                    <table width="100%">
                                        <tr>
                                            
                                            <td width="50"></td>
                                            <td>
                                                 <div class="clear" ng-click="clear()">Clear</div>
                                            </td>
                                        </tr>
                                    </table> 
                                </div>      
                                            
                                                
                                    </div> -->
                                     
                            <div class="card" style="padding:15px 0; ">
                                <!-- <h3>Revenue</h3> -->
                                <div style="text-align: center;
    padding: 15px;
    font-weight: 500;
    font-size: 16px;">Booking date <span ng-bind="dateselectionfrom | date:'dd/MM/yyyy'"></span> <span> - </span> <span ng-bind="dateselectionto | date:'dd/MM/yyyy'"></span></div>
                                
                                <!-- <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">assignment</i>
                                </div> -->
                                <!-- <h4 class="card-title">Simple Table</h4> -->
                                <!-- <div class="card-header" data-background-color="blue"> -->
                                    
                                    <!-- <h4 class="title">Users </h4> -->
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                <!-- </div> -->
                                
                                <div class=" table-responsive">
                                    <table class="table">
                                       <!--  <thead >
                                             <td></td>
                                             
                                            <td>Transfer Revenue </td>
                                            <td>Transfer expenses</td>
                                            <td>Transfer profit </td>


                                             <td>Tour Revenue  </td>
                                             <td>Tour expenses</td>
                                             <td>Tour profit </td>
                                            
                                           
                                            
                                           
                                            
                                            
                                        </thead> -->
                                        <tbody >
                                            <tr ng-repeat="item in selsedataformonth | filter:search:strict | dateselect:dateselectionfrom:dateselectionto:this ">
                                               
                                                <!-- <td align="center" ng-bind="$index+1"></td>
                                                <td ng-bind="item.ondate"></td>
                                                <td class="col-md-2" ng-bind="item.name" ></td>
                                                <td  ng-bind="item.invoice"></td>
                                                <td ><span ng-bind="item.agent_name"></span></td>
                                                <td class="col-md-4" ng-bind="item.package_name" ></td>
                                                
                                                 <td ng-bind="item.total"></td>
                                                 <td ng-bind="item.listcar"></td>
                                                <td align="right" class="col-md-2" ng-bind="item.total_amount | currency:'':0" ></td>
                                                <td align="right" class="col-md-2" ng-bind="item.adult_price | currency:'':0" ></td>
                                               

                                                <td align="right" ng-bind="item.total_net  | currency:'':0"></td>
                                                <td align="right" ng-bind="item.transfer_price  | currency:'':0"></td>
                                               <td align="right" ng-bind="item.received  | currency:'':0"></td>
                                                <td  align="center"><span style="color: #9c27b0" ng-show="item.status_invoice == 1 || item.total_price == 0" ng-bind="item.pay_by"></span><button ng-show="item.status_invoice == 0 && item.total_price != 0" data-toggle="modal" data-target="#payproduct" ng-click="pay(item)" class="btn btn-primary btn-sm" style="text-transform: capitalize;">Pay</button></td>
                                                <td  align="center"><i ng-show="item.done == 1" class="material-icons" style="color: #4caf50;">playlist_add_check</i><i ng-show="item.done == 0" class="material-icons"  style="color: #ff9800;">schedule</i></td>
                                                <td  align="center"><button ng-show="item.approved == 0" data-toggle="modal" data-target="#approved" ng-click="approve(item)" class="btn btn-info btn-sm" style="text-transform: capitalize;">Approve</button><span style="color: #00bcd4" ng-show="item.approved == 1" ng-bind="item.approve_by"></span></td>
                                               
                                                <td class="field" ></td> -->
                                            </tr>
                                           
                                           <!--  <tr > 
                                               
                                              <td class="field" style="font-weight: bold;" align="right">Grand Total</td>
                                              <td align="right" ng-bind="tota_sum_transfer | currency:'':0"></td>
                                              <td align="right" ng-bind="total_transfer_expenses | currency:'':0"></td>
                                              <td align="right" ng-bind="total_transfer_profit | currency:'':0"></td>
                                              <td align="right" ng-bind="tota_sum_tour | currency:'':0"></td>
                                              <td align="right" ng-bind="total_tour_expenses | currency:'':0"></td>
                                              <td align="right" ng-bind="total_tour_profit | currency:'':0"></td>

                                          </tr> -->

                                          </tbody>
                                      </table>
                                      <div class="col-md-12">
                                          <div class="row">
                                              <div class="col-md-6">
                                                 <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Transfers</div>
                                                  <table class="table">
                                                      <thead>
                                                          <tr>
                                                            <td></td>
                                                             <td align="center">Transfer Revenue </td>
                                                            <td align="center">Transfer expenses</td>
                                                            <td align="center">Transfer profit </td>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td class="field" style="font-weight: bold;" align="right">Grand Total</td>
                                                              <td align="right" ng-bind="tota_sum_transfer | currency:'':0"></td>
                                                              <td align="right" ng-bind="total_transfer_expenses | currency:'':0"></td>
                                                              <td align="right" ><span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_transfer_profit | currency:'':0"></span></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                              <div class="col-md-6">
                                                <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Tours</div>
                                                  <table class="table">
                                                      <thead>
                                                          <tr>
                                                             <td></td>
                                                             <td align="center">Tour Revenue  </td>
                                                             <td align="center">Tour expenses</td>
                                                             <td align="center">Tour profit </td> 
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                                 <td class="field" style="font-weight: bold;" align="center">Grand Total</td>
                                                              <td align="right" ng-bind="tota_sum_tour | currency:'':0"></td>
                                                              <td align="right" ng-bind="total_tour_expenses | currency:'':0"></td>
                                                              <td align="right" ><span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_tour_profit | currency:'':0"></span></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6" style="margin-top: 30px">
                                        <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Total Revenue</div>
                                          <table class="table">
                                          <tr>
                                              <td align="center">Transfer profit</td>
                                              <td align="right" ng-bind="total_transfer_profit | currency:'':0"></td>
                                          </tr>
                                          <tr>
                                              <td align="center">Tour profit</td>
                                              <td align="right" ng-bind="total_tour_profit | currency:'':0"></td>
                                          </tr>
                                          <tr>
                                              <td align="center">Total </td>
                                              <td align="right"><span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_tour_profit+total_transfer_profit | currency:'':0"></span></td>
                                          </tr>
                                      </table>
                                      </div>
                                      
                                      <div class="col-md-12" style="margin-top: 30px">
                                        <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Total revenue tour and transfers </div>
                                          <table class="table" >
                                            <thead class="">
                                                <td></td>
                                                <td align="right">Total Amount</td>   
                                                <!-- <td>Unit price</td> -->
                                            
                                                <td align="right">Total Net</td>
                                                <td align="right">Money Received</td>
                                            </thead>
                                            <tbody>
                                                <td class="field" style="font-weight: bold;" align="right">Grand Total</td>
                                                <td class="field" style="font-weight: bold;" align="right" ng-bind="total_tamount | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >-</td> -->
                                                 <td class="field" style="font-weight: bold;" align="right" ng-bind="total_tnet | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >=</td> -->
                                              
                                             
                                                 <td class="field" style="font-weight: bold;" align="right" >
                                                     <span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_tprofit | currency:'':0"></span>
                                                 </td>
                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="col-md-12" style="margin-top: 30px">
                                        <div style="padding: 8px;
    font-weight: 500;
   
    border-bottom: none;">Total revenue by owner </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Owner Mosab</div>
                                            <table class="table" >
                                            <thead class="">
                                                <td></td>
                                                <td align="right">Total Amount</td>   
                                                <!-- <td>Unit price</td> -->
                                            
                                                <td align="right">Total Net</td>
                                                <td align="right">Money Received</td>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="field" style="font-weight: bold;" align="right">Grand Total</td>
                                                <td class="field" style="font-weight: bold;" align="right" ng-bind="total_omosab_amount | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >-</td> -->
                                                 <td class="field" style="font-weight: bold;" align="right" ng-bind="total_omosab_net | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >=</td> -->
                                              
                                             
                                                 <td class="field" style="font-weight: bold;" align="right" >
                                                     <span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_omosab_profit | currency:'':0"></span>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td align="right" style="font-weight: bold;" colspan="2">Pay booking owner for medhat <span ng-bind="free_booking"></span>  <span>booking</span></td>
                                                 <td style="font-weight: bold;" align="center"><span>Total price</span></td>
                                                <td style="font-weight: bold;" align="right"><span style="border-bottom: 1px solid;
    color: #ff9800;" ng-bind="'-'+total_free_booking | currency:'':0"></span></td>
                                             </tr>
                                             <tr>
                                                <td align="right"  style="font-weight: bold;" colspan="3">Total</td>
                                                 <td style="font-weight: bold;" align="right"><span style="border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_omosab_profit-total_free_booking | currency:'':0"></span></td>
                                             </tr>
                                            </tbody>
                                        </table>
                                        </div>

                                          <div class="col-md-6">
                                            <div style="padding: 8px;
    font-weight: 500;
    border: 1px solid #ddd;
    border-bottom: none;background: #ddd;">Owner Medhat</div>
                                            <table class="table" >
                                            <thead class="">
                                                <tr>
                                                <td></td>
                                                <td align="right">Total Amount</td>   
                                                <!-- <td>Unit price</td> -->
                                            
                                                <td align="right">Total Net</td>
                                                <td align="right">Money Received</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="field" style="font-weight: bold;" align="right">Grand Total</td>
                                                <td class="field" style="font-weight: bold;" align="right" ng-bind="total_omedhat_amount | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >-</td> -->
                                                 <td class="field" style="font-weight: bold;" align="right" ng-bind="total_omedhat_net | currency:'':0"></td>
                                                <!-- <td class="field" style="font-weight: bold;" align="center" >=</td> -->
                                              
                                             
                                                 <td class="field" style="font-weight: bold;" align="right" >
                                                     <span style="    border-bottom: 1px solid;
    color: #ff9800;" ng-bind="total_omedhat_profit | currency:'':0"></span>
                                                 </td>
                                             </tr> 
                                             <tr>
                                                 <td align="right" style="font-weight: bold;" colspan="2">Free <span ng-bind="free_booking"></span>  <span>booking</span></td>
                                                 <td style="font-weight: bold;" align="center"><span>Total price</span></td>
                                                <td style="font-weight: bold;" align="right"><span style="border-bottom: 1px solid;
    color: #ff9800;" ng-bind="'-'+total_free_booking | currency:'':0"></span></td>
                                             </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                      </div>
                                        
                                          
                                             
                                        <!-- </tbody> -->
                                    <!-- </table> -->

                                </div>
                                <!-- <div>
                                    <table class="table">
                                        <tr>
                                            
                                            <td>Total car service revenue</td>
                                            <td>Total spending on car service</td>
                                            <td>Tum Total Transfer</td>
                                            <td></td>
                                            <td>Total Tour Revenue</td>
                                            <td>Tour expenses</td>
                                            <td>sum total tour</td>
                                        </tr>
                                        <tr>
                                            <td>{{sum_transfer}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    

                                </div> -->
                                <!-- <uib-pagination   id="page" total-items="selsedataformonth.length" ng-model="currentPage" items-per-page="pageSize" total-items="totalItems"  max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages" >                        
                            </uib-pagination> -->
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
                <div class="modal fade" id="approved">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" style="    font-weight: 400;" >Approved</h4>
                            </div>
                            <div class="modal-body">
                                <div style="text-align: center; font-size: 16px;font-weight: 500;">Invoice number :  <span style="color: #9c27b0; font-weight: 700;" ng-bind="dataitem.invoice"></span></div>
                                 <div class="form-group  " style="width: 100%;margin-top: 35px;">
                                     <div class="card-content table-responsive">
                                    <table class="table">
                                            <th class="col-md-4">Package Name</th>
                                            <th>Customer name</th> 
                                            <th>Total Price</th>
                                            <th>Departure Date</th>
                                            <th>No. of Guest</th>
                                            <th>Agent Name</th>
                                        <tbody >
                                            <tr>
                                                <td class="col-md-4" ng-bind="dataitem.package_name"></td>
                                                <td class="col-md-2" ng-bind="dataitem.name" ></td>
                                                <td ng-bind="dataitem.total_amount | currency:'':0"></td>
                                                <td ng-bind="dataitem.ondate"></td>
                                                <td align="center" ng-bind="dataitem.total"></td>
                                                <td ><span ng-bind="dataitem.agent_name"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                                       
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" ng-click="confirmapprove(dataitem.id)" style="width: 80px;    text-transform: capitalize;">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="width: 80px;    text-transform: capitalize;">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="payproduct">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" style="    font-weight: 400;" >Pay</h4>
                            </div>
                            <div class="modal-body">
                                <div style="text-align: center; font-size: 16px;font-weight: 500;">Invoice number :  <span style="color: #9c27b0; font-weight: 700;" ng-bind="dataitempay.invoice"></span></div>
                                 <div class="form-group  " style="width: 100%;margin-top: 35px;">
                                     <div class="card-content table-responsive">
                                    <table class="table">
                                            <th class="col-md-4">Package Name</th>
                                            <th>Customer name</th> 
                                            <th>Total Price</th>
                                            <th>Departure Date</th>
                                            <th>No. of Guest</th>
                                            <th>Agent Name</th>
                                        <tbody >
                                            <tr>
                                                <td class="col-md-4" ng-bind="dataitempay.package_name"></td>
                                                <td class="col-md-2" ng-bind="dataitempay.name" ></td>
                                                <td ng-bind="dataitempay.total_net | currency:'':0"></td>
                                                <td ng-bind="dataitempay.ondate"></td>
                                                <td align="center" ng-bind="dataitempay.total"></td>
                                                <td ><span ng-bind="dataitempay.agent_name"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                                       
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" ng-click="confirmpay(dataitempay.id)" style="width: 80px;    text-transform: capitalize;">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="width: 80px;    text-transform: capitalize;">Cancel</button>
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
     <script src="https://code.angularjs.org/1.4.5/angular-route.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.min.js"></script>

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
 .clear{
    /*display: none;*/
    display: inline-block;
    background: #337AB7;
    padding: 7px 13px;
    color:#FFF;
    text-decoration: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    /*margin-left: 10px;*/
}

.clear:hover{
    cursor: pointer;
    color: #FFF;
    text-decoration: none;
    border: 2px solid #337AB7;
    padding: 5px 11px;
    background: #FFF;
    color:#337AB7;
}
#tdsearch-box{
    display: none;
}
tr{
    border-top: 1px solid #ddd !important;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
    /*border: none !important;*/
        border: 1px solid #ddd !important; 
}
@media screen and (max-width: 767px){
#tdsearch-box{
    display: block;
}
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
    var app = angular.module('myApp',['ngCookies','ngRoute','angular.filter','ui.bootstrap']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter,$interval){
         loadpage();
        function loadpage(){
            $scope.datanoti = [];
            $scope.checktype = 'All';
            $scope.selsedataformonth = [];
            $scope.dataAgentget = [];
            // $scope.dataAgent = [];
            $scope.pageSize = 10;
    
            $scope.currentPage = 1;
            $scope.maxSize = 5;
            $scope.total_tamount = 0;
            $scope.total_tsele = 0;
            $scope.total_tnet = 0;
            $scope.total_treseive = 0;
            $scope.total_tprofit = 0;
            $scope.total_amount = 0;
           
             var today = new Date();
                var date = new Date(today.getFullYear()+'-'+(today.getMonth()+1)+'-1');
                // console.log(today);
                // console.log(date);
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
            //  $http({
            //     method : 'POST',
            //     url : "../php/getTours.php",
            //     //data: $.param({sv: $scope.dataSV}),
            //     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            //     }).success(function(res){
            //      //console.log(res)
            //      $scope.dataTour = res;
            //      $scope.allTour = res;
                       
            // });
            $scope.sum_transfer = 0;
                 $http({
                method : 'POST',
                url : "../php/getManagebooking.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                // console.log(res[0].flight)
                 $scope.datatour = res;
                  $scope.newdate = $filter('date')(new Date(),'dd/MM/yyyy');
                    //console.log($scope.newdate)
                angular.forEach($scope.datatour, function (data) {
                   // Total Amountitem.adult_price*item.total 
                   $scope.dataAgentget.push(data.agent_name)
                    //$scope.dataAgentget.push(data.agent_id)
                    // console.log(data.adult_price*data.total)
                    //item.net_price_adult*item.total
                    // $scope.total_amount = data.adult_price*data.total;
                    // $scope.total_net =  data.net_price_adult*data.total;
                    //$scope.dataAgent.push()
                    $scope.total_price = parseInt(data.total_price);
                    if(data.type == 'Transfer'){
                        data.total_net = data.transfer_price*data.listcar;
                        $scope.total_net =  data.transfer_price*data.listcar;
                        if (data.agent_name != 'Magic World') {
                            if (data.total_price != 0) {
                                if(data.province == 'Phuket'){
                                data.total_amount = parseInt($scope.total_price)+(23*33);
                                    $scope.total_amount = parseInt($scope.total_price)+(23*33);
                                }
                                else{
                                     data.total_amount = parseInt($scope.total_price)+(35*33);
                                     $scope.total_amount = parseInt($scope.total_price)+(35*33);
                                }

                            }
                             else{
                               $scope.total_amount = 0; 
                                $scope.total_net = 0;
                            }
                            
                        }
                        else{
                             if (data.total_price != 0) {
                                 if(data.province == 'Phuket'){
                                data.total_amount = parseInt($scope.total_price)+(20*33);
                                $scope.total_amount = parseInt($scope.total_price)+(20*33);
                                }
                                else{
                                     data.total_amount = parseInt($scope.total_price)+(35*33);
                                     $scope.total_amount = parseInt($scope.total_price)+(35*33);
                                }
                             }
                             else{
                                 $scope.total_amount = 0;
                                 $scope.total_net = 0; 
                             }
                            
                        }
                        data.total_net = $scope.total_net;
                        data.received =  $scope.total_amount - $scope.total_net;
                        data.sum_transfer = parseInt($scope.total_amount);
                       data.sum_tour = 0;
                       data.transfer_expenses = $scope.total_net;
                       data.tour_expenses = 0;
                        data.total_amount = $scope.total_amount;

                       // console.log($scope.total_amount)
                       //console.log( $scope.sum_transfer+'=='+$scope.total_amount)

                        // if()data.total_amount = $scope.total_price;
                    }
                    else{
                        // if (data.total_price != 0) {

                        // }

                        if(data.package_name == 'City Tour'){
                       data.total_net =  data.adult_price; 
                        data.received =  0;
                         data.total_amount = data.adult_price;
                         $scope.total_amount = data.adult_price;
                         $scope.total_net  = data.adult_price;
                        }
                        else{
                             if(data.total_price == '0'){
                               
                                 data.received = 0;
                                  data.total_net = 0;
                                   data.total_amount = 0;
                                   $scope.total_amount = 0;
                                   $scope.total_net  = 0;
                                
                               
                            }
                             else{
                                data.sum_tour = $scope.total_amount;
                                $scope.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                $scope.total_amount = data.total_price;
                                data.total_amount = $scope.total_price;
                                data.received =  $scope.total_amount - $scope.total_net;
                                // data.received =  $scope.total_amount- $scope.total_net;
                                 data.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                 data.total_amount = $scope.total_price;
                                $scope.total_amount = data.total_price;
                                 // $scope.total_net =(data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                 
                                // $scope.total_amount = data.total_price;
                            }
                            
                             
                             
                            

                        }
                        data.transfer_expenses =0;
                       data.tour_expenses = $scope.total_net;
                        data.sum_transfer = 0;
                        data.sum_tour = parseInt($scope.total_amount);
                        // data.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                        // $scope.total_net =(data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                        //data.total_amount = $scope.total_price;
                        //$scope.total_amount = data.total_price;
                    }  
                    //data.total_amount = $scope.total_price;
                    

                    // data.received =  $scope.total_amount - $scope.total_net;
                   
                    
                     $scope.selsedataformonth.push(data)
                      //data.dateCompare = 'wait';
                            if ($scope.newdate == data.ondate) { 
                                data.noti = '1';                                    
                                $scope.datanoti.push(data);
                                            
                            }
                            else{
                                data.noti = '0'; 
                            }
                        });
                $scope.databook = $scope.datatour;
                console.log($scope.databook)
                var a = $scope.dataAgentget;
                      var b = new Array();
                      var first2 = 0;
                      var count2 = 0;
                      for(var i = 0 ; i < a.length; i++)
                       {
                        count2 = 0;              
                        if(first2==0)
                            {
                              b.push(a[i]);
                              first2++;
                            }
                            for(var j = 0 ; j < b.length ; j++)
                            {                    
                              if(b[j]!=a[i])
                              {
                                count2++;
                                if(count2==b.length)
                                {
                                  b.push(a[i]);
                                }
                              }
                            }              
                      }
                      // console.log(b)
                      $scope.dataAgent = b;
                     //   for (var i = 0; i < b.length; i++) {
                     //      angular.forEach($scope.databook, function(data){ 
                     //          if (data.agent_name == b[i]) 
                     //          {
                     //             $scope.dataAgent.push(data);
                     //             //console.log($scope.nametooo) 
                                 
                     //          }

                              
                     //      });
                     // }
                // console.log($scope.dataAgent)
                 
                       
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
         $scope.clear = function(){
              $http({
                method : 'POST',
                url : "../php/getManagebooking.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log(res[0].flight)
                 $scope.datatour = res;
                  $scope.newdate = $filter('date')(new Date(),'dd/MM/yyyy');
                    //console.log($scope.newdate)
                angular.forEach($scope.datatour, function (data) {
                   // Total Amountitem.adult_price*item.total 
                   $scope.dataAgentget.push(data.agent_name)
                    //$scope.dataAgentget.push(data.agent_id)
                    // console.log(data.adult_price*data.total)
                    //item.net_price_adult*item.total
                    // $scope.total_amount = data.adult_price*data.total;
                    // $scope.total_net =  data.net_price_adult*data.total;
                    //$scope.dataAgent.push()

                    $scope.total_price = parseInt(data.total_price);
                    if(data.type == 'Transfer'){
                        data.total_net = data.transfer_price*data.listcar;
                        $scope.total_net =  data.transfer_price*data.listcar;
                        if (data.agent_name != 'Magic World') {
                            if(data.province == 'Phuket'){
                                data.total_amount = $scope.total_price+(23*33);
                                $scope.total_amount = $scope.total_price+(23*33);
                            }
                            else{
                                 data.total_amount = $scope.total_price+(35*33);
                                 $scope.total_amount = $scope.total_price+(35*33);
                            }
                        }
                        else{
                             if(data.province == 'Phuket'){
                                data.total_amount = $scope.total_price+(20*33);
                                $scope.total_amount = $scope.total_price+(20*33);
                            }
                            else{
                                 data.total_amount = $scope.total_price+(35*33);
                                 $scope.total_amount = $scope.total_price+(35*33);
                            }
                        }
                        data.received =  $scope.total_amount - $scope.total_net;
                        // if()data.total_amount = $scope.total_price;
                    }
                    else{
                        if(data.package_name == 'City Tour'){
                       data.total_net =  data.adult_price; 
                        data.received =  0;
                         data.total_amount = data.adult_price;
                         $scope.total_amount = data.adult_price;
                        }
                        else{
                             if(data.total_price == '0'){
                               
                                 data.received = 0;
                                  data.total_net = 0;
                                    data.total_amount = 0;
                               
                            }
                             else{
                                $scope.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                $scope.total_amount = data.total_price;
                                data.total_amount = $scope.total_price;
                                data.received =  $scope.total_amount - $scope.total_net;
                                // data.received =  $scope.total_amount- $scope.total_net;
                                 data.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                 // data.total_amount = $scope.total_price;
                                $scope.total_amount = data.total_price;
                                 // $scope.total_net =(data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                                 
                                // $scope.total_amount = data.total_price;
                            }
                            
                             
                             
                            

                        }
                        // data.total_net = (data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                        // $scope.total_net =(data.net_price_adult*data.adult) + (data.net_price_child*data.child);
                        //data.total_amount = $scope.total_price;
                        //$scope.total_amount = data.total_price;
                    } 
                    // if(data.package_name == 'City Tour'){
                    //    data.total_net =  data.adult_price; 
                    //     data.received =  0;
                    //      data.total_amount = data.adult_price;
                    // }
                    // else{
                    //      if(data.total_price == '0'){
                           
                    //          data.received = 0;
                    //           data.total_net = 0;
                            
                           
                    //     }
                    //      else{
                    //         data.received =  $scope.total_amount- $scope.total_net;
                    //          data.total_net =  $scope.total_net;
                    //     }
                        
                    //       data.total_amount = $scope.total_amount;
                         
                        

                    // }
                    
                     $scope.selsedataformonth.push(data)
                      //data.dateCompare = 'wait';
                            if ($scope.newdate == data.ondate) { 
                                data.noti = '1';                                    
                                $scope.datanoti.push(data);
                                            
                            }
                            else{
                                data.noti = '0'; 
                            }
                        });
                $scope.databook = $scope.datatour;
                console.log($scope.databook)
                var a = $scope.dataAgentget;
                      var b = new Array();
                      var first2 = 0;
                      var count2 = 0;
                      for(var i = 0 ; i < a.length; i++)
                       {
                        count2 = 0;              
                        if(first2==0)
                            {
                              b.push(a[i]);
                              first2++;
                            }
                            for(var j = 0 ; j < b.length ; j++)
                            {                    
                              if(b[j]!=a[i])
                              {
                                count2++;
                                if(count2==b.length)
                                {
                                  b.push(a[i]);
                                }
                              }
                            }              
                      }
                      console.log(b)
                      $scope.dataAgent = b;
                     //   for (var i = 0; i < b.length; i++) {
                     //      angular.forEach($scope.databook, function(data){ 
                     //          if (data.agent_name == b[i]) 
                     //          {
                     //             $scope.dataAgent.push(data);
                     //             //console.log($scope.nametooo) 
                                 
                     //          }

                              
                     //      });
                     // }
                console.log($scope.dataAgent)
                 
                       
            });
         }
         $scope.changeagent = function(agent){
            // $('.clear').css('display','inline-block');

           $scope.agentid = agent;
            $scope.selsedataformonth = [];
            var total_tamount = 0;
            var total_tsele = 0;
            var total_tnet = 0;
            var total_treseive = 0;
            var total_tprofit = 0;

            
            angular.forEach($scope.databook, function(data){
            if(agent == data.agent_name)
            {   
                
                $scope.selsedataformonth.push(data)
                 
            }
            if ($scope.selsedataformonth.length == 0) {
                $scope.total_tamount = 0;
                $scope.total_tsele = 0;
                $scope.total_tnet = 0;
                $scope.total_treseive = 0;
                $scope.total_tprofit = 0;
                // $scope.tota_sum_transfer= 0;
                // $scope.tota_sum_tour= 0;
                                    
                    $scope.returnvalue( total_tamount,total_tsele,total_tnet,total_treseive,total_tprofit)
            }
            else{
                angular.forEach($scope.selsedataformonth, function(data){
              
                    total_tamount += parseInt(data.total_amount);
                    total_tsele += parseInt(data.adult_price);
                    total_tnet += parseInt(data.total_net);
                    total_treseive += parseInt(data.received);
                    total_tprofit += parseInt(data.received);
                   
                                    
                     $scope.returnvalue( total_tamount,total_tsele,total_tnet,total_treseive,total_tprofit)
                });
                }
            
                 
            
        });
            console.log($scope.dataselectagent)
           
            
                 
            
     
    }
    
        $scope.logout = function(){
            $cookies.remove("login");
          
            $window.location.href = '../login.php';
        }
        $scope.approve = function(item){
            $scope.dataitem = item;
            console.log($scope.dataitem)
          
           
        }
        $scope.confirmapprove = function(item){
            console.log(item)
            console.log($scope.nameconfirm)
             $http({
                method : 'POST',
                url : "../php/updateApprove.php",
                data: $.param({'id': item,'approve_by': $scope.nameconfirm}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 $window.location.reload();
                 //$('#approved').modal('hide');
                 
                 
                       
            });
          
           
        }
        // $scope.confirmapprove = function(item){
        //     console.log(item)
        //     console.log($scope.nameconfirm)
        //     //  $http({
        //     //     method : 'POST',
        //     //     url : "../php/updateApprove.php",
        //     //     data: $.param({'invoice': item,'approve_by': $scope.nameconfirm}),
        //     //     headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        //     //     }).success(function(res){
        //     //      console.log(res)
                 
                 
                       
        //     // });
          
           
        // }
        $scope.pay = function(item){
            $scope.dataitempay = item;
            console.log($scope.dataitempay)
          
           
        }
        $scope.confirmpay = function(item){
            console.log(item)
            console.log($scope.nameconfirm)
             $http({
                method : 'POST',
                url : "../php/updatePay.php",
                data: $.param({'id': item,'pay_by': $scope.nameconfirm}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 $window.location.reload();
                  //$('#payproduct').modal('hide');
                 
                 
                       
            });
          
           
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
            $("#search_input").show();
            // result = document.getElementsByClassName("search_input").show();
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
                result = document.getElementsByClassName("search_castomername");                
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
                result = document.getElementsByClassName("search_castomername");                
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
                result = document.getElementsByClassName("search_castomername");                
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
                 result = document.getElementsByClassName("search_castomername");                
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("reset_search");
                angular.element(result).css('display','inline-block');
                $scope.list = false;
                $scope.search = new Array();
                $scope.search.package_name = '';
                $scope.search.id = '';
                
                       
            }
             else if(input=='Customer name')
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
                angular.element(result).css('display','none'); 
                 result = document.getElementsByClassName("search_castomername");
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
            $("#search_input").hide();
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
        $scope.returnvalue = function (a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s) {
            $scope.total_tamount = a;
            $scope.total_tsele = b;
            $scope.total_tnet = c;
            $scope.total_treseive = d;
            $scope.total_tprofit = e;                           
            $scope.tota_sum_transfer = f;                           
            $scope.tota_sum_tour = g;
            $scope.total_tour_expenses = h;
            $scope.total_transfer_expenses = i;
            $scope.total_tour_profit = j;
            $scope.total_transfer_profit = k;
            $scope.total_omosab_amount = l;
            $scope.total_omosab_net = m;
            $scope.total_omosab_profit = n;
            $scope.total_omedhat_amount = o;
            $scope.total_omedhat_net = p;
            $scope.total_omedhat_profit = q;
            $scope.free_booking = r;
            $scope.total_free_booking = s;                          
        }
                 
    });
    app.filter('dateselect',function(){
                return function(data,input1,input2,scope){
                    //console.log(admin);
                    var result = new Array();
                    var total_sell = 0;
                    var sum = 0;
                    var sum1 = 0;
                    var total_tamount = 0;
                    var total_tsele = 0;
                    var total_tnet = 0;
                    var total_treseive = 0;
                    var total_tprofit = 0;
                    var tota_sum_transfer= 0;
                    var tota_sum_tour= 0;
                    var total_tour_expenses = 0;
                    var total_transfer_expenses = 0;
                    var total_tour_profit = 0; ;
                    var total_transfer_profit = 0;
                    var total_omosab_amount = 0;
                    var total_omosab_net = 0;
                    var total_omosab_profit = 0;
                    var total_omedhat_amount = 0;
                    var total_omedhat_net = 0;
                    var total_omedhat_profit = 0;
                    var free_booking = 0;
                    var total_free_booking = 0;                  
                    //$scope.total_sell = 0;
                    if(input2 != null)
                    {
                        //console.log("In case here 1");
                        //console.log(input1);
                        //console.log("And");
                        //console.log(input2);
                        var current;
                        var current1;
                        current = new Date(input1);
                        // console.log(current);
                        var x =current.setHours(00, 00, 00);
                        var setx = new Date(x).getTime();
                        //console.log(new Date(x).getTime());
                        current1 = new Date(input2);
                        var y =current1.setHours(24, 00, 00);
                        //console.log(y);
                        for (var i=0; i<data.length; i++){
                            if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                // console.log(data);
                                //console.log(new Date(data[i].booking_date).getTime());
                                //console.log('Round'+i);
                                // console.log(data[i].total_price);
                                // if(data[i].total_price == '0'){
                                //     console.log('aa')
                                //      total_treseive += 0;
                            
                           
                                // }
                                // else{
                                    
                                   total_treseive += parseInt(data[i].received);
                               // }
                                    total_tamount += parseInt(data[i].total_amount);
                                    // if (data[i].total_amount == undefined) {
                                    // console.log(data[i])

                                    // }
                                    total_tsele += parseInt(data[i].adult_price);
                                    total_tnet += parseInt(data[i].total_net);
                                    // total_treseive += parseInt(data[i].received);
                                    total_tprofit += parseInt(data[i].received);
                                    tota_sum_transfer += parseInt(data[i].sum_transfer);
                                    tota_sum_tour += parseInt(data[i].sum_tour);
                                    total_tour_expenses += parseInt(data[i].tour_expenses);
                                    total_transfer_expenses += parseInt(data[i].transfer_expenses);
                                    total_tour_profit += parseInt(data[i].sum_tour)-parseInt(data[i].tour_expenses);;
                                    total_transfer_profit += parseInt(data[i].sum_transfer)-parseInt(data[i].transfer_expenses);
                                    if (data[i].owner == 'mosab') {
                                        total_omosab_amount += parseInt(data[i].total_amount);
                                        total_omosab_net += parseInt(data[i].total_net);
                                        total_omosab_profit += parseInt(data[i].received);
                                        //total_omedhat_amount +=0;
                                    }
                                    else{
                                        if (data[i].total_price == 0) {
                                            free_booking ++;
                                            total_free_booking  += parseInt(data[i].transfer_price);
                                        }
                                        total_omedhat_amount += parseInt(data[i].total_amount);
                                        total_omedhat_net += parseInt(data[i].total_net);
                                        total_omedhat_profit += parseInt(data[i].received);



                                    }
                                    // if (data[i].owner == 'mosab') {
                                    //     total_omosab_amount += parseInt(data[i].sum_transfer)+parseInt(data[i].sum_tour);;
                                    //     total_omosab_net += parseInt(data[i].tour_expenses)-parseInt(data[i].transfer_expenses);
                                    //     total_omosab_profit += (parseInt(data[i].sum_tour)-parseInt(data[i].tour_expenses))+(parseInt(data[i].sum_tour)-parseInt(data[i].tour_expenses))
                                    //     //total_omedhat_amount +=0;
                                    // }
                                    // else{
                                    //     total_omedhat_amount += parseInt(data[i].sum_transfer)+parseInt(data[i].sum_tour);
                                    //     total_omedhat_net += parseInt(data[i].tour_expenses)-parseInt(data[i].transfer_expenses);
                                    //     total_omedhat_profit += (parseInt(data[i].sum_tour)-parseInt(data[i].tour_expenses))+(parseInt(data[i].sum_tour)-parseInt(data[i].tour_expenses));



                                    // }
                     scope.returnvalue( total_tamount,total_tsele,total_tnet,total_treseive,total_tprofit,tota_sum_transfer,tota_sum_tour,total_tour_expenses,total_transfer_expenses,total_tour_profit,total_transfer_profit,total_omosab_amount,total_omosab_net,total_omosab_profit,total_omedhat_amount,total_omedhat_net,total_omedhat_profit,free_booking,total_free_booking);
                                
                                result.push(data[i]);
                            }
                            else
                            {
                                //console.log('Not Bwtween');
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
                                //console.log('Date Between');
                                 total_tprofit += data[i].received;
                   
                                    
                     scope.returnvalue( total_tamount,total_tsele,total_tnet,total_treseive,total_tprofit)
                                    
                                   
                                
                                result.push(data[i]);
                    
                            }
                            else
                            {
                                    //console.log('Not Bwtween');
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
                            //console.log(i);
                            //console.log(data[i]);
                           if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                //console.log(new Date(x).getTime());
                                //console.log('Date Between');
                                
                                    //console.log(data[i].received)
                                    parseInt(total_tprofit) += parseInt(data[i].received);
                                    
                                     scope.returnvalue( total_tamount,total_tsele,total_tnet,total_treseive,total_tprofit)
                               
                                result.push(data[i]);
                            }
                            else
                            {

                                //console.log('Not Bwtween');

                            }
                        }

                        return result;
                    }
                    //return result;
                }
            })

            

    </script>
</html>