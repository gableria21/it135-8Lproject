<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('headerDoctor.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero"  style="height: 100%;">
	<div class="container">
		<h2 class="sub-headline" style="color: white"><br><br>
			<span class="first-letter" style="color: white">M</span>y <span class="first-letter"  style="color: white">D</span>etails
		</h2>
		<br><br>
<!-- for retriving data -->
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

							$sql="SELECT * FROM doctor_table where doctor_email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[3];
							$address=$data[6];
							$contact=$data[5];
							$email=$data[1];
							$userid=$data[0];
							$expertise=$data[9];
							$fee=$data[12];
							$pic = $data[4];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div class="login" style="background-color:#fff;">
			<div class="formstyle" style="float: right;padding:5px;border: 1px solid lightgrey;margin-right:400px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
				
				<div class="container2">
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" required>
					</label><br><br>

 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>"  required>
					</label><br><br>

					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" " required>
					</label><br><br>
					
					<label>
						Expertise: <input type="text" name="expertise" value="<?php echo $expertise; ?>"  required>
					</label><br><br>

					<label>
						Fee: <input type="text" name="fee" value="<?php echo $fee; ?>" required>
					</label><br><br>
					<label>

					
					
					<button name="submit" type="submit" style="background-color: #e9599c; border: 2px solid #e9599c; width: 50%;">UpdateProfile</button> <br>


			</form> <br><br>

	</div>
	
	</div>
</div>


			<!-- update information -->

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
							

							$sql="UPDATE doctor_table SET doctor_name='" .$_POST["name"]. "' ,doctor_address='" .$_POST["address"]."' ,  doctor_phone_no ='" .$_POST["contact"]. "',doctor_email ='" .$_POST["email"]. "' , 	 doctor_expert_in='" .$_POST["expertise"]. "', doctor_fee='" .$_POST["fee"]. "' WHERE doctor_email='" . $_SESSION["email"] . "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
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