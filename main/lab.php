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

    <link href="https://720kb.github.io/angular-datepicker/assets/ext/src/css/angular-datepicker.css" rel="stylesheet" type="text/css" />

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

                                        <i class="material-icons">local_offer</i> Lab

                                    </a>

                                </li>

                                 

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

                                    <!-- <li class="">

                                        <a  >

                                       <i class="material-icons">settings</i>Settings

                        

                                        </a>

                                    </li> -->

                                    <li ng-click="clicklogout()">

                                        <a >

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

    text-align: left;

    width: 115px;

    margin-right: 10px;

}

.form-group {

  margin: 0;

  padding-bottom: 10px;

  margin: 20px 0 0 0;

}

/*.timeline:before {

    content: '';

    position: absolute;

    top: 0;

    bottom: 0;

    width: 4px;

    background: #ddd;

    left: 31px;

    margin: 0;

    border-radius: 2px;

}*/





.cirnumbershowok {

    border-radius: 50%;

    background-color: #009999;

    padding: 10px;

    width: 50px;

    height: 50px;

    margin-left: -25px;

    font-size: 18px;

    font-weight: 500;

    border: solid 4px #FFFFFF;

    box-shadow: 0 0 0px 0px #E8E6E6;

    position: absolute;

    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #009999), color-stop(1, #18B5B5)) !important;

    color: #fff;

}

                    </style>

            <div class="content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12"> 

                            <div class="row">                            

                                <div class="" style="background: #fff; padding-left: 10px;">                                

                                    <div class="navigate" >

                                       <!--  <a href="new-users.php">

                                            <button type="button" class="btn btn-success btn-sm" style=""><i class="fa fa-plus padding-icon" aria-hidden="true"></i> New</button></a> -->

                                        <ol class="breadcrumb" style="margin: 0;padding: 11px;padding-bottom: 0;background: #fff; display: inline-block; ">

                                            <!-- <li><a href="package.php">Main Menu</a></li> -->

                                            <li class="active"><span>/</span> Lab</li>

                                        </ol>

                                    </div>

                                </div>

                            </div>

                        </div>

                       <!--  <div class="col-md-12">

                             

                        </div> -->

                     <style >

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



.timeliness > li > .timeline-item > .time {

    color: #999;

    float: right;

    padding: 10px;

    font-size: 12px;

}





.btn-startwork:hover {

    background-color: #999999;

    box-shadow: 0 0 3px 3px #f6f6f6;

    cursor: pointer;

}



.btn-startwork {

    border-radius: 4px;

    background-color: #3C8DBC;

    padding: 12px;

    /* padding-top: 3px; */

    padding-left: 25px;

    border: solid 2px #F6F6F6;

    font-size: 20px;

    font-weight: bold;

    color: #FFFFFF;

}





.timeline > .time-label > span {

    font-weight: 600;

    padding: 5px;

    display: inline-block;

    background-color: #fff;

    border-radius: 4px;

}





.timeline > li {

    position: relative;

    margin-right: 10px;

    margin-bottom: 15px;

}

.header-work ul{

    list-style: none;padding-left: 0;

}

.timeliness {

    list-style: none;

    padding-left: 0;

}

.timeliness li{

    

    padding: 0 45px;

}

.timeline-header a {

    font-size:18px;

    color:#006699; 

    font-weight:bold;

    padding:3px;

}

.timeline-header {

    font-size:18px;

    color:#006699; 

    font-weight:bold; 

    padding:3px;

}

.timeline-l { 

    padding:5px;

    margin-left:20px;

}





.timeline-item {

    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);

    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);

    border-radius: 3px;

    /* margin-top: 0; */

    /*background: #ffffff;*/

    /*color: #444;*/

    /* margin-left: 60px; */

    /* margin-right: 15px; */

    /*padding: 5px;*/

    /* position: relative; */

}





