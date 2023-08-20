<?php include('headerDoctor.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero" style="height: 100%;">
	<div class="container">
		<h2 class="sub-headline"style="color: white">
		<br><br><br>
			<span class="first-letter"style="color: white">P</span>atients <br><br>
		</h2>
		<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">


					<form action="" method="post" class="form-group">
					<div class="container3">
					<!-- testing -->
					<label>
						<br>
						<input type="text" name="search"  placeholder="name / email">
					</label><br><br>

					<button name="submit" type="submit" style="background-color: #e9599c; border: 2px solid #e9599c; width: 10%;">Search</button> <br>

					</form>

		 	</div>
			</div>

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

					if(isset($_POST["submit"])){

					$sql = " SELECT * FROM patient_table WHERE patient_name = '" . $_POST["search"]."' OR patient_email_address = '" . $_POST["search"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Name</th>
								<th>Birthday</th>
								<th>Contact</th>
								<th>Address</th>
								<th>Blood Group</th>
								<th>Email</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['patient_name']."</td>";
								echo "<td>".$row['patient_bday']."</td>";

								echo "<td>".$row['patient_phone_no']."</td>";
								echo "<td>".$row['patient_address']."</td>";

								echo "<td>".$row['patient_blood']."</td>";
								echo "<td>".$row['patient_email_address']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
				}

			?>


<?php include('footer.php'); ?>
<br><br><br>

</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
