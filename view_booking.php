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
			<span class="first-letter">V</span>iew <span class="first-letter">A</span>ppoinments
		</h2>
		<br><br><br>
		
		<div class="secContainer">
		<div class="formstyle" style="margin-top:0px;">
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

					$sql = " SELECT * FROM appointment_table WHERE patient_email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Doctor's expertise</th>
								<th>My Doctor</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>";
							while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['doctor_expertise']."</td>";
								echo "<td>".$row['doctor_name']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['appointment_time']."</td>";
								echo "<td><a href='delete.php?did=".$row['appointment_id']."'>Cancel</a></td>";
						?>


						<?php
							echo "</tr>";
							}
							echo "</table>";
							}
							else{
								print "<p align='center'>No Record Found</p>";
							}

						?>

					<!-- Cancel Booking -->
	</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
