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
    $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
    $date = date('01/'.$final.'/Y H:i:s',$midnight);
    $date2 =  date('d/m/Y H:i:s',($midnight+(60*60*24))-1);
    //echo  $date.'<br>'. $date2.'<br>'.$m;
	$sql = "select * from dn_booking as TB_booking WHERE status != 2 AND type = 'Hotel' AND status_invoice != '1' ORDER BY ondate ASC	";
	$Objquery = mysql_query($sql,$conndb);
	//echo $Objquery;
	//$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
	if(mysql_num_rows($Objquery) > 0){
		//$result = mysql_fetch_array($Objquery);
		
		//print json_encode($result);
		while ($result = mysql_fetch_array($Objquery)) {
			 $rows[] = $result;
               
            }
            print json_encode($rows);
		// while($result = mysql_fetch_array($Objquery)){
		// 	$name = $result['username'];
		// 	//echo $namef;
		// }
	}
	else{
		echo "not data";
		
	}
	// "select TB_booking*,TB_agent.fname as agent_fname,TB_agent.lname as agent_lname,TB_package.name as package_name 
	// from dn_booking as TB_booking
	// LEFT JOIN  dn_agent as TB_agent ON TB_booking.agent_id = TB_agent.id
	// LEFT JOIN  dn_package as TB_package ON TB_booking.program = TB_package.id";

?>