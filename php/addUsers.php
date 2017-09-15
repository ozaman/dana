<?php
include("../config.php");
    $sql = "INSERT INTO dn_users (username,password,firstname,lastname,phone,email,address,role,phonecode) VALUES ('".$_POST[username]."','".$_POST[password]."','".$_POST[firstname]."','".$_POST[lastname]."','".$_POST[phone]."','".$_POST[email]."','".$_POST[address]."','".$_POST[role]."','".$_POST[phonecode]."')";
    $Objquery = mysql_query($sql,$conndb);
    
	$rows = array();
    if($Objquery){
        $last_id = mysql_insert_id();
       echo $last_id;
      
    }
    else{
        echo "0 results";;
        
    }


?>

   



  