<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>H & T Foods</title>

    
    <?php include("resource.php");?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include("nav.php");?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

       <div class="col-lg-3">
         <?php /*include("sidenav.php");*/?>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/c1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/c2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/c3.jpg" alt="Third slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="img/c4.jpg" alt="Forth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
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
