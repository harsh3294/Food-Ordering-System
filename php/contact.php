<?php
/*session_start();*/
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

          <div>
		  </div>

          <div class="row">

			<?php
			include("admin/conn.php");
			$sql2="select * from product_details order by category_code";
			$result2=$conn->query($sql2);
			if($result2->num_rows>0)
			{
				while($row2=$result2->fetch_assoc())
				{
					echo '<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" src="cakeimg/'.$row2["product_image"].'" alt=""></a>
							<div class="card-body">
							  <h4 class="card-title">
								<a href="#">'.$row2["product_name"].'</a>
							  </h4>
							  <h5>Rs. '.$row2["product_cost"].'</h5>
							  <p class="card-text">'.$row2["product_desc"].'</p>
							</div>
							<div class="card-footer">
							  <A HREF="addtobasket.php?product_code='.$row2["product_code"].'&product_cost='.$row2["product_cost"].'" class="btn btn-sm btn-success">ADD TO BASKET</A>
							</div>
						  </div>
						</div>';
				}
			}	
			?>            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
	  <BR><BR>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include("footer.php");?>

   
    <script src="js/jquery.min.js"></script>

  </body>

</html>
