<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>
	<link rel="stylesheet" href="css/doctorcss.css">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
<header>	
<div class="container">
	<nav class="nav">
		<div class="menu-toggle">
			<i class="fa fa-bars" aria-hidden="true"></i>
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<a href="index.php" class="logo"><img src="images/logo.png" width="333" height="117" alt="SMART Doctor logo"></a>
		<ul class="nav-list">
		
		<li class="nav-item">
			<a href="doctor_dashboard.php"> 
				<div class="icon">
					<i class="fa fa-home" aria-hidden="true"></i>
					<i class="fa fa-home" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Home">Home<span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="myAppointment.php"> 
				<div class="icon">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link active"><span data-text="Schedule">Schedule</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="docDetails.php"> 
				<div class="icon">
					<i class="fa fa-info" aria-hidden="true"></i>
					<i class="fa fa-info" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Details">Details<span></div>
			</a>
		</li>
		
		<li class="nav-item">
			<a href="myCustomer.php"> 
				<div class="icon">
					<i class="fa fa-users" aria-hidden="true"></i>
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Patients">Patients</span></div>
			</a>
		</li>		 
	
		<li class="nav-item">
		    <a href="login.php"> 
				<div class="icon">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<i class="fa fa-sign-out" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Logout">Logout</span></div>
			</a>
		</li>
		</ul>
	</nav>
</div>
</header>
<!-- header ends -->

	
<script>
	
	const selectElement = function (element){
	return document.querySelector(element);
	};
	
	
	let menuToggler = selectElement('.menu-toggle');
	let body = selectElement('body');
	
	menuToggler.addEventListener('click', function () {
		body.classList.toggle('open');	
	});
	
	//scroll reveal
	
	window.sr = ScrollReveal();
	
	
	sr.reveal('.animate-left', {
		origin: 'left',
		duration: 1000,
		distance: '25rem',
		delay: 300
		
	});
	
	sr.reveal('.animate-right', {
		origin: 'right',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	sr.reveal('.animate-top', {
		origin: 'top',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	sr.reveal('.animate-bottom', {
		origin: 'bottom',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	
</script>	
	

</body>
</html>