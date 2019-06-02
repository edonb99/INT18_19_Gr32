<!DOCTYPE html>

<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="Loja.css">
</head>

<body>
    <?php 
$servername = "localhost";
$username = "root";
$password = "1234";
$db="ecoschools";


// Krijimi i lidhjes me databaze
$conn = mysqli_connect($servername, $username, $password, $db);

// Variablat ku ruhen nickname dhe score
$nickname = $_POST['nickname'];
$score = $_POST['score'];
    
// Query per vendosjen e te dhenave ne databaze    
$sql = "INSERT INTO  game(nickname, score)
VALUES ('$nickname', $score)";  
    
    // Shfaq ne ikone per perseritje te lojes
    echo "<a id='reset' href='Loja.php' style='opacity:0.5 ;position:absolute; margin-left: 620px; margin-top: 200px;'><img draggable='false' width='60' height='60' src='Images/reset.png'></a>";
if(mysqli_query($conn, $sql)){
    echo "<p style='margin-left: 510px;color: white; font-weight: 600; font-size: 60px; font-family: arial;'>FINISHED<p>
";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</body>

</html>
