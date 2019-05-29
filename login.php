<?php include('server.php') ?>
<!DOCTYPE html>

<head>
   
</head>
<body>
     <!--********************** LOGIN MODAL ********************* -->
     <div id="id01" class="modal">

<!-- ************ MODAL CONTENT ************* -->
<form class="modal-content animate" method="post" action="login.php">
<?php include('errors.php'); ?>
    <div style="padding: 0px; margin: 5%">
        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Login</b></p>

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <br><br>
        </div>
        <br>
        <div>
            <!-- <label for="uname" style="font-family: 'Helvetica', sans-serif"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" id="uname"> -->
            <input type="text" placeholder="Username" name="username" >

            <!-- <label for="password" style="font-family: 'Helvetica', sans-serif"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="password" > -->
            <input type="password" placeholder="Password" name="password"  >

            <button id="logInButton" type="submit" name="login_user">Login</button>
            <!-- <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> -->
        </div>
        <br>
        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="#" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'" style="color:white" class="btn-modal">Sign up</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn-modal">Forgot password?</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="vl">
            <span class="vl-innertext">Login with Social Media</span>
        </div>
        <br><br>
        <div class="" style="clear: both">
            <a href="https://web.facebook.com/login" class="fb btn-modal" target="_blank">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
            </a>
            <a href="https://twitter.com/login" class="twitter btn-modal" target="_blank">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
            </a>
            <a href="https://accounts.google.com/signin" class="google btn-modal" target="_blank"><i class="fa fa-google fa-fw">
                </i> Login with Google+
            </a>
        </div>
        <br>
        <div style="background-color:white">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 4px">Cancel</button>

        </div>
    </div>
</form>
<!-- ************** MODAL CONTENT END ************** -->
</div>
<!--********************** LOGIN MODAL END ********************* -->
</body>
</html>