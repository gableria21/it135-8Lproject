
<?php session_start();  ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="stylesheet" href="./css/logincss.css">



		<a href="index.php" class="logo"><center><img src="images/logo.png" width="203" height="117" alt="SMART logo"></center></a>

		
				
	<!-- this is for donor sign in -->

<form action="" method="post" class="text-center form-group">
		<div class="container">
			 <center>
			 <h1><b>Doctor Login</b></h1>
			 <p>Please enter your credentials.</p>
			 <hr>
			 </center>
	 
			<label for="email" class="control-label">Email</label><br>
			<input type="email" name="email" id="email" name="email" class="form-control form-control-sm rounded-0" required>
			
			
			<br>
			<label for="password" class="control-label">Password</label>
            <input type="password" name="password" id="password" name="password" class="form-control form-control-sm rounded-0" required>
			
			 <hr>
			 <br>
		           <button name="submit" class="submit" type="submit">Login</button> <br>
		</div>
		
		<div class="container signin">
				<p>Don't have an Account? <a href="patient_regi.php" title="create a account">Register Here!</a>.</p>
		</div>
		
		</form>








               <!-- login validation -->
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

                   if(isset($_POST["submit"])){

                            $sql= "SELECT * FROM doctor_table WHERE doctor_email= '" . $_POST["email"]."' AND doctor_password= '" . $_POST["password"]."'";

                            $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                            $_SESSION["email"]= $_POST["email"];
                                            echo '<script>alert("Login Successful")</script>';
                                            echo "<script>location.replace('doctor_dashboard.php');</script>";
                                            $_SESSION['adminstatus']= "yes";
                                            
                                        } else {
                                            echo '<script>alert("Invalid username or password")</script>';
                                            
                                        }
                        $conn->close();		
                    }

                    
                ?>
                <!-- login validation End-->

            </form> 
            <br>&nbsp;&nbsp;&nbsp;<br>	
	    </div>
	</div>
			</div>
		</div>
	</div>
</section>
<!-- hero ends -->


