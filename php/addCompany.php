<?php
include("../config.php");
    $sql = "INSERT INTO dn_company(company_name,detail,phone,email,tat_nambers,fax,city,address,operation,website,phonecode,post_date) VALUES ('".$_POST[comname]."','".$_POST[detail]."','".$_POST[phone]."','".$_POST[email]."','".$_POST[tat_namber]."','".$_POST[fax]."','".$_POST[city]."','".$_POST[address]."','".$_POST[operation]."','".$_POST[website]."','".$_POST[phonecode]."','".time()."')";
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
