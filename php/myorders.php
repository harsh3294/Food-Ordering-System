<?php
session_start();
if(!isset($_SESSION["customer_code"]))
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

        <div class="col-lg-3">
         <?php include("sidenav.php");?>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		<BR><BR>
		<TABLE class="table table-bordered">
		<TR class="bg-primary" style="color:white;">
			<TD colspan="3">All Orders</TD>
		</TR>
		<TR>
			<TD>Order date</TD>
			<TD>Payable Amount</TD>
			<td>Show Bill</td>
		</TR>
		<?php
		include("admin/conn.php");
		$sqla="select * from order_details where customer_code=".$_SESSION["customer_code"];
		$resulta=$conn->query($sqla);
		while($rowa=$resulta->fetch_assoc())
		{
			echo '<TR>
			<TD>'.$rowa["order_date"].'</TD>
			<TD>'.$rowa["payable_amount"].'</TD>
			<td><A HREF="generatebill.php?order_code='.$rowa["order_code"].'&order_date='.$rowa["order_date"].'">show</A></td>
		</TR>';
		}
		
		?>

		</TABLE>
		<br>
		 
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
