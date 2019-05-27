<!DOCTYPE html>
<html lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="contacts.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="storage.js" type="text/javascript"></script>
    <script src="jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#kontaktet").hide();
            });
            $("#show").click(function() {
                $("#kontaktet").show();
            });
            $("#fade").click(function(){
                $("#kontaktet").fadeToggle("slow");
            });
            $("#slide").click(function(){
                $("#kontaktet").slideToggle(1000);
            });
            $("#animate").click(function() {
             $(".butoni0").animate({bottom: '335px'},function(){
                 alert("You have moved the \"Contact\" button to the upper side")
                });
            });
            $("#setFunk").click(function() {
                $("#setFunk").html("<u>It means a lot for us</u>");
            });
            $("#getFunk").click(function(){
            alert($("#getText").text());
            });
              $("#addFunk").click(function(){
                $("#addFunk").before("                             <p><label>Middle Name</label><br /><input type=\"text\" id=\"text\" name=\"firstname\" placeholder=\"Your middle name...\" size=\"80\" class=\"required\" /></p>");
                });
            $("#removeFunk").click(function(){
                $("#removeAll").remove();
            });
        });
    </script>

    <title>Contacts-Echo School</title>

    <style>
        /**********************Navigation Bar style*********************/
    nav ul {
        list-style-type: none;
        padding-left: 17px;
        margin: 0;
        background-color: #5c5c5c;
        overflow: hidden;
    }
    /*************************fixed on scroll**********************/
    .fix {
        position: fixed;
        top: 0px;
        width: 1024px;
        z-index: 2;
    }
    /*************************list elements**********************/
    nav li {
        float: left;
        height: 40px;
    }
    /*************************list anchor elements on the left**********************/
    nav li a {
        padding: 13px 20px;
        text-decoration: none;
        color: white;
        display: block;
        font-family: sans-serif;
        font-size: 13px;
        font-weight: 200;
    }
        
    /*************************change background color on hover**********************/
    nav li a:hover:not(.active) {
        background-color: gray;
    }
    /******************orange background color of the current page*******************/
    .active {
        background-color: #f35300;
    }
    /***************search button*************/
    nav button{
        border: 1px solid #262626;
        border-radius: 0;
        margin: 10px 15px;
        margin-left: 10px;
        padding: 2px 10px;
        font-size: 12px;
        background: #f35300;
        font-weight: 500;
        color: white;
        text-transform: uppercase;
        cursor: pointer;
    }
    /***************text input*************/
    nav input[type="text"] {
        border: 1px solid #262626;
        padding: 3px 0px 3px 3px;
        margin-top: 10px;
        font-size: 11px;
    }
    /**********************End of Navigation Bar style*********************/
        
        
/***************The Modal(background) style**************/
.modal2 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.7);
}

/**************Modal Content******************/
.modal2-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 700px;
}


</style>
    <script>
        //function of the search button
        function search(){
    var text = "Team Alba Lokaj Edon Budakova Arian Limani Fitim Hajredini CEO & Founder Art Director Designer";
               var message=document.getElementById("demo");
            var word= document.getElementById('srch').value; //gets the input
         if(word == "") {  
             try {
             throw "empty";  //throws an error if the input is empty
            }
                catch(err){
            message.innerHTML="Input is "+err;  //displays the error
                }
                        }
     else{       
var reg = new RegExp(word, "i"); //creates a regular expression object for matching text with the word
    var res = reg.test(text);  //tests whether the word exist on the text(true or false)
        if(res)
                {
var obj = reg.exec(text);   //text for a match in the text
document.getElementById("demo").innerHTML =
"Results:   The word '" + obj + "' was found in position " + obj.index + " in the text: " + obj.input;
                }
            else{
 document.getElementById("demo").innerHTML="No results found.";
            }
        }
            var modal = document.getElementById('Modal2'); //displays the modal
            modal.style.display = "block";

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
        }
    </script>


</head>


