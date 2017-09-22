<?php
include("../config.php");
                            //echo $finalcode;
      $sql = "UPDATE dn_booking SET status_invoice = '1', pay_by = '".$_POST[pay_by]."' WHERE id = '".$_POST[id]."' " ;
      $Objquery = mysql_query($sql,$conndb);
      if($Objquery){
                
          echo "1";
                              
      }
      else{
         echo "0";
                                
      }
                
              
    
    

?>
