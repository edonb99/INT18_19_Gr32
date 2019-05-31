<?php

function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
			$username = $_POST['username'];
			$date = $_POST['date'];
			$message = $_POST['message'];


			$sql = "INSERT INTO comments (username, date, message) VALUES ('$username', '$date', '$message')";
			$results = $conn->query($sql);
        
        //Dergon email kujtdo qe ben review
            $tempUser = $_SESSION["username"]  ;  
            $query = "SELECT email FROM users WHERE username='$tempUser'";
            $emailResult = mysqli_query($conn, $query);
            $emailQuery = mysqli_fetch_assoc($emailResult);
            $eml = $emailQuery['email'];
            
            mail("$eml","Eco Schools","Thank you for your review","From: eco.schools.pr@gmail.com\r\n");
	}

}