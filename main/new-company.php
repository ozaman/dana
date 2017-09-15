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

                    DN

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

                                 <li>

                                    <a href="../report/account.php">

                                    <i class="material-icons">account_balance_wallet</i>

                                         Account

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

                                    <li data-toggle="modal" data-target="#logout">

                                         <a >

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

             <style>

                        label.label-company {

    text-align: right;

    width: 115px;

    margin-right: 10px;

}

.form-group {

  margin: 0;

  padding-bottom: 10px;

  margin: 20px 0 0 0;

}

@media screen and (max-width: 767px){

    label.label-company {

    text-align: left;

}

 #InputPassPhone{

        /*margin-bottom: 20px;*/



    }

    #select-country {

   

     margin-bottom: 20px; 

}

       

#labelcun{

   

    margin-bottom: 20px;

       

}

#labelcun{

    margin-bottom: 20px !important;

}

}

                    </style>

          

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

                                            <li class="active"> / New company</li>

                                        </ol>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                     <div class="col-lg-12">

                        <form class="form-inline">



                          <div class="form-group">

                            <input type="hidden" class="form-control" name="token" value="{{token}}">

                            <input type="hidden" class="form-control" name="city" value="{{city}}">

                          </div>

                          <div>

                              <div class="form-inline btn-group " style="width: 100%">

                                            <label for="class" class="label-company" >City<span> :</span></label>

                                            <select name="city" id="city"  class="form-control col-md-8" required style=" border: 1px solid #ccc; border-radius: 5px;" ng-model="city">

                                                <option>Phuket</option>

                                                <option>Phang nga</option>

                                                <option>Krabi</option>

                                                <option>Phi Phi island</option>

                                                <!--<option>Standard Class</option>-->

                                            </select>

                                        </div>

                          </div>

                            <div class="form-group form-inline">

                                <label class="label-company">Company Name<span> :</span></label>

                                <input type="text" class="cn-view form-control" size="100" maxlength="100" name="company_name" ng-model="company_name" placeholder="Company Name" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')">

                            </div>



                            <!-- <div class="form-group form-inline">

                                <label class="label-company">TAT Number<span> :</span></label>

                                <input type="text" class="cn-view form-control" size="100" maxlength="20" name="tat_number" ng-model="tat_number" placeholder="TAT Number" id="tat_number" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')" pattern="^[0-9]+$" title="Please input number only.">

                            </div> -->



                            <div class="form-group form-inline">

                                <label class="label-company">Phone<span> :</span></label>

                                           

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

                  

                

                                               

                                                        <input type="text" class="form-control " name="selectcountryValue" id="labelcun" name="phonecode"  ng-value="selectcountryValue"  disabled  size="10"  placeholder="Code country">

                                                           

                                                 

                                                        <input type="text" class="form-control" name="phone" ng-model="phone" id="InputPassPhone" placeholder="Phone" size="49.5" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')" pattern="^[0-9]{8,9}$" title="Please input Phone No. 9 or 10 digits.And first digits must be 0">

                                                       

                                                        

                                    





                                

                            </div>

                            <!-- <div class="form-group form-inline">

                                <label class="label-company">Phone2<span> :</span></label>

                                <input id="phone2" type="tel" class="cn-view form-control" size="100" maxlength="14" name="phone2" placeholder="Phone2 No." pattern="^[0][0-9]{8,9}$" title="Please input Phone No. 9 or 10 digits.And first digits must be 0">

                            </div>

 -->

                            <div class="form-group form-inline">

                                <label class="label-company">Fax<span> :</span></label>

                                <input type="text" class="cn-view form-control" size="100" maxlength="20" name="fax" ng-model="fax" placeholder="Fax" id="fax" pattern="^[0-9]+$" title="Please input number only.">

                            </div>



                            <div class="form-group form-inline">

                                <label class="label-company">Detail<span> :</span></label>

                                <textarea class="cn-view form-control"  rows="2" cols="100" name="detail" ng-model="detail" placeholder="Detail"></textarea>

                            </div>



                            <div class="form-group form-inline">

                                <label class="label-company">Address<span> :</span></label>

                                <textarea class="cn-view form-control" rows="2" cols="100" name="address" ng-model="address" placeholder="Address" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')"></textarea>

                            </div>



                            <div class="form-group form-inline">

                                <label class="label-company">Email<span> :</span></label>

                                <input type="email" class="cn-view form-control" size="100" maxlength="100" name="email" ng-model="email" placeholder="example@example.com" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')">

                            </div>



                            <div class="form-group form-inline">

                                <label class="label-company">Website<span> :</span></label>

                                <input type="url"  class="cn-view form-control" size="100" maxlength="40" name="website" ng-model="website" placeholder="http://www.example.com">

                            </div>



                            <div class="form-group form-inline">

                                <label class="label-company">Operating Hours<span> :</span></label>

                                <input type="text" class="cn-view form-control" name="operation" ng-model="operation" size="100"placeholder="Operation" required oninvalid="this.setCustomValidity('This information is required.')" oninput="setCustomValidity('')">

                            </div>





                        <div style="float: right;   margin-right: 9.5%;">

                            <button type="submit" class="bt-comnew btn btn-success" id="bt-view" ng-click="savenewcompany()">

                            <span class="fa2 fa fa-floppy-o" ></span> Save</button>



                          <button type="button" class="btn btn-default" id="bt-view">Cancel</button>

                        </div>



                          

                        </form>





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

            #InputPassPhone {

    /*margin-bottom: 20px;*/

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

    border: 1px solid #ccc;

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

        border-bottom: 1px solid #ccc;

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

    function checkURL (abc) {

      var string = abc.value;

        if (!~string.indexOf("www")){

          string = "http://" + "www." + string;

        }

        else if (~string.indexOf("www")){

          string = "http://" + string;

        }

        abc.value = string;

        return abc

    }

    validate = function(){

        var phone1 = document.getElementById("phone1").value;

        var phone2 = document.getElementById("phone2").value;

        var ok = true;

        if (phone1 == phone2){

            alert("Phone2 is same phone")

            document.getElementById("phone1").style.borderColor = "#E34234";

            document.getElementById("phone2").style.borderColor = "#E34234";

            ok = false;

        }

        if (phone1 != phone2){

            document.getElementById("phone1").style.borderColor = "#CCC";

            document.getElementById("phone2").style.borderColor = "#CCC";

        }

        return ok;



    }

    var app = angular.module('myApp',['ngCookies']);

    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter){

        

        $scope.imgcoutry = '';

         $scope.Countryfont = "      Please select country";

                 loadpage();

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

        $scope.savenewcompany = function(){







           















        //console.log($scope.company_name )

        //console.log($scope.city )

        //console.log($scope.tat_number )

        //console.log($scope.phone )

        //console.log($scope.email )

        //console.log($scope.fax )

        //console.log($scope.detail )

        //console.log($scope.website )

        //console.log($scope.operation )

        //console.log($scope.dataphonecode)

        //console.log($scope.address)





        $http({

                method : 'POST',

                url : "../php/addCompany.php",

                data: $.param({'comname': $scope.company_name

                            ,'city': $scope.city

                            ,'tat_number': $scope.tat_number

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

                 ////console.log("asasasasas")

                 $window.location.href='company.php';

                 

                       

            });

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

        



       

                 

    });

    </script>

</html>