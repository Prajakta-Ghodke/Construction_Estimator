<?php 
	include('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enquiries</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
</head>
<body>
         <div>
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                        <div class="col-lg-5 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>BuilderTrend</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
                            <div class="navbar-nav mr-auto">
								<a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
								<a href="designs.html" class="nav-item nav-link">Designs</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
							<div class="navbar-nav ms-auto">
							<a href="login.php" class="nav-item nav-link">Login</a>
							</div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->			
			
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Information</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
			
	
	<div class="container">
		<?php 
			$sql="SELECT * FROM contact";
			$count=1;
			$result = mysqli_query($conn, $sql);
			// print_r($result);exit;
	        if(mysqli_num_rows($result) > 0)//Calculate no of rows
	         {
		 ?>
	<div class="readtable">	 
	<table class="table table-bordered">
		<thead  style="border: 2px solid black">
			<tr  style="border: 3px solid black">
				<th style="border: 2px solid black">Sr.no</th>
				<th style="border: 2px solid black">Name</th>
				<th style="border: 2px solid black">Email</th>
				<th style="border: 2px solid black">Subject</th>
				<th style="border: 2px solid black">Message</th>
			</tr>
		</thead>
		<tbody  style="border: 3px solid black">
				<?php 
				// $row = mysqli_fetch_assoc($result);
				// echo "<pre>";
				// print_r($row);exit();
				$count=1;
				$querry="Select * from contact";
				$result=mysqli_query($conn,$querry);
				while($row = mysqli_fetch_assoc($result)){
				 ?>
			<tr  style="border: 3px solid black">
				<td style="border: 2px solid black"><?php echo $count; ?></td>
				<td style="border: 2px solid black"><?php echo $row['nm']; ?></td>
				<td style="border: 2px solid black"><?php echo $row['email']; ?></td>
				<td style="border: 2px solid black"><?php echo $row['subj']; ?></td>
				<td style="border: 2px solid black"><?php echo $row['msg']; ?></td>
			</tr>
		</tbody>
		<?php 
				$count++;}
			}
			else{
				echo"Data Not Found";
			}
			?>
	</table>
	</div>
			
	</div>
	<?php mysqli_close($conn); ?>
	
	<!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="estimator">Construction Estimator</a>
                                <a href="designs.html">Designs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.html">About</a>
                                <a href="contact.html">Contact</a>
							</div>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="index.html">BuilderTrend</a>, All Right Reserved.</p>
                        </div>
					</div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
</html>