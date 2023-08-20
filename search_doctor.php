<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerPatients.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>


<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<br><br><br><br>
			<span class="first-letter">S</span>earch <span class="first-letter">D</span>octor
		</h2>
		<br><br><br><br>


		<div class="search" style="background-color:;">
			<div class="formstyle" style="float: center;width: 30%;padding:5px;border: 1px solid lightgrey;margin-right:auto;margin-left:auto; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">

					<form action="search_result.php" method="post" class="form-group">

					<div class="container3">


						<label><br><br><br>
						 Doctor expertise:<br><br><select name="expertise" type="text" style="width: 200px; margin-left: auto; margin-right:auto" />
												<option>-Select-</option>
												<option>Pediatrics</option>
												<option>Orthopedics</option>
												<option>Neurologist</option>
												<option>Pediatrician</option>
												<option>Gynecologist</option>
												<option>Cardiologist</option>
												<option>Oncologist</option>
												<option>Gastroenterologist</option>
												<option>Pulmonologist</option>
												<option>Nephrologist</option>
												<option>Endocrinologist</option>
												<option>Gastroenterologist</option>
												<option>Ophthalmologist</option>
												<option>Otolaryngologist</option>
												<option>Dermatologist</option>
												<option>Psychiatrist</option>

						</select>
					<br><br><br>
					</label>
					<button name="submit" type="submit" style="background-color: #e9599c; border: 2px solid #e9599c; width: 25%;">Search</button>
					<br><br>

					</form>




		 	</div>
	</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
