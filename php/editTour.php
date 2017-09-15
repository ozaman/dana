<?php
include("../config.php");
    $sql = "UPDATE dn_package SET name = '".$_POST[topic]."',detail = '".$_POST[detail]."',program = '".$_POST[program]."',conditions = '".$_POST[conditions]."',contact = '".$_POST[contact]."',class = '".$_POST[classs]."',description = '".$_POST[short]."',note = '".$_POST[note]."',city = '".$_POST[city]."',include = '".$_POST[includes]."',show_re = '".$_POST[show_re]."',show_top = '".$_POST[show_top]."' WHERE id = '".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   