<body style="width:1024px; margin:auto; background-color: #5c5c5c;">


    <div style="background-color: white">
        <!--**************************************************HEADER****************************************************-->
        <?php include("header.php");?>
        <!--***********************************************HEADER_END****************************************************-->








        <!--    ---------------------------------------------------  CONTACTCS  ------------------------------------------------------------------ -->





        <!-- ******************************************************  TEAM  ************************************************************* -->
        <h1 id="team" style="text-align: center; background-color: black; font-family: Arial, Helvetica, sans-serif; color:#f35300;">Team</h1>

        <div class="rresht" id="kontaktet">
            <div class="shtylle">
                <div class="karta">


                    <a target="_blank" href="alb.html ">
                        <img src="Images/bitmoji.png" alt="Alba" style="width:100%"> </a>
                    <div class="vazo">
                        <h2>Alba Lokaj</h2>

                        <p style="color: grey"> CEO &amp; Designer</p>

                        <p> <a href="mailto:alba_lokaj@hotmail.com" style=" text-decoration: none; color: white;">
                                <button style="position: relative" class="butoni0">
                                    Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="shtylle">
                <div class="karta">
                    <a target="_blank" href="eb.html ">
                        <img src="Images/bitmojiedi.JPG" alt="Edon" style="width:100%"> </a>
                    <div class="vazo">
                        <h2>Edon Budakova</h2>
                        <p style="color: grey">CEO &amp; Founder</p>

                        <p><a href="mailto:ebudakova99@gmail.com" style=" text-decoration: none; color: white;"><button style="position: relative" class="butoni0">
                                    Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="shtylle">
                <div class="karta">
                    <a target="_blank" href="ar.html ">
                        <img src="Images/bitmojiar.JPG" alt="Arian" style="width:100%"> </a>
                    <div class="vazo">
                        <h2>Arian Limani</h2>
                        <p style="color: grey">Founder &amp; IT</p>

                        <p><a href="mailto:arianlimanii@gmail.com" style=" text-decoration: none; color: white;"><button style="position: relative" class="butoni0">
                                    Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="shtylle">
                <div class="karta">
                    <a target="_blank" href="fh.html ">
                        <img src="Images/bitmojifit.JPG" alt="fitim" style="width:100%"> </a>
                    <div class="vazo">
                        <h2>Fitim Hajredini</h2>
                        <p style="color: grey">Engineer &amp; Analyst </p>

                        <p><a href="mailto:fitimhajredini59@gmail.com" style=" text-decoration: none; color: white;"><button style="position: relative" class="butoni0">
                                    Contact</button></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%;padding: 0px;margin: 10px,0px;height: 30px">
            <button class="fshehja" id="hide">Hide</button>
            <button class="fshehja" id="show">Show</button>
            <button class="fshehja" id="fade">Fade/Show</button>
            <button class="fshehja" id="slide">Slide/Show</button>
            <button class="fshehja" id="animate">Animate</button>
        </div>



        <!-- ************************************************* Contact GET IN TOUCH ************************************************* -->

        <form method="get" action="" id="mainForm">

            <fieldset>
                <legend>Get In Touch</legend>
                <p id="setFunk" style=" text-transform: uppercase; text-align: center; color:#f35300; cursor:pointer;"><u>We really appreciate your feedback</u></p>




                <table>
                    <tr>
                        <td colspan="2">
                            <p>
                                <label>First Name</label><br />
                                <input type="text" id="text" name="firstname" placeholder="Your name..." size="80" class="required" />
                            </p>
                            <button id="addFunk" style="cursor: pointer; margin-right: 60px">Add a middle name</button>
                            <p>
                                <label>Last Name</label><br />
                                <input type="text" id="text" name="lastname" placeholder="Your last name..." size="80" class="required" />
                            </p>
                            <p>
                                <label>Email</label><br />
                                <input type="email" id="text" name="email" placeholder="Your email..." size="80" class="required" />
                            </p>
                            <p>
                                <label>Subject</label><br />
                                <textarea name="subject" placeholder="Write something.." rows="12" cols="61" class="required">
               </textarea>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <label>Continent</label><br />
                                <select name="continent">
                                    <option>Choose continent</option>
                                    <option>Africa</option>
                                    <option>Asia</option>
                                    <option>Europe</option>
                                    <option>North America</option>
                                    <option>South America</option>
                                </select>
                            </p>
                            <p>
                                <label>Country</label><br />
                                <select name="country">
                                    <option>Choose country</option>
                                    <option>Albania</option>
                                    <option>Brazil</option>
                                    <option>United States</option>
                                    <option>Kosovo</option>
                                    <option>Scotland</option>
                                    <option>Canada</option>
                                    <option>Italy</option>
                                </select>
                            </p>
                            <p>
                                <label>City</label><br />
                                <input type="text" id="text" name="city" list="cities" size="40" />
                                <datalist id="cities">
                                    <option>Tirana</option>
                                    <option>Milan</option>
                                    <option>Montreal</option>
                                    <option>New York</option>
                                    <option>Prishtina</option>
                                    <option>Pekin</option>
                                </datalist>
                            </p>
                        </td>
                        <td>
                            <div class="box">
                                <label>Gender </label><br />
                                <input type="radio" name="gender" value="1">Male<br />
                                <input type="radio" name="gender" value="2" checked>Female<br />
                                <input type="radio" name="gender" value="3" checked>Unspecified<br />

                            </div>
                            <div class="box">
                                <label>Interests </label><br />
                                <input type="checkbox" name="cc">Technology <br />
                                <input type="checkbox" name="cc">Sport <br />
                                <input type="checkbox" name="cc">Science <br />
                                <input type="checkbox" name="cc">Movies<br />
                                <input type="checkbox" name="cc">Vehicles<br />
                                <input type="checkbox" name="cc">Other
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="rectangle">
                                <label>I accept terms and conditions for this website</label>
                                <input type="checkbox" name="accept" class="required">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <label>Rate this page: <br /></label>
                                <input type="number" min="1" max="5" name="rate" />
                            </p>
                            <p>
                                <label>Color Collection: <br /></label>
                                <input type="color" name="color" />
                            </p>
                        </td>
                        <td>
                            <div class="box">
                                <p>
                                    <label>Date Taken: <br /></label>
                                    <input type="date" name="date" />
                                </p>
                                <p>
                                    <label>Time Taken: <br /></label>
                                    <input type="time" name="time" />
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="rectangle centered">
                                <input type="submit" class="rounded"> <input type="reset" value="Clear Form" class="rounded">

                                <br />

                                <button class="rounded" onclick="getLocation()">Get your coordinates</button>
                                <p id="location" style="color: black; font-weight: bold; "></p>

                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>



        <div id="removeAll" style=" display: flex; width: 1000px; margin-left: 12px">
            <p id="getFunk"><button style="cursor: pointer; margin-left: 240px; margin-right: 60px;">Click me to get a contact email!</button></p>
            <p id="addFunk" style="">
                <p id="removeFunk" style=""><button style="cursor: pointer">Click me to remove us all!</button></p>
        </div>
        <br>


        <!-- Geolocation -->
        <script>
            var x = document.getElementById("location");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
        <!-- / -->



        <script>
            //funksioni qe validon nese fusha eshte e zbrazet
