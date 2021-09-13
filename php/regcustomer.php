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
		/*session_start();
		include("admin/conn.php");
		$sql="select* from shop_item where session_code=".$_SESSION["session_code"];
		$result=$conn->query($sql);*/
		?><BR><BR><BR>
		<FORM METHOD="POST" ACTION="createcustomer.php">
		<TABLE class="table table-bordered">
		<TR class="bg-primary" style="color:white;">
			<TD colspan="2">New Customer</TD>
		</TR>
		<TR>
			<TD>Name</TD>
			<TD><INPUT TYPE="text" NAME="customer_name" class="form-control" required></TD>
		</TR>
		<TR>
			<TD>Email</TD>
			<TD><INPUT TYPE="email" NAME="customer_email" class="form-control" required></TD>
		</TR>
		<TR>
			<TD>Contact</TD>
			<TD><INPUT TYPE="text" NAME="customer_contact" class="form-control" required></TD>
		</TR>
		<TR>
			<TD>Home Address</TD>
			<TD><TEXTAREA NAME="customer_address" ROWS="" COLS="" class="form-control" required></TEXTAREA></TD>
		</TR>
		<TR>
			<TD>Shipping Address</TD>
			<TD><TEXTAREA NAME="customer_shipaddress" ROWS="" COLS="" class="form-control" required></TEXTAREA></TD>
		</TR>
		<TR>
			<TD>Customer Location</TD>
			<TD><INPUT TYPE="text" NAME="customer_location" class="form-control" required></TD>
		</TR>
		<TR>
			<TD>Select Password</TD>
			<TD><INPUT TYPE="password" NAME="customer_password" class="form-control" required></TD>
		</TR>
		<TR>
			<TD  colspan="2"><CENTER><INPUT class="btn btn-sm btn-success" TYPE="submit" value="Register"></CENTER></TD>
		</TR>
		</TABLE>
	
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
