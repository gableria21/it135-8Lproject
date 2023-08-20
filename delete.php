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
							
				if(isset($_GET['did'])){
						
                    $delete_id = $_GET['did'];
                    $sql = "DELETE FROM appointment_table WHERE appointment_id = '".$delete_id."'";
                    if(mysqli_query($conn, $sql)) {                       
                        echo '<script>alert("Cancelled Appointment!")</script>';
                        echo "<script>location.replace('view_booking.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }
			
?> 