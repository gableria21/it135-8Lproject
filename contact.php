<?php include('header.php'); ?>

<section class="hero" id="hero" height="100%">
	<div class="container">
    <br><br><br><br><br><br><br><br><br><br>
		<h2 class="sub-headline">
			<span class="first-letter">C</span>ontact Us
		</h2>
		<br><br><br>
        <div classdiv class="formstyle" style="float: center; width:30%; height:10%; padding:5px;border: 2px solid #e9599c;; margin: auto;background-color:#f3f3f8;color:#141313;">
        <br><br>
				<h2 class="text-center">Your Message</h2><br>
				<form action="" method="post" class="text-center form-group">
						<label>
								First Name: <input type="text" name="firstname" value="" placeholder="firstname" required>
						</label><br><br>

						<label>
								Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
						</label><br><br>	

						<label>
								Email: <input type="email" name="email"  value="" placeholder="Your email" required>
						</label><br><br>
						<label>
								Your Comment: <textarea name="comment" id="" cols="30" rows="4" required></textarea> 
						</label>
							<BR><br>	
						<input type="submit" value="Send Us" name="submit" style="margin:auto ;width:115px;border-radius: 3px; background-color:        #e9599c; border: 2px solid #e9599c;"/>
						<!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 -->
					</form><br><br><br>
			</div>
	</div>
    
</section>

<!-- hero ends -->
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
            $sql = "INSERT INTO contact (firstname, lastname,email,comment)
            VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Message successfully sent')</script>";
                } else {
                echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
                }
                $conn->close();
		}
	?> 


<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">






<?php include('footer.php'); ?>

<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>