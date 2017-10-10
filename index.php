<!DOCTYPE html>
<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->
<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dana tours asia</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Canonical SEO -->
   
    <!-- Bootstrap core CSS     -->
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="files/css-/material-dashboard.css?v=<?=time()?>" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="css/main2.css?v=<?=time()?>" rel="stylesheet"> -->
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
                    <img width="50" src="files/img/logo.png">
                    
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
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a data-toggle="collapse" href="index.php#pagesExamples">
                            <i class="material-icons">home</i> 
                           
                            <p>Main Menu
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav" ng-if="role != 4">
                                
                                
                                <li>
                                    <a href="main/tours-package.php">
                                        <i class="material-icons">local_offer</i> Tour Packages
                                    </a>
                                </li>
                                <li >
                                    <a href="main/transfer-package.php">
                                        <i class="material-icons">directions_car</i> Transfer Packages
                                    </a>
                                </li>
                                <li >
                                    <a href="main/hotel.php">
                                       <i class="material-icons">location_city</i>Hotels
                                    </a>
                                </li>
                                <li>
                                    <a href="main/hotels-package.php">
                                       <i class="material-icons">hotel</i>Hotels package
                                    </a>
                                </li>
                                <li>
                                    <a href="main/add-booking.php">
                                        <i class="material-icons">note_add</i>Add Bookings
                                    </a>
                                </li>
                                <li>
                                    <a href="main/company.php">
                                        <i class="material-icons">dns</i>Companies
                                    </a>
                                </li>
                                <li>
                                    <a href="main/agent.php">
                                        <i class="material-icons">recent_actors</i> Agents
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="main/users.php">
                                        <i class="material-icons">people</i> Users
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav" ng-if="role == 4">
                                
                                
                                <li>
                                    <a href="main/lab.php">
                                        <i class="material-icons">local_offer</i> Lab
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li ng-if="role != 4">
                        <a data-toggle="collapse"  href="index.php#componentsExamples">
                            <i class="material-icons">assignment</i> 
                            <p>Report
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="report/complete-booking.php">
                                    <i class="material-icons">check_circle</i>
                                         Complete Booking
                                    </a>
                                </li>
                               <li>
                                    <a href="report/new-booking.php">
                                        <i class="material-icons">insert_drive_file</i> New Bookings
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="report/cancel-booking.php">
                                        <i class="material-icons">cancel</i> Cancel Bookings
                                    </a>
                                </li>
                                <li >
                                    <a href="report/reservation-invoice.php">
                                        <i class="material-icons">notifications_active</i> Reservation - Invoice
                                    </a>
                                </li>
                                <li  >
                                    <a href="report/tours-invoice.php">
                                        <i class="material-icons">notifications_active</i> Tours - Invoice
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="report/account.php">
                                    <i class="material-icons">account_balance_wallet</i>
                                         Account
                                    </a>
                                </li> -->
                                  <li >
                                    <a href="report/account-tour.php">
                                   <i class="material-icons">business_center</i>
                                         Account Tours
                                    </a>
                                </li>
                                <li >
                                    <a href="report/manage-booking.php">
                                     <i class="material-icons">dvr</i>
                                         Manage Booking
                                    </a>
                                </li>
                                <li >
                                    <a href="report/revenue-expenses.php">
                                   <i class="material-icons">monetization_on</i>
                                         Revenue - Expenses
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li ng-if="role != 4">
                        <a data-toggle="collapse" href="index.php#formsExamples">
                            <i class="material-icons">folder_special</i> 
                            <p>Logs
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                               <!-- <li>
                                    <a href="logs/add-booking.php">
                                        <i class="material-icons">note_add</i> Add Bookings
                                    </a>
                                </li> -->
                                <li>
                                    <a href="logs/cancel-booking.php">
                                        <i class="material-icons">cancel</i>  Cancel Bookings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   
                </ul>
       </div>
        <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)"></div></div>
        <div class="main-panel">
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
                        <a class="navbar-brand" href=""> Dashboard </a>
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
                                      <a href="main/users.php" >
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
           <style>
               .breadcrumb a {
    color: #000000;
    padding: 0.5rem;
    -webkit-transition: all 1s;
    border-radius: 0.5rem;
    text-decoration: none;
}
.sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
    
       padding: 8px;
    margin: 0 15px;
}
.breadcrumb {
  
    margin-bottom: 0;
}
/*.dropdown-menu:after, .dropdown-menu-container:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid rgba(0,0,0,0);
    border-right: 11px solid rgba(0,0,0,0);
    content: "";
    display: inline-block;
    position: absolute;
    right: 30px;
    top: -10px;
}*/
#login-down  i{
        color: #999;
    margin-right: 10px;
}
.welcome h1 {
    /* padding-left: 100px; */
    /* margin-top: 75px !important; */
    font-size: 35px;
    /* line-height: 250px; */
    /*font-family: " cursive ", Times, serif;*/
    /*color: #00bcd4;*/
    color: #4caf50;
}
.welcome h4 {
    margin-top: 60px;
    /*font-family: Georgia, serif;*/
}
#text-p {
    line-height: 60px;
}
.tagbb {
    color: #d3467c;
}
.welcome{
    text-align: center;
    
}
.img-wellcome {
    text-align: center;
    margin-bottom: 40px;
}
           </style>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-md-12">
                             <div class="row">
                <div class="" style="background: #fff; padding-left: 10px;">
                    
                    <div class="navigate" >
                        <a href="package.php">
                            <button type="button" class="btn btn-success btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                        <ol class="breadcrumb" style="padding: 11px;padding-bottom: 0;background: #fff;
    display: inline-block; ">
                            <li><a href="package.php">Packages</a></li>
                            <li class="active">New Package</li>
                        </ol>
                    </div>
                </div>
                </div>
                        </div> -->
                        <div class="col-md-12 ">
                <div class="img-wellcome" style="">
                        <img src="https://d301sr5gafysq2.cloudfront.net/fe0e8ddd1f8c/img/blank-state/everything-is-awesome.svg" style="height:140px;">
                    </div>
                    <div class="welcome">
                        <h1>Welcome to Dana Tours Asia Backend System.</h1>

                        <h3 >Select a Menu on the left-hand side to go to the section you want.</h3>
                        <p id="text-p"> For any inquiry, please do not hesitate to send an email to <b class="tagbb">info@danatoursasia.com</b></p>
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
<script src="js/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/jquery/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="js/moment.min.js"></script>
<!--  Charts Plugin -->
<!-- <script src="js/chartist.min.js"></script> -->
<!--  Plugin for the Wizard -->
<script src="files/js-/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<!-- <script src="files/js-/bootstrap-notify.js"></script> -->
<!--   Sharrre Library    -->
<script src="js/jquery/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="files/js-/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="files/js-/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="files/js-/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="files/js-/js"></script> -->
<!-- Select Plugin -->
<script src="files/js-/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="files/js-/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="files/js-/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="files/js-/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="files/js-/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="files/js-/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/jquery/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/angular/angular-cookies.min.js"></script>

<!-- <script src="files/js-/main.js?v=<?=time()?>"></script> -->
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
    var app = angular.module('myApp',['ngCookies']);
    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){
        loadpage();
        $scope.role;
        
        $scope.search_box_list = 'Search By';
        function loadpage(){
            if($cookies.get('login'))
            {
                console.log("in case login")
                
       
                $http({
                    method: 'post',
                    url: "php/getUserbyid.php",
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
                    $scope.Menu = res[1];
                    console.log($scope.Menu)
                    
             });
             $http({
                    method: 'post',
                    url: "../php/getUsers.php",                    
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (res) {
                    
                    $scope.dataUser = res;
                    console.log($scope.dataUser)
                    
                    
             }); 
                $http({
                    method : 'POST',
                    url : "../php/getCountry.php",
                    //data: $.param({sv: $scope.dataSV}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }).success(function(res){
                        $scope.country = res;
                        console.log(res)
            });


            }
            else
            {
                $window.location.href = 'login.php';
            }
        }
        $scope.logout = function(){
            $cookies.remove("login");
          
            $window.location.href = 'login.php';
        }
       
 
                      
                 
    });
    </script>
</html>
</script>
</html>