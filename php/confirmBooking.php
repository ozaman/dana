<?php
include("../config.php");

       
            $sql = "UPDATE dn_booking SET status = 1 WHERE id = '".$_POST[id]."'";
            $Objquery = mysql_query($sql,$conndb);
            //echo $Objquery;
            //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
                // $rows = array();
            if($Objquery){
                
               $sql2 = "INSERT INTO dn_logbooking(package_name,confirmby,classs,post_date,status) VALUES ('".$_POST[package_name]."','".$_POST[confirmby]."','".$_POST[classs]."','".time()."','1')";
                    $Objquery2 = mysql_query($sql2,$conndb);
                   
                $rows = array();
                    if($Objquery2){
                        $last_id = mysql_insert_id();
                        echo $last_id;
                      
                    }
                    else{
                        echo "0 results";;
                        
                    }
                              
            }
            else{
                echo "0 results";;
                
            }
   
?>