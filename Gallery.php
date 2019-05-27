<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="storage.js" type="text/javascript"></script>


    <title>Gallery-Echo School</title>

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
    nav li a:hover:not(#active) {
        background-color: gray;
    }
    /******************orange background color of the current page*******************/
    #active {
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





    /*<!------------------------------------ SLIDESHOW ne fund ------------------------------------->*/

    /* Gallery Style */
    * {
        box-sizing: border-box;
    }


    .sllajdetefotove {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    .mbajtesiSllajdeve {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

        /*<!--Caption Text-->*/
    .text {
        color: white;
        font-size: 35px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
        
        /*Numra ne tekste (1/3...)*/
    .numriTekstit {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
        
        /*Bullets (pikat) poshte tek fotot*/
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

        /*Animacioni duke u bo fade*/
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2.5s;
        animation-name: fade;
        animation-duration: 2.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }
        
        /*Zvogelimi i tekstit ne ekrane me te vogla*/
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }

    /*<!----------------------------------------- THE END OF SLIDESHOW ----------------------------------------------->*/

        
        
        
    /*<!-------------------------------- PHOTO GRID ------------------------------------------------------------- -->*/

    .row {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* krijimi i kater kolonave te njejta afer njera-tjetres */
    .column {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }
      
        
        /*<!-----------------hover efekti i photo grid-------------------->*/
        .imgthumbnail1:hover {
          box-shadow: 0 0 4px 2px rgba(0, 140, 186, 0.5);
        }
        /*<!-----------------hover efekti i photo grid-------------------->*/

        
    /*<!-------------------------------- END OF PHOTO GRID ------------------------------------------------------------- -->*/

        
        
</style>

    <script>
        //function of the search button
        function search(){
            var text = "Some of our Best Moments. The 3 main Stages of Children Eco-Education";
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



<body style="width:1024px; margin:auto; background-color: #5c5c5c">


    <div style="background-color: white; background-image: url('Images/ecogallerybackground6.jpg'); background-repeat: no-repeat; 
                background-attachment: fixed; background-position: center; ">

        <!--**************************************************HEADER****************************************************-->
        <?php include("header.php");?>
        <!--***********************************************HEADER_END****************************************************-->






        <!-- --------------------------------------------------------GALLERY------------------------------------------------------ -->


        <!-------------------------SOME OF OUR BEST MOMENTS--------------------------------------------->

        <h1 style="text-align: center; background-color: mediumspringgreen; font-family: monospace; color: #f35300;">Some of our Best Moments</h1>

        <!-----------------------Audio Eco Hymn------------------------------=-->
        <audio controls>
            <source src="Images/ecohymn.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <!-----------------------Audio Eco Hymn end------------------------------=-->


        <!-------------------------------- PHOTO GRID ------------------------------------------------------------- -->
        <br><br>
        <div class="row">
            <div class="column">
                <a target="_blank" href="Images/ecoschoolkids.jpg">
                    <img class="imgthumbnail1" src="Images/ecoschoolkids.jpg" alt="Kids in the class" style="width:100%">
                </a>

                <a target="_blank" href="Images/Green-Flag-Decade-Levana-gallery.jpg">
                    <img class="imgthumbnail1" src="Images/Green-Flag-Decade-Levana-gallery.jpg" alt="Group Photo with Eco-School's floag" style="width:100%">
                </a>

                <a target="_blank" href="Images/ecookids%20-%20Copy.jpg">
                    <img class="imgthumbnail1" src="Images/ecookids%20-%20Copy.jpg" alt="Happy jumping Kids" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/ecogreen2.PNG">
                    <img class="imgthumbnail1" src="Images/ecogreen2.PNG" alt="Group-photo at the woods" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/presentation2-gallery.jpg">
                    <img class="imgthumbnail1" src="Images/presentation2-gallery.jpg" alt="Presentation about ENERGY" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/kidsatthetree.jpg">
                    <img class="imgthumbnail1" src="Images/kidsatthetree.jpg" alt="Cleaning the Environment" style="width:100%">
                </a>
            </div>
            
            
            <div class="column">
                <a target="_blank" href="Images/eco1.jpg">
                    <img class="imgthumbnail1" src="Images/eco1.jpg" alt="Eco-Scholl's students" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/studentsclean.jpg">
                    <img class="imgthumbnail1" src="Images/studentsclean.jpg" alt="Kids picking up the trash" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/eco03.jpg">
                    <img class="imgthumbnail1" src="Images/eco03.jpg" alt="Pose after a big achievment" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/ecoconf2.PNG">
                    <img class="imgthumbnail1" src="Images/ecoconf2.PNG" alt="2 students presenting" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/ecogreen.PNG">
                    <img class="imgthumbnail1" src="Images/ecogreen.PNG" alt="Eco friendly Kids" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/ecoconf1.PNG">
                    <img class="imgthumbnail1" src="Images/ecoconf1.PNG" alt="Eco-School's staff and students" style="width:100%" height="200">
                </a>
                <!----------------------------------O'CLOCK--------------------------------------------------------------------->
                <canvas id="canvasii" width="150" height="150">
                    Your browser does not support the HTML5 canvas tag.
                </canvas>
                <script>
                    function clock() {
                      var now = new Date();
                      var ctx = document.getElementById('canvasii').getContext('2d');
                      ctx.save();
                      ctx.clearRect(0, 0, 150, 150);
                      ctx.translate(75, 75);
                      ctx.scale(0.4, 0.4);
                      ctx.rotate(-Math.PI / 2);
                      ctx.strokeStyle = 'black';
                      ctx.fillStyle = 'white';
                      ctx.lineWidth = 8;
                      ctx.lineCap = 'round';

                      // Shenjat e Oreve
                      ctx.save();
                      for (var i = 0; i < 12; i++) {
                        ctx.beginPath();
                        ctx.rotate(Math.PI / 6);
                        ctx.moveTo(100, 0);
                        ctx.lineTo(120, 0);
                        ctx.stroke();
                      }
                      ctx.restore();

                      // Shenjat e minutave
                      ctx.save();
                      ctx.lineWidth = 5;
                      for (i = 0; i < 60; i++) {
                        if (i % 5!= 0) {
                          ctx.beginPath();
                          ctx.moveTo(117, 0);
                          ctx.lineTo(120, 0);
                          ctx.stroke();
                        }
                        ctx.rotate(Math.PI / 30);
                      }
                      ctx.restore();

                      var sec = now.getSeconds();
                      var min = now.getMinutes();
                      var hr  = now.getHours();
                      hr = hr >= 12 ? hr - 12 : hr;

                      ctx.fillStyle = 'black';

                      // paraqitja e oreve
                      ctx.save();
                      ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec);
                      ctx.lineWidth = 14;
                      ctx.beginPath();
                      ctx.moveTo(-20, 0);
                      ctx.lineTo(80, 0);
                      ctx.stroke();
                      ctx.restore();

                      // paraqitja e minutave
                      ctx.save();
                      ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);
                      ctx.lineWidth = 10;
                      ctx.beginPath();
                      ctx.moveTo(-28, 0);
                      ctx.lineTo(112, 0);
                      ctx.stroke();
                      ctx.restore();

                      // paraqitja e sekondave
                      ctx.save();
                      ctx.rotate(sec * Math.PI / 30);
                      ctx.strokeStyle = '#D40000';
                      ctx.fillStyle = '#D40000';
                      ctx.lineWidth = 6;
                      ctx.beginPath();
                      ctx.moveTo(-30, 0);
                      ctx.lineTo(83, 0);
                      ctx.stroke();
                      ctx.beginPath();
                      ctx.arc(0, 0, 10, 0, Math.PI * 2, true);
                      ctx.fill();
                      ctx.beginPath();
                      ctx.arc(95, 0, 10, 0, Math.PI * 2, true);
                      ctx.stroke();
                      ctx.fillStyle = 'rgba(0, 0, 0, 0)';
                      ctx.arc(0, 0, 3, 0, Math.PI * 2, true);
                      ctx.fill();
                      ctx.restore();

                      ctx.beginPath();
                      ctx.lineWidth = 14;
                      ctx.strokeStyle = '#325FA2';
                      ctx.arc(0, 0, 142, 0, Math.PI * 2, true);
                      ctx.stroke();

                      ctx.restore();

                      window.requestAnimationFrame(clock);
                    }

                    window.requestAnimationFrame(clock);
                </script>
                <!----------------------------------O'CLOCK--------------------------------------------------------------------->
            </div>
            
            
            <div class="column">
                <a target="_blank" href="Images/flag.jpg">
                    <img class="imgthumbnail1" src="Images/flag.jpg" alt="Kids in blue with Eco flag" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/graduation.jpg">
                    <img class="imgthumbnail1" src="Images/graduation.jpg" alt="Kids inside a Eco-School" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/kids4-gallery.jpg">
                    <img class="imgthumbnail1" src="Images/kids4-gallery.jpg" alt="Staff at the enterance of the school" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/kids7-gallery.JPG">
                    <img class="imgthumbnail1" src="Images/kids7-gallery.JPG" alt="Kids at the Sport's Hall" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/eco2.jpg">
                    <img class="imgthumbnail1" src="Images/eco2.jpg" alt="Eco photo" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/treeprotection.jpg">
                    <img class="imgthumbnail1" src="Images/treeprotection.jpg" alt="Measuring the size of a tree" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/clean.jpg">
                    <img class="imgthumbnail1" src="Images/clean.jpg" alt="Cleaning by the bridge" style="width:100%">
                </a>
            </div>
            
            
            <div class="column">
                <a target="_blank" href="Images/kids3.jpg">
                    <img class="imgthumbnail1" src="Images/kids3.jpg" alt="Eco-School notice board" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/atthepark.jpg">
                    <img class="imgthumbnail1" src="Images/atthepark.jpg" alt="Kids and adults at the park" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/flagpole.jpg">
                    <img class="imgthumbnail1" src="Images/flagpole.jpg" alt="Raising the flag" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/planting.jpg">
                    <img class="imgthumbnail1" src="Images/planting.jpg" alt="Planting trees" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/award.jpg">
                    <img class="imgthumbnail1" src="Images/award.jpg" alt="Award winners" style="width:100%">
                </a>
                
                <a target="_blank" href="Images/kindergarten.jpg">
                    <img class="imgthumbnail1" src="Images/kindergarten.jpg" alt="At the kindergarten" style="width:100%">
                </a>
                <!----------------------------------SVG--------------------------------------------------------------------->

                <svg height="130" width="500">
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(0,255,0);stop-opacity:1" />
                    </linearGradient>
                    <ellipse cx="120" cy="75" rx="85" ry="55" fill="url(#grad1)" />
                    <a href="Index.html"><text fill="navy" font-size="15" font-family="Verdana" x="65" y="85">ECO-SCHOOLS</text></a>
                    Sorry, your browser does not support inline SVG.
                </svg>
                <!----------------------------------END OF SVG--------------------------------------------------------------------->
            </div>
        </div>

        <!-------------------------------- END OF PHOTO GRID ------------------------------------------------------------- -->



        <!----------------------------AUDIO----------------------------------------->
        <!-- Audio relaxation -->
        <audio controls style="float:right">
            <source src="Images/relaxation.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <!-- Audio relaxation end -->
        
        
        <!--------------------------END OF AUDIO------------------------------------->
        <p style="float: right; font-family: monospace">A delightful background music</p>
        <br><br><br>

        <hr style="margin: 30px; color: slategray">
        <br>

        <!-----------------------Canvas Figure----------------------->
        <p style="text-align: center; font-family:cursive; font-size: 14px; color: brown">A <em>Modern</em> Eco-School:
            <img id="fotocanvasi" width="150" height="100" src="Images/insideofecoschool.jpg" alt="The Modern Eco-school">
        </p>


        <pre><p style="color: forestgreen">                                          A bigger veiw of it: </p></pre>

        <canvas id="imagecanvas" width="800" height="500" style="border:1px solid #EEEEEE;">
            Your browser does not support the HTML5 canvas tag.
        </canvas>

        <script>
            window.onload = function() {
                    var canvas = document.getElementById("imagecanvas");
                    var ctx = canvas.getContext("2d");
                    var img = document.getElementById("fotocanvasi");
                    ctx.drawImage(img, 10, 10);
                startTime();
            };
        </script>
        <!-----------------------End of Canvas Figure----------------------->

        <br>
        <hr style="margin: 30px; color: slategray">
        <br>


        <!------------------------------------The Bottom SLIDESHOW--------------------------------------------------->
        <h2 style="text-align: center; color: chocolate; font-size: 25px">The 3 main Stages of <em>Children Eco-Education</em></h2>

        <div class="mbajtesiSllajdeve">

            <div class="sllajdetefotove fade">
                <div class="numriTekstit">1 / 3
                </div>
                <img src="Images/ecoblog-gallery.jpg" alt="Planning" style="width:100%">
                <div class="text">Planning
                </div>
            </div>

            <div class="sllajdetefotove fade">
                <div class="numriTekstit">2 / 3
                </div>
                <img src="Images/ecoschool5-gallery.jpg" alt="Teaching" style="width:100%">
                <div class="text">Teaching
                </div>
            </div>

            <div class="sllajdetefotove fade">
                <div class="numriTekstit">3 / 3
                </div>
                <img src="Images/kids8-gallery.jpg" alt="Practicing" style="width:100%">
                <div class="text">Practicing
                </div>
            </div>

        </div>

        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("sllajdetefotove");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {
                  slideIndex = 1
              }    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); 
            }
    </script>
    <br> <br>
    <!------------------------------------The Bottom SLIDESHOW--------------------------------------------------->


    <!-- -------------------------------------------------------GALLERY_END--------------------------------------------------------- -->

    <?php include("footer.php") ?>

</body>

</html>
