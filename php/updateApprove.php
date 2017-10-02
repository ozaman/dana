<?php
include("../config.php");
                            //echo $finalcode;
      $sql = "UPDATE dn_booking SET approved = '1',done = '1', approve_by = '".$_POST[approve_by]."',approve_date = '".time()."' WHERE id = '".$_POST[id]."' " ;
      $Objquery = mysql_query($sql,$conndb);
      if($Objquery){
                
          echo "1";
                              
      }
      else{
         echo "0";
                                
      }
                
              
    
    

?>