function EshteZbrazet(inputi)
{
    if(inputi.type=="checkbox")
    {
        if(inputi.checked)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    else
    {
        if(inputi.value=="")
        {
            return true;
        }
        return false;
    }
}

//funksioniqe ngjyros prapavijen e elementit te caktuar
// ne rast se nuk validohet sipas funksionit
function NgjyrosPrapavijen(elementi)
{
    elementi.parentNode.style.backgroundColor="#AA0000";
    elementi.style.backgroundColor="#AA0000";
    elementi.parentNode.style.color="#FFFFFF";
}

//funksioni qe largon ngjyrosjen e prapavijes

function LargoPrapavijen(elementi)
{
    elementi.parentNode.style.backgroundColor="#FFFFFF";
    elementi.parentNode.style.color="#000000";
}

// ne eventin onload te focus i elemtenteve required japim nje prapavije me ngjyre
window.onload=function startTime()
{
    var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout(function() {
                    startTime()
                }, 1000);
    var forma = document.getElementById("mainForm");
    var elementetRequired = document.querySelectorAll(".required");
    for(var i=0;i<elementetRequired.length;i++)
    {
        elementetRequired[i].onfocus=function()
        {
            this.style.backgroundColor ="#EEEE00";
        }
    }
    forma.onsubmit = function(e)
    {
        var elementet = document.querySelectorAll(".required");
        for(var j=0;j<elementet.length;j++)
        {
            if(EshteZbrazet(elementet[j]))
            {
                    e.preventDefault();
                    NgjyrosPrapavijen(elementet[j]);
            }
            else
            {
                LargoPrapavijen(elementet[j]);
            }
        }
    }

}
</script>






        <!-- ------------------------------------ FOOTER ------------------------------------------------------------------------------- -->


        <?php include("footer.php"); ?>

    </div>


</body>

</html>
