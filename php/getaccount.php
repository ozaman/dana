<?php
include("../config.php");
$date = date('d/m/Y H:i:s');
    $d = date_parse_from_format("Y-m-d", $date);
    $x =  $d["month"];
    $m = $x - 2;
    if ($m < 10) {
       $final = '0'.$m;
    }
    else{
        $final = $m;
    }
    //$midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
    $date2 = date('Y-'.$final.'-01 00:00:00');
    $date3 =  date('Y-m-d 23:59:59');
     $datefrom = strtotime($date2);
    $dateto=  strtotime($date3);
                //  $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
                // $date = date('01/01/2017 H:i:s',$midnight);
                // $date2 =  date('31/01/Y H:i:s',($midnight+(60*60*24))-1);
                //echo $date.'-'.$date2;
    $sql = "SELECT * FROM dn_booking WHERE post_date BETWEEN '".$datefrom."' AND  '".$dateto."' AND status = 1 ORDER BY id ASC ";
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
