<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
     <!-- ********************** SIGNUP MODAL ********************** -->
            <div id="id02" class="modal">
                <!-- ********************* MODAL CONTENT ******************** -->

                <form class="modal-content1 animate" action="" method="post">
                    <div style="padding: 0px; margin: 5%"> 
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Sign Up</b></p>
                        <br><br>
                        <p>Please fill this form to create an account.</p>

                        <hr>
                        <input style="width: 220px;float: left" type="text" placeholder="First Name" name="name" required autofocus>
                        <input style="width: 220px;float: right" type="text" placeholder="Last Name" name="surname" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <br>
                        <input type="password" placeholder="Password" name="psw" required pattern="[A-Za-z0-9].{6,}" title=" Six or more characters">
                        <br>
                        <input type="password" placeholder="Repeat Password" name="rpsw" required>
                        <!-- <div style="display: flex">
                            <p style="padding: 0px;margin: 0px"><b>Gender: </b></p>
                            <input type="radio" name="gender" value="male"> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="Unspecified" checked> Unspecified<br>
                        </div>
                        <br>
                        <div style="display: flex">
                            <label for="bday" style="font-family: 'Helvetica', sans-serif;float: left"><b>Birthday: </b></label>
                            <input style="margin-left: 20px" type="date" id="bday" required>
                        </div> -->

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account?<a onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'" href="#" style="color:dodgerblue">Sign In</a> </p>

                        <div style="height: 55px">
                            <button onclick="document.getElementById('id02').style.display='none'" id="signUpCancel" type="button">Cancel</button>
                            <button id="signUpButton" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>

                <!-- ********************* MODAL CONTENT END *********************** -->
            </div>
            <!-- ********************** SIGNUP MODAL END ************************ -->
</body>
</html>