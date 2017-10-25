var app = angular.module('myApp',['ngCookies','ngFileUpload']);

    app.controller('myCtrl', function($scope, $http, $cookies, $window,$filter,$location,Upload){

        //loadpage();

        loadpage();

        

    function loadpage(){

        //$scope.tours;
        $scope.echekpopular;
        $scope.echekrecommend;
        $scope.echekweb;
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
        $scope.Countryfont = "Please select country";    

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

                         console.log(res)
                         $scope.tours = res[0];
                         $scope.transfericon = res[0].icon;
                         console.log($scope.tours.icon)

                         $scope.transport = res[0];

                         $scope.myValue = res[0].flight;
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
                                //alert('re-true')
                         }
                         else{
                                $scope.echekweb = false;
                                //alert('re-false')


                         }

                        

                         



                

                       

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
                 $scope.dataGallery = '';
                $http({
                            method : 'POST',
                            url : "../php/getGallerytransfer.php",
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
    $scope.addGallery = function(file) {
    console.log(file)
     $http({
                method : 'POST',
                url : "../php/getGallerytransfer.php",
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
                        url: '../php/uploadGallerytransfer.php',
                        data: {file: file, 'imagename': $scope.data+'_'+$scope.nameGallery,'id':$scope.data}
                      }).success(function(resp) {
                        // file is uploaded successfully
                        console.log(resp);
                        $scope.dataGallery='';
                        $http({
                            method : 'POST',
                            url : "../php/getGallerytransfer.php",
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
   $scope.onFileSelect = function(file) {
     // alert($scope.data)
        console.log(file)
    if (!file) return;
    Upload.upload({
        url: '../php/uploadIcontransfer.php',
        data: {file: file, 'imagename': $scope.data}
      }).success(function(resp) {
        // file is uploaded successfully
        console.log(resp);
      });    
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
                            ,'show_top':$scope.echekpopular
                            ,'show_re':$scope.echekrecommend
                            ,'show_web':$scope.echekweb

                           

                           

                            

                }),

                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

                }).success(function(res){

                    //console.log(res)

                    ////console.log("asasasasas")

                    $window.location.reload();

                 

                       

            });

        



























    }

   $scope.remove = function(data){
    console.log(data)
    $http({
                            method : 'POST',
                            url : "../php/removeGallerytransfer.php",
                            data: $.param({'id': data.id,'gallery':data.gallery}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                                console.log(res)
                                $scope.dataGallery= '';
                                $http({
                            method : 'POST',
                            url : "../php/getGallerytransfer.php",
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