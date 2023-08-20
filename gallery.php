<?php include('header.php'); ?>

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<span class="first-letter">G</span>allery
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

<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link href="gallery/css/style.css" rel="stylesheet">

<div class="header" id="top">
	 <h1 class="headline">Our Services</h1>
   <i class="fa fa-angle-down animated bounce"></i>
</div>

<div class="section animate">
   <div class="middle">
		<img src="gallery/pics/1.png" alt="doctor"/> 
	   
	   
   </div>
   <div class="left title">
      <div class="content">
         <h2>Can provide patients with a prompt reply.</h2>
         <p> One of the most significant benefits of providing online appointments is that patients may give far more effective care to your client. Patients can communicate with doctors from the convenience of their own homes without having to take time off work or travel to the medical office.</p>
         <a href="about.php" class="btn-primary">Learn more</a>
      </div>
   </div>
   <div class="right tiles">
      <img src="gallery/pics/2.png" alt="doctor"/> 
      <img src="gallery/pics/3.png" alt="doctor"/> 
      <img src="gallery/pics/4.png" alt="doctor"/> 
      <img src="gallery/pics/5.png" alt="doctor"/> 
   </div>
</div>

<div class="section">
   <div class="middle">
      <img src="gallery/pics/6.png" alt="smartdoctor" />
   </div>
   <div class="right title">
      <div class="content">
         <h2>Allows Clients to Book at Any Time and Place.</h2>
         <p>Patients can schedule an appointment using their smartphones and the internet from anywhere and at any moment. One of the most significant advantages of using the SMART doctor appointment system is this.</p>
      </div>
   </div>
   
   <div class="left tiles">
       <img src="gallery/pics/7.png" alt="history" />
       <img src="gallery/pics/8.png" alt="history" />
       <img src="gallery/pics/9.png" alt="history" />
       <img src="gallery/pics/10.png" alt="history" />
   </div>
   
</div>

<div class="section">
   <div class="middle">
      <img src="gallery/pics/11.png" alt="doctor"/>
   </div>
   <div class="left title">
      <div class="content">
         <h2>Patients Don’t Have to Wait Long Hours.</h2>
         <p>Sick patients expect to be seen as soon as they arrive at the clinic. SMART doctor appointment systems can provide lesser hours instead of letting the patients wait hours for their turn to arrange an appointment.  </p>
      </div>
   </div>
   
   <div class="right tiles">
       <img src="gallery/pics/12.png" alt="doctor"/>
       <img src="gallery/pics/13.png" alt="doctor"/>
	   <img src="gallery/pics/14.png" alt="doctor"/>
	   <img src="gallery/pics/15.png" alt="doctor"/>
   </div>
   
</div>
	
<div class="section">
   <div class="middle">
      <img src="gallery/pics/16.png" alt="doctor" />
   </div>
   <div class="right title">
      <div class="content">
         <h2>Patients and Employees can save tons of Time..</h2>
         <p>Patients can schedule appointments for themselves online. Patients may rest assured that the SMART doctor appointment system will provide the correct information in the booking  form because they will be filling it out themselves.</p>
      </div>
   </div>
   
   <div class="left tiles">
       <img src="gallery/pics/17.png" alt="doctor"/>
       <img src="gallery/pics/18.png" alt="doctor"/>
       <img src="gallery/pics/19.png" alt="doctor"/>
       <img src="gallery/pics/20.png" alt="doctor"/>
   </div>
   
</div>	
	
<div class="section">
   <div class="middle">
      <img src="gallery/pics/21.png" alt="doctor" />
   </div>
   <div class="left title">
      <div class="content">
         <h2>Reduces Patient No-Shows.</h2>
         <p>Patients may forget about their doctor's appointment, leaving you to be disappointed with the  date. There will be fewer troubles with the SMART doctor appointment system, as the system is meant to send updates and affirmations to clients when they set up an appointment.</p>
      </div>
   </div>
   
   <div class="right tiles">
       <img src="gallery/pics/22.png" alt="doctor" />
       <img src="gallery/pics/23.png" alt="doctor" />
       <img src="gallery/pics/24.png" alt="doctor" />
       <img src="gallery/pics/25.png" alt="doctor" />
   </div>
   
</div>	

<div class="section">
   <div class="middle">
      <img src="gallery/pics/26.png" alt="smart" />
   </div>
   <div class="right title">
      <div class="content">
         <h2>Executive Check-up  in various hospitals.  </h2>
         <p>They offer state of the art Wellness Center.   They also have various  executive check-up packages where you can choose what suits your needs.   Doctors also offer wellness counseling for better health. </p>
      </div>
   </div>
   
   <div class="left tiles">
      <img src="gallery/pics/27.png" alt="smart" />
      <img src="gallery/pics/28.png" alt="smart" />
      <img src="gallery/pics/29.png" alt="smart" />
      <img src="gallery/pics/30.png" alt="smart" />
   </div>
	
</div>

<div class="footer">
   <a href="#top" class="scrollTo"><i class="fa fa-angle-up animated bounce"></i></a>
   <h1 class="headline">Scroll Up</h1>
</div>




<?php include('footer.php'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	
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


<script src="../../js/jquery-1.9.0.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="gallery/js/index.js"></script>