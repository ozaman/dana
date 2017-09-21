<?php
include("../config.php");
	$sql = "select * from dn_booking as TB_booking  ORDER BY ondate ASC	";
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