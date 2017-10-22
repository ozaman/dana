<?php
include("../config.php");
    $sql = "UPDATE dn_product SET name = '".$_POST[name]."',company_name = '".$_POST[company_name]."',person = '".$_POST[person]."',price = '".$_POST[price]."',flight = '".$_POST[flight]."',province = '".$_POST[province]."',show_re = '".$_POST[show_re]."',show_top = '".$_POST[show_top]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   
 