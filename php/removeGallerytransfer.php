<?php
include("../config.php");
    $sql = "DELETE FROM dn_gallery_transfer WHERE id  ='".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    $rows = array();
    if($Objquery){
    	 $path   =   "../../data/files/upload/transfer/gallery/"; 
        $file = $path.$_POST[gallery];
		unlink($file);
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
?>
