
<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerPatients.php'); ?>

<!-- for retriving data -->
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

                    $sql="SELECT * FROM patient_table where patient_email_address='" . $_SESSION["email"] . "'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							$id=$data[0];
							$name=$data[3];
							//$age=$data[2];
							$contact=$data[7];
							$address=$data[6];
							$bgroup=$data[8];
							$email=$data[1];

							mysqli_close($conn);
				?>
<!-- for retriving data -->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero" style="height: 100%;">
	<div class="container">
		<br><br><br><br><br><br>
		<h2 class="sub-headline">
			<span class="first-letter">M</span>y <span class="first-letter">D</span>etails
		</h2>
		<br><br>

		<div class="formstyle" style="float: right;padding:5px;border: 1px solid lightgrey;margin-right:400px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">

					<div class="container2"><br><br>
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>

					<label>

						<!-- Age: <input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
						-->
					</label>
					<label>
						Mobile: <input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>

 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <select name="bgroup" value="<?php echo $bgroup; ?>"required>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
					</label><br><br><br>


					<button name="submit" type="submit" style="margin-left:30px;width:108px;border-radius: 3px; background-color: #e9599c; border: 2px solid #e9599c;">Update Profile</button> <br>


			</form> <br>

				<br>
	</div>
	</div>
</div>
</section>
<!-- hero ends -->

<!-- update information -->

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

					$sql="UPDATE patient_table SET patient_name='" .$_POST["name"]. "' , patient_phone_no ='" .$_POST["contact"]. "',patient_address ='" .$_POST["address"]. "' WHERE patient_id= $id";

					if (mysqli_query($conn, $sql)) {
					    echo "<script>alert(' Record updated successfully');</script>";
						} else {
							 echo "<script>alert('There was a Error Updating profile');</script>";
						}

					mysqli_close($conn);
													}
			?>
			<!-- update information End -->

<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
