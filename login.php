<?php include('header.php'); ?>

<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<?php
		$_SESSION["email"]="";
		$_SESSION["password"]="";

		$_SESSION['userstatus']="";

	 ?>
<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<span class="first-letter">L</span>ogin
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
		<br>
				<h4 class="text-center;"><a href="patient_login.php" class="btn cta-btn">Patient login</a></h4>
				<br>
				<h4 class="text-center;"><a href="doctor_login.php" class="btn cta-btn">Doctor login</a></h4>
			</div>
		</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>

