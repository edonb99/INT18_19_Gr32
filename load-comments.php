<?php
		
	include 'reviewsdb.inc.php';


	$commentNewCount = $_POST['commentNewCount'];



	$sql = "SELECT * FROM comments LIMIT $commentNewCount ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){

		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>";
			 echo "<small>".$row['date']."</small>";
			echo "<br>"; 
			echo "<strong>".$row['username'].":"."</strong>";
			echo "<br>";
			echo $row['message'];
			echo "</p>";
		}


	} else {
		echo " No more comments!";
	}

?>