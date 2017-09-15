<?php
include("../config.php");
    //echo $_POST[id];
    $sql = "DELETE FROM dn_booking WHERE id  ='".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    if($Objquery){
       echo "1 results";
    }
    else{
        echo "0 results";
    }

?>
