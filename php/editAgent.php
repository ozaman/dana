<?php
include("../config.php");
    $sql = "UPDATE dn_agent SET fname = '".$_POST[firstname]."',lname = '".$_POST[lastname]."',phone = '".$_POST[phone]."',email = '".$_POST[email]."',company = '".$_POST[company]."',address = '".$_POST[address]."',phonecode = '".$_POST[phonecode]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
	$rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
?>

   



  