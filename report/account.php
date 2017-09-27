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
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../files/css-/main.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
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
            <div class="sidebar-wrapper">
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
                        <div class="collapse" id="pagesExamples" >
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
                                 <li >
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
                                
                                <li >
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
                        <div class="collapse in" id="componentsExamples" aria-expanded="true">
                            <ul class="nav">
                             <li>
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
                                <li class="active">
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
            </div>
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
                          <!--   <li>
                                <div class="dropdown show-dropdown">
                                    <a>
                                       <i class="material-icons dropdown show-dropdown" data-toggle="dropdown" aria-expanded="false"> person</i>

                                    
                                    </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="adjustments-line">
                                            <a href="javascript:void(0)" class="switch-trigger background-color">
                                                <div class="text-center">
                                                   <p>Logout</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                       
                                       
                                        
                                    </ul>
                               
                            </li> -->
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <!-- <form class="navbar-form navbar-right" role="search">
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
                        </form> -->
                    </div>
                </div>
            </nav>
          <style>
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
                    </style>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="row">                            
                                <div class="" style="background: #fff; padding-left: 10px;">                                
                                    <div class="navigate" >
                                        <!-- <a href="tours-package.php">
                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a> -->
                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">
                                            <!-- <li><a href="package.php">Main Menu</a></li> -->
                                            <li class="active"><span>/</span> Account</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                      
                       <div class="col-md-12">
                      <!--  <div class="form-group form-inline">
                         <label  class="label-tour">Month: </label>
                           <select class="form-control" id="numperson" ng-model="month" ng-change="changemonth(month.value)" data-ng-options="i as i.month for i in monthsFull" style="padding:5px;">
                                          <option value="">-None-</option>            
                            </select>
                            <label class="label-tour">/</label> 
                                            <select class="form-control" id="numperson" ng-model="years" ng-change="changeyears(years.value)" data-ng-options="i as i.value for i in FullYear" style="padding:5px;">
                                          <option value="">-None-</option>            
                            </select>
                       </div> -->
                       <!-- <div class="form-group">
                                        <div class="form-title" >
                                            <span ng-if="flagcheck == 1">date :</span>
                                            <span ng-if="flagcheck == 2">วันที่ :</span>
                                            <span ng-if="flagcheck == 3">日期 :</span>
                                        </div>
                                              <input class="form-control booking-input" type="text" value="" id="booking-date" ng-model="nowshow " style="    background: #fff;" required />
                                              <i class="fa fa-calendar" id="calen" aria-hidden="true" style="color: #9E9E9E"></i>
                                    </div> -->
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
                                    <div class="radio" id="radioall">
                                        <label style="padding: 0px 35px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="All">
                                            All
                                        </label>
                                    </div>
                                    </div>
                        <div class="row form-group form-inline">

                  <div class="booking_searchengine">
                      <!-- <p style="font-weight: 300;display: inline-block;margin-right:15px;">Search</p> -->
                      <!-- <div class="select">
                          <div class='span6'>
                              
                              <label type="text" class="form-control" placeholder="Search By"  ng-click="openlist()"  x-webkit-speech  style="width: 100%;margin: 0"><span ng-bind="search_box_list"></span><i class="fa fa-sort-desc"></i></label>
                              <ul class="search_list">
                                  <li ng-click="clicklist('User Name')">User Name</li>
                                  <li ng-click="clicklist('First Name')">First Name</li>
                                  <li ng-click="clicklist('Last Name')">Last Name</li>
                                  <li ng-click="clicklist('Phone')">Phone</li>
                                  <li ng-click="clicklist('Email')">Email</li>
                                  

                                  <li ng-click="clicklist('Advance Search')">Advance Search</li>
                              </ul>
                          </div>
                      </div> -->
                      <style>
    .booking_searchengine_one .search-box-date input {
    display: block;
}
.search-box-date .form-control {
     display: inline-block; 
}
.booking_searchengine{
    margin-top: 0;
}
</style>
                     <!--  <div class="search-box">
                          <input type="text" class="search_username form-control" ng-model="search.username" placeholder="User Name">
                          <input type="text" class="search_fname form-control" ng-model="search.firstname" placeholder="First Name">
                          <input type="text" class="search_lname form-control" ng-model="search.lastname" placeholder="Last Name">
                          <input type="text" class="search_phone form-control" ng-model="search.phone" placeholder="Phone">
                          <input type="text" class="search_email form-control" ng-model="search.email" placeholder="Email">
                         
                          <a ng-click="reset_search_click()" class="reset_search">Reset</a>
                      </div> -->
                      <p style="font-weight: 300;display: inline-block;margin-right:15px;">From</p>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_date form-control" ng-model="dateselectionfrom" placeholder="Date" />
                        </div>
                        <p style="font-weight: 300;display: inline-block;margin-right:15px;">To</p>
                        <div class="search-box-date" style="    display: inline-block;">
                            <input type="date" class="search_dateto form-control" ng-model="dateselectionto" placeholder="Date" />
                        </div>
                  </div>
                </div>
                <div class="form-group form-inline " style="width: 100%">
                                            <label for="class" class="label-tour" style="    margin-right: 4px;color: #555;">Agent<span> :</span></label>
                                             <select class="form-control" ng-change="changeagent(selectagent)" id="selectagent" ng-model="selectagent" data-ng-options="i as i.fname for i in dataAgent" id="label-addbooking" style="width: 170px;">
                                                    <option value="">- None -</option>
                                              </select>
                                    </div>
                 <!--  <div class="row form-group form-inline">
                    <div class="booking_searchengine">
                            <p style="font-weight: 300;display: inline-block;margin-right:15px;">Search</p>
                            <div class="select">
                          <div class='span6'>
                              
                              <label type="text" class="form-control" placeholder="Search By"  ng-click="openlist()"  x-webkit-speech  style="width: 100%;margin: 0"><span ng-bind="search_box_list"></span><i class="fa fa-sort-desc"></i></label>
                              <ul class="search_list">
                                  
                                        <li ng-click="clicklist('Agent Name')">Agent Name</li>
                                  

                                 
                              </ul>
                          </div>
                      </div>
                            
                            <div class="search-box">
                                <input type="text" class="search_agentname form-control" ng-model="search.agent_name" placeholder="Agent Name">
                                
                                
                               
                            </div>
                            <a ng-click="reset_search_click()" class="reset_search">Reset</a>
                        </div>
                        </div> -->
                   <!--  <div class="booking_searchengine">
                            <p style="font-weight: 300;display: inline-block;margin-right:15px;">Search</p>
                            <div class="select">
                                <div class='span6'>
                                    <i class="fa fa-sort-desc"></i>
                                    <input type="text" class="form-control" size="17" placeholder="Search By" ng-value="search_box_list" ng-click="openlist()" style="color: transparent;" x-webkit-speech />
                                    <ul class="search_list">
                                        <li ng-click="clicklist('User ID')">User ID</li>
                                        <li ng-click="clicklist('First Name')">First Name</li>
                                       <li ng-click="clicklist('Last Name')">Last Name</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="search-box">
                             
                                <input type="text" class="search_booking form-control" ng-model="searchbox.user_id" placeholder="User ID">
                                <input type="text" class="search_product form-control" ng-model="searchbox.fname" placeholder="First name">
                                <input type="text" class="search_name form-control" ng-model="searchbox.lname" placeholder="Last name">
                                
                                
                               
                            </div>
                            <a ng-click="reset_search_click()" class="reset_search">Reset</a>
                        </div> -->
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
                                            <th>Invoice</th>
                                            <th class="col-md-3">Package Name</th>     
                                            <th >Type</th>     
                                            <th >Agent</th>     
                                            <th>Company Nane</th>
                                            <th>Adult Contract Rate</th>
                                            <th>Child Contract Rate</th>
                                            <th>Adult Selling Rate</th>
                                            <th>Adult Selling Rate</th>
                                            <th>Transfer Price</th>
                                            <th>Total price</th>
                                            
                                            <th></th>
                                        </thead>
                                        <tbody >
                                        <!-- | dateselect:dateselectionfrom:dateselectionto:admin:this -->
                                            <tr ng-repeat="item in selsedataformonth | filter:search:strict | dateselect:dateselectionfrom:dateselectionto:this ">
                                                <td align="center" ng-bind="$index+1"></td>
                                                 
                                                <td  ng-bind="item.invoice"></td>

                                                <td class="col-md-2" ng-bind="item.package_name" width="200"></td>
                                                 <td  ng-bind="item.type"></td>
                                                 <td  ng-bind="item.agent_name"></td>
                                                <td ng-bind="item.company_name"></td>
                                                <td ng-bind="item.net_price_adult | currency:'':0" align="right"></td>
                                                <td ng-bind="item.net_price_child | currency:'':0" align="right"></td>
                                                <td ng-bind="item.adult_price | currency:'':0" align="right"></td>
                                                <td ng-bind="item.child_price | currency:'':0" align="right"></td>
                                                <td ng-bind="item.transfer_price | currency:'':0" align="right"></td>
                                                <td ng-bind="item.total_price | currency:'':0" align="right"></td>
                                                
                                                
                                              
                                                 
                                            </tr>
                                            <td class="field" ></td>
                                              <td class="field" ></td>
                                              <td class="field" ></td>
                                              <td class="field" ></td>
                                              <td class="field" ></td>
                                              <td class="field" style="font-weight: bold;" align="center">Grand Total</td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_net_adult | currency:'':0"></td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_net_child | currency:'':0"></td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_sele_adult | currency:'':0"></td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_sele_child | currency:'':0"></td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_transfer_price | currency:'':0"></td>
                                              <td class="field" style="font-weight: bold;" align="right" ng-bind="total_price | currency:'':0"></td>
                                             
                                              
                                           
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
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
    <div class="modal fade" id="remove">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Users</h4>
                            </div>
                            <div class="modal-body" ng-show="candelete">
                                <div>Are you sure to delete user {{datauserDelete}}</div>
                            </div>
                            <div ng-show="!candelete" class="modal-body">
                                Permission Deniend!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"  ng-show="candelete" ng-click="deletePackage(userId)">Remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
    <div class="modal fade" id="edit">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 ng-show="canEdit" class="modal-title">Edit User</h4>
                                <h4 ng-show="!canEdit" class="modal-title">Caution</h4>
                            </div>
                            
                            <form class="form-inline" ng-show="canEdit"  >
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="label-editUser">First Name<span> :</span></label>
                                        <input type="text"  class="form-control" name="firstname" ng-model="firstname" value="{{firstname}}" pattern="^[a-z A-Z ก-๙]+$" title="Please input character only." required size="53">
                                        <!-- <label class="typeUser" >{{edit_du.firstname}}</label> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="label-editUser">Last Name<span> :</span></label>
                                        <input type="text"  class="form-control" name="lastname"  ng-model="lastname" value="{{lastname}}" pattern="^[a-z A-Z ก-๙]+$" title="Please input character only." required size="53">
                                        <!-- <label class="typeUser" >{{edit_du.lastname}}</label> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="label-editUser">Phone<span> :</span></label>
                                        <div id="select-country" class="form-control " ng-click="Country()" size="100" >
                                                <span><img ng-if="imgcoutry != ''" src="../files/img/flag/icon/{{imgcoutry}}.png" width="22" style="margin-right: 5px"></span>
                                                <span ng-bind="Countryfont"></span>
                                           </div>
                                              <ul class="cu-name" ng-style="countrybox">
                                                  <li ng-repeat="i in country" ng-click="numCountryselect(i,$event)">
                                                  <span><img src="../files/img/flag/icon/{{i.country_code}}.png" width="25"></span>
                                                    <!-- <span id="flagstrap-icon" class="flagstrap-icon-{{i.iso}}"></span> -->
                                                    <span>(+{{i.phonecode}})<span id="name-cu">{{i.name_en}}</span></span>
                                                  </li>
                                              </ul>
                  
                
                                               
                                                        <input type="text" class="form-control " name="selectcountryValue" id="labelcun" name="phonecode" ng-value="selectcountryValue"  disabled  size="15" placeholder="Code country" ng-model="selectcountryValue">
                                                           
                                                 
                                                        <input type="text" class="form-control" ng-model="phone" name="phone" id="InputPassPhone" placeholder="Phone" size="53" ng-value="phone">
                                        <!-- <label class="typeUser" >{{edit_du.phone}}</label> -->
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="label-editUser">Phone2<span> :</span></label>
                                        <input type="phone2"  class="form-control" name="phone2" ng-model="phone2" id="phone4" value="{{phone2}}" pattern="^[0-9]{9,10}$" title="Please input Phone No. 9 or 10 digits." size="53">
                                        <!-- <label class="typeUser" >{{edit_du.phone2}}</label> 
                                    </div> -->
                                    <div class="form-group">
                                        <label class="label-editUser">Email<span> :</span></label>
                                        <input type="email"  class="form-control" name="email" ng-model="email" id="email" value="{{email}}" required size="53">
                                        <!-- <label class="typeUser" >{{edit_du.email}}</label> -->
                                    </div>
                                      <div class="form-group">
                                        <label class="label-editUser">Address<span> :</span></label>
                                        <textarea type="text" class="form-control"  rows="4" cols="53" name="address" ng-model="address" placeholder="Address" required size="100"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="label-editUser">Username<span> :</span></label>
                                        <input type="text"  class="form-control" name="username" ng-model="username" value="{{username}}" size="53">
                                        <!-- <label class="typeUser" >{{edit_du.username}}</label> -->
                                    </div>

                                    <div class="form-group">
                                        <label class="label-editUser">New Password<span> :</span></label>
                                        <input type="password" class="form-control" name="password" ng-model="password" id="pass1" size="53" disabled>
                                         
                                    </div>

                                    <div class="form-group">
                                        <label class="label-editUser">Confirm New Password<span> :</span></label>
                                        <input type="password" class="form-control" name="password2" ng-model="password2" id="pass2" ng-change="confirmpassword(password2)" size="53" >
                                    </div>

                                   

                                    <div class="form-group">
                                        <label class="label-editUser">User Type<span> :</span></label>
                                        <select class="form-control" id=" level1" name="role" ng-model="role">


                                             <option  value="">None</option>

                                            <option value="1" ng-if="isSuperAdmin">System Supper Admin</option>
                                            <option value="2" ng-if="isSuperAdmin || isAdmin">System Admin</option>
                                            <option value="3">System User</option>
                                            <option value="4">System User Lab</option>

                                        </select>
                                        
                                    </div>

                                    

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" ng-click="saveedituser()" ng-show="btnsave">
                                        <span class="fa2 fa fa-floppy-o" aria-hidden="true" ></span> Save</button>
                                    <button type="reset" class="btn btn-default" data-dismiss="modal" onclick="reset()" id="bt-view">Cancel</button>
                                </div>
                            </form>
                            
                            <div ng-show="!canEdit" class="modal-body">
                                Permission Deniend!
                            </div>
                            <div ng-show="!canEdit" class="modal-footer">
                                <button type="reset" class="btn btn-default" data-dismiss="modal" onclick="reset()">Cancel</button>
                            </div>


                        </div>
                    </div>
                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
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
#calen {
    position: absolute;
    font-size: 20px;
    top: 8px;
    float: right;
    right: 0;
    margin-right: 10px;
    pointer-events: none;
    color: rgba(29, 177, 159, 0.86);
}
#radioin{
    margin-left: 45px;
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
<script >
    $(document).ready(function(){
        var datecheck = new Date();
  var text1 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 00:00:00";
  // var text2 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 23:59:59";
  // var text3 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 20:30:00";
  // var text4 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 23:59:59";
  //------test time ----------
  //var text5 = "2016-3-30 20:30:01";
  //--------------------------
  var datenow = new Date();
  // console.log(datenow)
  // console.log(text1)
  // console.log(text2)
  // console.log(text3)
  // console.log(text4)
  // if(datenow >= new Date(text1) && datenow <= new Date(text2))
  // {
  //   var to = new Date();
  //   to.setDate(to.getDate());
  // }
  // else if(datenow > new Date(text3) && datenow <= new Date(text4))
  // {
  //   var to = new Date();
  //   to.setDate(to.getDate());
  // }


  var from = [1916,0,1]; 
  var too = new Date();
  $('.booking-input').pickadate({
    //var datesToDisable = [ 1, 4, 7, [2015,3,8], [2015,3,19], new Date(2015,3,26) ]
    // format: 'dd/mm/yyyy',
    // formatSubmit: 'dd/mm/yyyy',
    // editable: false,
    // min: new Date(),
    // firstDay: 0
    monthSelector: true,
    yearSelector: true,
    yearSelector: 100

    //disable: [ { from: from, to: new Date(text1) } ]
  });
});
    </script>
