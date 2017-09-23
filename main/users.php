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

                    <li class="active">

                        <a data-toggle="collapse" href="index.php#pagesExamples" >

                            <i class="material-icons">home</i> 

                           

                            <p>Main Menu

                                <b class="caret"></b>

                            </p>

                        </a>

                        <div class="collapse in" id="pagesExamples" aria-expanded="true">

                            <ul class="nav"> 

                                <li >

                                    <a href="tours-package.php">

                                        <i class="material-icons">local_offer</i> Tour Packages

                                    </a>

                                </li>

                                <li >

                                    <a href="transfer-package.php">

                                        <i class="material-icons">directions_car</i> Transfer Packages

                                    </a>

                                </li>

                                 <li >

                                    <a href="add-booking.php">

                                        <i class="material-icons">note_add</i>Add Bookings

                                    </a>

                                </li>

                                <li>

                                    <a href="company.php">

                                        <i class="material-icons">dns</i>Companies

                                    </a>

                                </li>

                                <li>

                                    <a href="agent.php">

                                        <i class="material-icons">recent_actors</i> Agents

                                    </a>

                                </li>

                                

                                <li  class="active">

                                    <a href="users.php">

                                        <i class="material-icons">people</i> Users

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a data-toggle="collapse" href="index.php#componentsExamples">

                            <i class="material-icons">assignment</i> 

                            <p>Report

                                <b class="caret"></b>

                            </p>

                        </a>

                        <div class="collapse" id="componentsExamples">

                            <ul class="nav">

                             <li>

                                    <a href="../report/complete-booking.php">

                                    <i class="material-icons">check_circle</i>

                                         Complete Booking

                                    </a>

                                </li>

                               <li>

                                    <a href="../report/new-booking.php">

                                        <i class="material-icons">insert_drive_file</i> New Bookings

                                    </a>

                                </li>

                               

                                <li>

                                    <a href="../report/cancel-booking.php">

                                        <i class="material-icons">cancel</i> Cancel Bookings

                                    </a>

                                </li>

                                 <li>

                                    <a href="../report/account.php">

                                    <i class="material-icons">account_balance_wallet</i>

                                         Account

                                    </a>

                                </li>
                                <li >
                                    <a href="../report/account-tour.php">
                                    <i class="material-icons">business_center</i>
                                         Account Tours
                                    </a>
                                </li>
                                <li >
                                    <a href="../report/manage-booking.php">
                                     <i class="material-icons">dvr</i>
                                         Manage Booking
                                    </a>
                                </li>
                                <li >
                                    <a href="../report/revenue-expenses.php">
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

                               <!--  <li>

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

                        <a class="navbar-brand" href=""> Main menu </a>

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

                                      <a href="users.php" >

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

                                        <a href="new-users.php">

                                            <button type="button" class="btn btn-success btn-sm" style=""><i class="fa fa-plus padding-icon" aria-hidden="true"></i> New</button></a>

                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">

                                            <!-- <li><a href="package.php">Main Menu</a></li> -->

                                            <li class="active"><span>/</span> Users</li>

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

                      </div>

                      <div class="search-box">

                          <input type="text" class="search_username form-control" ng-model="search.username" placeholder="User Name">

                          <input type="text" class="search_fname form-control" ng-model="search.firstname" placeholder="First Name">

                          <input type="text" class="search_lname form-control" ng-model="search.lastname" placeholder="Last Name">

                          <input type="text" class="search_phone form-control" ng-model="search.phone" placeholder="Phone">

                          <input type="text" class="search_email form-control" ng-model="search.email" placeholder="Email">

                         

                          <a ng-click="reset_search_click()" class="reset_search">Reset</a>

                      </div>

                  </div>

                </div>

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

                                            <th>ID</th>

                                            <th>User name</th>

                                            <th>First name</th>

                                            <th>Last name</th>

                                            <th>Phone</th>

                                            <th>Email</th>

                                            <th>User type</th>

                                            

                                            <th>Actions</th>

                                        </thead>

                                        <tbody >

                                            <tr ng-repeat="item in dataUser | filter:search:strict  ">

                                                <td><span ng-bind="item.id"></span></td>

                                                <td><span ng-bind="item.username"></span></td>

                                                <td><span ng-bind="item.firstname"></span></td>

                                                <td><span ng-bind="item.lastname"></span></td>

                                                <td><span ng-bind="'+'+item.phonecode+item.phone"></span></td>

                                                <td><span ng-bind="item.email"></span></td>

                                                

                                                <td class="">

                                              

                                                    <div ng-if="item.role == 1"><span >System Supper Admin</span></div>

                                                    <div ng-if="item.role == 2"><span >System Admin</span></div>

                                                    <div ng-if="item.role == 3"><span >System User</span></div>

                                                    <div ng-if="item.role == 4"><span >System User Lab</span></div>

                                                </td>

                                                 <td class="col-md-1" align="center"><a data-toggle="modal" data-target="#edit" ng-click="edituser(item)"><i class="material-icons"  style="color: #9E9E9E; font-size: 25px;">find_in_page</i></a><a style="cursor: pointer;"  data-original-title="Delete" ng-click="deleteuser(item)" data-toggle="modal" data-target="#remove"><i class="material-icons" style="color: #e91e1e;  font-size: 30px;">delete_forever</i></a></td>

                                                <!-- <td class="td-actions text-right">

                                                        

                                                        <button type="button" rel="tooltip" class="btn btn-success btn-round pull-left" data-original-title="Edit" >

                                                            <i class="material-icons"  title="Edit">edit</i>

                                                        </button>

                                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round pull-right" data-original-title="Delete" ng-click="deleteuser(item)" data-toggle="modal" data-target="#remove">

                                                            <i class="material-icons" title="Delete">delete</i>

                                                        </button>

                                                    </td> -->



                                            </tr>

                                            

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

                                <button type="button" class="btn btn-danger" data-dismiss="modal"  ng-show="candelete" ng-click="deleteuserbyid(userId)">Remove</button>

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

                                        <select class="form-control" id=" level1" name="datarole" ng-model="datarole">





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

        $scope.role;

         $scope.Menu = [];

        $scope.imgcoutry = '';

         $scope.Countryfont = " Please select country";

        //$scope.btnsave = true;

        $scope.selectcountryValue;

        $scope.btnsave = false;

        $scope.editID;

         $scope.userId = $cookies.get('login');

        $scope.search_box_list = 'Search By';

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







                    if (res[0].role==0)

                     {

                         menu = [

                            {

                                group : "Main Menu",

                                data:[

                                                                

                                    {

                                        "title": "Users",

                                        "symbol" : "fa fa-users fa-fw",

                                        "url": "user"

                                    },

                                    {

                                        "title": "Upload Banner",

                                        "symbol" : "aui-icon aui-iconfont-image",

                                        "url": "banner"

                                    }

                                ]

                            },

                            {

                                group : "Report",

                                data:[

                                    {

                                        "title": "Bookings",

                                        "symbol": "fa fa-calendar-check-o fa-fw",

                                        "url": "booking"

                                    },

                                    {

                                        "title": "Bookings Process",

                                        "symbol": "aui-icon aui-iconfont-teamcals",

                                        "url": "booking-process"

                                    },

                                    {

                                        "title": "Bookings Complete",

                                        "symbol": "aui-icon aui-iconfont-editor-task",

                                        "url": "booking-complete"

                                    },

                                    {

                                        "title": "Bookings Cancellation",

                                        "symbol": "aui-icon aui-iconfont-devtools-task-cancelled",

                                        "url": "booking-cancellation"

                                    }

                                ]

                            }/*,

                            {

                                group: "Notification",

                                data:[

                                    {

                                        "title": "Updates",//--

                                        "symbol": "fa fa-bell fa-fw",

                                        //"url": "/updater"

                                    }

                                ]

                            }*/

                        ];                   

                    }

                    else if (res[0].role==1)

                    {

                        menu = [

                            {

                                group : "Main Menu",

                                data:[

                                                                

                                    {

                                        "title": "Users",

                                        "symbol" : "aui-icon aui-iconfont-group",

                                        "url": "user"

                                    },

                                    {

                                        "title": "Upload Banner",

                                        "symbol" : "aui-icon aui-iconfont-image",

                                        "url": "banner"

                                    }

                                ]

                            },

                            {

                                group : "Report",

                                data:[

                                    {

                                        "title": "Bookings",

                                        "symbol": "aui-icon aui-iconfont-devtools-file-commented",

                                        "url": "booking"

                                    },

                                    {

                                        "title": "Bookings Process",

                                        "symbol": "aui-icon aui-iconfont-teamcals",

                                        "url": "booking-process"

                                    },

                                    {

                                        "title": "Bookings Complete",

                                        "symbol": "aui-icon aui-iconfont-editor-task",

                                        "url": "booking-complete"

                                    },

                                    {

                                        "title": "Bookings Cancellation",

                                        "symbol": "aui-icon aui-iconfont-devtools-task-cancelled",

                                        "url": "booking-cancellation"

                                    }

                                ]

                            }/*,

                            {

                                group: "Notification",

                                data:[

                                    {

                                        "title": "Updates",//--

                                        "symbol": "fa fa-bell fa-fw",

                                        //"url": "/notification/view.html"

                                    }

                                ]

                            }*/

                        ];    

                    }

                    else{

                        menu = [

                            {

                                group : "Main Menu",

                                data:[

                                                                

                                    {

                                        "title": "Users",

                                        "symbol" : "fa fa-users fa-fw",

                                        "url": "user"

                                    }

                                ]

                            },

                            {

                                group : "Report",

                                data:[

                                    {

                                        "title": "Bookings",

                                        "symbol": "fa fa-calendar-check-o fa-fw",

                                        "url": "booking"

                                    },

                                    {

                                        "title": "Bookings Process",

                                        "symbol": "aui-icon aui-iconfont-teamcals",

                                        "url": "booking-process"

                                    },

                                    {

                                        "title": "Bookings Complete",

                                        "symbol": "aui-icon aui-iconfont-editor-task",

                                        "url": "booking-complete"

                                    },

                                    {

                                        "title": "Bookings Cancellation",

                                        "symbol": "aui-icon aui-iconfont-devtools-task-cancelled",

                                        "url": "booking-cancellation"

                                    }

                                ]

                            }

                        ];  

                    }



                    $scope.Menu.push(menu);

                    //console.log($scope.Menu)

                    

             });

             $http({

                    method: 'post',

                    url: "../php/getUsers.php",                    

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    

                    $scope.dataUser = res;

                    //console.log($scope.dataUser)

                    

                    

             }); 

                $http({

                    method : 'POST',

                    url : "../php/getCountry.php",

                    //data: $.param({sv: $scope.dataSV}),

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                    }).success(function(res){

                        $scope.country = res;

                        //console.log(res)

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

        $scope.edituser = function(id){

            localStorage.setItem("usereditid", id);

            $window.location.href = 'edituser';

        }

        $scope.zoombook = function(id){

            localStorage.setItem("booking-view", id);

            $window.location.href = 'booking-view?bookingid='+id;

        }



        $scope.deleteuser = function(data){

    //console.log(data)

    $scope.userId = data.id;

    $scope.datauserDelete = data.username;

    $scope.editcom = 1;

                        $scope.edit_du = data;

                        //console.log($scope.edit_du);

                        //console.log($scope.edit_du.role)

                        //console.log($scope.edit_du.id)

                        



                        //console.log($scope.userId)

                        if ($scope.edit_du.role > $scope.role){

                            $scope.candelete = true;

                           // $scope.btnsave = true;

                            // localStorage.setItem("usereditid", $scope.edit_du.id);

                            //     $window.location.href = 'edituser';

                        }

                        else if ($scope.edit_du.role == $scope.role) {

                            //console.log($scope.edit_du.role+'===='+$scope.role)

                                //alert('aaaaa')



                            if ($scope.userId == $scope.edit_du.id) {

                                //alert('bbb')

                                //console.log($scope.userId +'=='+ $scope.edit_du.id)

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

    //                             //console.log(res)

    //                             $window.location.href = 'package.php';

    //                         });

                       



  }



$scope.deleteuserbyid = function(data){

        //console.log(data)

        

        

        

    

    $http({

                            method : 'POST',

                            url : "../php/removeUsers.php",

                            data: $.param({'id': data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                $window.location.reload();

                            });

                       



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

        $scope.datarole = x.role;

        $scope.username = x.username;

        $scope.selectcountryValue = '+'+x.phonecode;

        $scope.phonecodecheck = x.phonecode;

        //console.log(x.role +'>'+ $scope.role)



                        $scope.editcom = 1;

                        $scope.edit_du = x;

                        //console.log($scope.edit_du);

                        //console.log($scope.edit_du.role)

                        //console.log($scope.edit_du.id)

                        //console.log($scope.edit_du.role+'===='+$scope.role)



                        //console.log($scope.userId)

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

                                //console.log($scope.userId +'=='+ $scope.edit_du.id)

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

     

      //console.log($scope.selectcountryValue)

    }

    $scope.saveedituser = function(){

        if ($scope.dataphonecodeedit == undefined) {

            $scope.dataphonecodeedit = $scope.phonecodecheck;

        }

        //console.log($scope.firstname )

        //console.log($scope.lastname )

        //console.log($scope.phone )

        //console.log($scope.phone2 )

        //console.log($scope.email )

        //console.log($scope.password )

        //console.log($scope.password2 )

        //console.log($scope.datarole )

        //console.log($scope.username )

        //console.log($scope.dataphonecodeedit)

        //console.log($scope.editID)

        //console.log($scope.address)





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

                            ,'role': $scope.datarole

                            ,'username': $scope.username

                            ,'phonecode':$scope.dataphonecodeedit

                            ,'address': $scope.address

                            



                            

                            }), 



                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                 //console.log(res)

                 //console.log("asasasasas")

                 $window.location.reload();

                 

                       

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

                        //console.log($scope.search_box_list);

                        if(input=='User Name')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                         

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          //$scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                          

                        }

                        else if(input=='First Name')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                        

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          //$scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                          

                        }

                        else if(input=='Last Name')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                        

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          //$scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                        

                        }

                        else if(input=='Phone')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                          

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          //$scope.search.phone = '';

                          $scope.search.email = '';

                        

                        }

                        else if(input=='Email')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','inline-block');

                          

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          //$scope.search.email = '';

                        

                        }

                        else if(input=='Affiliation')

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                         

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                          //$scope.search.company_name = '';

                        }

                        else

                        {

                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','inline-block');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','inline-block');

                        

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','inline-block');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                       

                        }

                      }

                      $scope.reset_search_click = function(){

                          //$scope.search_box_list = null;

                            $scope.search_box_list = 'Search By';



                          result = document.getElementsByClassName("search_username");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_fname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_lname");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_phone");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("search_email");

                          angular.element(result).css('display','none');

                         

                          result = document.getElementsByClassName("search_list");

                          angular.element(result).css('display','none');

                          result = document.getElementsByClassName("reset_search");

                          angular.element(result).css('display','none');

                          $scope.list = false;

                          $scope.search.username = '';

                          $scope.search.firstname = '';

                          $scope.search.lastname = '';

                          $scope.search.phone = '';

                          $scope.search.email = '';

                          

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

    </script>

</html>