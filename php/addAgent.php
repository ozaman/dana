<?php
include("../config.php");
    $sql = "INSERT INTO dn_agent(fname,lname,phone,email,company,address,phonecode,post_date) VALUES ('".$_POST[firstname]."','".$_POST[lastname]."','".$_POST[phone]."','".$_POST[email]."','".$_POST[company]."','".$_POST[address]."','".$_POST[phonecode]."','".time()."')";
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
