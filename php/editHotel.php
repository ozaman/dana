<?php
include("../config.php");
    $sql = "UPDATE dn_hotel SET name = '".$_POST[comname]."',detail = '".$_POST[detail]."',phone = '".$_POST[phone]."',email = '".$_POST[email]."',fax = '".$_POST[fax]."',address = '".$_POST[address]."',operation = '".$_POST[operation]."',website = '".$_POST[website]."',phonecode = '".$_POST[phonecode]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
?>

   



  