<?php
$admin_email=$_POST["admin_email"];
$admin_password=$_POST["admin_password"];
include("conn.php");
$sql1="select * from admin_details where admin_email='$admin_email' and admin_password='$admin_password'";
//echo $sql1;
$result=$conn->query($sql1);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$admin_code=$row["admin_code"];
		$admin_name=$row["admin_name"];
	}
	session_start();
	$_SESSION["admin_code"]=$admin_code;
	$_SESSION["admin_name"]=$admin_name;
	header("location:adminhome.php");
}
else
{
	header("location:index.php?msg=fail");
}
?>