<script>
    var app = angular.module('myApp',['ngCookies']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){
        loadpage();
        $scope.role;
         $scope.Menu = [];
        $scope.imgcoutry = '';
         $scope.Countryfont = " Please select country";
        //$scope.btnsave = true;
        $scope.selectcountryValue;
        $scope.btnsave = false;
        $scope.editID;
        $scope.selsedataformonth = [];
         $scope.userId = $cookies.get('login');
        $scope.search_box_list = 'Search By';
        function loadpage(){
            $scope.monthsFull = [ {value:01,month:'January'},{value:02,month:'February'},{value:03,month:'March'},{value:04,month:'April'},{value:05,month:'May'},{value:06,month:'June'},{value:07,month:'July'},{value:08,month:'August'},{value:09,month:'September'},{value:10,month:'October'},{value:11,month:'November'},{value:12,month:'December'} ];
            $scope.FullYear = [ {value:2017},{value:2018},{value:2019},{value:2020},{value:2021},{value:2022},{value:2023},{value:2024},{value:2025},{value:2026},{value:2027},{value:2028},{value:2029},{value:2030} ];  
            $scope.total_sele_adult = 0;
            $scope.total_sele_child = 0;
            $scope.total_net_adult = 0;
            $scope.total_net_child = 0;
            $scope.total_price = 0;
            $scope.total_transfer_price = 0;
            $scope.checktype = 'All';
            var today = new Date();
                var date = new Date(today.getFullYear()+'-'+(today.getMonth()+1)+'-1');
                console.log(today);
                console.log(date);
                $scope.dateselectionfrom = date;
                $scope.dateselectionto = today;
            if($cookies.get('login'))
            {
                console.log("in case login")
                
       
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
                    console.log(res)

                    console.log(res[0].role)
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
                        console.log($scope.Username)
                    }



                    
                    //console.log($scope.Menu)
                    
             });
             $http({
                    method: 'post',
                    url: "../php/getaccount.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    $scope.databook = res;
                    angular.forEach(res, function (data) {
                         $scope.selsedataformonth.push(data)
                            
                        });
                    console.log($scope.selsedataformonth)
                    
                    
             });
             $http({
                    method: 'post',
                    url: "../php/getAgent.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    
                    $scope.dataAgent = res;
                    console.log($scope.dataAgent)
                    
                    
             }); 
            //     $http({
            //         method : 'POST',
            //         url : "../php/getCountry.php",
            //         //data: $.param({sv: $scope.dataSV}),
            //         headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            //         }).success(function(res){
            //             $scope.country = res;
            //             console.log(res)
            // });


            }
            else
            {
                $window.location.href = 'login.php';
            }
        }
        $scope.logtype=function(x){

            $scope.selsedataformonth = [];
            $scope.checktype = x;
            console.log($scope.checktype)
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
        //     angular.forEach($scope.databook, function (data) {

        //     if (x == data.type) {
        //          alert(x)
        //         $scope.selsedataformonth.push(data)
        //     }
        //     if{
        //          alert(x)
        //         $scope.selsedataformonth.push(data)
        //     }
                         
                            
        // });
        //             console.log($scope.selsedataformonth)
        // if ($scope.checktype == 'Tour') {
        //     $scope.checktour = true;             
        //     $scope.checktransfer = false;
        // }
        //  if ($scope.checktype == 'Transfer') {
        //     $scope.checktour = false;             
        //     $scope.checktransfer = true;
        //  }
        
       
       
    }
        $scope.changeagent = function(agent){
            $scope.agentid = agent.id;
            $scope.selsedataformonth = [];
            var total_sele_adult = 0;
            var total_sele_child = 0;
            var total_net_adult = 0;
            var total_net_child = 0;
            var total_price = 0;
            var total_transfer_price = 0;
            angular.forEach($scope.databook, function(data){
            if(agent.id == data.agent_id)
            {   
                
                $scope.selsedataformonth.push(data)
                 
            }
            if ($scope.selsedataformonth.length == 0) {
                    total_net_adult = 0;
                    total_net_child = 0;                                    
                    total_sele_adult = 0;
                    total_sele_child = 0;
                    total_price = 0;
                    total_transfer_price = 0;
                                    
                    $scope.returnvalue( total_sele_adult,total_sele_child,total_net_adult,total_net_child,total_price,total_transfer_price)
            }
            else{
                angular.forEach($scope.selsedataformonth, function(data){
              
                    total_net_adult += parseInt(data.net_price_adult);
                    total_net_child += parseInt(data.net_price_child);
                    total_sele_adult += parseInt(data.adult_price);
                    total_sele_child += parseInt(data.child_price);
                    total_price += parseInt(data.total_price);
                    total_transfer_price += parseInt(data.transfer_price);
                                    
                    $scope.returnvalue( total_sele_adult,total_sele_child,total_net_adult,total_net_child,total_price,total_transfer_price)
                });
                }
            
                 
            
        });
            console.log($scope.dataselectagent)
    }
        $scope.logout = function(){
            $cookies.remove("login");
          
            $window.location.href = '../login.php';
        }
        $scope.edituser = function(id){
            localStorage.setItem("usereditid", id);
            $window.location.href = 'edituser';
        }
        $scope.zoombook = function(id){
            localStorage.setItem("booking-view", id);
            $window.location.href = 'booking-view?bookingid='+id;
        }

        $scope.deleteuser = function(data){
    console.log(data)
    $scope.userId = data.id;
    $scope.datauserDelete = data.username;
    $scope.editcom = 1;
                        $scope.edit_du = data;
                        console.log($scope.edit_du);
                        console.log($scope.edit_du.role)
                        console.log($scope.edit_du.id)
                        console.log($scope.edit_du.role+'===='+$scope.role)

                        console.log($scope.userId)
                        if ($scope.edit_du.role > $scope.role){
                            $scope.candelete = true;
                           // $scope.btnsave = true;
                            // localStorage.setItem("usereditid", $scope.edit_du.id);
                            //     $window.location.href = 'edituser';
                        }
                        else if ($scope.edit_du.role == $scope.role) {
                            
                                //alert('aaaaa')

                            if ($scope.userId == $scope.edit_du.id) {
                                //alert('bbb')
                                console.log($scope.userId +'=='+ $scope.edit_du.id)
                                $scope.candelete = true;
                                // localStorage.setItem("usereditid", $scope.edit_du.id);
                                // $window.location.href = '../edit-user.php';
                            }
                            else
                                $scope.candelete = false;
                        }
                        else
                            $scope.candelete = false;
                         //$scope.btnsave = false;
        
    
    // $http({
    //                         method : 'POST',
    //                         url : "php/removePackage.php",
    //                         data: $.param({'id': $scope.userId}),
    //                         headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    //                         }).success(function(res){
    //                             console.log(res)
    //                             $window.location.href = 'package.php';
    //                         });
                       

  }

  $scope.edituser = function(x){
        $scope.editID = x.id;
        $scope.firstname = x.firstname;
        $scope.lastname = x.lastname
        $scope.phone = x.phone;
        $scope.phone2 = x.phone2;
        $scope.email = x.email;
        $scope.password = x.password;
        $scope.address = x.address;
        //$scope.role = x.role;
        $scope.username = x.username;
        console.log(x.role +'>'+ $scope.role)

                        $scope.editcom = 1;
                        $scope.edit_du = x;
                        console.log($scope.edit_du);
                        console.log($scope.edit_du.role)
                        console.log($scope.edit_du.id)
                        console.log($scope.edit_du.role+'===='+$scope.role)

                        console.log($scope.userId)
                        if ($scope.edit_du.role > $scope.role){
                            $scope.canEdit = true;
                            $scope.btnsave = true;
                            // localStorage.setItem("usereditid", $scope.edit_du.id);
                            //     $window.location.href = 'edituser';
                        }
                        else if ($scope.edit_du.role == $scope.role) {
                             $scope.btnsave = false;
                                //alert('aaaaa')

                            if ($scope.userId == $scope.edit_du.id) {
                                //alert('bbb')
                                console.log($scope.userId +'=='+ $scope.edit_du.id)
                                $scope.canEdit = true;
                                // localStorage.setItem("usereditid", $scope.edit_du.id);
                                // $window.location.href = '../edit-user.php';
                            }
                            else
                                $scope.canEdit = false;
                        }
                        else
                            $scope.canEdit = false;
                         //$scope.btnsave = false;
            
        }
           $scope.Country = function(){      
      $scope.countrybox = { 'display':'block'};
      
    }
    $scope.numCountryselect = function(i ,$event){
      $scope.countrybox = { 'display':'none'};
      //$scope.imgcoutry = i.
      //if ($scope.flagcheck ==1) {
         $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_en;
      //}
      // if ($scope.flagcheck ==2) {
      //    $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_th;
      // }
      // if ($scope.flagcheck ==3) {
      //    $scope.Countryfont = ' ' + '(' + '+' + i.phonecode + ')' + i.name_cn;
      // }
      $scope.selectcountryValue = '+'+i.phonecode;
      $scope.tcountryValue = '+'+i.phonecode;
      $scope.imgcoutry = i.country_code;
     
      $scope.phonesend = $scope.selectcountryValue;
      $scope.dataphonecodeedit = i.phonecode;
     
      console.log($scope.selectcountryValue)
    }
    $scope.saveedituser = function(){
        console.log($scope.firstname )
        console.log($scope.lastname )
        console.log($scope.phone )
        console.log($scope.phone2 )
        console.log($scope.email )
        console.log($scope.password )
        console.log($scope.password2 )
        console.log($scope.role )
        console.log($scope.username )
        console.log($scope.dataphonecodeedit)
        console.log($scope.editID)
        console.log($scope.address)


        $http({
                method : 'POST',
                url : "../php/editUsers.php",
                data: $.param({'id': $scope.editID
                            ,'firstname': $scope.firstname
                            ,'lastname': $scope.lastname
                            ,'phone': $scope.phone
                            ,'phone2': $scope.phone2 
                            ,'email': $scope.email
                            ,'password': $scope.password
                            ,'role': $scope.role
                            ,'username': $scope.username
                            ,'phonecode':$scope.dataphonecodeedit
                            ,'address': $scope.address
                            

                            
                            }), 

                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log("asasasasas")
                 $window.location.reload();
                 
                       
            });
   
  
  
                       

  }
        $scope.changemonth = function(month){            
           
           
           
           if (month <10) {
            $scope.month = '0'+month;
           }
           else{
                $scope.month = month;
           }
           console.log($scope.month)
        }
         $scope.changeyears = function(year){            
           $scope.year = year;
           console.log($scope.year)
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
            //console.log($scope.search_box_list);
            
            if(input=='Agent Name')
            {
                //alert('aaa')
                
                result = document.getElementsByClassName("search_list");
                angular.element(result).css('display','none');
                result = document.getElementsByClassName("search_agentname");               
                angular.element(result).css('display','inline-block'); 
                result = document.getElementsByClassName("reset_search");
                angular.element(result).css('display','inline-block');
                $scope.list = false;
                $scope.search = new Array();
                
               
                
                       
            }
            
                    
        }
        $scope.reset_search_click = function(){
            $scope.search_box_list = null;
            
            result = document.getElementsByClassName("search_agentname");
                angular.element(result).css('display','none'); 
            result = document.getElementsByClassName("search_list");
            angular.element(result).css('display','none');
            result = document.getElementsByClassName("reset_search");
            angular.element(result).css('display','none');
            
            $scope.list = false;
            $scope.search = new Array();
            $scope.search.package_name = '';
                    
        }
                      $scope.confirmpassword = function(req){
                        if ($scope.password != $scope.password2) {
                            //alert("Passwords Do not match");
                            document.getElementById("pass1").style.borderColor = "#E34234";
                            document.getElementById("pass2").style.borderColor = "#E34234";
                            ok = false;
                        }
                        if ($scope.password == $scope.password2) {
                            document.getElementById("pass1").style.borderColor = "#4caf50";
                            document.getElementById("pass2").style.borderColor = "#4caf50";
                            $scope.btnsave = true;
                        }    
                      }
                      $scope.returnvalue = function (a,b,c,d,e,f) {
                            $scope.total_sele_adult = a;
                            $scope.total_sele_child = b;
                            $scope.total_net_adult = c;
                            $scope.total_net_child = d;
                            $scope.total_price = e;
                            $scope.total_transfer_price = f;
                    }
                      function validate() {
                        var pass1 = document.getElementById("pass1").value;
                        var pass2 = document.getElementById("pass2").value;
                        var phone = document.getElementById("phone").value;
                        var phone2 = document.getElementById("phone2").value;
                        var level = document.getElementById("level").value;
                        var checkAff = document.getElementById("checkAff").value;
                        var checkAff2 = document.getElementById("checkAff2").value;
                        var ok = true;
                        if (phone == phone2){
                            alert("Phone2 is same phone")
                            document.getElementById("phone").style.borderColor = "#E34234";
                            document.getElementById("phone2").style.borderColor = "#E34234";
                            ok = false;
                        }
                        if (phone != phone2){
                            document.getElementById("phone").style.borderColor = "#CCC";
                            document.getElementById("phone2").style.borderColor = "#CCC";
                        }
                        if (pass1 != pass2) {
                            alert("Passwords Do not match");
                            document.getElementById("pass1").style.borderColor = "#E34234";
                            document.getElementById("pass2").style.borderColor = "#E34234";
                            ok = false;
                        }
                        if (pass1 == pass2) {
                            document.getElementById("pass1").style.borderColor = "#CCC";
                            document.getElementById("pass2").style.borderColor = "#CCC";
                        }
                        if(level < role){
                            ok = false;
                            document.getElementById("level").style.borderColor = "#E34234";
                            alert("Can not change type user upper your type.");
                        }
                        if(level == 20 || level == 21){
                            if(checkAff == -1){
                                ok = false;
                                document.getElementById("checkAff").style.borderColor = "#E34234";
                                alert("Affiliation information is required.")
                            }
                            else{
                                document.getElementById("checkAff").style.borderColor = "#CCC";
                            }
                        }
                        if(level == 13 || level == 30){
                            if(checkAff2 == -1){
                                ok = false;
                                document.getElementById("checkAff2").style.borderColor = "#E34234";
                                alert("Affiliation information is required.")
                            }
                            else{
                                document.getElementById("checkAff2").style.borderColor = "#CCC";
                            }
                        }
                        return ok;
                    }
                 
    });
