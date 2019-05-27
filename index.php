<!DOCTYPE html>
<html lang="en" manifest="cache.appcache">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="storage.js" type="text/javascript"></script>
    <title>Home-Echo School</title>

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
        //***************function of the search button**************
        function search(){
    var text = "The Eco-Schools programme is an ideal way for schools to embark on a meaningful path towards improving the environment in both the school and the local community while at the same time having a life-long positive impact on the lives of young people and their families."; 
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



<body style="width:1024px; margin:auto; background-color: #5c5c5c;" onload="startTime()">


    <div style="background-color: white">
        <!--**************************************************HEADER****************************************************-->
       <?php include("header.php");?>
        <!--***********************************************HEADER_END****************************************************-->


        <!-- ----------------------------------------Pano ne body---------------------------------------- -->

        <div class="pano">

            <div><img src="Images/ecoconcept.jpg" alt="Eco School" style="width:600px; height:300px; float:left; width:60%; ">
            </div>
            <div style="background-color:#f35300; width:600px; height:300px; float:right; width:40%;">


                <h2 style="padding: 10px; color:white;">Future schools</h2>
                <p style="padding: 10px; color:white;">We are passionate about making our new classrooms not only functional but also places which inspire students and teachers alike. Due to this, we are keen not to design another conventional building that looks institutional, we take our inspiration from natures curves.
                    We offer schools a building that is a breath of fresh air. They will not only inspire people, but will show a strong environmental ethos and project a forward thinking approach out into the surrounding communities.
                    <a target="_blank" href="Events.html#futureschools" class="button">Continue Reading &raquo;</a></p>

            </div>
        </div>

        <div>
            <!-- **************************ASIDE******************************* -->
            <aside>
                <div style="float: right; padding-right: 20px; padding-top: 30px; ">

                    <ul style="list-style: none;">
                        <!-- ***************First part of aside************-->
                        <li>
                            <div style="float: left;" class="date">
                                <span class="binds"></span>
                                <span class="month"></span>
                                <h1 class="day">20</h1>
                            </div>
                            <p class="text"> The winning design idea from architecture firm Architectus took home AU$25,000 (US$26,831) for its futuristic vision of the classroom.

                                Dubbed eMOD, the concept is a flexible modular design system that can be configured to create a building solution that adapts to specific requirements such as site, climate and learning outcomes.
                            </p>
                            <a target="_blank" href="Events.html#winner" style=" color: #f35300; float: right; text-decoration: none">Continue Reading</a>
                        </li>
                        <hr>
                        <!-- ***************Second part of aside************-->
                        <li>
                            <div style="float: left;" class="date">
                                <span class="binds"></span>
                                <span class="month"></span>
                                <h1 class="day">21</h1>
                            </div>
                            <p class="text"> In second place, architecture firm NBRS+PARTNERS impressed the judges with its futuristic MODUPOD concept.
                                "It was the suggestive flexibility of the organic core to the building and its capacity to indicate closed, open, unwrapped or linear active space that proposed an aspiration for a learning. </p>
                            <a target="_blank" href="Events.html#second" style="color: #f35300; float: right; text-decoration: none">Continue Reading</a>
                        </li>
                        <hr>
                        <!-- ***************Third part aside************-->
                        <li>
                            <div style="float: left;" class="date">
                                <span class="binds"></span>
                                <span class="month"></span>
                                <h1 class="day">22</h1>
                            </div>
                            <p class="text"> The third place entry by Oliver Ebben from Studioquint in Amsterdam was praised for its architectural deliberation.
                                "The rational classroom form is made both spatial and place specific by three dimensional origami-like scales that articulate the form both internally and externally," said the jury. </p>
                            <a target="_blank" href="Events.html#third" style="color: #f35300; float: right; text-decoration: none">Continue Reading</a>
                        </li>
                        <hr>
                    </ul>
                </div>
            </aside>

            <!-- **************************END OF ASIDE******************************* -->

            <!-- ----------------------------------------------------4 fotot n'body ------------------------------------------------>

            <article class="article">


                <div class="container">
                    <a target="_blank" href="Events.html#greenflag ">
                        <img src="Images/eco03.jpg" alt="Informacion" style=" width:100%;">


                    </a>
                    <div class="content"><a href="Events.html#greenflag">Green Flag</a></div>
                </div>




                <div class="container">
                    <a target="_blank" href="Events.html#ecowarriors ">
                        <img src="Images/clean.jpg" alt="Informacion" style=" width:100%;">


                    </a>
                    <div class="content"><a href="Events.html#ecowarriors">Eco-Warriors</a></div>
                </div>


                <div class="container">
                    <a target="_blank" href="Events.html#cleanairp ">
                        <img src="Images/airp.PNG" alt="Informacion" style=" width:100%;">


                    </a>
                    <div class="content"><a href="Events.html#cleanairp">Clean Air</a></div>
                </div>

                <div class="container">
                    <a target="_blank" href="Events.html#ecoconference ">
                        <img src="Images/ps.jpg" alt="Informacion" style=" width:100%;">

                    </a>
                    <div class="content"><a href="Events.html#ecoconference">WWF Conference</a></div>
                </div>

            </article>





            <!-- -----------------------------------------------texti ne body--------------------------------------------- -->

            <section class="section">

                <h2 style="" id="mission">Giving children & teenagers an environmental voice…</h2>

                <hr />

                <p id="search">The Eco-Schools programme is an ideal way for schools to embark on a meaningful path towards improving the environment in both the school and the local community while at the same time having a life-long positive impact on the lives of young people and their families.</p>

                <p>The Eco-Schools programme provides a unique opportunity that empowers pupils to lead change within their school and have a positive impact in their wider community.</p>

                <p> The programme encourages pupils of all ages and abilities to work together to develop their knowledge and environmental awareness. Independent research into the Eco-Schools programme in England found evidence of the positive impacts on pupils, including increased confidence, development of leaderships skills, improved pupil well-being and behaviour and greater motivation at school.</p>

                <p>While the Seven Steps are the most important aspect of the Eco-Schools programme, schools also work on topics to help give the programme even more structure;<b> marine, biodiversity, energy, litter, global citizenship, healthy living, school grounds, transport, waste and water</b>.</p>

            </section>



        </div>


        <?php include("footer.php"); ?>

        </div>
    </div>
</body>

</html>
