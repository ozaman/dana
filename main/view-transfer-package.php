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

                                <li>

                                    <a href="tours-package.php">

                                        <i class="material-icons">local_offer</i> Tour Packages

                                    </a>

                                </li>

                                <li  class="active">

                                    <a href="transfer-package.php">

                                        <i class="material-icons">directions_car</i> Transfer Packages

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

                                        <a href="transfer-package.php">

                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a>

                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">

                                            <!-- <li><a href="package.php">Main Menu</a></li> -->

                                            <li class="active"> / View transfer package</li>

                                        </ol>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <style>

                        label.label-package-detail {

    text-align: right;

    width: 120px;

    margin-right: 10px;

}

.form-group {

  margin: 0;

  padding-bottom: 10px;

  margin: 20px 0 0 0;

}

                    </style>

                     <div class="row" >

                    <div class="col-md-12"> 

                                <div class="form-group form-inline" align="right" >

                                            <div class="form-group" >

                                                <button class="btn btn-success" type="submit" ng-show="editDetail" ng-click="saveEdittransport()">

                                                    <span class="fa2 fa fa-floppy-o"></span> Save</button>

                                            

                                                <button type="button" ng-click="editDetail = !editDetail;edit()" class="btn {{ !editDetail ? 'btn-warning' : 'btn-default' }}">

                                                    <i class="{{!editDetail ? 'fa2 fa fa-pencil-square-o fa-fw': ''}}"></i> {{ !editDetail ? "Edit" : "Cancel" }}</button>

                                            </div>

                                        </div>

                                        <form class="form-group "  >

                                    <input type="hidden" value="{{token}}" name="token"/>

                                   <!--  <input type="hidden" value="{{city}}" name="city"/> -->

                                   

                                

                                   

                                     <div class="form-group form-inline">

                                        <label class="label-package-detail">Province<span> :</span></label>

                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="transport.province"></div>

                                        <select ng-show="editDetail" class="form-control" ng-change="changeprovince(selectprovince)" id="selectprovince" ng-model="selectprovince" data-ng-options="i as i.name for i in dataprovince" style="width: 150px;">

                                                    <option value="">None</option>

                                              </select>

                                       

                                    </div>



                                  <div class="form-group form-inline">

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

                                    </div>

                                     <div class="form-group form-inline">

                                        <label class="label-package-detail">Package name<span> :</span></label>

                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="transport.name"></div>

                                        <input type="text" class="form-control  " size="100" maxlength="200" name="name"  ng-show="editDetail" ng-model="tname">

                                    </div>

                                    

                                     <div class="form-group form-inline">

                                        <label class="label-package-detail">Conpany name<span> :</span></label>

                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="transport.company_name"></div>

                                         <select ng-show="editDetail"class="form-control" ng-change="changecompany(selectcompany)" id="selectcompany" ng-model="selectcompany" data-ng-options="i as i.company_name for i in datacompany" >

                                                    <option value="">None</option>

                                              </select>

                                       

                                    </div>

                                    <div class="form-group form-inline" >

                                        <label class="label-package-detail">Person(s):<span> :</span></label>

                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="transport.person" style="width: 150px;"></div>

                                        <select class="form-control" ng-change="changenumperson(transfer_person)" id="numperson" ng-model="transfer_person" data-ng-options="i  for i in numperson" style="width: 150px;" ng-show="editDetail">

                                                    <option value="">0</option>

                                              </select>

                                    </div>





                                    

                                     <div class="form-group form-inline" >

                                        <label class="label-package-detail">Price(s):<span> :</span></label>

                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="transport.price | currency:'':0" style="width: 150px;"></div>

                                        <input name="transfer_price" ng-model="transfer_price" id="transfer_price" class=" form-control" ng-change="pricetransfer(transfer_price)" pattern="^[0-9]+$"  title="Please input number only." required style="width: 150px;" ng-show="editDetail">

                                    </div>

                                     

                                    

                                    <!-- <div class="form-group form-inline">

                                      <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</uib-alert>

                                    </div> -->

                                    

                                    

                                </form>

                                                     

                           

                     </div>

                 </div>

                

                    

                

                



                <div class="row" >

                    <div class="form-group form-inline" >

                       

                            <div class="" style="background: #FFFFFF;    padding: 8px 10px;"  >

                                <h4 style="color: #E53935">

                                    Delete transport package

                                </h4>

                            </div>

                       

                       

                                <div class="pull-left">

                                    Because deleted package cannot be taken back, please make sure before deleting any package!

                                </div>

                                <div class="pull-right">

                                    <button class="btn btn-danger" data-toggle="modal" data-target="#remove" >Remove</button>

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

                .fileinput{

                        margin-bottom: 0;

    margin-left: 175px;

                }

                .price-block{

    display:inline-flex;

    width:100%;

    height:auto;

    margin: 0 10%;

}

