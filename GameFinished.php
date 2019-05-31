<!DOCTYPE html>

<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="Game1.css">
</head>

<body>
    <?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="Game";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

$nickname = $_POST['nickname'];
$score = $_POST['score'];
$sql = "INSERT INTO  game(nickname, score)
VALUES ('$nickname', $score)";    
if(mysqli_query($conn, $sql)){
    echo "<p style='margin-left: 510px;color: white; font-weight: 600; font-size: 60px; font-family: arial;'>FINISHED<p>
    <a id='reset' href='game1.php' style='opacity:0.5 ;position:absolute; margin-left: 620px;'><img draggable='false' width='60' height='60' src='reset.png'></a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</body>

</html>
