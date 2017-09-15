<?php
include("../config.php");
	$sql = "SELECT * FROM dn_users WHERE username = '".$_POST[username]."'";
	$Objquery = mysql_query($sql,$conndb);
	//echo $Objquery;
	//$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
	//if(mysql_num_rows($Objquery) > 0){
		//$result = mysql_fetch_array($Objquery);
		
		//print json_encode($result);
		// while ()) {
		// 	 $rows[] = $result;
               
  //           }
			
            $result = mysql_fetch_array($Objquery);
            if ($result != '') {

            	if ($_POST[password] == $result[password]) {
            		$rtn = '{"status":"0","username":"'.$result[id].'","role": "'.$result[role].'"}';

            		print_r($rtn);
            	}
            	else{

            		$rtn = '{"status":"2"}';
            		print_r($rtn);
            	}
            	
            }
            else{
            	$rtn = '{"status":"1"}';
            		print_r($rtn);
            }
            
		// while($result = mysql_fetch_array($Objquery)){
		// 	$name = $result['username'];
		// 	//echo $namef;
		// }
	//}
	//else{
	//	;
		
	//}

?>