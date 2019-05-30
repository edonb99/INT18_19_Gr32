<?php
session_start();

// deklarim i variablave
$username = "";
$email    = "";
$FDusername=$FDemail = "";
$errors = array(); 

// lidhja me db
$db = mysqli_connect('localhost', 'root', 'Blerine12', 'ecoschools');

// regjistrohen userat ndb
if (isset($_POST['reg_user'])) {
  // i merr tdhanat prej formularit
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // validimi, nese ka gabime shtohen ne vargun $errors
  if (empty($username)) { array_push($errors, "Username is required"); } 
  else{
  $FDname = test_input($_POST["username"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$FDname)) {
         array_push($errors, "Username can only  contain letters")  ;
        }
      }
  if (empty($email)) { array_push($errors, "Email is required"); }
  else{
    //  $FDemail=test_input($_POST["email"]);	
   
    
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Invalid email format");
	  }
	  }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  else if (strlen($_POST['password_1']) <= 7) {
    array_push($errors, "Your password must contain at least 8 characters!");
}
else if(!preg_match("#[0-9]+#",$_POST['password_1'])) {
    array_push($errors, "Your password must contain at least 1 number!");
}
else if(!preg_match("#[A-Z]+#",$_POST['password_1'])) {
    array_push($errors, "Your password must contain at least 1 capital letter!");
}
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

//   kontrollon a ka ndb shfrytzues me t"njejtin username ose email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // inese ekziston useri ndb shfaqet errori ....
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Useri regjistrohet nese ska errore
  if (count($errors) == 0) {
  	$password = md5($password_1);//enkriptimi i passit para se me regjistru ndb

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: books.php');
  }
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            if(!empty($_POST["remember"]))
            {
                setcookie("username",$_POST["username"],time()+(86400*30));
                setcookie("password",$_POST["password"],time()+(86400*30));
            }
            else{
                if(isset($_COOKIE['username']))
                {
                    setcookie("username","");
                }
                if(isset($_COOKIE['password']))
                {
                    setcookie("password","");
                }
                
            }
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: books.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
  ?>