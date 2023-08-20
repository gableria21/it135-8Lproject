<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
			<a href="index.php"> 
				<div class="icon">
					<i class="fa fa-home" aria-hidden="true"></i>
					<i class="fa fa-home" aria-hidden="true"></i>
				</div>
				<div class="nav-link active"><span data-text="Home">Home</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="about.php"> 
				<div class="icon">
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="About">About</span></div>
			</a>
		</li>
		
		<li class="nav-item">
			<a href="doctors.php"> 
				<div class="icon">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<i class="fa fa-user-md" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Doctors">Doctors</span></div>
			</a>
		</li>		 
		<li class="nav-item">
			<a href="gallery.php"> 
				<div class="icon">
					<i class="fa fa-picture-o" aria-hidden="true"></i>
					<i class="fa fa-picture-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Gallery">Gallery</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="branches.php"> 
				<div class="icon">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Branches">Branches</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="testimonials.php"> 
				<div class="icon">
					<i class="fa fa-users" aria-hidden="true"></i>
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Testimonials">Testimonials</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="contact.php"> 
				<div class="icon">
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Contact">Contact</span></div>
			</a>
		</li>
		<li class="nav-item">
		    <a href="login.php"> 
				<div class="icon">
					<i class="fa fa-sign-in" aria-hidden="true"></i>
					<i class="fa fa-sign-in" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Login">Login</span></div>
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