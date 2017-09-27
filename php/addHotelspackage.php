<?php
include("../config.php");

    $sql = "INSERT INTO dn_hotel_package(province,hotel_name,topic,company_name,room_type,night,classs,sale_price,net_price,post_date) VALUES ('".$_POST[province]."','".$_POST[hotelname]."','".$_POST[package]."','".$_POST[company]."','".$_POST[roomtype]."','".$_POST[night]."','".$_POST[classs]."','".$_POST[saleprice]."','".$_POST[netprice]."','".time()."')";
    //echo $_POST[province].'<br>'.$_POST[hotelname].'<br>'.$_POST[package].'<br>'.$_POST[company].'<br>'.$_POST[classs]."','".$_POST[roomtype].'<br>'.$_POST[night].'<br>'.$_POST[netprice].'<br>'.$_POST[saleprice].'<br>'.time();
    // ,classs,,net_price,sale_price
    // ,'".$_POST[classs]."','".$_POST[roomtype]."','".$_POST[night]."','".$_POST[netprice]."','".$_POST[saleprice]."''".$_POST[netprice]."','".$_POST[saleprice]."'
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        $last_id = mysql_insert_id();
       echo $last_id;
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  