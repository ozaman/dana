<?php
include("../config.php");
    $sql = "select name_en,phonecode,country_code from dn_country ORDER BY name_en ASC";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
//$rows = array();
    if(mysql_num_rows($Objquery) > 0){
        //$result = mysql_fetch_array($Objquery);
        
        //print json_encode($result);
        while ($result = mysql_fetch_array($Objquery)) {
             $rows[] = $result;
               
            }
            print json_encode($rows);
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