app.filter('dateselect',function(){
                return function(data,input1,input2,scope){
                    //console.log(admin);
                    var result = new Array();
                    var total_sell = 0;
                    var sum = 0;
                    var sum1 = 0;
                     var total_sele_adult = 0;
                    var total_sele_child = 0;
                    var total_net_adult = 0;
                    var total_net_child = 0;
                    var total_price = 0;
                    var total_transfer_price = 0;

                    
                    //$scope.total_sell = 0;
                    if(input2 != null)
                    {
                        console.log("In case here 1");
                        console.log(input1);
                        //console.log("And");
                        //console.log(input2);
                        var current;
                        var current1;
                        current = new Date(input1);
                        //console.log(current);
                        var x =current.setHours(00, 00, 00);
                        var setx = new Date(x).getTime();
                        //console.log(new Date(x).getTime());
                        current1 = new Date(input2);
                        var y =current1.setHours(24, 00, 00);
                        //console.log(y);
                        for (var i=0; i<data.length; i++){
                            if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                //console.log(data[i]);
                                //console.log(new Date(data[i].booking_date).getTime());
                                //console.log('Round'+i);
                                //console.log(new Date(x).getTime());
                                    total_net_adult += parseInt(data[i].net_price_adult);
                                    total_net_child += parseInt(data[i].net_price_child);
                                    
                                    total_sele_adult += parseInt(data[i].adult_price);
                                    total_sele_child += parseInt(data[i].child_price);
                                    total_price += parseInt(data[i].total_price);
                                    total_transfer_price += parseInt(data[i].transfer_price);
                                    
                                    scope.returnvalue( total_sele_adult,total_sele_child,total_net_adult,total_net_child,total_price,total_transfer_price)
                                
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
                        console.log("In case here 2");
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
                                
                                
                                    total_price += data[i].total_price;
                                    
                                    scope.returnvalue( total_sele_adult,total_sele_child,total_net_child,total_net_child,total_price)
                                
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
                        console.log("In case here 3");
                        var current = new Date(input1);
                        var x =current.setHours(00, 00, 00);
                        var y =current.setHours(24, 00, 00);
                        for (var i=0; i<data.length; i++){
                            //console.log(i);
                            //console.log(data[i]);
                           if(data[i].post_date *1000 > setx && data[i].post_date*1000 < new Date(y).getTime())
                            {
                                console.log(new Date(x).getTime());
                                //console.log('Date Between');
                                
                                    console.log(data[i].total_price)
                                    parseInt(total_price) += parseInt(data[i].total_price);
                                    
                                    scope.returnvalue( total_sele_adult,total_sele_child,total_net_child,total_net_child,total_price)
                               
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
                       
    //  nameSpace.filter("myfilter", function() {
    //             return function(items, from, to) {

    //             //console.log(items);
    //             //console.log(from);
    //             //console.log(to);
    //             var stDate = "";
    //             var edDate = "";
    //             if(from == null){
    //                 console.log("invalid from");
    //             }else if(to == null){
    //                 console.log("invalid to");
    //             }
    //             else{
    //                 // console.log("hello");
    //                 var d = new Date(from);
    //                 var mm = ((d.getMonth()+1)>=10) ? (d.getMonth()+1) : ('0'+(d.getMonth()+1));
    //                 var dd = ((d.getDate()+1)>=10) ? (d.getDate()-1 ): ('0'+d.getDate()+1);
    //                 stDate = d.getFullYear()+'-'+ mm +'-'+ dd;

    //                 d = new Date(to);
    //                 mm = ((d.getMonth()+1)>=10) ? (d.getMonth()+1) : ('0'+(d.getMonth()+1));
    //                 dd = ((d.getDate()+1)>=10) ? (d.getDate()) : ('0'+(d.getDate()+1));
    //                 edDate = d.getFullYear()+'-'+ mm +'-'+ dd;
    //                 // console.log(stDate);
    //                 // console.log(edDate);
    //                 //console.log(items);
    //             }
    //             var arrayToReturn = [];
    //             //console.log("Item : "+items.length);
    //             for (var i=0; i<items.length; i++){
    //                 var dateTm = items[i].tour_date;
    //                 //console.log(items[i].payment_date);
    //                 /* console.log("Now : "+dateTm);
    //                 console.log("Start : "+stDate);
    //                 console.log("End : "+edDate); */
    //                 if (dateTm >= stDate && dateTm <= edDate)  {
    //                     //console.log("Cover!!!");
    //                     arrayToReturn.push(items[i]);
    //                 }
    //                 else
    //                 {
    //                     //console.log("Not Cover!!!");
    //                 }
    //             }

    //             return arrayToReturn;
    //         };
    // });
    </script>
</html>