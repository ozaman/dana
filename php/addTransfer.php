<?php
include("../config.php");
    $sql = "INSERT INTO dn_product(name,company_id,company_name,person,price,province,pro_id,flight,post_date) VALUES ('".$_POST[name]."','".$_POST[company_id]."','".$_POST[company_name]."','".$_POST[person]."','".$_POST[price]."','".$_POST[province]."','".$_POST[pro_id]."','".$_POST[flight]."','".time()."')";
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

   



  