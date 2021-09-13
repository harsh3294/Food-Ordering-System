<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>H&T Foods</title>

    
    <?php include("resource.php");?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include("nav.php");?>

    <!-- Page Content -->
    <div class="container">



	<div class="container text-center">
<center><h1>Comment Box</h1></center>
<!-------Wrap------------>
<div id="wrap" >
<div id="main" >
<div class="row" >
<div class="col-md-5" >
<h3 class="heading" >Admin Responses</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>

<!------------Form Start---------->

<div id='form'>
<div class="row">
<div class="col-md-12">

<form action="feedbackcom.php" method="POST" id="commentform" >
<div id="comment-name" class="form-row">
<input type="text" placeholder="name" name="name"  id = "name" required >
</div><br>
<div id="comment-message" class="form-row">
<textarea name="message" placeholder = "Message" id="comment" required></textarea>
</div><br>
<div id="comment-name" class="form-row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" readonly name="date" value="<?php echo date("Y-m-d");?>" required >&nbsp;&nbsp;</div><br>
<input type="submit" name="dsubmit" id="commentSubmit" value="POST" ></a>
</form>
</div>
</div>
</div>
</div><!-------------------Reply Section------->
<div id="second" >
<div class="row" >
<div class="col-md-2">
<h3 class="second_heading"><b>Leave a Reply</b></h3>
</div>
<div class="col-md-10">
<div class="blank">
</div>
</div>
</div>
</div>

<?php
include('conn.php');
$sql="select * from feedback";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
	    echo '<div class="container">';
		echo '<div class="row" style="background-color:#ffffff;">';
		echo '<table class="table table-bordered">';
        echo '<tr>';
		echo '<td align="left" style="color:#00007d;">Name::<em><strong>'.$row["name"].'</em></strong></td>';
		echo '<td align="left" style="color:#00007d;">Message::<em><strong>'.$row["message"].'</em></strong></td>';
		echo '<td align="left" style="color:#00007d;">Date::<em><strong>'.$row["date"].'</em></strong></td>';	
		echo '</tr>';
		echo '</table >';
		echo '</div>';
		echo '</div>';
		}

}
?>
<a href="#"><input type="button" value = "reply" name = "dreply" id = "inner_reply"></a>





    <!-- /.container -->

    <!-- Footer -->
    <?php include("footer.php");?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/stylish-portfolio.min.js"></script>

  </body>

</html>
