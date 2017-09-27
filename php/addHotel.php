<?php
include("../config.php");
    $sql = "INSERT INTO dn_hotel(name,detail,phone,email,fax,province,address,operation,website,phonecode,post_date) VALUES ('".$_POST[name]."','".$_POST[detail]."','".$_POST[phone]."','".$_POST[email]."','".$_POST[fax]."','".$_POST[province]."','".$_POST[address]."','".$_POST[operation]."','".$_POST[website]."','".$_POST[phonecode]."','".time()."')";
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
