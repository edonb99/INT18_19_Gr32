        <header>

            <div class="header">
                <ol style="float: left">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn "> Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn "> Sign up</button> | </li>
                    <li><a class="a" href="video.html" target="_blank" onclick="clickCounter()"> Video </a>
                        <!-- clicked video -->
                        <span id="result" style="font-size: 10px"></span> <!-- / --> | </li>

                    <li><a class="a" href="Game.html" target="_blank" onclick="clickCounter1()"> Game </a>
                        <!-- clicked video -->
                        <span id="result2" style="font-size: 10px"></span> <!-- / -->
                    </li>
                </ol>


                <ol style="float: right">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn"> Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn "> Sign up</button> | </li>
                    <li><a class="a" href="#bottom"> Bottom</a> | </li>
                    <li><a class="a" href="Contacts.php#team "> Team </a></li>
                </ol>
            </div>
            <br>
            <!--********************** LOGIN MODAL ********************* -->
            <div id="id01" class="modal">

                <!-- ************ MODAL CONTENT ************* -->
                <form class="modal-content animate">
                    <div style="padding: 0px; margin: 5%">
                        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Login</b></p>

                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <br><br>
                        </div>
                        <br>
                        <div>
                            <label for="uname" style="font-family: 'Helvetica', sans-serif"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" id="uname" required autocomplete="on">

                            <label for="psw" style="font-family: 'Helvetica', sans-serif"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" id="psw" required>

                            <button id="logInButton" type="submit">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
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

            <hr>

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

            <div id="container">
                <div class="box1">
                    <span style="font-size: 32px;margin: 0px;padding: 0px">
                        Education
                    </span>
                    <br>
                    <span style="font-size: 12px;margin: 0px;padding: 0px">
                        Nurture, Inspire, Flourish
                    </span>
                </div>
                <div class="box2">
                    <img src="Images/eco_schools_logo.jpg" width="468px" height="60px" alt="Llogo" style="float: right;overflow: auto">
                </div>
            </div>

            <!--******************************************NAV_BAR*************************************-->

            <div id="Modal2" class="modal2">

                <!-- ************* Modal content **************-->
                <div class="modal2-content">
                    <p id="demo"></p>
                </div>

            </div>

            <nav>
                <br>
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Events.php">Events</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Contacts.php">Contact</a></li>

                    <li style="float:right;"><button onclick="search()">Search</button>
                    <li style="float:right;"><input id="srch" type="text" placeholder="Search Term Here..."></li>
                </ul>
                <br><br>
            </nav>
            <!--******************************************NAV_BAR_END*************************************-->


        </header>