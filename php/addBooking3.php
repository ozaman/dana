<?php
include("../config.php");
$date = $_POST[ondate];

$day = (int)substr($date, 3, 2);
$month = (int)substr($date, 0, 2);
$year = (int)substr($date, 7, 4);

$unixTimestamp = mktime(0, 0, 0, $year, $day, $month);
    $sql = "INSERT INTO dn_booking(program,ondate,ontime,agent_id,agent_name,adult,child,total,pickup_place,to_place,name,phone,phonecode,email,user_id,user_name,package_name,total_price,adult_price,child_price,room_number,type,province,province_id,transfer_price,company_id,company_name,pro_class,area,net_price_adult,net_price_child,flight,booking_date,post_date,owner,listcar,ondate_2) VALUES ('".$_POST[program]."','".$_POST[ondate]."','".$_POST[ontime]."','".$_POST[agent]."','".$_POST[agentname]."','".$_POST[adult]."','".$_POST[child]."','".$_POST[total]."','".$_POST[place]."','".$_POST[toplace]."','".$_POST[name]."','".$_POST[phone]."','".$_POST[phonecode]."','".$_POST[email]."','".$_POST[postid]."','".$_POST[postname]."','".$_POST[package_name]."','".$_POST[total_price]."','".$_POST[adult_price]."','".$_POST[child_price]."','".$_POST[roomnumber]."','".$_POST[type]."','".$_POST[province]."','".$_POST[province_id]."','".$_POST[transfer_price]."','".$_POST[company_id]."','".$_POST[company_name]."','".$_POST[pro_class]."','".$_POST[area]."','".$_POST[net_price_adult]."','".$_POST[net_price_child]."','".$_POST[flight]."','".date('d/m/Y H:i:s')."','".time()."','".$_POST[owner]."','".$_POST[listcar]."','".$unixTimestamp."')";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว

$rows = array();
    if($Objquery){
       
        $last_id = mysql_insert_id();
       //echo $last_id;
                $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
                $date = date('d/m/Y H:i:s',$midnight);
                $date2 =  date('d/m/Y H:i:s',($midnight+(60*60*24))-1);
               // $date2 = strtotime("+1 day", $date2);
                $date3 = date('dmY');
                //echo $date.'=='.$date2;
                //echo  $date.$date2;
                 $sql2 = "select count(*) as cnt from dn_booking where booking_date BETWEEN '".$date."' AND  '".$date2."'";
                $Objquery2 = mysql_query($sql2,$conndb);
                
                $result = mysql_fetch_array($Objquery2);
                $x = $result[cnt];
                //echo $x;
                        //console.log("xxx"+x);
                        $n = (string)$x;
                        //echo $n;
                      $zero = 4 - strlen($n);
                     
                      if ($zero == 3) {
                          $newcode = '000';
                          $code = $newcode.$n;
                      }
                      if ($zero == 2) {
                          $newcode = '00';
                          $code = $newcode.$n;
                      }
                      if ($zero == 1) {
                          $newcode = '0';
                          $code = $newcode.$n;
                      }
                       if ($zero == 0) {
                          $code = $n;
                      }

                      
                        //echo $code;
                 //       $code = $newcode + $n;
                            $finalcode = $date3.$code;
                 
                            //echo $finalcode;
                            $sql3 = "UPDATE dn_booking SET  invoice = '".$finalcode."' WHERE  id = '".$last_id."' " ;
                            $Objquery3 = mysql_query($sql3,$conndb);
                            if($Objquery3){
                
                               echo "1 results";
                              
                            }
                            else{
                                echo "0 results";;
                                
                            }
                
              
    }
    else{
        echo "0 results";;
        
    }

?>
