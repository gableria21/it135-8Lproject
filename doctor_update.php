<?php include('headerAdmin.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container">
	<br><br><br><br><br><br><br><br><br><br><br>
		<h2 class="sub-headline">
			<span class="first-letter">U</span>pdate Doctor
		</h2>

<!-- for retriving data -->
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

					$update_id = $_GET['did'];
                    $sql="SELECT * FROM doctor_table where doctor_id= '".$update_id."'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							$id=$data[0];
                            $email=$data[1];
							$password=$data[2];
							$name=$data[3];
							
                            $phone=$data[5];
                            $address=$data[6];
                            $bday=$data[7];
                            $degree=$data[8];
							$expertise=$data[9];
							$status=$data[10];
							mysqli_close($conn);
				?>
<!-- for retriving data -->
<br><br><br>
<div class="login" style="background-color:#fff;">
			<div class="formstyle" style="float: right;padding:5px;border: 1px solid lightgrey;margin-right:350px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<div class="container2"><br><br>
					<label>
						Doctor's name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Email: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Password: <input type="text" name="password" value="<?php echo $password; ?>" placeholder="Full name" required>
					</label><br><br>
                  
                    <label>
						Phone number: <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Hospital: <input type="text" name="hospital" value="<?php echo $address; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Birthday: <input type="text" name="bday" value="<?php echo $bday; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Degree: <input type="text" name="degree" value="<?php echo $degree; ?>" placeholder="" required>
					</label><br><br>
                    <label>
						Expertise: <input type="text" name="expertise" value="<?php echo $expertise; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						 Status: <select name="status" required>
										<option value="">-select-</option>
										<option value="Active">Active</option>
										<option value="notActive">Inactive</option>
									</select>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:40px;width:115px;border-radius: 3px; background-color: #e9599c; border: 2px solid #e9599c;">Update Profile</button> <br>


			</form> <br><br>
	</div>

</div>
</div>
<br><br><br>

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

					$sql="UPDATE doctor_table SET doctor_name='" .$_POST["name"]. "' ,doctor_email='" .$_POST["email"]."' , doctor_password='" .$_POST["password"]."',doctor_phone_no='" .$_POST["phone"]."' , doctor_address='" .$_POST["hospital"]."',  doctor_date_of_birth='" .$_POST["bday"]."', doctor_degree='" .$_POST["degree"]."', doctor_expert_in='" .$_POST["expertise"]."', doctor_status='" .$_POST["status"]."' WHERE doctor_id= '".$update_id."'";

					if (mysqli_query($conn, $sql)) {
					    echo "<script>alert(' Record updated successfully');</script>";
                        echo "<script>location.replace('viewDoctor.php');</script>";
						} else {
							 echo "<script>alert('There was a Error Updating profile');</script>";
						}

					mysqli_close($conn);
													}
			?>
			<!-- update information End -->
	</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
