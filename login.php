<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="" />
    <link rel="icon" type="image/png" href="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>dana tours asia</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    
    <!-- Bootstrap core CSS     -->
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="http://demos.creative-tim.com/material-dashboard-pro/assets/css/material-dashboard.css" rel="stylesheet">
    <link href="files/css-/main.css" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="../../assets/css/demo.css" rel="stylesheet" /> -->
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>

<body ng-app="myApp" ng-controller="myCtrl">
    <!-- <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" ../dashboard.html ">DANA TOURS ASIA</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                    <li class="">
                        <a href="register.html">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class=" active ">
                        <a href="login.html">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                    <li class="">
                        <a href="lock.html">
                            <i class="material-icons">lock_open</i> Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <style>
        .form-group {
  margin: 0;
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
    </style>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="files/img-/back.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form >
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="green">
                                        <h4 class="card-title">Login</h4>
                                        <div class="social-line">
                                            <a href="#btn" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#eugen" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="category text-center">
                                        DANA TOURS ASIA
                                    </p>
                                    <div align="text-center">
                                        <p id="message" style="text-align: center;"></p>
                                    </div>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Username</label>
                                                <input type="text" class="form-control" ng-model="username">
                                            </div>
                                        </div>
                                        <!-- <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" ng-model="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" ng-click="login()">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <!-- <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav> -->
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="">Dana Tours</a> & Travel. All Rights Reserved.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

</body>
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
    <script src="files/js-/angular/angular-cookies.min.js"></script>

<!-- <script src="files/js-/login.js?v=<?=time()?>"></script> -->
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
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
        //loadpage();
        loadpage();
        console.log('ready!!!');
        $scope.url = 'http://localhost/dana/';
    function loadpage(){

      if($cookies.get('login'))
      {
        $scope.loginstatus = false;
        $scope.token = $cookies.get('login');
        $http({
                method:'post',
                url: "/getUserbyid.php",
                data: $.param({id: $cookies.get('login')}),
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                // if (res[0].resource == "") {               
                //     $scope.Profile= "profile.png";
                // }
                // else{
                //     $scope.Profile = res[0].resource;
                // }
                // $scope.userEmail = res[0].email;
                // $scope.loginname = res[0].fname+" "+res[0].lname;
            });
      }
      else
      {
        $scope.loginstatus = true;
      //location.href="../login.php";
      }
    }
     $scope.profile = function(){
        location.href="profile";

    }
    $scope.login = function(){
        console.log($scope.username)
        console.log($scope.password)
        // $http({
        //         method:'post',
        //         url: "php/getCountry.php",
        //        // data: $.param({username: $scope.username,password: $scope.password}),
        //         headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        //     }).success(function(res){
        //         console.log(res)
        //        //angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
             
        //     })
       //angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'block');
      if($scope.username!=undefined&&$scope.password!=undefined)
      {
            $http({
                method:'post',
                url: "php/loginUsers.php",
                data: $.param({username: $scope.username,password: $scope.password}),
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(res){
                console.log(res)
               //angular.element(document.querySelector('#inTurnFadingTextG')).css('display', 'none');
              if(res.status==0)
              { 

                if (res.role != 4) {
                    $cookies.put('login', res.username);
                    $window.location.href='index.php';
                }
                else{
                    $cookies.put('login', res.username);
                    $window.location.href='main/lab.php';
                }
                
              }
              else if(res.status==1)
              {
                angular.element(document.querySelector('#message')).html('Username is Invalid').css('color', 'red');
              }
              else if(res.status==2)
              {
                angular.element(document.querySelector('#message')).html('Password is Invalid').css('color', 'red');
              }
            })
        }
        }
        $scope.logout = function(){
          $cookies.remove("login");
          $window.location.href = 'login.php';
        }







        // function loadpage(){
        //     if($cookies.get('login_backend'))
        //     {
                
       
        //         $http({
        //             method: 'post',
        //             url: "/getPageData",
        //             data: $.param({token: $cookies.get('login_backend')}),
        //             headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        //         }).success(function (res) {
        //             if (res == "invalid") {
        //                 location.href = "/login";
        //                 return;
        //             }
        //             console.log(res)
        //             $scope.isSuperAdmin = (res[0].role = 0) ? false : true;
        //             $scope.isAdmin = (res[0].role = 2) ? false : true;
                    
        //             if(res[0].role==0)
        //                 $scope.role = 'SYSTEM SUPER ADMIN';
        //             else if(res[0].role==2)
        //                 $scope.role = 'SYSTEM ADMIN';
        //             else 
        //                 $scope.role = 'COUNTER ADMIN';
                  
                   
        //             if(res[0].email != undefined){
        //                 $scope.name = (res[0].email).split('@');
        //                 $scope.Username = $scope.name[0];
        //                 console.log($scope.Username)
        //             }
        //             $scope.Menu = res[1];
        //             console.log($scope.Menu)
                    
        //      });
        //      $http({
        //             method: 'post',
        //             url: "/getallBookingComplete",                    
        //             headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        //         }).success(function (res) {
                    
        //             $scope.booking = res;
        //             console.log($scope.booking)
                    
                    
        //      }); 


        //     }
        //     else
        //     {
        //         $window.location.href = 'login';
        //     }
        // }
        $scope.logout = function(){
            $cookies.remove("login_backend");
            $cookies.remove("token_backend");
            $window.location.href = 'login';
        }
        
        

        
        
        $scope.genpass = function(){
                      //alert('xxxx');
                      var y;
                      var sales;
                      var count;
                      var check = 0;
                      var round = 0;
                      var start = 0;

                            $http({
                                method: 'POST',
                                url : "/api/getallsales",
                                
                                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res) {

                                for(var i = 0 ; i < res.length ; i++)
                                {
                                    round++;
                                    sales = res[i].sales_id;
                                    if(res[i].sales_id != null)
                                    {
                                        if(check<=parseInt(res[i].sales_id))
                                        {
                                            check = parseInt(res[i].sales_id);
                                        }
                                    }
                                    if(round==res.length)
                                    {
                                        start = 1;
                                    }

                                }
                                
                                if( start == 1 )
                                {
                                    count = check+1;
                                    //console.log("y"+count);
                                    
                                    var n = count.toString();
                                    console.log("n"+n);
                                    var zero = 6 - n.length;
                                    console.log("zero"+zero);
                                    var newcode;
                                    for ( var i = 0;i < zero;i++ )
                                    {
                                        if(i==0)
                                        {
                                            newcode = '0';
                                        }
                                        else
                                        {
                                            newcode += '0';
                                        }
                                    }
                                    var code = newcode + n;
                                    $scope.passgen = code;
                                    //var finalcode = booking + code;
                                    console.log(code);
                                }
                                //$scope.passgen = code;
                                /*for(var i = 0 ; i < sales.length ; i++)
                                    {
                                         //sales = res[i].sales_id;
                                        //console.log(sales);
                                        if(res[i].sales_id != null&& res[i].sales_id != code)
                                        {
                                            //count++;
                                            $scope.passgen = code;
                                            console.log($scope.passgen);
                                            
                                            
                                        }
                                        else{
                                            
                                            var x = parseInt(code)+1;
                                            var y = x.toString();
                                            //$scope.passgen  = x+1
                                            var zero = 6 - y.length;
                                            console.log("zero"+zero);
                                            var newcode2;
                                            for ( var i = 0;i < zero;i++ )
                                            {
                                                if(i==0)
                                                {
                                                    newcode2 = '0';
                                                }
                                                else
                                                {
                                                    newcode2 += '0';
                                                }
                                            }
                                            var code2 = newcode2 + x;
                                            console.log(x);
                                            $scope.passgen  = code2;
                                        }

                                    }*/
                            });
                    } 
                 
    });
    </script>

</html>