.timeliness > li > .fa, .timeliness > li > .glyphicon, .timeliness> li > .ion {

width: 30px;

    height: 30px;

    font-size: 15px;

    padding: 6px;

    /* color: #666; */

    /* background: #d2d6de; */

    border-radius: 50%;

    /* text-align: center; */

    /* left: 18px; */

    /* top: 0; */

    color: #fff;}



.bg-blue {

    background-color: #0073b7 !important;

}



element.style {

    z-index: 1;

    background-color: #FF6600;

}



.bg-green {

    background-color: #1CC1A4 !important;

}





.btn-app > .badge {

    position: absolute;

    top: -3px;

    right: -10px;

    font-size: 10px;

    font-weight: 400;

}

                     </style>

                      

                       <div class="col-md-12">

                           <div class="form-group">

                                        <div class="form-title" >

                                            <span ng-if="flagcheck == 1">date :</span>

                                            <span ng-if="flagcheck == 2">วันที่ :</span>

                                            <span ng-if="flagcheck == 3">日期 :</span>

                                        </div>

                                              <input class="form-control booking-input" type="text" value="" id="booking-date" ng-model="nowshow " style="    background: #fff;" required />

                                              <i class="fa fa-calendar" id="calen" aria-hidden="true" style="color: #9E9E9E"></i>

                                    </div>

                                       

                <div class="card" style="padding-top: 25px;margin-top: 0">

                    <div class="row">

                        

 

   <!-- The time line -->

        <div class="header-work">

            <ul>                      

                <li class="time-label" style="">

                    <div class="font_35" align="center" style="margin: auto;

    font-size: 20px;

    font-weight: 400;

    width: 90%;

    border-radius: 4px;

    padding: 12px;

    color: #ffffff;

    background-color: #06c10e;">  

                        <center ng-bind="newdate"></center>

 

                    </div>   

                          <div style="margin-top:15px; margin-left:5px; margin-bottom:-10px; "><center>

              <a id="btn-all-2017-06-10" class="btn btn-app" style="padding: 5px;

    /*height: 35px;*/

    width: 25%;

    font-size: 15px;

    text-transform: capitalize;">

                <span class="badge" style="border-radius: 25px;padding:5px; height:25px; width:25px; padding-top:3px; font-size:18px;border:1px solid #FFFFFF; "><b ng-bind="bookingselect.length"></b></span>

        All Booking

              </a>   

              

              

              

              <a id="btn-no-2017-06-10" class="btn btn-app" style="padding: 5px;

    /*height: 35px;*/

    width: 25%;

    font-size: 15px;

    margin: 10px 15px;

    text-transform: capitalize;             

                ">

                <span class="badge bg-red" style="border-radius: 25px;padding:5px; height:25px; width:25px; padding-top:3px; font-size:18px;border:1px solid #FFFFFF; "><b ng-bind="bookingcheckincomplete.length"></b></span>

        Waiting

              </a>   <a id="btn-yes-2017-06-10" class="btn btn-app" style="padding: 5px;

    /*height: 35px;*/

    width: 25%;

    font-size: 15px;

    text-transform: capitalize;  

                       

              ">

                <span class="badge bg-green" style="border-radius: 25px;padding:5px; height:25px; width:25px; padding-top:3px; font-size:18px;border:1px solid #FFFFFF; "><b ng-bind="bookingcheckcomplete.length"></b></span>

        Complete

              </a>  

            </center>  

 

          

            </div>

              

              

              

        </li>

            </ul>

        </div>

        <div class="" ng-repeat="item in bookingselect" style="margin-bottom: 10px;">

             <ul class="timeliness" >

                <li style="margin-bottom: 40px;" > 

         

                <div  > 

                    <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: 20px ">

                         

                        <tr>

                            <td width="30" style="background-color:#F6F6F6 ">

                                <div class="cirnumbershowok" id="cir_7057395">

                                    <table width="100%" border="0" cellspacing="1" cellpadding="1">

                                        <tr>

                                             <td style="font-size:30px; color:#FFFFFF; font-weight:bold "><center ng-bind="$index+1"></center></td>

                                         </tr>

                                    </table>

                                </div> 

                            </td>

            

                            <td valign="middle" style="font-size:16px ; font-weight:bold; padding-top:5px;">

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                    <tr> 

                                        <td style="font-size:26px ;color: #3399CC; color:#444444  " width="35">&nbsp;<i class="material-icons" ng-if="item.area == 'In'">flight_land</i>

                                        <i class="material-icons" ng-if="item.area == 'Out'">flight_takeoff</i></td>

                                        <td style="font-size:16px ; font-weight:500"><span style="margin-left: 10px;">In</span></td>

                                        <td align="right" ng-if="item.alert == 0">

                                            <button  ng-click="acknowledge(item.id)" class="btn btn-danger btn-sm pull-right" id="notibutton">Acknowledge<div class="ripple-container" style="text-transform: capitalize;font-size: 15px;"></div></button>

                                        </td>

                                        <td ng-if="item.alert == 1">

                                        <button  class="btn btn-warning btn-sm pull-right" style="text-transform: capitalize;

    font-size: 15px;"><img src="../files/img-/yes.png" style="width: 23px;

    position: absolute;

    right: 0;

    margin-top: -12px;

    margin-right: -5px;

    border: solid 3px #fff;

    border-radius: 50%;"> Acknowledge<div class="ripple-container"></div></button>

                                        </td>

                                  </tr>

                                </table> 

                            </td>

                        </tr>

                    </table>

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

             

                    <div class="btn-startwork">

                        <span ng-bind="item.ondate"></span>&nbsp;&nbsp;

                        <span ng-bind="item.ontime"></span> Start                         

                    </div>

                    <div class="timeline-body">                

                        <div style="margin-top:10px; font-size:16px; font-weight:500; background-color:#F6F6F6; padding:5PX; "> 

                        <span ng-bind="item.package_name"></span>

                        </div>

                    </div>

                </div>

            </li>

           

            <!-- END timeline item -->

            <!-- timeline item -->

            <li class="tab-yes-2017-06-10">

              <i class="fa  fa-map-marker bg-blue" style="z-index: 1;

    padding: 9px; "></i>

              <span class="timeline-header">Pickup place</span>



              <div class="timeline-item" style="margin-left:40px; display: inline;">

     

                <span class="time" style="font-size:16px">

                   <i class="fa fa-clock-o   fa-spin 2x" style="color:#009999;font-size:26px"></i>

                       <div style="font-size:16px; margin-top:-22px; margin-left:25px;">



                            <font color="#009999"><b><span ng-bind="item.ontime"></span></b></font>

                        </div>

                                

                </span> 

                <div class="timeline-body" style="padding: 15px 40px;" >

                    <span ng-bind="item.pickup_place"></span>

                </div>

                

                

              </div>

            </li>



            <li class="tab-yes-2017-06-10">

              <i class="fa fa-users bg-blue" style="z-index: 1; "></i>

              <span class="timeline-header">Receive guests</span>



              <div class="timeline-item" style="margin-left:40px; display: inline;">

     

                <span class="time" style="font-size:16px">

                   

                </span> 

                <div class="timeline-body" style="padding: 15px 40px;" >

                   <table width="100%" border="0" cellspacing="0" cellpadding="0" style="">

                        <tr>

                            <td width="25"><i class="fa fa-address-book-o" style="color: #999"></i>

                            </td>

                            <td style="color:#666666;font-size:16px"><span ng-bind="item.name"></span>

                            </td>

                        </tr>

                    </table>



                <table width="100%" border="0" cellspacing="0" cellpadding="0" >

                    <tr>

                        <td width="25"><i class="fa fa-male" style="color:#999999; font-size:16px"></i>

                        </td>

                        <td style="color:#666666;font-size:16px">   Adult : <span ng-bind="item.adult"></span>&nbsp;

                        </td>

                    </tr>

                    <tr>

                        <td width="25"><i class="fa fa-child" style="color:#999999; font-size:16px"></i>

                        </td>

                        <td style="color:#666666;font-size:16px">   Child : <span ng-bind="item.child"></span> &nbsp;

                        </td>

                    </tr>

                </table>

                <table width="100%" border="0" cellspacing="0" cellpadding="0" >

                    <tr>

                        <td width="25"><i class="fa  fa-phone" style="color:#999999; font-size:18px"></i></td>

                        <td style="color:#666666;font-size:16px"><b><span ng-bind="'+'+item.phonecode+item.phone"></span>  </b></td>

                    </tr>

                </table>

            </div>

                

                

              </div>

            </li>

            <li class="tab-yes-2017-06-10">

              <i class="fa  fa-map-marker bg-blue" style="z-index: 1;

    padding: 9px; "></i>

              <span class="timeline-header">To place</span>



              <div class="timeline-item" style="margin-left:40px; display: inline;">

     

                <span class="time" style="font-size:16px">

                 

                                

                </span> 

                <div class="timeline-body" style="padding: 15px 40px;" >

                    <span ng-bind="item.to_place"></span>

                </div>

                

                

              </div>

            </li>

           <li class="tab-yes-2017-06-10" ng-if="item.area == 'In'">

              <i class="fa  fa fa-plane bg-green" style="z-index: 1; padding: 9px; "></i>

              <span class="timeline-header">Flight</span>



              <div class="timeline-item" style="margin-left:40px; display: inline;">

     

                <span class="time" style="font-size:16px">

                  

                </span> 

                <div class="timeline-body" style="padding: 15px 40px;" >

                    <span ng-bind="item.flight"></span>

                </div>

                

                

              </div>

            </li>

          </ul>



          <div class="col-md-12">

          <i ng-if="item.complete == 1" class="fa fa-clock-o pull-left" style="font-weight: 400;

    margin-left: 34px;

    margin-top: 10px;

    color: #999999;

    font-size: 26px;"></i>

          <div ng-bind="item.complete_date*1000 | date:'dd/MM/yyyy HH:mm'" ng-if="item.complete == 1" style="    display: inline-block;

    float: left;

    font-size: 16px;

    font-weight: 400;

    margin-left: 10px;

    margin-top: 12px;"></div>

          <button class="btn btn-rose btn-sm pull-right" style="z-index: 100;margin-right: 20px;text-transform: capitalize;" ng-click="complete(item.id)">Complete</button></div>

          <hr/ style="color: #000;margin-top: 55px;">

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

  <script src="https://720kb.github.io/angular-datepicker/assets/ext/src/js/angular-datepicker.js"></script>





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

    background: #55caf5;

}

