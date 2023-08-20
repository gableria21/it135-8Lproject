<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerAdmin.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero"style="height: 100%;">
	<div class="container">
		<br><br><br><br><br><br>
		<h2 class="sub-headline">
			<span class="first-letter">A</span>dd <span class="first-letter">D</span>octor
		</h2>
		<br><br>
		<div class="formstyle" style="float: right;padding:5px;border: 1px solid lightgrey;margin-right:400px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">

		<form enctype="multipart/form-data" method="post" class="text-center" >
			<div class="container2"><br><br>
			 <div class="col-md-12">


					<label>
					    </span><input type="text" name="name" value="" placeholder="Full Name" required>
					</label><br><br>

					<label>
						 <input type="text" name="contact" value="" placeholder="Contact Number" required>
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="" placeholder="E-mail" required>
					</label><br><br>

					<label>
						 <input type="password" name="password"  value="" placeholder="Password" required>
					</label><br><br>
					<hr><br><br>
					<label>
						 <input type="text" name="address" value="" placeholder="Hospital" required>
					</label><br><br>
					<label>
						 <select name="expertise" required>
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
					</label><br><br>

					<label>
					   <input type="text" name="fee" value="" placeholder="Fee" required>
					</label><br><br>

					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px;  background-color: #e9599c; border: 2px solid #e9599c; ">Add</button> <br>

			</div>	<!-- col-md-12 -->


				</form>
			</div>


		</div>

	</div>



 <!-- validation and insertion -->


			<?php
						$_SESSION['adminstatus']="";
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


							$sql = "INSERT INTO doctor_table (doctor_name, doctor_address , doctor_password,	doctor_phone_no  , 	doctor_email ,doctor_expert_in,doctor_fee )
							VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["password"] . "','" . $_POST["contact"] . "', '" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["fee"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
                                echo "<script>location.replace('addDoctor.php');</script>";
							}else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?>



	<!-- validation and insertion End-->
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
