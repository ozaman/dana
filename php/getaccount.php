<?php
include("../config.php");
                 $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
                $date = date('01/01/2017 H:i:s',$midnight);
                $date2 =  date('31/01/Y H:i:s',($midnight+(60*60*24))-1);
                //echo $date.'-'.$date2;
    $sql = "select * from dn_booking WHERE booking_date BETWEEN '".$date."' AND  '".$date2."' AND status = 1 ORDER BY id ASC ";
    $Objquery = mysql_query($sql,$conndb);
$rows = array();
    if(mysql_num_rows($Objquery) > 0){
       
        while ($result = mysql_fetch_array($Objquery)) {
             $rows[] = $result;
               
            }
            print json_encode($rows);
       
    }
    else{
        echo "not data";
        
    }
    

?>
