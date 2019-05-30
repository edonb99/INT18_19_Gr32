<?php  

 $connect = mysqli_connect("localhost", "root", "1234", "ajax3"); 

 $sql = "DELETE FROM volunteers WHERE id = '".$_POST["id"]."'"; 
  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data deleted!';  
 }  
 ?>