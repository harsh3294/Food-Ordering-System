<?php
include("admin/conn.php");
session_start();
$product_code=$_GET["product_code"];
if(!isset($_SESSION["session_code"]))
{
	if(isset($_SESSION["customer_code"]))
	{
		$sql="insert into shop_sessions(customer_code,payable_amt)values(".$_SESSION["customer_code"].",0)";
	}
	else
	{
		$sql="insert into shop_sessions(customer_code,payable_amt)values(0,0)";
	}
	$result=$conn->query($sql);
	$_SESSION["session_code"]=$conn->insert_id;

}
//echo $_SESSION["session_code"];
if(isset($_SESSION["session_code"]))
{
	$sql1="insert into shop_item(session_code,product_code,item_qty,item_cost)values(".$_SESSION["session_code"].",'$product_code',1,".$_GET["product_cost"].")";
	$conn->query($sql1);
	header("location:mybasket.php");
}
?>