.price-block-head{

    display:inline-block;

    width:60%;

    position:relative;

    padding: 40px 5%;

    height: 125px;

    color: #FFF;

    background: #2f8bb5;

    font-size:2rem;

    float:left;

}

.price-block-tail{

    display:inline-block;

    width:40%;

    position:relative;

    padding:38px 5%;

    height: 125px;

    color: #FFFFFF;

    background: #0c303e;

    font-weight: bold;

    font-size: 3rem;

    text-align:right;

}

.price-block-tail span{

    position:absolute;

    top:10px;

    right:12%;

    font-size:1.5rem;

}

#radioin{

    margin-left: 123px;

}

#selectcompany{

	width: 741px;

}

                @media screen and (max-width: 767px){





                .checkbox-popular{

                     margin-left: 0;

                }

                .radio-type{

                     margin-left: 0;

                }

                label.label-package-detail{

                    text-align: left;

                }

                .box-package-detail{

                    width: 100% !important;

                }

                .fileinput{

                        margin-bottom: 0;

                        margin-left: 0;

                }

                #radioin{

    margin-left: 0;

}

#selectcompany{

	width: 100%;

}

                }

                </style>

                <div class="modal fade" id="remove">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                <h4 class="modal-title" >Tour</h4>

                            </div>

                            <div class="modal-body">

                                <div>Are you sure to delete tour {{transport.name}}</div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletetransport(data)">Remove</button>

                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

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

                <div class="modal fade" id="showImageModal" role="dialog">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <h4 class="modal-title">Gallery</h4>

                            </div>

                            

                                <div class="modal-body">

                                    

                                    <div class="form-group" align="center">

                                        <img src="../files/upload/gallery/{{viewgallery}}" width="100%">

                                    </div>

                                    

                                </div>

                                <div class="modal-footer">

                                    

                                   

                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button>

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

    <script src="../files/js-/ng-file-upload-shim.min.js"></script>

<script src="../files/js-/ng-file-upload.min.js"></script>



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

    .box-package-detail{



    height: 100%;

    width: 65%;

    /*margin: 0.5rem 5%;*/

    padding: 8px;

    display: inline-block;

    background-color: #FAFAFA;

    border: 1px solid #e3e3e3;

    border-radius: 4px;

    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);

    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);

    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05)

    }

