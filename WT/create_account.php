<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
		$email = $_POST['email'];
        $password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$bday = $_POST['bday'];
		$gender = $_POST['gender'];
 
        $query = "INSERT INTO account (email, password, first_name, last_name, bday, gender) VALUES ('$email', '$password', '$first_name', '$last_name', '$bday', '$gender')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "User Created Successfully.\n";
			
        }
		else{
            echo "User Registration Failed";
        }
?>



