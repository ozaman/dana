<?php
include("../config.php");

       
            $sql = "UPDATE dn_booking SET status = 2 WHERE id = '".$_POST[id]."'";
            $Objquery = mysql_query($sql,$conndb);
            //echo $Objquery;
            //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
                $rows = array();
            if($Objquery){
                
               echo "1 results";
              
            }
            else{
                echo "0 results";;
                
            }
   
?>