<?php
include("../config.php");
    $sql = "INSERT INTO dn_package(name,detail,program,conditions,contact,class,description,note,city,include,show_re,show_top,cost,type,company_id,company_name,post_date) VALUES ('".$_POST[topic]."','".$_POST[detail]."','".$_POST[program]."','".$_POST[conditions]."','".$_POST[contact]."','".$_POST[classs]."','".$_POST[short]."','".$_POST[note]."','".$_POST[city]."','".$_POST[includes]."','".$_POST[show_re]."','".$_POST[show_top]."','".$_POST[price]."','Tour','".$_POST[companyid]."','".$_POST[companyname]."','".time()."')";
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

   



  