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
	<br><br>
		<h2 class="sub-headline">
			<span class="first-letter">U</span>pdate <span class="first-letter">P</span>atients
		</h2>
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
                    
					$update_id = $_GET['patient_did'];
                    $sql="SELECT * FROM patient_table where patient_id= '".$update_id."'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							$id=$data[0];
                            $email=$data[1];
							$password=$data[2];
							$name=$data[3];
                            $bday=$data[4];
                            $gender=$data[5];
							$address=$data[6];
                            $phone=$data[7];
                            $blood=$data[8];
                            
                           
							mysqli_close($conn);
				?>
<!-- for retriving data -->
<br><br><br>
<div class="login" style="background-color:#fff;">
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
                <label>
						Name: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
                       Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br><br>
                    <label>
                        password: <input type="text" name="password" value="<?php echo $password; ?>" placeholder="email" required>
					</label><br><br>
                    <label>
                        gender: <input type="text" name="gender" value="<?php echo $gender; ?>" placeholder="email" required>
					</label><br><br>
					
					<label>
						Mobile: <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" required>
					</label><br><br>
					<label>
						Blood Group: <input type="text" name="blood" value="<?php echo $blood; ?>" placeholder="Blood Type" >
					</label><br><br>

	
					<button name="submit" type="submit" style="margin-left:43px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>

			</form> <br><br>		
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
							
					$sql="UPDATE patient_table SET patient_name='" .$_POST["name"]. "' ,patient_email_address='" .$_POST["email"]."' , patient_password='" .$_POST["password"]."',patient_phone_no='" .$_POST["phone"]."' , patient_address='" .$_POST["address"]."', patient_gender='" .$_POST["gender"]."',  patient_blood='" .$_POST["blood"]."'  WHERE patient_id= '".$update_id."'";
		
					if (mysqli_query($conn, $sql)) {
					    echo "<script>alert(' Record updated successfully');</script>";
                        echo "<script>location.replace('viewCustomer.php');</script>";
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

	 
	
