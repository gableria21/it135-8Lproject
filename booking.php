<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerPatients.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>


<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero" style="height: 100%;">
	<div class="container" style=" width: 100%; max-width: 800px;">

		<h2 class="sub-headline">
		<br><br><br>
			<span class="first-letter">B</span>ook an <span class="first-letter">A</span>ppointment

		</h2>
		<br><br><br><br>
		<?php
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";

?>
				<!-- fetching doctor info -->
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

					$sql="SELECT * FROM doctor_table WHERE doctor_id = $doc_id ";
					$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row  = $result->fetch_assoc()) {
						        $doc_id   = $row["doctor_id"];
						        $name 	= $row["doctor_name"];
						        $expertise 	= $row["doctor_expert_in"];
						        $contact 	= $row["doctor_phone_no"];
						        $fee = $row["doctor_fee"];

								$email = $row["doctor_email"];
							    }
							}

					$sql2="SELECT * FROM patient_table WHERE patient_email_address = '".$_SESSION["email"]."'  ";
					$result2 = $conn->query($sql2);
						if ($result2->num_rows > 0) {
							// output data of each row
								while($row2  = $result2->fetch_assoc()) {
										$patient_email = $row2["patient_email_address"];
										$patient_name = $row2["patient_name"];
										$patient_contact = $row2["patient_phone_no"];
										$patient_address = $row2["patient_address"];
										}
									}

						$conn->close();

				?>
				<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff; width: 50%; float: center;margin-right:auto;margin-left:auto; height:auto;">
			<div class="formstyle" style="float: center;padding:5px;border: 1px solid lightgrey;margin-right:auto;margin-left:auto; margin-bottom:auto;background-color:#f3f3f8;color:#141313; height:auto; ">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					<div class="container2"><br><br>

				<label>
						<b>Dr. Name:   </b><?php echo $name; ?>
					</label><br><br>

 					<label>
						<b>Contact:   </b><?php echo $contact; ?>
					</label><br><br>

					<label>
						<b>Category: </b><?php echo $expertise; ?>
					</label><br><br>

					<label>
						<b>Fee(Php): </b><?php echo $fee; ?>
					</label><br><br>
					<label>
						<b>Doctor's email: </b><?php echo $email; ?>
					</label><br><br>
					<label>
						<b>Patient's Name: </b><?php echo $patient_name; ?>
					</label><br><br>

 					<label>
						 <b>Contact:  (+63)</b><?php echo $patient_contact; ?>
					</label><br><br>
					<label>
						 <b>Patient E-mail: </b><?php echo $patient_email; ?>
					</label><br><br>

					<label>
						 <b>Address: </b><?php echo $patient_address; ?>
					</label><br><br>
					<label>
						 <b>Date: </b><input type="date" name="date" value=""/>
					</label><br><br>
					<label>
						 <b>Time:</b> <select name="time" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						<b>Reason for Appointment:</b><br> <textarea name="reason" cols="30" rows="4" required/></textarea>
					</label><br><br>
					<label>
						 <b>Payment: </b><select name="payment" required>
										<option value="">-select-</option>
										<option value="Bank Transfer">Bank Transfer</option>
										<option value="Gcash">GCash</option>
									</select>
					</label><br><br>
					<br><br>
					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button>
					<a href="search_doctor.php"><button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>

	</div>
		</div>
				<!-- 	booking info-->

			<!-- confirming booking -->
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

						if(isset($_POST['submit'])){

							$sql = " INSERT INTO appointment_table (doctor_id, doctor_name,doctor_contact, doctor_email ,doctor_expertise,fee, patient_name,patient_contact,patient_email,patient_address,date ,appointment_time,payment, reason)
								VALUES ('" . $doc_id . "','" . $name . "','" . $contact . "','" . $email . "','" . $expertise . "', '" . $fee . "','" . $patient_name . "','". $patient_contact . "','". $patient_email . "','". $_POST["address"] . "','". $_POST["date"] . "','". $_POST["time"] . "','". $_POST["payment"] . "','". $_POST["reason"] . "' )";

								if ($conn->query($sql) === TRUE) {
									echo "<script>alert('Your booking has been accepted!'); </script>";
									echo "<script>location.replace('view_booking.php');</script>";
								} else {
									echo "<script>alert('There was an Error'); </script>";
								}

								$conn->close();
						}
					?>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
