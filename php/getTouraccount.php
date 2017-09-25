<?php
include("../config.php");
 $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
                $date = date('01/01/2017 H:i:s',$midnight);
                $date2 =  date('31/01/Y H:i:s',($midnight+(60*60*24))-1);
                //echo $date.'-'.$date2;
    // $sql = "select * from dn_booking WHERE  AND status = 1 ORDER BY id ASC ";
	$sql = "select * from dn_booking as TB_booking WHERE booking_date BETWEEN '".$date."' AND  '".$date2."'  AND type = 'Tour' AND status != 2  ORDER BY ondate ASC	";
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