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
                                <li class="active">
                                    <a href="transfer-package.php">
                                        <i class="material-icons">directions_car</i> Transfer Packages
                                    </a>
                                </li>
                                <li >
                                    <a href="hotel.php">
                                       <i class="material-icons">location_city</i>Hotels
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-package.php">
                                       <i class="material-icons">hotel</i>Hotels package
                                    </a>
                                </li>
                                <li>
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
                                
                                <li>
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
                                <li >
                                    <a href="../report/reservation-invoice.php">
                                        <i class="material-icons">notifications_active</i> Seservation - Invoice
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
                              <!--  <li>
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
          
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="row">                            
                                <div class="" style="background: #fff; padding-left: 10px;">                                
                                    <div class="navigate" >
                                        <a href="hotels-package.php">
                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">
                                            <!-- <li><a href="package.php">Main Menu</a></li> -->
                                            <li class="active"> / New transfers package</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        label.label-tour {
    text-align: right;
    width: 170px;
    margin-right: 10px;
}
.form-group {
  margin: 0;
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
                    </style>
                     <div class="row">
                        <div class="col-md-12">
                        <!--  <div class="form-group form-inline">
                                    <div class="radio" id="radioin">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Tour" >
                                            Tour
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label style="padding: 0px 30px;">
                                            <input type="radio" name="typeRadios" ng-change="logtype(checktype)" ng-model="checktype" value="Transfer">
                                            Transfer
                                        </label>
                                    </div>
                                    </div> -->
                       <!--  <div class="form-group  " style="width: 100%;">
                                    <div class="checkbox" id="cktour" style="padding: 0 20px 0 0;display: inline-block;" id="checkforagent">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" value="checked" ng-model="checktransfer" ng-click="Accepttransfer($event,checktransfer)">Transfer
                                            </label>
                                    </div>
                                    <div class="checkbox" style="padding: 0 20px 0 0;display: inline-block;" id="checkforagent">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" value="checked" ng-model="checktour" ng-click="Accepttour($event,checktour)">Tour
                                            </label>
                                    </div>
                                   
                                       
                                    </div>  --> 
                                            
                                <form class="form-group "  >
                                    <input type="hidden" value="{{token}}" name="token"/>
                                   <!--  <input type="hidden" value="{{city}}" name="city"/> -->
                                   
                                
                                   <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Province<span> :</span></label>
                                       
                                         <select class="form-control" ng-change="changeprovince(selectprovince)" id="selectprovince" ng-model="selectprovince" data-ng-options="i as i.name for i in dataprovince" style="width: 150px;">
                                                    <option value="">None</option>
                                              </select>
                                    </div>

                                 <!--  <div class="form-group form-inline">
                                    <div class="radio" id="radioin">
                                        <label style="padding: 2px 40px;">
                                            <input type="radio" name="optionsRadios" ng-change="logIt(myValue)" ng-model="myValue" value="In" >
                                            In
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label style="padding: 2px 40px;">
                                            <input type="radio" name="optionsRadios" ng-change="logIt(myValue)" ng-model="myValue" value="Out">
                                            Out
                                        </label>
                                    </div>
                                    </div> -->
                                     <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Hotel Nane<span> :</span></label>
                                        
                                         <select class="form-control" ng-change="changehotel(selecthotel)" id="selecthotel" ng-model="selecthotel" data-ng-options="i as i.name for i in datahotel" >
                                                    <option value="">None</option>
                                              </select>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Package Name<span> :</span></label>
                                        <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Max length 200 characters" id="packagename" name="packagename" ng-model="packagename" ng-change="changepackage(packagename)" required/>
                                    </div>

                                   
                                    
                                    <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Company<span> :</span></label>
                                        
                                         <select class="form-control" ng-change="changecompany(selectcompany)" id="selectcompany" ng-model="selectcompany" data-ng-options="i as i.company_name for i in datacompany" >
                                                    <option value="">None</option>
                                              </select>
                                    </div>

                                    
                                     <div class="form-group form-inline" style="width: 100%">
                                        <!-- <div class="form-group  form-inline" > -->
                                            <label for="class" class="label-tour" >Class<span> :</span></label>

                                            <select name="class" id="class"  class="form-control col-md-8" required style=" border: 1px solid #ccc; border-radius: 5px;" ng-model="class">

                                                <option>Standard Class</option>

                                                <option>Premium Class</option>

                                                <option>First Class</option>

                                                <!--<option>Standard Class</option>-->

                                            </select>

                                        <!-- </div> -->

                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="name" class="label-tour">Room Type<span> :</span></label>
                                        <input type="text" class=" form-control" size="100" maxlength="200" placeholder = "Max length 100 characters" id="roomtype" name="roomtype" ng-model="roomtype" ng-change="changeroomtype(roomtype)" required/>
                                    </div>
                                    <div class=" form-group form-inline " >
                                                <label class="label-tour">Night:</label> 
                                            <select class="form-control" ng-change="changenumnight(hotel_night)" id="numnight" ng-model="hotel_night" data-ng-options="i  for i in numnight" style="width: 150px;">
                                                    <option value="">0</option>
                                              </select>
                                    </div>
                                     <div class="form-group form-inline">
                                        <label class="label-tour">Net Price<span> :</span></label>
                                        <input name="transfer_price" ng-model="netprice" id="transfer_price" class=" form-control" ng-change="netprices(netprice)" pattern="^[0-9]+$"  title="Please input number only." required style="width: 150px;">
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="label-tour">Sale Price<span> :</span></label>
                                        <input name="transfer_price" ng-model="saleprice" id="transfer_price" class=" form-control" ng-change="saleprices(saleprice)" pattern="^[0-9]+$"  title="Please input number only." required style="width: 150px;">
                                    </div>
                                    
                                    <!-- <div class="form-group form-inline">
                                      <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</uib-alert>
                                    </div> -->
                                    <div class=" form-group form-inline" style="width: 100%">
                                        <div class="btn-save-cancel form-inline" style="float: right;    margin-right: 9.5%;">
                                            <button type="submit" class=" btn btn-success" id="bt-view" ng-click="saveAddtransports()">Save</button>
                                                <!-- <span class="fa2 fa fa-floppy-o"></span> Save</button> -->

                                            <a href="">
                                                <button type="button" class="btn btn-default" onclick="Back()" id="bt-view">Cancel</button></a>
                                        </div>
                                    </div>
                                    
                                </form>
                                



                                



                               <!--            
                                <form class="form-group "  >


                                    <div class="form-group form-inline">
                                      <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</uib-alert>
                                    </div>
                                    <div class=" form-group form-inline" style="width: 100%">
                                        <div class="btn-save-cancel form-inline" style="float: right;    margin-right: 9.5%;">
                                            <button type="submit" class=" btn btn-info" id="bt-view" ng-click="saveAddtour()">Save</button>
                                                
                                            <a href="">
                                                <button type="button" class="btn btn-danger" onclick="Back()" id="bt-view">Cancel</button></a>
                                        </div>
                                    </div>

                                </form> -->
                                
                               
                               
                
                        
                        </div>                            
                    </div>
                </div>
            </div>
            <style>
                .checkbox-popular{
                    margin-left: 185px;
                }
                .radio-type{
                    margin-left: 175px;
                }
                #selectcompany{
    width: 741px;
}
#cktour{
    margin-left: 183px;
}
#radioin{
    margin-left: 172px;
}
                @media screen and (max-width: 767px){


                .checkbox-popular{
                     margin-left: 0;
                }
                ..radio-type{
                     margin-left: 0;
                }
                label.label-tour{
                    text-align: left;
                }
                #selectcompany{
    width: 100%;
}
#cktour{
    margin-left: 0;
}
#radioin{
    margin-left:0;
}
                }
            </style>
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
<script>
    // function checkURL (abc) {
    //   var string = abc.value;
    //     if (!~string.indexOf("www")){
    //       string = "http://" + "www." + string;
    //     }
    //     else if (~string.indexOf("www")){
    //       string = "http://" + string;
    //     }
    //     abc.value = string;
    //     return abc
    // }
    
    var app = angular.module('myApp',['ngCookies']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){
        //loadpage();
        loadpage();
         $scope.dataphonecode;
        $scope.imgcoutry = '';
        $scope.btnsave = false;
        $scope.checktour = true;
        $scope.checktransfer = false;
        $scope.gettype;
        $scope.checktype = 'Tour';
        //$scope.value= 'in';
        $scope.url = 'http://localhost/dana/';
    function loadpage(){
        $scope.numnight = [];
                    var x = 31;
            for (var i = 1; i <= x; i++) {
              $scope.numnight.push(i);
              
            }
        $scope.Countryfont = "      Please select country";
      if($cookies.get('login'))
      {
        $scope.loginstatus = false;
        $scope.token = $cookies.get('login');
        $http({
                method:'post',
                url: "../php/getUserbyid.php",
                data: $.param({id: $cookies.get('login')}),
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                    $scope.isSuperAdmin = (res[0].role == 1) ? true : false;
                    $scope.isAdmin = (res[0].role == 2)  ? true : false;
                    $scope.isUsernomal = (res[0].role == 3)  ? true : false;
                    
                    if(res[0].role==1)
                        $scope.role = 1;
                    else if(res[0].role==2)
                        $scope.role = 2;
                    else 
                        $scope.role = 3;
                  
                   
                    if(res[0].email != undefined){
                        $scope.name = (res[0].email).split('@');
                        $scope.Username = $scope.name[0];
                        //console.log($scope.Username)
                    }
                    $scope.Menu = res[1];
                    //console.log($scope.Menu)
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
            $http({
                    method: 'post',
                    url: "../php/getCompany.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    //console.log(res)
                    $scope.datacompany = res;
                    
                    
             });
                $http({
                    method: 'post',
                    url: "../php/getHotelsname.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    //console.log(res)
                    $scope.datahotel = res;
                    console.log($scope.datahotel)

                    ////console.log($scope.dataUser)
                    
                    
             });
                $http({
                    method: 'post',
                    url: "../php/getProvince.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    //console.log(res)
                    $scope.dataprovince = res;
                    ////console.log($scope.dataUser)
                    
                    
             });
             // $http({
             //        method: 'post',
             //        url: "../php/test.php",                    
             //        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
             //    }).success(function (res) {
             //        //console.log(res)
             //        //$scope.datacompany = res;
             //        ////console.log($scope.dataUser)
                    
                    
             // });  
      }
      else
      {
        $scope.loginstatus = true;
        location.href="../login.php";
      }
    }
    
     $scope.logtype=function(x){
        $scope.gettype = x;
        if (x == 'Transfer') {
             $scope.checktransfer = true;
             $scope.checktour = false;

        }
        if (x == 'Tour') {
             $scope.checktour = true;
             $scope.checktransfer = false;

        }
        $scope.flight =x;
            //console.log(x)
    }
    $scope.logIt=function(x){
        $scope.flight =x;
            //console.log(x)
    }
    $scope.changeprovince=function(x){
            $scope.province_name = x.name;
            $scope.province_id = x.id;
           console.log(x.name+ x.id);
    }
    $scope.changeroomtype=function(x){
            $scope.troomtype = x;

           
           console.log($scope.troomtype);
    }
    $scope.changenumnight=function(x){
            $scope.night = x;

           
           console.log($scope.night);
    }
    $scope.changecompany = function(x){
        $scope.companyid = x.id;
        $scope.companyname = x.company_name;

        console.log( $scope.companyname)

    }
    $scope.changehotel = function(x){
        console.log(x)
        $scope.changehotelid = x.id;
        $scope.changehotelname = x.name;

        console.log($scope.changehotelname)

    }
    $scope.Accepttransfer =function(even, state){
           
            if (state == true) {
                  $scope.checktransfer = true;
                   
                    $scope.checktour = false;
                    //console.log( $scope.checktransfer)
                    //console.log( $scope.checktour)
                   
            }
            else{
                  $scope.checktransfer = false;
                
                 
            }
                

        }
        $scope.Accepttour =function(even, state){

            if (state == true) {
              $scope.checktour = true;
             
            $scope.checktransfer = false;
             //console.log( $scope.checktour)
            //console.log( $scope.checktransfer)
                    

              
            }
            else{
              $scope.checktour = false;
            
             
            }

        }
     $scope.profile = function(){
        location.href="profile";

    }
    $scope.changepackage = function(x){
        $scope.tpackage = x;

        console.log($scope.tpackage)

    }
    
    $scope.netprices = function(x){
        $scope.tnetprice = x;

        console.log($scope.tnetprice)

    }
    $scope.saleprices = function(x){
        $scope.tsaleprice = x;

        console.log($scope.tsaleprice)

    }
    $scope.saveAddtransports =function(){
      
             console.log($scope.province_name)
            console.log($scope.changehotelname)
            console.log($scope.tpackage)
            console.log($scope.companyname)
              console.log($scope.class)
            console.log($scope.troomtype) 
            console.log($scope.night)
          console.log($scope.tsaleprice)
            console.log($scope.tnetprice)
            



             $http({
                    method : 'POST',
                    url : "../php/addHotelspackage.php",
                    data: $.param({'province': $scope.province_name
                                ,'hotelname': $scope.changehotelname
                                ,'package': $scope.tpackage
                                ,'company': $scope.companyname
                                ,'classs': $scope.class
                                ,'roomtype': $scope.troomtype
                                ,'night': $scope.night
                                ,'netprice': $scope.tnetprice
                                ,'saleprice': $scope.tsaleprice
                              
                              
                               
                                
                                }), 

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                     console.log(res)
                     
                    // $window.location.href = '../main/hotels-package.php#?data='+res;
                     
                           
               });
        
        
    
    }
    
    $scope.changetransfer = function(x){
        alert($scope.transfer)

    }
    
    $scope.logout = function(){
            $cookies.remove("login");
           
            $window.location.href = '../login.php';
    }
        
        
});
    </script>
</html>