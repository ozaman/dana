<?php

require ('../mpdf/mpdf.php');
ob_start();

?>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.0/semantic.min.css">
 
</head>
<body >
<div>
<div class=Section2>
<table width="704" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="291" align="center">
        <span class="style2">Report booking 
      </span>
      <?php
      $f = strtotime($_GET[date]);
      $g = strtotime($_GET[dateto]);
      
echo "date :" .date('d/m/Y',''.$f.'').' - '.date('d/m/Y',''.$g.'');
//$midnight = mktime(0,0,0,date('m'),date('d')-1,date('Y'));
   //date('d/m/Y',$midnight);
     //echo  $midnight.'==='. $date;

                

?>
    </td>
  </tr>
</table>
 <table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
  </tbody>
</table> 
<table class="table" width="100%" height="20" border="0"  align="center" cellpadding="0" cellspacing="0" class="">
  <tr align="center">
    <td width="30"  align="center" bgcolor="#ddd" style="padding: 15px 5px;    padding: 15px 5px;
    border-left: 1px solid #999;
    border-top: 1px solid #999;"></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">DATE</td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">INVOICE
     
    </td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">Name</td>
    <td width="250" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;" >DISCRIPTION</td>
    
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">ORDER BY</td>
   <!--  <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;"><strong>Pickup place</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;"><strong>To place</strong></td> -->
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">QTY</td>
    
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">PRICE/USD</td>
   
     
     
    <td align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">
             CREDIT
    </td>
    <td align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">
             DEBIT
    </td>
    <td align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;">
             BLANCE
    </td>
       

     
    
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;  border-top: 1px solid #999;border-right: 1px solid #999;">REMARK</td>
    <!-- <td width="" align="center" bgcolor="#ddd" style="padding: 15px 5px;    padding: 15px 5px;
    border-right:  1px solid #999;
    border-top: 1px solid #999;">Type</td> -->
    
    </tr>
    <?php
    include("../config.php");
    
    $date = strtotime($_GET[date]);
    $date2 =  strtotime($_GET[dateto]);

    $sql =  "SELECT * FROM dn_booking WHERE post_date BETWEEN '".$date."' AND '".$date2."' AND status != 2 AND agent_id = '".$_GET[data]."'  ORDER BY invoice ASC"; 
               
$Objquery = mysql_query($sql,$conndb);
$i = 1;
while($rerow = mysql_fetch_array($Objquery)){
 //echo $rerow['invoice'];?> 
  
  <tr>
    <td height="" width="30" align="center"  style="border-bottom: 1px solid #999; border-left: 1px solid #999;font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $i;?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php 
   // $now = nateTime($rerow['post_date']);
echo date('d/m/Y',$rerow['post_date']);

     ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['invoice']; ?></td>
     <td align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['name']; ?></td>
    <td align="center" class="" width="250"  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['package_name']; ?></td>
     <td align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['agent_name']; ?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['total']; ?></td>
    
   
    <td align="right" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php 
    if ($rerow['type'] == 'Transfer') {
      if ($rerow['agent_name'] != 'Magic World' ) {
           if ($rerow['total_price'] != 0) {
              if ($rerow['province'] == 'Phuket') {
                //$total_price = (23*33);
                $tatal_usd = 23;
              }
              else{
                //$total_price =(35*33);
                 $tatal_usd = 35;

              }
           }

        
      }
      else{
        if ($rerow['province'] == 'Phuket') {
                //$total_price = (20*33);
                $tatal_usd = 20;
              }
              else{
                //$total_price = (35*33);
                $tatal_usd = 35;

              }
      }

    }
    else{
      
        $tatal_usd = $rerow['total_price']/33;
      
    }
    $u = $tatal_usd;
    echo $u;
    //echo $rerow['total_price']/33; ?></td>
    <!-- <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php //echo $rerow['pickup_place']; ?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php //echo $rerow['to_place']; ?></td> -->
   
    <td colspan="" align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;">-</td>
    <td colspan="" align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;">-</td>
    <td colspan="" align="right" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;"><?php 
    if ($rerow['type'] == 'Transfer') {
      if ($rerow['agent_name'] != 'Magic World' ) {
           if ($rerow['total_price'] != 0) {
              if ($rerow['province'] == 'Phuket') {
                $total_price = (23*33);
                $tatal_usd = 23;
              }
              else{
                $total_price =(35*33);
                 $tatal_usd = 35;

              }
           }

        
      }
      else{
        if ($rerow['province'] == 'Phuket') {
                $total_price = (20*33);
                $tatal_usd = 20;
              }
              else{
                $total_price = (35*33);
                $tatal_usd = 35;

              }
      }

    }
    else{
      
        $total_price = $rerow['total_price'];
      
    }
    $c = $total_price;
    echo number_format($c);
   
    ?></td>










    <td align="center" class=""  style="border-bottom: 1px solid #999; font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;border-right: 1px solid #999;"><?php echo $rerow['remark']; ?></td>
    
    <!-- <td align="center" class="" style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px 0;
    line-height: 1.42857143;
    vertical-align: top;    border-right: 1px solid #999;"><?php //echo $rerow['type']; ?></td> -->
    </tr>

  
	
		
	<?php $i++; 
} ?>
   
</table>

</div>

</div>

</body>

   
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4-L', '0', 'THSaraban');
$pdf->SetAutoFont();
 $pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>   
  
<style type="text/css">

@page rotated { size: landscape; }
.style1 {
  font-family: "TH SarabunPSK";
  font-size: 18pt;
  /*font-weight: bold;*/
}
.style2 {
  font-family: "TH SarabunPSK";
  font-size: 16pt;
  /*font-weight: bold;*/
}
. {
  font-family: "TH SarabunPSK";
  font-size: 16pt;
  
}
.style5 {cursor: hand; font-weight: normal; color: #000000;}
.style9 {font-family: Tahoma; font-size: 13px; }
.style11 {font-size: 13px}
.style13 {font-size: 9}
.style16 {font-size: 9; font-weight: bold; }
.style17 {font-size: 13px; font-weight: bold; }


</style>