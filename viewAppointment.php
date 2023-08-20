<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerAdmin.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<span class="first-letter">V</span>iew <span class="first-letter">A</span>ppointments
		</h2>
		<br><br>
		<!-- this is for view appointments -->
   <div class="secContainer2">
			<div class="all_user" style="margin-top:0px; margin-left: 0px;">
				<?php
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

					$sql = " SELECT * FROM appointment_table";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Appointment ID</th>
								<th>Dr.Name</th>
								<th>Contact</th>
								<th>Expertise</th>
								<th>Patient</th>

								<th>PatientContact</th>
								<th>Time</th>
								<th>Date</th>
                                <th>Reason for Appintment</th>
								<th>Action</th>
								<th>Mode of Payment</th>

							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['appointment_id']."</td>";
								echo "<td>".$row['doctor_name']."</td>";
								echo "<td>".$row['doctor_contact']."</td>";
								echo "<td>".$row['doctor_expertise']."</td>";
								echo "<td>".$row['patient_name']."</td>";
								echo "<td>".$row['patient_contact']."</td>";
								echo "<td>".$row['appointment_time']."</td>";
								echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['reason']."</td>";
								echo "<td>".$row['payment']."</td>";
								echo "<td><a href='appointment_update.php?app_did=".$row['appointment_id']."'><button>Update</button></a>
										<a href='Adelete.php?app_did=".$row['appointment_id']."'><button>Delete</button></a></td>";

								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
