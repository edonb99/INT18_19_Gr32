<?php

function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
			$username = $_POST['username'];
			$date = $_POST['date'];
			$message = $_POST['message'];


			$sql = "INSERT INTO comments (username, date, message) VALUES ('$username', '$date', '$message')";
			$results = $conn->query($sql);
	}

}