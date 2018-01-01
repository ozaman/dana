<?php
include("../config.php");

	$sql = "UPDATE dn_hotel_package SET background = '".$_POST[background]."',room_type = '".$_POST[room_type]."',location = '".$_POST[location]."',province = '".$_POST[city]."',attraction = '".$_POST[attraction]."',map = '".$_POST[map]."',show_re = '".$_POST[show_re]."',show_top = '".$_POST[show_top]."',show_web = '".$_POST[show_web]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);


    
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
    
?>

   