@media screen and (max-width: 767px){



#InputPassPhone {

    margin-left: 0;

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

  // //console.log(datenow)

  // //console.log(text1)

  // //console.log(text2)

  // //console.log(text3)

  // //console.log(text4)

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

    format: 'dd/mm/yyyy',

    formatSubmit: 'dd/mm/yyyy',

    editable: false,

    min: new Date(),

    firstDay: 0



    //disable: [ { from: from, to: new Date(text1) } ]

  });

});

    </script>

<script>

    var app = angular.module('myApp',['ngCookies']);

    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){

        loadpage();

        $scope.role;

        $scope.imgcoutry = '';

         $scope.Countryfont = " Please select country";

        //$scope.btnsave = true;

        $scope.selectcountryValue;

        $scope.btnsave = false;

        $scope.editID;

         $scope.userId = $cookies.get('login');

        $scope.search_box_list = 'Search By';

        $scope.bookingselect= [];

        $scope.bookingcheckcomplete = [];

        $scope.bookingcheckincomplete =[];

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

                    method: 'post',

                    url: "../php/getBookinglog.php",                    

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    

                    $scope.dataBooking = res;

                    $scope.newdate = $filter('date')(new Date(),'dd/MM/yyyy');

                    //console.log($scope.newdate)

                angular.forEach($scope.dataBooking, function (data) {

                    //console.log(data.ondate)

                            if ($scope.newdate == data.ondate) { 

                                $scope.bookingselect.push(data)

                                if (data.complete == '0') {

                                    $scope.bookingcheckincomplete.push(data)

                                } 

                                if (data.complete == '1') {

                                    $scope.bookingcheckcomplete.push(data)

                                }                                      

                                

                                            

                            }

                        });

                    //console.log($scope.bookingselect)

                    

                    

             }); 

            //     $http({

            //         method : 'POST',

            //         url : "../php/getCountry.php",

            //         //data: $.param({sv: $scope.dataSV}),

            //         headers: {'Content-Type': 'application/x-www-form-urlencoded'}

            //         }).success(function(res){

            //             $scope.country = res;

            //             //console.log(res)

            // });

            $('#booking-date').on('change',function(){

                 $scope.bookingselect = [];

                 $scope.bookingcheckincomplete =[];

                 $scope.bookingcheckcomplete = [];

                //console.log(this.value)

                $scope.dates = this.value;

                $scope.ondate = $filter('date')(new Date(this.value),'dd/MM/yyyy');

                //console.log($scope.ondate)

                    //console.log($scope.dataBooking)

                    $scope.newdate = $filter('date')(new Date(),'dd/MM/yyyy');

                    //console.log($scope.newdate)

                angular.forEach($scope.dataBooking, function (data) {

                    //console.log(data.ondate)

                            if (data.ondate == $scope.dates) {

                                var x = data.ontime.split(':');

                                //console.log(x)

                                 //data.ontime1 =  

                                 $scope.bookingselect.push(data)                                      

                                if (data.complete == '0') {

                                    $scope.bookingcheckincomplete.push(data)

                                } 

                                if (data.complete == '1') {

                                    $scope.bookingcheckcomplete.push(data)

                                }  

                                            

                            }

                            

                                

                        });

                //console.log($scope.bookingselect)

            })

            // $scope.getworking = function(){

            //     //console.log('aaaa')

            //     $scope.date = $('#booking-date').val();

            // //console.log($scope.date)

            // var slitedDate = $scope.date.split(" ");

            // //console.log(slitedDate)

            // slitedDate[1] = slitedDate[1].replace(',', '');

            // var d = new Date(slitedDate);

            // d.setDate(slitedDate[0]);

            // d.setMonth(monthMatcher[slitedDate[1]]);

            // d.setYear(slitedDate[2]);

            // $scope.d = d.toISOString();

            // $scope.ondate = $filter('date')(new Date($scope.d),'MM-dd-yyyy');

            // }

            }

            else

            {

                $window.location.href = 'login.php';

            }

        }

        $scope.acknowledge =function(x){

            //console.log(x)

            $http({

                    method: 'post',

                    url: "../php/updateAlert.php",

                    data: $.param({'id': x}),                    

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    

                    //console.log(res)

                    $window.location.reload();

                   

                    

             }); 

        }

        $scope.complete =function(x){

            //console.log(x)

            $http({

                    method: 'post',

                    url: "../php/updateComplete.php",

                    data: $.param({'id': x}),                    

                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function (res) {

                    

                    //console.log(res)

                    $window.location.reload();

                   

                    

             }); 

        }

        $scope.logout = function(){

            $cookies.remove("login");

          

            $window.location.href = '../login.php';

        }

        $scope.clicklogout = function(){

            $('#logout').modal('show');

        }

        // data-toggle="modal" data-target="#logout"

        

  

          

    

       

                 

    });



    </script>

</html>