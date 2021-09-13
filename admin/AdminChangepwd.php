<?php
session_start();
if(!isset($_SESSION["admin_name"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    
    <?php include("resource.php");?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include("nav.php");?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-9">
		<br><br>
		 <form action="updatepassword.php" method="post">
			<table class="table table-bordered">
			<tr>
				<td colspan="2"><h3 class="bg-success text-white">UPDATE PASSWORD</h3></td>
			</tr>
			<tr>
				<td>Enter New Password</td>
				<td><input type="password" required class="form-control" name="admin_password" placeholder="Re-Enter New password" class="form-control"></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" value="CHANGE" class="btn btn-primary"></center></td>
			</tr>
			</table>
			
		  </form>



		</div>
		<!-- /.col-lg-9 --></div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

     <?php include("footer.php");?>

    <!-- Bootstrap core JavaScript -->

  </body>

</html>
