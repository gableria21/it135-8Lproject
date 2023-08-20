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
		<h2 class="sub-headline">
			<span class="first-letter">U</span>pdate <span class="first-letter">A</span>ppointments
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

					$update_id = $_GET['app_did'];
                    $sql="SELECT * FROM appointment_table where appointment_id= '".$update_id."'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							$data=mysqli_fetch_array($q);
							$time=$data[3];
                            $dName=$data[5];
							$dContact=$data[6];
							$fee=$data[8];
                            $pName=$data[9];
                            $pContact=$data[10];
							$pEmail=$data[12];
                            $payment=$data[13];
                            $date=$data[14];

							mysqli_close($conn);
				?>
<!-- for retriving data -->
<br><br>
<div class="login" style="background-color:#fff;">
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:350px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<div class="container2"><br><br>
                <label>
					    Doctor's Name: <input type="text" name="dname" value="<?php echo $dName; ?>" placeholder="Full name" required>
					</label><br><br>
                    <label>
						Doctor's Mobile: <input type="text" name="dContact" value="<?php echo $dContact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
                    <label>
                        Doctor's fee: <input type="text" name="fee" value="<?php echo $fee; ?>" placeholder="fee" required>
					</label><br><br>
                    <label>
						 Date: <input type="date" name="date" value="<?php echo $date; ?>"/>
					</label><br><br>
					<label>
						 Time: <select name="time" value="<?php echo $time; ?>" required>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
                    <label>
						 Payment: <select name="payment" value="<?php echo $payment; ?>"required>

										<option value="Bank Transfer">Bank Transfer</option>
										<option value="Gcash">GCash</option>
									</select>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:40px;width:115px;border-radius: 3px; background-color: #e9599c; border: 2px solid #e9599c;">Update Details</button> <br>


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

					$sql="UPDATE appointment_table SET appointment_time='" .$_POST["time"]. "' ,doctor_name='" .$_POST["dname"]. "' , doctor_contact='" .$_POST["dContact"]."',fee='" .$_POST["fee"]."' , payment='" .$_POST["payment"]."', date='" .$_POST["date"]."' WHERE appointment_id= '".$update_id."'";

					if (mysqli_query($conn, $sql)) {
					    echo "<script>alert(' Record updated successfully');</script>";
                        echo "<script>location.replace('viewAppointment.php');</script>";
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
