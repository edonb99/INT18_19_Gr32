<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    
</head>
<body style="width:1024px; margin:auto; background-color: #5c5c5c;" >
    
    <div style="background-color: white">
    <header>
    <?php include("header.php");?>
    </header>
    
     <!--********************** LOGIN MODAL ********************* -->
     <div id="id01" class="modal"> 

<!-- ************ MODAL CONTENT ************* -->
<form class="modal-content animate" method="post" action="login.php">
<?php include('errors.php'); ?>
    <div style="padding: 0px; margin: 5%">
        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Login</b></p>


        <br>
        <div>
           
            <input type="text" placeholder="Username" name="username" value="<?php if (isset($_COOKIE["username"])) {echo $_COOKIE["username"];} ?>" >
          
            <input type="password" placeholder="Password" name="password" value="<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];} ?>" >
            <label>
                <input type="checkbox" checked="checked" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?>> Remember me
            </label> 
            <button id="logInButton" type="submit" name="login_user">Login</button>
             
        </div>
        <br>
        <div class="bottom-container">
            <div class="row">
                <!-- <div class="col"> -->
                    <a href="signup.php" style="color:white" class="btn-modal">Sign up</a>
                <!-- </div> -->
                 
            </div>
        </div>
        
    </div>
</form>
<!-- ************** MODAL CONTENT END ************** -->
  </div> 
<!--********************** LOGIN MODAL END ********************* -->
    
    <footer>
    <?php include("footer.php")?>
    </footer>
</div>
        </body>
</html>