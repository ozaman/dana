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
                                <li class="active">
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
                                        <a href="tours-package.php">
                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">
                                            <!-- <li><a href="package.php">Main Menu</a></li> -->
                                            <li class="active"> / New package</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        label.label-package-detail {
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
                     <div class="row" >
                    <div class="col-md-12"> 
                                <div class="form-group form-inline" align="right" >
                                            <div class="form-group" >
                                                <button class="btn btn-success" type="submit" ng-show="editDetail" ng-click="saveEditpackage()">
                                                    <span class="fa2 fa fa-floppy-o"></span> Save</button>
                                            
                                                <button type="button" ng-click="editDetail = !editDetail;edit()" class="btn {{ !editDetail ? 'btn-warning' : 'btn-default' }}">
                                                    <i class="{{!editDetail ? 'fa2 fa fa-pencil-square-o fa-fw': ''}}"></i> {{ !editDetail ? "Edit" : "Cancel" }}</button>
                                            </div>
                                        </div>
                                                     
                             <form class="form-group "  >

                                    <input type="hidden" name="token" id="token" value="{{token}}" />
                                    <input type="hidden" id="id" name="id" value="{{tours.tour_id}}"/>
                                     
                                    <div class="form-group form-inline" ng-show="!editDetail">
                                        <label class="form-inline label-package-detail">City<span> :</span></label>
                                        <div  class="box-package-detail" ng-bind="tours.city"></div>
                                         
                                        <!-- <input type="text" class="form-control  " size="50" maxlength="200" name="name" value="{{tours.province}}" ng-show="editDetail" ng-model="province"> -->
                                    </div>
                                    <div class="form-group form-inline " ng-show="editDetail" >
                                            <label for="class" class="label-package-detail" >City<span> :</span></label>
                                            <select name="city" id="city"  class="form-control " ng-model="city" required style="width: 25%; border: 1px solid #ccc; order-radius: 5px;" ng-model="ciry">
                                                <option>Phuket</option>
                                                <option>Phang nga</option>
                                                <option>Krabi</option>
                                                <option>Phi Phi island</option>
                                                <!--<option>Standard Class</option>-->
                                            </select>
                                        </div>

                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Package name<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="tours.name"></div>
                                        <input type="text" class="form-control  " size="100" maxlength="200" name="name"  ng-show="editDetail" ng-model="ename">
                                    </div>
                                  

                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Short Description<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="tours.description"></div>
                                        <input type="text" class="form-control " size="100" maxlength="300" name="short" value="{{tours.description}}" ng-show="editDetail" ng-model="edescription">
                                    </div>

                                   


                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Package Class<span> :</span></label>
                                        <!-- <input type="text" name="" class="form-group form-inline" ng-value="tours.class"> -->


                                        
                                        <!-- <div class="form-group  form-inline" > -->
                                            
                                            <select name="class" id="class"  class="form-control col-md-8" ng-value="tours.class" required style=" border: 1px solid #ccc; border-radius: 5px;" ng-model="tours.class">
                                                <option>Standard Class</option>
                                                <option>Premium Class</option>
                                                <option>First Class</option>
                                                <!--<option>Standard Class</option>-->
                                            </select>
                                        <!-- </div> -->
                                    
                                    </div>

                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Detail<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail" ng-bind="tours.detail"></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="detail" ng-show="editDetail" ng-model="edetail" ng-value="edetail"></textarea>
                                    </div>

                                  

                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Program<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><span ng-repeat="i in program.split('\r\n')">{{ i }}</span></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="program" ng-show="editDetail" ng-model="eprogram" ng-value="eprogram"></textarea>
                                    </div>

                                   

                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Condition<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><span ng-repeat="z in tours.conditions.split('\r\n')">{{ z }}</span></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="condition" ng-show="editDetail"  ng-model="econditiones" ng-value="econditiones"></textarea>
                                    </div>

                                   
 
                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Include<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><span ng-repeat="z in tours.include.split('\r\n')">{{ z}}</span></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="include" ng-show="editDetail" ng-model="include" ng-value="include" ></textarea>
                                    </div>

                                  
                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Contact Person<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><span ng-repeat="z in tours.contact.split('\n')">{{ z }}</span></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="contact" ng-show="editDetail" ng-model="econtact" ng-value="econtact"></textarea>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="label-package-detail">Company Name<span> :</span></label>
                                        <div  class="box-package-detail"><span>{{tours.company_name }}</span></div>
                                        <!-- <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="contact" ng-show="editDetail" ng-model="econtact" ng-value="econtact"></textarea> -->
                                    </div>

                                    <div class="form-group form-inline" >
                                        <label class="label-package-detail">Note<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><span ng-repeat="z in tours.note.split('\n')">{{ z }}</span></div>
                                        <textarea class="form-control " rows="5" cols="100" maxlength="2000" name="note" ng-show="editDetail" ng-model="enote" ng-value="enote"></textarea>
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
                                                            <div class="checkbox " style="width: 100%;display: inline-block;">
                                                                <label class="" style="display: inline-block;    margin-bottom: 10px;">
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="echekweb" id="echekweb"><!-- <span class="checkbox-material"><span class="check"></span></span> -->SHOW WEB
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
                                                    <img ng-src="../../data/files/upload/tour/icon/{{data}}.png" ng-show="tours.icon =!'' && tours.icon =!'undefined'">
                                                    <!-- <img src="../files/images/image_placeholder.jpg" ng-show="tours.icon == '' || tours.icon =='undefined'"> -->
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
                                   <!--  <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Upload Tour Icon</label>
                                        <div class="box-package-detail"><img style="height: 150px; width: 150px; border-radius: 50%;" ng-src="{{ '../../uploads/Tour/icon/'+ tours.icon }}"></div>
                                        <input class="form-control  " ng-show="editDetail" type="file" name="pic" id="pic" />
                                    </div> -->

                                
                    </form>
                     </div>
                 </div>
                
                    <div class="col-lg-12" >
                    <form  id="ismForm" style="">
                        <!-- <input type="hidden" name="user" value="{{Changeby}}">
                        <input type="hidden" name="token" value="{{token}}">
                        <input type="hidden" name="tour_id" value="{{id}}">
                        <input type="hidden" id="oldadult" value="{{price.adult.net_price}}">
                        <input type="hidden" id="oldchild" value="{{price.child.net_price}}">
                        <input ng-if="isItravel" type="hidden" id="oldadult_sale" value="{{price.adult.sale_price}}">
                        <input ng-if="isItravel" type="hidden" id="oldchild_sale" value="{{price.child.sale_price}}"> -->
                         <table class="table .table-striped .table-hover" ng-init="editPrice = false;">
                            <tr class="head-label">
                                <td class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-inline" colspan="2">
                                    <div class="form-group form-inline" style="margin-left: 2%;">
                                                    
                                    
                                    <label class="label-package-detail">Price<span> :</span></label>
                                                                     
                              
                         </div>
                                     
                                        <div class="pull-right" >
                                             <div class=".box-package-detail" style="border-radius: 8px; width: 100%; float: right; " align="right">    <div class="" style=" text-align: right; right: 6%; display: inline-block;"> 
                                       
                                            <button class="btn btn-success" type="submit" ng-show="editPrice" ng-click="saveeditprice()" style="z-index: 100">
                                               Save</button>
                                       
                                        
                                            <button type="button" ng-click="editPrice = !editPrice;editprice()" 
                                                        class="btn {{ !editPrice ? 'btn-warning' : 'btn-default' }}" style="z-index: 100">
                                                <i class="{{!editPrice ? 'fa fa-cog fa-fw': ''}}"></i> {{ !editPrice ? "Edit" : "Cancel" }}</button>
                                                                                  
                                    </div>
                                            
                                        </div>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="price-block">
                                        <div class="price-block-head">Adult <span>Contract</span> Rate
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail">{{ tours.net_price_adult | currency:'':0 }} <span>Bath / person</span></div>
                                        <div ng-if="editPrice" class="price-block-tail">
                                            <input type="text" id="adult" name="adult" ng-change="netpriceadult(net_price_adult)" class="form-control input-text-right" ng-value="net_price_adult | currency:'':0 " ng-model="net_price_adult" > <span>Bath / person</span>
                                        </div>
                                    </div>
                                    <!--<div ng-show="editPrice" class="form-group">-->
                                    <!--<div class="input-package-price">-->
                                    <!--<div>Adult Sale Price</div>-->
                                    <!--<input type="text" id="adult" name="adult" class="form-control" size="10" value="{{ price.adult.net_price | currency : '' }}" ng-disabled="!editPrice" required>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                </td>
                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="price-block">
                                        <div class="price-block-head">Child <span >Contract</span> Rate
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail">{{ tours.net_price_child | currency:'':0 }} <span>Bath / person</span></div>
                                        <div ng-if="editPrice" class="price-block-tail">
                                            <input type="text" id="child" name="child" class="form-control input-text-right"  ng-value="net_price_child | currency:'':0" ng-model="net_price_child" ng-change="netpricechild(net_price_child)"> <span>Bath / person</span>
                                        </div>
                                    </div>
                                    <!--<div ng-show="editPrice" class="form-group">-->
                                    <!--<div class="input-package-price">-->
                                    <!--<div>Child Price</div>-->
                                    <!--<input type="text" id="child" name="child" class="form-control" value="{{ price.child.net_price | currency : '' }}" ng-disabled="!editPrice" required>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                </td>
                            </tr>
                            <tr >
                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="price-block">
                                        <div class="price-block-head">Adult Selling Rate
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail">{{ tours.sale_price_adult | currency:'':0 }} <span>Bath / person</span></div>
                                        <div ng-if="editPrice" class="price-block-tail">
                                            <input type="text" name="sale_adult" class="form-control input-text-right" ng-value="sale_price_adult | currency:'':0" ng-model="sale_price_adult" ng-change="salepriceadult(sale_price_adult)"> <span>Bath / person</span>
                                        </div>
                                    </div>
                                    <!--<div ng-show="editPrice" class="form-group">-->
                                    <!--<div class="input-package-price">-->
                                    <!--<div>Adult Sale Price</div>-->
                                    <!--<input type="text" name="sale_adult" class="form-control" value="{{ price.adult.sale_price | currency : '' }}" ng-disabled="!editPrice" required>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                </td>
                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="price-block">
                                        <div class="price-block-head">Child Selling Rate
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail">{{ tours.sale_price_child | currency:'':0 }} <span>Bath / person</span></div>
                                        <div ng-if="editPrice" class="price-block-tail">
                                            <input type="text" name="sale_child" class="form-control input-text-right" ng-value="sale_price_child | currency:'':0" ng-model="sale_price_child" ng-change="salepricechild(sale_price_child)"> <span>Bath / person</span>
                                        </div>
                                    </div>
                                    <!--<div ng-show="editPrice" class="form-group">-->
                                    <!--<div class="input-package-price">-->
                                    <!--<div>Child Sale Price</div>-->
                                    <!--<input type="text" name="sale_child" class="form-control" value="{{ price.child.sale_price | currency : '' }}" ng-disabled="!editPrice" required>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="price-block">
                                        <div class="price-block-head">Rate show web
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail">{{ tours.cost_web }} <span>Bath / person</span></div>
                                        <div ng-if="editPrice" class="price-block-tail">
                                            <input type="text" name="sale_show_web" class="form-control input-text-right" ng-value="sale_show_web " ng-model="sale_show_web" ng-change="saleshowweb(sale_show_web)"> <span>Bath / person</span>
                                        </div>
                                    </div>
                                    <!--<div ng-show="editPrice" class="form-group">-->
                                    <!--<div class="input-package-price">-->
                                    <!--<div>Child Sale Price</div>-->
                                    <!--<input type="text" name="sale_child" class="form-control" value="{{ price.child.sale_price | currency : '' }}" ng-disabled="!editPrice" required>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                </td>
                                
                            </tr>
                            <tr ng-if="detail.length == 0"><td colspan="3">Nothing to show. Please add new Detail</td></tr>
                        </table>
                        <!-- <div class="form-group form-inline" style="margin-left: 2%;">
                                                    
                                    
                                    <label class="label-package-detail">Price<span> :</span></label>
                                                                     
                              
                         </div>
                         <div class="form-group form-inline" style="">

                                <div class=".box-package-detail" style="border-radius: 8px; width: 100%; float: right; " align="right">    <div class="" style=" text-align: right; right: 6%; display: inline-block;"> 
                                       
                                            <button class="btn btn-success" type="submit" ng-show="editPrice" ng-click="saveeditprice()" style="z-index: 100">
                                               Save</button>
                                       
                                        
                                            <button type="button" ng-click="editPrice = !editPrice;editprice()" 
                                                        class="btn {{ !editPrice ? 'btn-warning' : 'btn-default' }}" style="z-index: 100">
                                                <i class="{{!editPrice ? 'fa fa-cog fa-fw': ''}}"></i> {{ !editPrice ? "Edit" : "Cancel" }}</button>
                                                                                  
                                    </div>
                                    <div>  
                                        <div class="price-block-head" style="    border-radius: 4px 0 0 4px;">Cost
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail" style="    border-radius: 0 4px  4px; 0">{{ tours.cost | currency : '':0 }} <span>Bath / Package</span></div>
                                        <div ng-if="editPrice" class="price-block-tail" style="border-radius: 0 4px  4px 0;z-index: 100">
                                            <input type="text" id="child" name="ecost" class="form-control input-text-right" value="{{ecost  | currency :'':0 }}" ng-disabled="!editPrice" ng-model="ecost" ng-change="editchangeprice(ecost)" required> <span>Bath / Package</span>
                                        </div>
                                        </div>
                                </div>
                                    
                                    
                              
                            
                        </div> -->
                    </form>
                    
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
                                    <img style="max-height: 200px; max-width: 356px" ng-src="../../data/files/upload/tour/gallery/{{x.gallery}}"  class="img-thumbnail img-responsive center-block">
                                    
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
                                                    
                                                    <img src="../files/images/image_placeholder.jpg" alt="..." >
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
                                    Delete Package
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
    /*margin: 0 10%;*/
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
                                <div>Are you sure to delete tour {{tours.name}}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletePackage(data)">Remove</button>
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
              $scope.echekweb;
            $scope.err = $location.search().err;
            $scope.data = JSON.parse($location.search().data);
            console.log($scope.data)
         $scope.dataphonecode;
        $scope.imgcoutry = '';
        $scope.btnsave = false;
        $scope.url = 'http://localhost/dana/';
        $scope.Countryfont = "      Please select country";
     
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
                    console.log($scope.data)
                    $http({
                        method : 'POST',
                        url : "../php/getTourbyid.php",
                        data: $.param({'id': $scope.data}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                        }).success(function(res){
                         console.log(res)
                         $scope.tours = res[0];
                         console.log(res[0].show_re)
                         console.log(res[0].show_top)
                            $scope.show_top = res[0].show_top;
                            $scope.show_re = res[0].show_re;
                            $scope.icon = res[0].icon;
                            console.log($scope.icon)
                         if (res[0].show_re == 1) {
                                $scope.echekrecommend = true;
                                //alert('re-true')
                         }
                         else{
                                $scope.echekrecommend = false;
                                //alert('re-false')


                         }
                          if (res[0].show_top == 1) {
                                $scope.echekpopular = true;
                                //alert('top-true')

                         }
                         else{
                                $scope.echekpopular = false;
                                //alert('top-fales')


                         }
                         if (res[0].show_web == 1) {
                                $scope.echekweb = true;
                                //alert('top-true')

                         }
                         else{
                                $scope.echekweb = false;
                                //alert('top-fales')


                         }

                 console.log($scope.tours)
                 $scope.program = res[0].program;
                 console.log($scope.program)
                  $scope.setIndex = function(index){
                            $scope.tourData = res[index] ;
                        }
                       
            });
                $scope.dataGallery = '';
                $http({
                            method : 'POST',
                            url : "../php/getGallery.php",
                            data: $.param({id: $scope.data}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.dataGallery = res;
                            });
      }
      else
      {
        $scope.loginstatus = true;
        $window.location.href="../login.php";
      }

      
    }
    $scope.view = function(data){
    console.log(data)
    $scope.viewgallery = data.gallery;

  }
    $scope.editprice =function(){
        //alert('aaaa')
        $scope.sale_price_adult = $scope.tours.sale_price_adult;
        $scope.sale_price_child = $scope.tours.sale_price_child;
        $scope.net_price_adult = $scope.tours.net_price_adult;
        $scope.net_price_child = $scope.tours.net_price_child;
        $scope.sale_show_web = $scope.tours.cost_web;
       
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        
    }
    $scope.salepriceadult =function(x){
        //alert('aaaa')
        $scope.sale_price_adult = x;
        console.log($scope.sale_price_adult)
       
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        
    }
    $scope.salepricechild =function(x){
        //alert('aaaa')
        $scope.sale_price_child = x;
        console.log($scope.sale_price_child)
       
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        
    }
    $scope.netpriceadult =function(x){
        //alert('aaaa')
        $scope.net_price_adult = x;
        console.log($scope.net_price_adult)
       
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        
    }
    $scope.saleshowweb =function(x){
        //alert('aaaa')
        $scope.sale_show_web = x;
        console.log($scope.sale_show_web)
       
        // console.log($scope.sale_show_web)
        // console.log($scope.ChildPrice)
        
    }
    $scope.netpricechild =function(x){
        //alert('aaaa')
        $scope.net_price_child = x;
        console.log($scope.net_price_child)
       
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        
    }
    $scope.saveeditprice =function(){
        //alert($scope.ecost)
        console.log($scope.sale_price_adult)
        console.log($scope.sale_price_child)
        console.log($scope.net_price_adult)
        console.log($scope.net_price_child)

        $http({
                method : 'POST',
                url : "../php/editPrice.php",
                data: $.param({'id':$scope.data                            
                            ,'sale_price_adult': $scope.sale_price_adult 
                            ,'sale_price_child': $scope.sale_price_child 
                            ,'net_price_adult': $scope.net_price_adult 
                            ,'net_price_child': $scope.net_price_child
                            ,'sale_show_web': $scope.sale_show_web 
                            }), 

                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log("asasasasas")
                  $window.location.reload();
                 
                       
            });
        
    }
     $scope.profile = function(){
        location.href="profile";

    }

    $scope.deletePackage = function(data){
    console.log(data)
    $http({
                            method : 'POST',
                            url : "../php/removePackage.php",
                            data: $.param({'id': $scope.data}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                //$window.location.reload();
                            });
                       

  }
    $scope.onFileSelect = function(file) {
     // alert($scope.data)
        console.log(file)
    if (!file) return;
    Upload.upload({
        url: '../php/uploadicon.php',
        data: {file: file, 'imagename': $scope.data}
      }).success(function(resp) {
        // file is uploaded successfully
        console.log(resp);
      });    
  }
  $scope.addGallery = function(file) {
    console.log(file)
     $http({
                method : 'POST',
                url : "../php/getGallery.php",
                data: $.param({'id': $scope.data}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 if (res == 0) {
                    $scope.nameGallery = 1;
                    //alert($scope.nameGallery)
                 }
                 else{
                 $scope.nameGallery = res.length+1;

                 }
                 console.log($scope.nameGallery)

                 
               if (!file) return;
                    Upload.upload({
                        url: '../php/uploadGallery.php',
                        data: {file: file, 'imagename': $scope.data+'_'+$scope.nameGallery,'id':$scope.data}
                      }).success(function(resp) {
                        // file is uploaded successfully
                        console.log(resp);
                        $scope.dataGallery='';
                        $http({
                            method : 'POST',
                            url : "../php/getGallery.php",
                            data: $.param({id: $scope.data}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.dataGallery = res;
                            });
                    });     
                       
            });
        //console.log(file)
    
  }
    // $scope.saveAddtour =function(){
       
        
    //     console.log($scope.chekpopulars)
    //     console.log($scope.chekrecommends)
    //    // var chekpopular = $("#chekpopular").val();
    //    // var chekrecommend = $("#chekrecommend").val();

    //    // console.log(chekpopular+'\n'+chekrecommend)
    //     console.log($scope.ename)
    //     console.log($scope.city)
    //     console.log($scope.class)
    //     console.log($scope.detail)
    //     console.log($scope.condition)
    //     console.log($scope.program)
    //     console.log($scope.include)
    //     // console.log($scope.company)
    //     console.log($scope.contact)
    //     console.log($scope.note)
    //     console.log($scope.short)
    //     // console.log($scope.AdultPrice)
    //     // console.log($scope.ChildPrice)
    //     console.log($scope.cost)
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
    //              console.log(res)
    //              console.log("asasasasas")
    //              $window.location.href = 'view.php#?data='+res;
                 
                       
    //         });
    
    // }
    $scope.edit =function(){

        //$scope.show_recommend = $scope.tours.show_re;                
        //$scope.show_popular = $scope.tours.show_top;
                
        //alert('aaaa')
        // angular.forEach($scope.tours, function (data) {
                           
                
                            
                                
        //                 });
       $scope.city =  $scope.tours.city;
       $scope.ename = $scope.tours.name;
       // $scope.ecity = $scope.tours.province;
        $scope.eclass = $scope.tours.class;
        $scope.edetail = $scope.tours.detail;
        $scope.econditiones = $scope.tours.conditions;
        $scope.eprogram = $scope.tours.program;
        $scope.include = $scope.tours.include;
        // console.log($scope.company)
        $scope.econtact = $scope.tours.contact;
        $scope.enote = $scope.tours.note;
        $scope.edescription = $scope.tours.description;
        //$scope.echekpopular = $scope.tours.show_top;
        //$scope.echekrecommend = $scope.tours.show_re;
        // if ($scope.echekpopular == true) {
        //     $scope.echekpopular = 1;
           
        // }
        // else{
        //     $scope.echekpopular = 0;
        // }
        // if ($scope.echekrecommend == true) {
        //     $scope.echekrecommend = 1;
             
        // }
        // else{
        //      $scope.echekrecommend = 0;
        // }
        console.log($scope.echekrecommend)
        console.log($scope.echekpopular)
        console.log($scope.econdition)

        
    }
    $scope.saveEditpackage =function(){
        if ($scope.echekpopular == true) {
            $scope.echekpopular = 1;
           
        }
        else{
            $scope.echekpopular = 0;
        }
        if ($scope.echekrecommend == true) {
            $scope.echekrecommend = 1;
             
        }
        else{
             $scope.echekrecommend = 0;
        }
        if ($scope.echekweb == true) {
            $scope.echekweb = 1;
             
        }
        else{
             $scope.echekweb = 0;
        }
       
        console.log($scope.echekpopular)
        console.log($scope.echekrecommend)
        console.log($scope.echekweb)
       // var chekpopular = $("#chekpopular").val();
       // var chekrecommend = $("#chekrecommend").val();

       // console.log(chekpopular+'\n'+chekrecommend)
        console.log($scope.ename)
        console.log($scope.city)
        console.log($scope.eclass)
        console.log($scope.edetail)
        console.log($scope.econditiones)
        console.log($scope.eprogram)
        console.log($scope.include)
        // console.log($scope.company)
        console.log($scope.econtact)
        console.log($scope.enote)
        console.log($scope.edescription)
        // console.log($scope.AdultPrice)
        // console.log($scope.ChildPrice)
        console.log($scope.ecost)
         $http({
                method : 'POST',
                url : "../php/editTour.php",
                data: $.param({'id':$scope.data
                            ,'topic':$scope.ename
                            ,'city': $scope.city
                            ,'detail': $scope.edetail
                            ,'conditions': $scope.econditiones
                            ,'program': $scope.eprogram 
                            ,'contact': $scope.econtact
                            ,'note': $scope.enote
                            ,'short': $scope.edescription
                            ,'classs': $scope.eclass
                            ,'includes':$scope.include
                            ,'show_top':$scope.echekpopular
                            ,'show_re':$scope.echekrecommend
                            ,'show_web':$scope.echekweb
                           
                            
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                    console.log(res)
                    console.log("asasasasas")
                    $window.location.reload();
                 
                       
            });
        













    }
    $scope.remove = function(data){
    console.log(data)
    $http({
                            method : 'POST',
                            url : "../php/removeGallery.php",
                            data: $.param({'id': data.id,'gallery':data.gallery}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.dataGallery= '';
                                $http({
                            method : 'POST',
                            url : "../php/getGallery.php",
                            data: $.param({'id': $scope.data}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
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