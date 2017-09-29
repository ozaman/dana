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

                                <li class="active">

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

                                        <a href="company.php">

                                            <button type="button" class="btn btn-rose btn-sm" style=""><i class="fa fa-sign-out fa-fw"></i> Back</button></a>

                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">

                                            <!-- <li><a href="package.php">Main Menu</a></li> -->

                                            <li class="active"> / View company Information</li>

                                        </ol>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <style>

                        label.label-company {

    text-align: right;

    width: 170px;

    margin-right: 10px;

}

.form-group {

  margin: 0;

  padding-bottom: 10px;

  margin: 20px 0 0 0;

}

.Boxcompany{

    width: 68%;

    display: inline-block;

}

                    </style>

                     <div class="row" style="margin-top: 20px;">

                    <div class="col-md-12"> 

                        <div class="" ng-if="!initCompany">

                        <div class="form-group">

                          <label class="label-company" >City <span>:</span> </label>

                          <span class="form-control box-info-lg Boxcompany" size="53" ng-bind="dataCompany.city"></span>

                        </div>

                        <div class="form-group">

                            <label class="label-company">Company name<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany" ng-bind="dataCompany.company_name"></span>

                            <!--<input type="text" class="form-control" size="50" maxlength="100"-->

                            <!--name="company_name" value="{{company.company_name}}" readonly>-->

                        </div>

                       <!--  <div class="form-group">

                            <label class="label-company">TAT Number<span> :</span></label>

                            <span class=" form-control box-info-lg Boxcompany" >{{dataCompany.tat_numbers}}</span>

                           

                        </div> -->

                        <div class="form-group">

                            <label class="label-company">Phone<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany" ng-bind="'+'+dataCompany.phonecode+dataCompany.phone"></span>

                            <!--<input type="text" class="form-control" size="20" maxlength="14"-->

                            <!--name="company_phone" value="{{company.phone}}" readonly>-->

                        </div>

                        

                        <div class="form-group">

                            <label class="label-company">FAX<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany"  ng-bind="dataCompany.fax"></span>

                            <!--<input type="text" class="form-control" size="20" maxlength="20"-->

                            <!--name="company_fax" value="{{company.fax}}" readonly>-->

                        </div>

                        <div class="form-group">

                            <label class="label-company">Detail<span> :</span></label>

                            <span class=" form-control box-info-lg Boxcompany" ng-bind="dataCompany.detail"></span>

                            <!--<input type="text" class="form-control" size="50" maxlength="30"-->

                            <!--name="company_detail" value="{{company.detail}}" readonly>-->

                        </div>

                        <div class="form-group ">

                            <label class="label-company">Address<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany" ng-bind="dataCompany.address"></span>

                            <!--<textarea class="form-control" maxlength="100" rows="2" cols="52"-->

                            <!--name="company_address" readonly>{{company.address}}</textarea>-->

                        </div>

                        <div class="form-group">

                            <label class="label-company">E-mail<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany" ng-bind="dataCompany.email"></span>

                            <!--<input type="text" class="form-control" size="50" maxlength="50"-->

                            <!--name="company_email" value="{{company.email}}" readonly>-->

                        </div>

                        <div class="form-group">

                            <label class="label-company">Website<span> :</span></label>

                            <span class=" form-control box-info-lg Boxcompany" ng-bind="dataCompany.website"></span>

                            <!--<input type="text" class="form-control" size="50" maxlength="40"-->

                            <!--name="company_website" value="{{company.website}}" readonly>-->

                        </div>

                        <div class="form-group ">

                            <label class="label-company">Operating Hours<span> :</span></label>

                            <span class="form-control box-info-lg Boxcompany" ng-bind="dataCompany.operation"></span>

                            <!--<textarea class="form-control" maxlength="100" rows="2" cols="52"-->

                            <!--name="company_address" readonly>{{company.address}}</textarea>-->

                        </div><br>



                        <div class="btn-margin-company" id="group-btnedit">

                            <a ng-show="role == 1 || role == 2" type="button" class="btn btn-warning bt-cc" data-target="#myModal" data-toggle="modal" ng-click="sectioneditcompany()">

                                <span class="fa2 fa fa-pencil-square-o " aria-hidden="true" ></span> Edit Company

                            </a>

                            <!--<a  ng-show="iTravelAdmin || isAdmin" href="/company/gallery.html#?id={{company.company_id}}" type="button" class="btn btn-success bt-cc">

                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Photo

                            </a>

                            <a  ng-show="iTravelAdmin || isAdmin" href="/company/media.html#?id={{company.company_id}}&type=image" type="button" class="btn btn-info bt-cc">

                                <i class="glyphicon glyphicon-picture"></i> Show Gallery

                            </a>-->

                            <!--<a  ng-show="iTravelAdmin || isAdmin" href="/company/media.html#?id={{company.company_id}}&type=video" type="button" class="btn btn-info bt-cc">

                                <i class="glyphicon glyphicon-facetime-video"></i> Show Video

                            </a>-->

                            <!-- <a  ng-show="iTravelAdmin || isAdmin" href="/company/social.html#?id={{company.company_id}}" type="button" class="btn btn-info bt-cc">

                                <i class="fa fa-facebook-square fa-fw"></i> Social Media

                            </a> -->



                             <a ng-if="role == 1 || role == 2" data-toggle="modal" data-target="#remove" type="button" ng-click="setIndex($index)" class="btn btn-danger bt-cc">



                                       <span class="fa fa-trash-o fa2" aria-hidden="true"></span> Remove

                            </a>

                            <!--<a ng-show="iTravelAdmin" href="/company/showAllCompany.html">-->

                            <!--<button type="button" class="btn btn-default btn-back">Back</button></a>-->





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

