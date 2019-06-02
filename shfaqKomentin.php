<?php

if(isset($_POST['username'])){
    $username = $_POST['username'];
}

$ldb = mysqli_connect('localhost', 'root', '1234', 'ecoschools');

$query = "SELECT * FROM comments WHERE username like '".$username."%'";

$rez= mysqli_query($ldb,$query);

if($rez)
{

    echo "<table border='1px'><tr><th>User</th><th>Comment</th</tr>";
    while ($rreshti = mysqli_fetch_assoc($rez))
    {
        echo "<tr><td>".$rreshti['username']."</td><td>".$rreshti['message']."</td>";
    }
    echo "</table>";

}
mysqli_close($ldb);
?>