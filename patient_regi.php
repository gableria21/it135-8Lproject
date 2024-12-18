
<?php session_start();  ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="stylesheet" href="./css/registercss.css">

						<a href="index.php" class="logo"><center><img src="images/logo.png" width="203" height="117" alt="SMART logo"></center></a>
				
	<!-- this is for donor registraton -->

		<form enctype="multipart/form-data" method="post" class="text-center">
		<div class="container">
			 <center>
			 <h1><b>Patient Registration</b></h1>
			 <p>Please enter your credentials.</p>
			 <hr>
			 </center>
				  
			 		<label>
						Your Name: <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
						Birthday: <input type="date" name="age"  placeholder="age">
					</label><br><br>
					<label>
						Gender: <select name="gender" required>										
										<option value="Male">Male</option>
										<option value="Female">Female</option>									
									</select>
					</label><br><br>
					<label>
						Mobile: <input type="number" name="contact"  placeholder="Contact No." required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="" placeholder="Address">
					</label><br><br>
					<label>
						Blood Group: <br><select name="bgroup" required>
										<option value="">-select-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
								
					</label><br><br>
					<label>
						Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						Password: <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					
					<button name="submit" type="submit" class="registerbtn">Register</button> <br>
		</div>
		
		<div class="container signin">
				<p>Already have an Account? <a href="patient_login.php">Login Here!</a>.</p>
		</div>


				</form>
			</div>




	</div>
	</div><!--  containerFluid Ends -->
	 <!-- validation and insertion -->

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

			if(isset($_POST['submit'])){

				$sql1 = "SELECT * FROM patient_table WHERE patient_email_address='".$_POST["email"]."' ";
             	$result = $conn->query($sql1);	
             	if ($result->num_rows > 0) {
			        echo "<script>alert('Sorry, user already exist!');</script>";
			    }
				else{
					$sql = "INSERT INTO patient_table (patient_name, patient_bday , patient_phone_no, patient_address , patient_blood , patient_email_address, patient_password , patient_gender)
					VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "', '" . $_POST["gender"] . "' )";

				    if ($conn->query($sql) === TRUE) {
						echo '<script>alert("Successfully registered!")</script>';
                        echo "<script>location.replace('patient_login.php');</script>";
					} else {
						echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
					}

						$conn->close();
				}
			}
		?> 
			</div>
		</div>
	</div>
</section>
<!-- hero ends -->





