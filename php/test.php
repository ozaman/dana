<?php
include("../config.php");
    $sql = "select topic,pro,aum,phone,star,map,email,website,fax,address,amphur,province from web_transferplace_new  WHERE pro  =8 and status = 1";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
//$rows = array();
    if(mysql_num_rows($Objquery) > 0){
        //$result = mysql_fetch_array($Objquery);
        
        //print json_encode($result);
        while ($result = mysql_fetch_array($Objquery)) {
             $rows[] = $result;
              print_r($result[topic].'\n');
              $sql2 = "INSERT INTO dn_transferplace(topic,pro,aum,phone,star,map,email,website,fax,address,amphur,province) VALUES ('".$result[topic]."','".$result[pro]."','".$result[aum]."','".$result[phone]."','".$result[star]."','".$result[map]."','".$result[email]."','".$result[website]."','".$result[fax]."','".$result[address]."','".$result[amphur]."','".$result[province]."')";
              mysql_query($sql2,$conndb);
                 // if($Objquery2){
                 //        $last_id = mysql_insert_id();
                 //       echo $last_id;
                      
                 //    }
                 //    else{
                 //        echo "0 results";;
                        
                 //    }
                    
               
            }
           // print json_encode($rows);
        // while($result = mysql_fetch_array($Objquery)){
        //  $name = $result['username'];
        //  //echo $namef;
        // }
    }
    else{
        echo "not data";
        
    }
// while ($result = mysql_fetch_array($Objquery)) {
//              $rows[] = $result;
//                print_r($result[phonecode].'\n');
//               $sql2 = "UPDATE dn_country SET phonecode = '".$result[phonecode]."' WHERE country_code = '".$result[iso]."'";
//               mysql_query($sql2,$conndb);
//             //     while ($result2 = mysql_fetch_array($Objquery2)) {
//             //      print json_encode($result2);
                    
//             // }
//             }
?>
