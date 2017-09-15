<?php
include("../config.php");
    $sql = "INSERT INTO dn_users(username,password,firstname,lastname,phone,phone2,email,address,role,role_type,post_date,phonecode) VALUES ('".$_POST[username]."','".$_POST[password]."','".$_POST[firstname]."','".$_POST[lastname]."','".$_POST[phone]."','".$_POST[phone2]."','".$_POST[email]."','".$_POST[address]."','".$_POST[role]."','".$_POST[role_type]."','".time()."','".$_POST[phonecode]."')";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        $last_id = mysql_insert_id();
       echo $last_id;
      
    }
    else{
        echo "0 results";;
        
    }

?>
