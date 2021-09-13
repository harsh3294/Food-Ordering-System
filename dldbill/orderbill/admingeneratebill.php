<?php
session_start();
if(!isset($_SESSION["admin_code"]))
{
header("location:index.php");
}
$html='';
$html=$html.'
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>';
include("../../admin/conn.php");
$sqlc="select * from customer_details where customer_code=".$_GET["customer_code"];
$resultc=$conn->query($sqlc);
while($rowc=$resultc->fetch_assoc())
{
$customer_name=$rowc["customer_name"];
$customer_contact=$rowc["customer_contact"];
$customer_shipaddress=$rowc["customer_shipaddress"];
}
$sql="select* from shop_item where session_code in(select session_code from shop_sessions where session_code in(select session_code from order_details where order_code=".$_GET["order_code"]."))";
$result=$conn->query($sql);
$html=$html.
'<BR><BR><BR>
<IMG SRC="../../img/LogoKhanaKhazana-kopie.png" width="200px" height="40px"><br>
<TABLE>
<TR>
<TD><B>Order Date:</B>'.$_GET["order_date"].'<br></TD>
</TR>
<TR>
<TD><B>Customer Name:</B>'.$customer_name.'<br></TD>
</TR>
<TR>
<TD><B>Customer Contact:</B>'.$customer_contact.'<br></TD>
</TR>
<TR>
<TD><B>Ship Address:</B>'.$customer_shipaddress.'<br></TD>
</TR>
</TABLE>
<br>
<TABLE width="900px" border="1">
<TR>
<TD>Food Name</TD>
<TD>Food</TD>
<TD>Unit Cost</TD>
<TD>Quantity</TD>
<TD>Total Cost</TD>
</TR>';
$payable_amt=0;
$x=0;
while($row=$result->fetch_assoc())
{
$x=$x+1;
$html=$html.'<tr>';
$sql1="select * from product_details where product_code=".$row["product_code"];
$result1=$conn->query($sql1);
while($row1=$result1->fetch_assoc())
{
$html=$html.'<TD>'.$row1["product_name"].'</TD>
<TD><img src="../../cakeimg/'.$row1["product_image"].'" style="width:100px;height:90px;padding:10px;"></TD>
<TD>Rs.'.$row1["product_cost"].'/-</TD>
<TD>'.$row["item_qty"].'</TD>
<TD align="right">Rs.'.$row1["product_cost"]*$row["item_qty"].'/-</TD>';
$payable_amt=$payable_amt+($row1["product_cost"]*$row["item_qty"]);
}
$html=$html.'</tr>
<tr>
<td align="right" colspan="4"><B>Total Payable Amount Rs.</B></td>
<td align="right">Rs.'.$payable_amt.'/-</td>
</tr>';

}
$html=$html.'</TABLE>
</body>
</html>';
define('_MPDF_PATH','../');
include("../mpdf.php");
$mpdf=new mPDF('c','A4-L','','',25,10,10,10,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("CakeNation");
$mpdf->SetAuthor("CakeNation");
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output(); 
exit;
?>
