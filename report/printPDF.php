<?php

require ('../mpdf/mpdf.php');
ob_start();

?>
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
echo "date : " .$_GET[date];
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
    <td width="30"  align="center" bgcolor="#ddd" style="padding: 15px 8px;    padding: 15px 8px;
    border-left: 1px solid #999;
    border-top: 1px solid #999;"><strong></strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Invoice
     
    </strong></td>
    <td width="250" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;" ><strong>Package Name</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Customer name</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Flight</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Pickup place</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>To place</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Agent</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>Departure Date</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>On time</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;  border-top: 1px solid #999;"><strong>No. of Guest</strong></td>
    <td width="" align="center" bgcolor="#ddd" style="padding: 15px 8px;    padding: 15px 8px;
    border-right:  1px solid #999;
    border-top: 1px solid #999;"><strong>Type</strong></td>
    
    </tr>
    <?php
    include("../config.php");
    //  $date = date('d/m/Y H:i:s');
    // $d = date_parse_from_format("Y-m-d", $date);
    // $x =  $d["month"];
    // $m = $x - 2;
    // if ($m < 10) {
    //    $final = '0'.$m;
    // }
    // else{
    //     $final = $m;
    // }
    // $midnight = mktime(0,0,0,date('m'),date('d'),date('Y'));
    // $date = date("".$_GET[date]." H:i:s",$midnight);
    // $date2 =  date("".$_GET[dateto]." H:i:s",($midnight+(60*60*24))-1);
    //$midnight = mktime(0,0,0,date('m'),date('d')-1,date('Y'));
    //$date = date('d/m/Y',$midnight);
     //$dates = '05/08/2017';
    
    //$midnight = mktime(0,0,0,date('m'),date('d')-1,date('Y'));
    //$date = date('d/m/Y',$midnight);
     $dates = '05/08/2017';

     echo $dates;
    $sql =  "SELECT * FROM dn_booking WHERE status  != 2 AND ondate = '".$_GET[date]."' AND type = '".$_GET[type]."' ORDER BY ontime ASC"; 
//$objQuery = mysql_query($sql);

               
$Objquery = mysql_query($sql,$conndb);
// echo $Objquery;
$i = 1;
while($rerow = mysql_fetch_array($Objquery)) {
//$objQuery = mysql_query($sql);

               

 //echo $rerow['invoice'];?> 
  
  <tr>
    <td height="" width="30" align="center"  style="border-bottom: 1px solid #999; border-left: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $i;?></td>
    <td align="cent" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['invoice']; ?></td>
    <td align="center" class="" width="250"  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['package_name']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['name']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['flight']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['pickup_place']; ?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['to_place']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['agent_name']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['ondate']; ?></td>
    <td align="center" class=""  style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['ontime']; ?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['total']; ?></td>
    <td align="center" class="" style="border-bottom: 1px solid #999;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;    border-right: 1px solid #999;"><?php echo $rerow['type']; ?></td>
    </tr>

  
  
    
  <?php $i++; 

} 

?>
   
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
       
<!-- ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF/MyPDF.pdf">คลิกที่นี้</a> -->