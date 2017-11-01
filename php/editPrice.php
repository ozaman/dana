<?php
include("../config.php");
    $sql = "UPDATE dn_package SET sale_price_adult = '".$_POST[sale_price_adult]."',sale_price_child = '".$_POST[sale_price_child]."',net_price_adult = '".$_POST[net_price_adult]."',net_price_child = '".$_POST[net_price_child]."',cost_web = '".$_POST[sale_show_web]."'  WHERE id = '".$_POST[id]."'"; 
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  