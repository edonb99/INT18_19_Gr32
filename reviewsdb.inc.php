<?php

	$conn = mysqli_connect('localhost', 'root', '1234', 'ecoschools');

	if(!$conn){
		die("Connection failed: ".myslqi_connect_error());
	}
?>