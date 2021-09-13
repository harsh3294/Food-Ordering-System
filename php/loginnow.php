<?php
$customer_email=$_POST["customer_email"];
$customer_password=$_POST["customer_password"];
include("admin/conn.php");
$sql1="select * from customer_details where customer_email='$customer_email' and customer_password='$customer_password'";
echo $sql1;
$result=$conn->query($sql1);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$customer_code=$row["customer_code"];
		$customer_name=$row["customer_name"];
	}
	session_start();
	$_SESSION["customer_code"]=$customer_code;
	$_SESSION["customer_name"]=$customer_name;
	header("location:mybasket.php");
}
else
{
	header("location:customerlogin.php?msg=fail");
}
?>