<?php
include("../config.php");
    $sql = "UPDATE dn_hotel_package SET sale_price = '".$_POST[sale_price]."', net_price = '".$_POST[net_price]."' WHERE id = '".$_POST[id]."'"; 
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  