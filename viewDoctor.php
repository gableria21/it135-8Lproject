<?php if(!isset($_SESSION)){
	session_start();
	}
?>

<?php include('headerAdmin.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>



<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero" style="height: 100%;">
	<div class="container">
		<br><br><br><br><br><br><br><br>
		<h2 class="sub-headline">
			<span class="first-letter">V</span>iew <span class="first-letter">D</span>octors
		</h2>
		<br><br>
		<!-- this is for View doctors -->
		<div class="secContainer">
			<div class="all_user" style="margin-top:0px; margin-left: 0px;">
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
					$_SESSION['adminstatus']="";
					$sql = " SELECT * FROM doctor_table";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>ID</th>
								<th>Name</th>

								<th>Hospital</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expertise</th>

								<th>Fee</th>
								<th>Action</th>

							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['doctor_name']."</td>";
								echo "<td>".$row['doctor_address']."</td>";
								echo "<td>".$row['doctor_phone_no']."</td>";
								echo "<td>".$row['doctor_email']."</td>";
								echo "<td>".$row['doctor_expert_in']."</td>";

								echo "<td>".$row['doctor_fee']."</td>";
								echo "<td><a href='doctor_update.php?did=".$row['doctor_id']."'><button>Update</button></a>
										<a href='Adelete.php?did=".$row['doctor_id']."'><button>Delete</button></a></td>";

								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
	</div>
</div>
</section>
<!-- hero ends -->


<?php include('footer.php'); ?>



</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
