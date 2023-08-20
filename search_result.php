<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('headerPatients.php'); ?>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMART Doctor Appointment System</title>

<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">

<section class="hero" id="hero">
	<div class="container" style="height: auto;">
		<h2 class="sub-headline">
			<span class="first-letter">R</span>esults
		</h2>
		<br><br><br>
		<!-- result -->
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
        //$sql="SELECT * FROM doctor_table where doctor_address='" . $_POST["address"] . "' AND doctor_expert_in='" . $_POST["expertise"] . "'";
		$sql="SELECT * FROM doctor_table where doctor_expert_in='" . $_POST["expertise"] . "'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);	
			

        if($count>=1){
            echo "<table border='1' align='center' cellpadding='32' >
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Address</th>
                    
                    <th>Mobile</th>
                    
                    <th>Email</th>
                    <th>Expertise in</th>
                    <th>Fee</th>
                    <th>Book</th>
                    
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
            ?>
                <td><a href="booking.php?doc_id=<?php echo $row['doctor_id'] ?>">Book</a></td>;
            <?php 		
                    
                    echo "</tr>";
            }
            echo "</table>";
        } 
        else{
            print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
        }

        


        ?>
        <!-- result -->
        <br>

        <button style="background-color: #e9599c; border: 2px solid #e9599c; width: 15%;">
        <a href="search_doctor.php">Search Again</a></button>
            </div>
        </section>
        <!-- hero ends -->


<?php include('footer.php'); ?>


	
</div>	<!--  containerFluid Ends -->



	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	 
	
