<?php

try{
$servername = 'localhost';
$user = 'root';
$pass = '1234';
$name = 'ecoschools';
$db = mysqli_connect($servername,$user,$pass,$name);
}

catch (Exception $e){
	echo $e->errorMessage();
}
?>