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

        <div class="col-lg-3">
         <?php include("sidenav.php");?>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		<?php
		include("admin/conn.php");
		?>
		<BR><BR><BR>
		<FORM METHOD="POST" ACTION="loginnow.php">
		<TABLE class="table table-bordered" style="width:600px">
		<TR class="bg-primary" style="color:white;">
			<TD colspan="2">Customer Login</TD>
		</TR>
		
		<TR>
			<TD>Login Email</TD>
			<TD><INPUT TYPE="email" NAME="customer_email" class="form-control" required></TD>
		</TR>
		
		<TR>
			<TD>LoginPassword</TD>
			<TD><INPUT TYPE="password" NAME="customer_password" class="form-control" required></TD>
		</TR>
		<TR>
			<TD  colspan="2"><CENTER><INPUT class="btn btn-sm btn-success" TYPE="submit" value="Login"></CENTER></TD>
		</TR>
		</TABLE>
		<br>
		 <?php
		 if(isset($_GET["msg"]))
		 {
			 echo '<div class="info info-alert"><CENTER><h4 style="color:red">Login fail please try again!!</h4></CENTER></div>';
		 }
		 ?>
		</FORM>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
	<BR><BR>
    <?php include("footer.php");?>

    
    <script src="js/jquery.min.js"></script>

  </body>

</html>
