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
							
				if(isset($_GET['app_did'])){
						
                    $delete_id = $_GET['app_did'];
                    $sql = "DELETE FROM Appointment_table WHERE appointment_id = '".$delete_id."'";
                    if(mysqli_query($conn, $sql)) {                       
                        echo '<script>alert("Cancelled Appointment Record!")</script>';
                        echo "<script>location.replace('myAppoinment.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }
  ?> 