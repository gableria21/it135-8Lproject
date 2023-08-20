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
							
				if(isset($_GET['did'])){
						
                    $delete_id = $_GET['did'];
                    $sql = "DELETE FROM doctor_table WHERE doctor_id = '".$delete_id."'";
                    if(mysqli_query($conn, $sql)) {                       
                        echo '<script>alert("Deleted Doctor Record!")</script>';
                        echo "<script>location.replace('viewDoctor.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }

				if(isset($_GET['patient_did'])){
						
                    $delete_id2 = $_GET['patient_did'];
                    $sql2 = "DELETE FROM patient_table WHERE patient_id = '".$delete_id2."'";
                    if(mysqli_query($conn, $sql2)) {                       
                        echo '<script>alert("Deleted Patient Record!")</script>';
                        echo "<script>location.replace('viewCustomer.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }

				if(isset($_GET['app_did'])){
						
                    $delete_id3 = $_GET['app_did'];
                    $sql3 = "DELETE FROM appointment_table WHERE appointment_id = '".$delete_id3."'";
                    if(mysqli_query($conn, $sql3)) {                       
                        echo '<script>alert("Deleted Appointment Record!")</script>';
                        echo "<script>location.replace('viewAppointment.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }
				if(isset($_GET['feedback_did'])){
						
                    $delete_id4 = $_GET['feedback_did'];
                    $sql4 = "DELETE FROM feedback WHERE id= '".$delete_id4."'";
                    if(mysqli_query($conn, $sql4)) {                       
                        echo '<script>alert("Deleted Feedback Record!")</script>';
                        echo "<script>location.replace('viewFeedback.php');</script>";
                    } else {
                        echo "ERROR";
                    }
                }
			
?> 