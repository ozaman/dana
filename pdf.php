<?php

require ('mpdf/mpdf.php');
ob_start();

?>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

<!-- <style type="text/css">

@page rotated { size: landscape; }
.style1 {
	font-family: "TH SarabunPSK";
	font-size: 18pt;
	font-weight: bold;
}
.style2 {
	font-family: "TH SarabunPSK";
	font-size: 16pt;
	font-weight: bold;
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

</style> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.0/semantic.min.css" -->
 
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
echo "on date : " . date("d/m/Y");
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
    <td width="30"  align="center" bgcolor="#ddd" ><strong></strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Invoice
     
    </strong></td>
    <td width="250" align="center" bgcolor="#ddd" ><strong>Package Name</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Customer name</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Flight</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Pickup place</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>To place</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Agent</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Departure Date</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>On time</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>No. of Guest</strong></td>
    <td width="" align="center" bgcolor="#ddd"><strong>Type</strong></td>
    
    </tr>
    <?php
    include("config.php");
    //$midnight = mktime(0,0,0,date('m'),date('d')-1,date('Y'));
    //$date = date('d/m/Y',$midnight);
     $dates = '05/08/2017';
     //echo $dates;
    $sql =  "select * from dn_booking as TB_booking  WHERE status  = 0 AND ondate = '".$_GET[date]."' ORDER BY ontime ASC"; 
//$objQuery = mysql_query($sql);

               
$Objquery = mysql_query($sql,$conndb);
// echo $Objquery;
$i = 1;
while($rerow = mysql_fetch_array($Objquery)) 

{ echo $rerow['invoice']; ?>
 
  <tr>
    <td height="" width="30" align="center"  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $i;?></td>
    <td align="cent" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['invoice']; ?></td>
    <td align="center" class="" width="250"  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['package_name']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['name']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['flight']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['pickup_place']; ?></td>
    <td align="center" class="" style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['to_place']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['agent_name']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['ondate']; ?></td>
    <td align="center" class=""  style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['ontime']; ?></td>
    <td align="center" class="" style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['total']; ?></td>
    <td align="center" class="" style="border-top: 1px solid #333;font-size:13px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;"><?php echo $rerow['type']; ?></td>
    </tr>
	
		
	<?php $i++; } ?>
   
</table>

</div>

</div>

</body>

    <!-- <style>
    th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 13px 8px;
    vertical-align: middle;
}

.table>tbody>tr>td{
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.table>tbody>tr>td>{
  font-size:14px;
   padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}

    </style> -->
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