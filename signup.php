<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>   
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body style="width:1024px; margin:auto; background-color: #5c5c5c;">
    
    <div style="background-color: white">
    <header><?php include("header.php");?></header>
    
     <!-- ********************** SIGNUP MODAL ********************** -->
           <div id="id02" class="modal"> 
                <!-- ********************* MODAL CONTENT ******************** -->

                <form class="modal-content1 animate" method="post" action="signup.php">
                <?php include('errors.php'); ?>
                    <div style="padding: 0px; margin: 5%"> 


                        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Sign Up</b></p>
                        <br><br>
                        <p>Please fill this form to create an account.</p>

                        <hr>
                        
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
                        <br>
                        <input type="password" placeholder="Password" name="password_1"   title=" Six or more characters">
                        <br>
                        <input type="password" placeholder="Repeat Password" name="password_2" >
                        
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account?<a  href="login.php" style="color:dodgerblue">Sign In</a> </p>

                        <div style="height: 55px">

                            <button id="signUpButton" type="submit" name="reg_user">Sign Up</button>
                        </div>
                    </div>
                </form>

                <!-- ********************* MODAL CONTENT END *********************** -->
            </div> 
            <!-- ********************** SIGNUP MODAL END ************************ -->
    
    <footer><?php include("footer.php");?></footer>
        </div>
</body>
</html>