</style>

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

    

    var app = angular.module('myApp',['ngCookies','ngFileUpload']);

    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter,$location,Upload){

        //loadpage();

        loadpage();

        

    function loadpage(){

        $scope.tours;

              $scope.echekpopular ;

              $scope.echekrecommend;

            $scope.err = $location.search().err;

            $scope.data = JSON.parse($location.search().data);

            //console.log($scope.data)

         $scope.dataphonecode;

        $scope.imgcoutry = '';

        $scope.btnsave = false;

        $scope.numperson = [];

                    var x = 100;

            for (var i = 1; i <= x; i++) {

              $scope.numperson.push(i);

              

            }

        $scope.url = 'http://localhost/dana/';

        $scope.Countryfont = "      Please select country";

     

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

                    url : "../php/getCountry.php",

                    //data: $.param({sv: $scope.dataSV}),

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                    }).success(function(res){

                        $scope.country = res;

                        //console.log(res)

            });

                    //console.log($scope.data)

                    $http({

                        method : 'POST',

                        url : "../php/getTransportbyid.php",

                        data: $.param({'id': $scope.data}),

                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                        }).success(function(res){

                         //console.log(res)

                         $scope.transport = res[0];

                         $scope.myValue = res[0].flight;

                        

                         



                

                       

            });$http({

                    method: 'post',

                    url: "../php/getCompany.php",                    

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    //console.log(res)

                    $scope.datacompany = res;

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



                

                

      }

      else

      {

        $scope.loginstatus = true;

        $window.location.href="../login.php";

      }



      

    }

    $scope.view = function(data){

    //console.log(data)

    $scope.viewgallery = data.gallery;



  }

    $scope.editprice =function(){

        //alert('aaaa')

        $scope.sale_price_adult = $scope.tours.sale_price_adult;

        $scope.sale_price_child = $scope.tours.sale_price_child;

        $scope.net_price_adult = $scope.tours.net_price_adult;

        $scope.net_price_child = $scope.tours.net_price_child;

       

        // //console.log($scope.AdultPrice)

        // //console.log($scope.ChildPrice)

        

    }

    $scope.logIt=function(x){

        $scope.flight =x;

            //console.log(x)

    }

    $scope.changeprovince=function(x){

            $scope.province_name = x.name;

            $scope.province_id = x.id;

           //console.log(x.name+ x.id);

    }

    $scope.changenumperson=function(x){

            $scope.person = x;

           

           //console.log($scope.person);

    }

    $scope.changecompany = function(x){

        $scope.companyid = x.id;

        $scope.companyname = x.company_name;



    }

    $scope.transfername = function(x){

        $scope.tname = x;

        //console.log($scope.tname)



    }

    $scope.pricetransfer = function(x){

        $scope.tprice = x;



        //console.log($scope.tprice)



    }

    

    

    $scope.saveeditprice =function(){

        //alert($scope.ecost)

        //console.log($scope.sale_price_adult)

        //console.log($scope.sale_price_child)

        //console.log($scope.net_price_adult)

        //console.log($scope.net_price_child)



        $http({

                method : 'POST',

                url : "../php/editPrice.php",

                data: $.param({'id':$scope.data                            

                            ,'sale_price_adult': $scope.sale_price_adult 

                            ,'sale_price_child': $scope.sale_price_child 

                            ,'net_price_adult': $scope.net_price_adult 

                            ,'net_price_child': $scope.net_price_child 

                            }), 



                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                 //console.log(res)

                 //console.log("asasasasas")

                  $window.location.reload();

                 

                       

            });

        

    }

     $scope.profile = function(){

        location.href="profile";



    }



    $scope.deletetransport = function(data){

    //console.log(data)

    $http({

                            method : 'POST',

                            url : "../php/removeTransport.php",

                            data: $.param({'id': $scope.data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                              $window.location.href = 'transfer-package.php';

                            });

                       



  }

    $scope.onFileSelect = function(file) {

     // alert($scope.data)

        //console.log(file)

    if (!file) return;

    Upload.upload({

        url: '../php/uploadicon.php',

        data: {file: file, 'imagename': $scope.data}

      }).success(function(resp) {

        // file is uploaded successfully

        //console.log(resp);

      });    

  }

  $scope.addGallery = function(file) {

    //console.log(file)

     $http({

                method : 'POST',

                url : "../php/getGallery.php",

                data: $.param({'id': $scope.data}),

                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                 //console.log(res)

                 if (res == 0) {

                    $scope.nameGallery = 1;

                    //alert($scope.nameGallery)

                 }

                 else{

                 $scope.nameGallery = res.length+1;



                 }

                 //console.log($scope.nameGallery)



                 

               if (!file) return;

                    Upload.upload({

                        url: '../php/uploadGallery.php',

                        data: {file: file, 'imagename': $scope.data+'_'+$scope.nameGallery,'id':$scope.data}

                      }).success(function(resp) {

                        // file is uploaded successfully

                        //console.log(resp);

                        $scope.dataGallery='';

                        $http({

                            method : 'POST',

                            url : "../php/getGallery.php",

                            data: $.param({id: $scope.data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                $scope.dataGallery = res;

                            });

                    });     

                       

            });

        ////console.log(file)

    

  }

    // $scope.saveAddtour =function(){

       

        

    //     //console.log($scope.chekpopulars)

    //     //console.log($scope.chekrecommends)

    //    // var chekpopular = $("#chekpopular").val();

    //    // var chekrecommend = $("#chekrecommend").val();



    //    // //console.log(chekpopular+'\n'+chekrecommend)

    //     //console.log($scope.ename)

    //     //console.log($scope.city)

    //     //console.log($scope.class)

    //     //console.log($scope.detail)

    //     //console.log($scope.condition)

    //     //console.log($scope.program)

    //     //console.log($scope.include)

    //     // //console.log($scope.company)

    //     //console.log($scope.contact)

    //     //console.log($scope.note)

    //     //console.log($scope.short)

    //     // //console.log($scope.AdultPrice)

    //     // //console.log($scope.ChildPrice)

    //     //console.log($scope.cost)

    //      $http({

    //             method : 'POST',

    //             url : "php/addTour.php",

    //             data: $.param({'name_en': $scope.topic

    //                         ,'city': $scope.city

    //                         ,'detail': $scope.detail

    //                         ,'condition': $scope.condition

    //                         ,'program': $scope.program 

    //                         ,'contact': $scope.contact

    //                         ,'note': $scope.note

    //                         ,'short': $scope.short

    //                         ,'classs': $scope.class

    //                         ,'includes':$scope.include

    //                         ,'chekpopulars':$scope.chekpopulars

    //                         ,'chekrecommends':$scope.chekrecommends

    //                         ,'price':$scope.cost



                            

    //                         }), 



    //             headers: {'Content-Type': 'application/x-www-form-urlencoded'}

    //             }).success(function(res){

    //              //console.log(res)

    //              //console.log("asasasasas")

    //              $window.location.href = 'view.php#?data='+res;

                 

                       

    //         });

    

    // }

    $scope.edit =function(){



       $scope.selectprovince =  $scope.transport.city;

       //$scope.ename = $scope.transport.name;

       // $scope.ecity = $scope.tours.province;

        $scope.selectcompany = $scope.transport.company_name;

        $scope.transfer_person = $scope.transport.person;



        $scope.transfer_price = $scope.transport.price;

        $scope.tname = $scope.transport.name;

        $scope.flight = $scope.transport.flight;

        

        

        



        

    }

    $scope.saveEdittransport =function(){

        if ($scope.companyname == undefined) {

        	$scope.companyname = $scope.transport.company_name;

        }

        if ($scope.province_name == undefined) {

        	$scope.province_name = $scope.transport.province;

        }

         if ($scope.person == undefined) {

        	$scope.person = $scope.transport.person;

        }

        if ($scope.flight == undefined) {

        	$scope.flight = $scope.transport.flight;

        }

        if ($scope.tprice == undefined) {

        	$scope.tprice = $scope.transport.price;

        }

       // var chekpopular = $("#chekpopular").val();

       // var chekrecommend = $("#chekrecommend").val();



       // //console.log(chekpopular+'\n'+chekrecommend)

        //console.log($scope.companyname)

        //console.log($scope.province_name)

        //console.log($scope.person)



        //console.log($scope.flight)

        //console.log($scope.tprice)

        //console.log($scope.tname )

       

         $http({

                method : 'POST',

                url : "../php/editTransport.php",

                data: $.param({'id':$scope.data

                            ,'name':$scope.tname

                            ,'province': $scope.province_name

                            ,'company_name': $scope.companyname

                            ,'person': $scope.person

                            ,'price': $scope.tprice 

                            ,'flight': $scope.flight

                           

                           

                            

                }),

                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                    //console.log(res)

                    ////console.log("asasasasas")

                    $window.location.reload();

                 

                       

            });

        



























    }

    $scope.remove = function(data){

    //console.log(data)

    $http({

                            method : 'POST',

                            url : "../php/removeGallery.php",

                            data: $.param({'id': data.id,'gallery':data.gallery}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                $scope.dataGallery= '';

                                $http({

                            method : 'POST',

                            url : "../php/getGallery.php",

                            data: $.param({'id': $scope.data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                $scope.dataGallery = res;

                            });

                            });

                       



  }

    

    $scope.logout = function(){

            $cookies.remove("login");

           

            $window.location.href = '../login.php';

    }

        

        

});

    </script>

</html>