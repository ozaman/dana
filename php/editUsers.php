<?php
include("../config.php");
    $sql = "UPDATE dn_users SET username = '".$_POST[username]."',password = '".$_POST[password]."',firstname = '".$_POST[firstname]."',lastname = '".$_POST[lastname]."',phone = '".$_POST[phone]."',phone2 = '".$_POST[phone2]."',email = '".$_POST[email]."',address = '".$_POST[address]."',role = '".$_POST[role]."',phonecode = '".$_POST[phonecode]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
	$rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
?>

   



  