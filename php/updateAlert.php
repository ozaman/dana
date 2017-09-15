<?php
include("../config.php");
                            //echo $finalcode;
      $sql = "UPDATE dn_booking SET alert = '1' WHERE  id = '".$_POST[id]."' " ;
      $Objquery = mysql_query($sql,$conndb);
      if($Objquery){
                
          echo "1 results";
                              
      }
      else{
         echo "0 results";
                                
      }
                
              
    
    

?>