#group-btnedit{

    margin-left: 184px;

}

label.label-editcompany{

                    text-align:  right;

                    width: 120px;



                }

                #eInputPhone{

                    margin-top: 30px;

    margin-bottom: 0;

    margin-left: 120px;

                }

                @media screen and (max-width: 767px){





                .checkbox-popular{

                     margin-left: 0;

                }

                .radio-type{

                     margin-left: 0;

                }

                label.label-company{

                    text-align: left;

                }

                .box-package-detail{

                    width: 100% !important;

                }

                .fileinput{

                        margin-bottom: 0;

                        margin-left: 0;

                }

                #group-btnedit{

                    margin-left: 0;

                }

                label.label-editcompany{

                    text-align:  left;



                }

                #eInputPhone{

                    margin-top: 30px;

    margin-bottom: 0;

    margin-left: 0;

                }

                </style>

                <!-- Modal -->

                <div class="modal fade" id="myModal">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>

                                <h4 class="modal-title">Edit Company</h4>

                            </div>



                            <form class="form-inline">



                                <div class="modal-body">



                                    <input type="hidden" class="form-control"  name="company_id" value="{{company.company_id}}">



                                    <input type="hidden" class="form-control "  name="token" value="{{token}}">



                                    <div class="form-group form-inline">



                                        <label class="label-editcompany">Company Name<span> :</span></label>



                                        <input type="text" class="cc-view form-control " size="51.5"   maxlength="100" name="company_name" ng-value="company_name" ng-model="company_name">

                                    </div>



                                    <!-- <div class="form-group form-inline">

                                        <label class="label-editcompany">TAT Number<span> :</span></label>

                                        <input type="text" class="cc-view  form-control" size="52" maxlength="20"  id="tat_number" name="tat_number" ng-value="tat_numbers" ng-model="tat_numbers">

                                    </div> -->



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Phone<span> :</span></label>

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

                  

                

                                               

                                                        <input type="text" class="form-control " name="selectcountryValue" id="labelcun" name="phonecode"  ng-value="selectcountryValue"  disabled  size="18"  placeholder="Code country">

                                                           

                                                        <br/>

                                                        <input type="text" class="form-control" name="phone" ng-model="phone" id="eInputPhone" placeholder="Phone" size="52" style="margin-top: 20px;">

                                    </div>

                                   



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Fax<span> :</span></label>

                                        <input type="text" class="cc-view  form-control" size="52" maxlength="20" name="fax" ng-model="fax" id="fax" ng-value="fax" >

                                    </div>



                                    <div class="form-group form-inline">



                                        <label class="label-editcompany">Detail<span> :</span></label>

                                        <textarea class=" cc-view form-control"  rows="2" name="detail" ng-model="detail" id="detail" cols="52"  ng-value="detail"></textarea>



                                    </div>



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Address<span> :</span></label>

                                        <textarea class=" cc-view form-control"  rows="2" cols="52" name="address" ng-model="address" id="address" ng-value="address"></textarea>

                                    </div>



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Email<span> :</span></label>

                                        <input type="email" class=" cc-view form-control" size="52" maxlength="100" name="email" ng-model="email" id="email" ng-value="email" >

                                    </div>



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Website<span> :</span></label>

                                        <input type="url" class="cc-view form-control" size="52" maxlength="40" name="website" ng-model="website" id="website" ng-value="website" >

                                    </div>



                                    <div class="form-group form-inline">

                                        <label class="label-editcompany">Operating Hours<span> :</span></label>

                                        <input type="text" class="cc-view form-control" size="52" name="operation" ng-model="operation" id="operation" ng-value="operation" >

                                    </div>







                                </div>

                                <div class="modal-footer">

                                    <button ng-show="role == 1 || role==2" type="submit" class="btn btn-success" id="bt-view" ng-click="saveeditcompany()">

                                        <span class="fa2 fa fa-floppy-o" aria-hidden="true"></span> Save</button>

                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()" id="bt-view">Close</button>

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

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                <h4 class="modal-title" >Company</h4>

                            </div>

                            <div class="modal-body">

                                <div>Are you sure to delete tour {{dataCompany.company_name}}</div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deleteCompany(data)">Remove</button>

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

    width: 52%;

    /*margin: 0.5rem 5%;*/

    padding: 1.25rem;

    display: inline-block;

    background-color: #FAFAFA;

    border: 1px solid #e3e3e3;

    border-radius: 4px;

    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);

    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);

    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05)

    }



            #InputPassPhone {

    margin-bottom: 20px;

}

    #InputPassPhone{

        /*margin-bottom: 20px;*/



    }

    #select-country {

        text-align: center;

    border: 1px solid #cccccc;

    /*border-radius: 5px;*/

    display: inline-block;

    padding: 6px 50px;

     /*width: 65%; */

    /* margin-left: 5%; */

     /*margin-bottom: 20px; */

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

    margin-left: 138px;

    border-radius: 0 0 5px 5px;

   

   /* margin-top: -16px;

    margin-left: 22.5%;*/



}

