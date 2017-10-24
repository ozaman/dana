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

    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

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
                                        <i class="material-icons">notifications_active</i> Reservation - Invoice
                                    </a>
                                </li>
                                <li  >
                                    <a href="../report/tours-invoice.php">
                                        <i class="material-icons">notifications_active</i> Tours - Invoice
                                    </a>
                                </li>

                                 <!-- <li>

                                    <a href="../report/account.php">

                                    <i class="material-icons">account_balance_wallet</i>

                                         Account

                                    </a>

                                </li> -->
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
                                    <div class="form-group form-inline " style="width: 100%">
                                         <div class="checkbox-popular">
                                        <div class="checkbox" style=";width: 100%;display: inline-block;">
                                                                <label class="" style="display: inline-block;    margin-bottom: 10px;">
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="echekrecommend" id="echekrecommend"><!-- <span class="checkbox-material"><span class="check"></span></span> -->RECOMMEND
                                                                </label>
                                                            </div>
                                                            <div class="checkbox " style="width: 100%;display: inline-block;">
                                                                <label class="" style="display: inline-block;    margin-bottom: 10px;">
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="echekpopular" id="echekpopular"><!-- <span class="checkbox-material"><span class="check"></span></span> -->POPULAR PACKAGES
                                                                </label>
                                                            </div>
                                                            </div>
                                       
                                    </div>

                                    <!-- <div class="form-group form-inline" ng-show="isItraveladmin">
                                        <label class="label-package-detail">Recommend<span> :</span></label>
                                        <input type="checkbox" ng-show="editDetail" ng-checked="tours.recommend" ng-if="checked=true" value="1" name="recommend">
                                    </div> -->
                                   
                                    <div class="form-group form-inline" style=" margin-top: 30px;" >
                                        <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <!-- <legend>File size must not exceed 2 MB.</legend> -->
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../../data/files/upload/transfer/icon/{{data}}.png" ng-show="transfericon =!'' && transfericon != 'undefined'">
                                                    <img src="../files/images/image_placeholder.jpg" ng-show="transfericon == '' || transfericon == 'undefined'" >
                                                   
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn btn-info btn-file">
                                                        <span class="fileinput-new">Select image icon</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="hidden"><input type="file"  ngf-select="onFileSelect($file)" ngf-pattern="'image/*'">
                                                    <div class="ripple-container"></div></span>
                                                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        
                                    </div>

                                     

                                    

                                    <!-- <div class="form-group form-inline">

                                      <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.msg}}</uib-alert>

                                    </div> -->

                                    

                                    

                                </form>

                                                     

                           

                     </div>

                 </div>
                 <div class="row">
                     <div class="form-group form-inline" style="">
                        <div class="head-label">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-inline" style="    background: #fff;
    padding: 0 10px;
    margin-top: 45px;
    margin-bottom: 45px;" >
                                <h4>
                                    Gallery
                                </h4>
                            </div>
                       
                            <div  class="col-md-3 col-lg-3" ng-if="dataGallery.length != 0" ng-repeat="x in dataGallery">
                                <div align="center">
                                <div  class=" col-md-3 " >
                                    <img style="max-height: 200px; max-width: 356px" ng-src="../../data/files/upload/transfer/gallery/{{x.gallery}}"  class="img-thumbnail img-responsive center-block">
                                    
                                </div>
                                <div class="center-block form-group" align="center">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#showImageModal" ng-click="view(x)">View</button>
                                    <button class="btn btn-danger btn-sm" ng-click="remove(x)" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                </div>
                                </div>
                                <!-- <div  align="center" >
                                    <button class="btn center-block text-center" data-toggle="modal" data-target="#uploadModal" style="background: #eae8e8; min-height: 170px; min-width: 170px;"><i class="fa fa-3x fa-plus center-block text-center"></i></button>
                                </div> -->
                            </div>
                 
                            <!-- <div class="form-group form-inline" colspan="3" style="width: 100%; "> -->
                                <div class="fileinput fileinput-new text-center col-md-3" data-provides="fileinput" style="display: inline-block;">
                                                <div class=" thumbnail" style="margin-top: 25px;"">
                                                    
                                                    <img src="../../files/images/image_placeholder.jpg" alt="..." >
                                                     <!-- <i class="fa fa-3x fa-plus center-block text-center"></i> -->
                                                </div> 
                                               
                                                <!-- <div class="fileinput-preview fileinput-exists thumbnail"></div> -->
                                                  <div class="margin-package-gallery" >

                                    <!-- <button class="btn center-block text-center" style="background: #eae8e8; min-height: 170px; min-width: 170px;"><i class="fa fa-3x fa-plus center-block text-center"></i></button> -->
                                </div>
                                                <div style="  margin-top: -72px;" align="center">
                                                    <span class="btn  btn-info  btn-file">
                                                        <span class="">Select image gallery</span>
                                                        <!-- <span class="fileinput-exists">Change</span> -->
                                                        <!-- <input type="hidden"> --><input type="file"  ngf-select="addGallery($file)" ngf-select ng-model="files" ngf-multiple="true">
                                                    <!-- <div class="ripple-container"></div> --></span>
                                                   <!--  <a href="#pablo" class="btn btn-danger fileinput-new"><i class="fa fa-times"></i> NEW upload</a> -->
                                                </div>
                                               
                                            </div>
                              
                            <!-- </div> -->
                    
                    </div>
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
<script src="../js/view-package-transfer.js"></script>




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

    

    

    </script>

</html>