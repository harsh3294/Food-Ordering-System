<?php
session_start();
if(!isset($_SESSION["customer_code"]))
{
	header("location:customerlogin.php");
}
else
{
	include("admin/conn.php");
	$sql="update shop_sessions set customer_code=".$_SESSION["customer_code"]." where session_code=".$_SESSION["session_code"];
	$result=$conn->query($sql);
	$sql1="select * from shop_item where session_code=".$_SESSION["session_code"];
	//echo $sql;
	//echo "<BR>".$sql1;
	$result1=$conn->query($sql1);
	$payable_amount=0;
	while($row1=$result1->fetch_assoc())
	{
		$payable_amount=$payable_amount+$row1["item_cost"];
	}

	$sql2="insert into order_details(order_date,customer_code,payable_amount,payment_option,session_code,order_status)values('".date("Y-m-d")."',".$_SESSION["customer_code"].",$payable_amount,'',".$_SESSION["session_code"].",'pending')";
	//echo "<BR>".$sql2;
	$result2=$conn->query($sql2);
	$_SESSION["session_code"]=null;
	header("location:generatebill.php?order_code=".$conn->insert_id."&order_date=".date("Y-m-d"));
}
?>