<?php

$conn = mysqli_connect('localhost', 'root', '1234', 'commentsection');

if(!$conn){
	die("Connection failed: ".myslqi_connect_error());
}