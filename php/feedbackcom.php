<?php
include("admin/conn.php");
$name=$_POST["name"];
$message=$_POST["message"];
$date=$_POST["date"];
$sql="insert into feedback(name,message,date)values('$name','$message','$date')";
$result=$conn->query($sql);
header("location:feedback.php?msg=add");
?>