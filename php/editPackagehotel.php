<?php
include("../config.php");
    $sql = "UPDATE dn_hotel_package SET topic = '".$_POST[topic]."',detail = '".$_POST[detail]."',classs = '".$_POST[classs]."',description = '".$_POST[short]."',province = '".$_POST[city]."',show_re = '".$_POST[show_re]."',show_top = '".$_POST[show_top]."',show_web = '".$_POST[show_web]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   