#labelcun{

    background-color: #fff;

    margin: 0;

    /*margin-bottom: 20px;*/

        border-bottom: 1px solid #ddd;

}

.cu-name li{

   padding: 3px 35px;

   /*color: #fff; */

}

.cu-name li:hover{

    background: #e91e63;

    color: #fff !important;

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

                    $http({

                            method: 'POST',

                            url : "../php/getCompanybyid.php",

                            data : $.param({'id':$scope.data}),

                            headers : {'Content-Type': 'application/x-www-form-urlencoded'}

                        }).success(function(res) {

                            //console.log(res)

                            $scope.dataCompany =res[0];

                            

                            //console.log( $scope.company)

                        });

                   

                

      }

      else

      {

        $scope.loginstatus = true;

        $window.location.href="../login.php";

      }



      

    }

    $scope.sectioneditcompany = function(){

        $scope.ideditcompany = $scope.dataCompany.id;

          $scope.company_name  = $scope.dataCompany.company_name;

        $scope.city  = $scope.dataCompany.city;

        $scope.tat_numbers  = $scope.dataCompany.tat_nambers;

        $scope.phone  = $scope.dataCompany.phone;

        $scope.email  = $scope.dataCompany.email;

        $scope.fax  = $scope.dataCompany.fax;

        $scope.detail  = $scope.dataCompany.detail;

        $scope.website  = $scope.dataCompany.website;

        $scope.operation  = $scope.dataCompany.operation;

        $scope.selectcountryValue = '+'+$scope.dataCompany.phonecode;

        $scope.address = $scope.dataCompany.address;

       // $scope.selectcountryValue = $scope.dataCompany.phonecode;



        

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

        $scope.dataphonecode = i.phonecode;

      $scope.phonesend = $scope.selectcountryValue;

     

      //console.log($scope.selectcountryValue)

    }

    $scope.saveeditcompany = function(){

        if ($scope.dataphonecode == undefined) {

            $scope.dataphonecode = $scope.dataCompany.phonecode;

        }

       

        //console.log($scope.ideditcompany )

        //console.log($scope.company_name )

        //console.log($scope.city )

        //console.log($scope.tat_numbers )

        //console.log($scope.phone )

        //console.log($scope.email )

        //console.log($scope.fax )

        //console.log($scope.detail )

        //console.log($scope.website )

        //console.log($scope.dataphonecode)

        //console.log($scope.address)

        





        $http({

                method : 'POST',

                url : "../php/editCompany.php",

                data: $.param({'id': $scope.ideditcompany

                            ,'comname': $scope.company_name

                            ,'city': $scope.city

                            ,'tat_numbers': $scope.tat_numbers

                            ,'phone': $scope.phone 

                            ,'email': $scope.email

                            ,'fax': $scope.fax

                            ,'detail': $scope.detail

                            ,'website': $scope.website

                            ,'operation': $scope.operation

                            ,'phonecode':$scope.dataphonecode

                            ,'address': $scope.address

                            



                            

                            }), 



                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                 //console.log(res)

                 //console.log("asasasasas")

                 $window.location.reload();

                 

                       

           });

   

  

  

                       



  }

   $scope.deleteCompany = function(data){

    //console.log(data)

    $http({

                            method : 'POST',

                            url : "../php/removeCompany.php",

                            data: $.param({'id': $scope.data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                $window.location.href = 'company.php';

                            });

                       



  }

    

     $scope.profile = function(){

        location.href="profile";



    }



    $scope.deletePackage = function(data){

    //console.log(data)

    $http({

                            method : 'POST',

                            url : "../php/removePackage.php",

                            data: $.param({'id': $scope.data}),

                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                            }).success(function(res){

                                //console.log(res)

                                //$window.location.reload();

                            });

                       



  }

    

    

    

    $scope.logout = function(){

            $cookies.remove("login");

           

            $window.location.href = '../login.php';

    }

        

        

});

    </script>

</html>