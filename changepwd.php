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
			<br><br><br>
			<span class="first-letter">C</span>hange <span class="first-letter">P</span>assword
		</h2>
		<br><br><br>

		<div class="formstyle" style="float: right;padding:5px;border: 1px solid lightgrey;margin-right:400px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<div class="container2"><br><br>
					<label>
						<span style="color: #000">Old Password:</span><input type="password" name="password"  placeholder="Current password" required>
					</label><br><br>
					<label>
						<span style="color: #000">New Password:</span><input type="password" name="newpassword"  placeholder="New password" required>
					</label><br><br>
					<label>
						<span style="color: #000">Confirm Password:</span><input type="password" name="confpassword"  placeholder=" confirm password" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:43px;width:115px;border-radius: 3px; background-color: #e9599c; border: 2px solid #e9599c;">Update Password</button> <br>


					<!-- login validation -->
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

							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient_table WHERE patient_email_address= '" . $_SESSION["email"]."' AND patient_password= '" . $_POST["password"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0){
								//check the new password
								if($newpassword==$confpassword){

								$sql1="UPDATE patient_table SET patient_password='" . $_POST["newpassword"]  ."' WHERE patient_email_address='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								    echo "<script>alert('Password Has been Updated');</script>";
								    echo "<script>location.replace('patient_dashboard.php');</script>";
								}else{
									echo "<script>alert('Password did not match');</script>";

								}


							}else{
								echo "<script>alert('Input Correct Password');</script>";
							}



					}

 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;

				<br>

			</div>
	</div>
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
