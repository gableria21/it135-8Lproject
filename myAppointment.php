<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('headerDoctor.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero" style="height: 100%;">
	<div class="container">
		<br> <br><br> <br> <br><br> <br>
		<h2 class="sub-headline" style="color: white">
			<span class="first-letter" style="color: white">M</span>y <span class="first-letter" style="color: white">S</span>chedule
		</h2>
		<br>
		<br>
		<div class="secContainer">
		<div class="all_user" style="margin-top:0px;">
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
									 
					//print_r($_SESSION);
					$sql = " SELECT * FROM appointment_table WHERE doctor_email='".$_SESSION["email"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' id='info'>
							<tr>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
								<th>Cancel</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['patient_name']."</td>";
								echo "<td>".$row['patient_contact']."</td>";
								echo "<td>".$row['patient_email']."</td>";
								echo "<td>".$row['patient_address']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['appointment_time']."</td>";
								echo "<td><a href='doc_delete.php?app_did=".$row['appointment_id']."'>Cancel</a></td>";
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
	<br> <br><br> <br> <br><br> <br><br> <br><br> <br> <br><br> <br>
	</div>
	
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>


	
</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	 
	
