<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>H & T Foods</title>

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/homepage.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <!--<a class="navbar-brand" href="../index.php"><IMG src="../img/hQ04wg7.png" class="img img-responsive" style="height:40px;width:240px;"></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Website Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12">

         <center>
		 <br/>
		 <br/>
		 <BR>
		 <FORM METHOD="POST" ACTION="adminlogin.php">
			<TABLE style="width:50%;" class="table table-bordered">
			<TR>
				<TD colspan="2"><H4  class="bg-success" style="color:white;text-align:center;">ADMIN LOGIN</H4></TD>
			</TR>
			<TR>
				<TD>Email</TD>
				<TD><INPUT TYPE="email" NAME="admin_email" required class="form-control"></TD>
			</TR>
			<TR>
				<TD>Password</TD>
				<TD><INPUT TYPE="password" NAME="admin_password" required class="form-control"></TD>
			</TR>
			<TR>
				<TD colspan="2"><CENTER><INPUT TYPE="submit" value="Login" class="btn btn-sm btn-primary" style="width:100px"></CENTER></TD>
			</TR>
			</TABLE>
		 </FORM><BR>
		 <?php
		 if(isset($_GET["msg"]))
		 {
			 echo '<div class="info info-alert"><h3 style="color:red">Login fail please try again!!</h3></div>';
		 }
		 ?>
		 
		 </center>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-2 bg-dark fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; H & T Foods 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    
    <script src="../js/jquery.min.js"></script>

  </body>

</html>
