
<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerPatients.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>

<!-- for retriving data -->
				<?php
                    $_SESSION['patient']="";
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "doctor_appointment";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql="SELECT * FROM patient_table where patient_email_address='" . $_SESSION["email"] . "'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							$name=$data[3];
							//$age=$data[2];
							//$contact=$data[3];
							//$address=$data[4];
							//$bgroup=$data[8];
							//$email=$data[6];

							mysqli_close($conn);
				?>
<!-- for retriving data -->
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<span class="first-letter">W</span>elcome, <br><br> <?php echo $name; ?>!
		</h2>
		<h1 class="headline">SMART Doctor Appointment System</h1>
		<div class="headline-description">
			<div class="separator">
				<div class="line line-left"></div>
				<div class="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
				<div class="line line-right"></div>
			</div>
			<div class="single-animation">
				<h5>Your Safety is our Utmost Priority</h5>
			</div>
		</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>