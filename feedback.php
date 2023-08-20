<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerPatients.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>

<!-- for retriving data -->
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container" >
		<h2 class="sub-headline">
		<br><br>
		<br>
			<span class="first-letter">F</span>eedback <br><br>
		</h2>

		<div class="formstyle" style="float: center; width:50%; padding:5px;border: 1px solid lightgrey; margin: auto;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<div class="container2" >
					<label>
						<span> Feedback:<br></span><textarea name="feedback" id="" cols="40" rows="4" required></textarea>
						<br>
					</label><br><br>
					<button name="submit" type="submit" style="margin:auto ;width:115px;border-radius: 3px; background-color: #e9599c; border: 2px solid #e9599c;">Send</button> <br>




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

							if(isset($_POST['submit'])){


							$sql = "INSERT INTO feedback (email,feedback)	VALUES ('" . $_SESSION["email"] ."','" . $_POST["feedback"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Thanks for your feedback!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
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
