<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="events.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="storage.js" type="text/javascript"></script>
    <script src="mathematics.js" type="text/javascript"></script>




    <title>Events-Echo School</title>

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
    nav button {
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
        background-color: rgba(0, 0, 0, 0.7);
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
    var text = "Eco-Schools is the world's leading environmental education programme. It is a pupil-led initiative with the aim to make environmental awareness and practical action an intrinsic part of school life.";
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
    
    // Replace function
    function replace(){
    var string123="ES";
    var rep = string123.replace("ES","Eco-Schools");
    document.getElementById('repl').innerHTML=rep;
    }
    // Search the string for match
    function match(){
        var string321="evergreen palegreen darkgreen";
        var ma = string321.match(/green/g);
        document.getElementById('m').innerHTML=ma;
    }

    </script>


</head>


<body style="width:1024px; margin:auto; background-color: #5c5c5c;" onload="startTime()">


    <div style="background-color: white">


        <!--********************************************************************  HEADER  ***************************************************************-->
<?php include("header.php");?>
        <!--***********************************************HEADER_END****************************************************-->







        <!--****************************************************  EVENTS *************************************************************************-->





        <div id="permbajtja">
            <!-- -------------------------------------------------Green Flag-------------------------------------------------------------- -->


            <div id="about" class="permbajtja-section">

                <h5 id="greenflag" style="font-size: 22px; line-height: 26px; color: #666666; font-weight: normal; 
                margin: 25px 0px; margin-top: 0px; text-align: center;"><b>
                        The 1000th Green Flag</b></h5>


                <!-- ----Smile-Tree------ -->
                <img id="myimage" style="float:left; cursor: pointer;" onclick="changeImage()" src="Images/tree.jpg" width="100" height="180">

                <script>
                    function changeImage() {
        var element=document.getElementById('myimage')
        if (element.src.match("bulbon"))
        {
            element.src="Images/tree.jpg";
        }
        else
        {
            element.src="Images/tree1.png";
        }
    }
    </script>

                <!-- //// -->

                <figure>
                    <div id="about-image-permbajtja">


                        <a href="Images/ecogreen.png"><img src="Images/ecogreen.png" alt="EcoGreen" title="Eco Green" width="100%"></a>
                        <figcaption><em>Eco-kid with the 1000th Green Flag</em></figcaption>
                    </div>

                </figure>

                <section style="font-size: 15px; line-height: 19px; color: #999999; margin: 20px 0px; ">


                    <p>
                        <i>Eco-Schools</i> is the world's leading environmental education programme. It is a <u>pupil-led
                        </u> initiative with the aim to make environmental awareness and practical action an intrinsic
                        part of school life. <br />

                        <br />
                        Diane Lo&#xE7;khart, Eco-Coordinator at <abbr title="Walker Memorial Primary School">WMPS</abbr>
                        said: “The children were totally delighted that we got the<mark> 1000th Green Flag</mark>. All pupils are
                        very involved with the areas of the Eco-Committee’s action plan it has brought these areas of
                        learning alive. Pupils are highly motivated, inspired and focused to partake in lessons related to
                        Eco-Schools. The programme provides pupils with another avenue of learning, those who are more p
                        ractical and creative thrive on being involved in identifying the needs of the school and sharing their ideas for future action.” </p>

                    <!-- ---definition list--- -->

                    <dl>
                        <!-- definition list -->
                        <dt>FEE</dt> <!--  definition term -->
                        <dd>Foundation for Environmental Education</dd> <!-- definition list definition -->
                        <dt>GAP</dt>
                        <dd>The Global Action Programme</dd>
                        <dd>Education for Sustainable Development</dd>
                        <dt>UNEP</dt>
                        <dd>United Nations Environment Programme</dd>

                    </dl>
                    <!-- // -->

                </section>


            </div>

            <hr style="height: auto; border-style: solid; border-width: 0.5px; border-color: #e2e2e2; margin: 40px auto;" />


            <!-- ----------------------------------------------------- Eco Warriors ------------------------------------------------------------------ -->
            <div id="permbj" class="permbajtja-section">

                <h5 style="text-align: center; font-size: 22px; line-height: 26px; color: #666666; font-weight: normal; margin: 20px 0px; margin-top: 0px;" id="ecowarriors"><strong> Eco-Warriors clean up for the <br />Great Big School Clean</strong> </h5>

                <p style="font-size: 15px; line-height: 18px; color: #999999; margin: 20px 0px;">
                    On Friday 9 March, the Eco-Warriors of Wolsey House Primary School in Leicestershire, joined hundreds of other Eco-Schools who are getting involved in this month’s Great Big School Clean.<br />
                    <br /> Not content with simply litter-picking, these children are using their results to make positive changes for their school.</p>

                <div class="permbj-section">
                    <div class="permbj-section-header">


                        <figure class="thumbnail">
                            <img src="Images/studentsclean.jpg" alt="Eco warriors" style="float: left; width: 90px; height: 80px;">
                            <figcaption class="popup">
                                <img src="Images/studentsclean.jpg " alt="Eco warriors">
                                <p style="font-size: 30px; text-align:  center;">The Eco Warriors !</p>
                            </figcaption>
                        </figure>


                        <h6>Kids <span style="font-weight: normal;">- Pupils</span></h6>


                    </div>

                    <p>“In the large playground, most litter seemed to be felt pens, pencils and birthday sweet wrappers. When we went along the path to the field gate we found more sweet and crisp packets."</p>

                </div>

                <div class="permbj-section">

                    <div class="permbj-section-header">


                        <figure class="thumbnail2">
                            <img src=" Images/Ecowarriors.png " alt="Eco warroiors Logo" style="float: left; width: 90px; height: 80px;">
                            <figcaption class="popup">
                                <img src="Images/Ecowarriors.png  " alt="Eco warriors Logo" style="width:470px; height:350px;">
                                <p style="font-size: 30px; text-align: center;">The Eco Warriors LOGO!</p>
                            </figcaption>
                        </figure>


                        <h6 style="padding-left: 30px;"> Rubie (Y6) <span style="font-weight: normal;">- PUPIL</span></h6>

                    </div>

                    <p>“We think children are given snacks by their parents and they drop the wrappers when they’ve finished them. There’s also a lot of similar rubbish down the hill towards the main exit from school.</p>

                </div>

            </div>
        </div>

        <hr style="width: 920px; border-style: solid; border-width: 0.5px; border-color: #e2e2e2; margin: 40px auto;" />






        <!--  ------------------------------------------------------------------Clean Air-------------------------------------------------------- -->


        <article class="cleanair" id="cleanairp">


            <p style="font-size: 26px; color: #666666; font-weight:600; text-align: center;"> Our children deserve better than breathing dirty air</h1>


                <div class="fotocleanir">

                    <figure class="case2">
                        <img src="Images/ecookids.jpg" alt="Clean Air" class="image">
                        <div class="overlay2">Clean Air</div>
                    </figure>

                </div>


                <section class="teksticleanair"><span style="font-size: 20px; color: #ff8241; font-weight:600;">Health & Eco-Schools</span><br><br> With the health effects of air pollution often hitting children the hardest, we wanted to let all our Eco-Schools know about <a href="https://act.friendsoftheearth.uk/act/order-your-clean-air-schools-pack">a new, free schools resource pack,</a> from environmental charity Friends of the Earth, and endorsed by the NUT.<br />
                    The free pack contains three KS2 lesson plans, transforming pupils into budding scientists and campaigners, a fun active assembly plan, free resources and a testing kit to measure your own air quality.
                    Friends of the Earth want to educate the educate the next generation about air pollution. We wanted to show how it can help you along your Eco-Schools journey and towards your next Green Flag.

                </section>

                <br />


                <!-- -->

                <div class="fotocleanir">

                    <div class="dropdown">

                        <div class="case">
                            <img src="Images/Theprocess.jpg " alt="Clean Air" class="image">
                            <div class="overlay">
                                <div class="text">7 steps to<br />eco school</div>
                            </div>
                        </div>

                        <div class="dropdown-content">

                            <img src="Images/Theprocess.jpg " alt="Clean Air" style="width:400px; height:400px">
                            <div class="desc">Eco-Project</div>
                        </div>
                    </div>
                </div>






                <section class="teksticleanair">
                    <ul style="list-style-type:square; font-family: Delicious">

                        <li>With air pollution being ‘out-of-sight-out-of-mind’ it may not be on your Step 3: Action Plan, but it still has important links to any Eco-School’s work.</li>

                        <li>The two free air monitoring tubes allow you to test for harmful nitrogen dioxide gas. Friends of the Earth will process your tubes and get the results back to you.</li>

                        <li> With the resources, pupils have the opportunity to make their voices heard on the issue by learning campaigning tips and tricks, from how to write a persuasive letter to local politicians, to holding a poster competition in the school.</li>

                        <li>The assembly plan is a fun, active way to involve your whole school in the campaign. Whilst the posters and stickers could be a great addition to your Eco-board. </li>

                        <li>The lesson plans have clear links to the KS&Ccedil;2 Curriculum (Step 6), but they can also be adapted for younger students, or used in out-of-school clubs.</li>

                    </ul>
                </section>


                <table id="sevensteps">
                    <tr>
                        <th>Steps</th>
                        <th>Title</th>
                        <th>Content</th>
                    </tr>
                    <tr>
                        <td>Step 1 </td>
                        <td>Eco-Committee </td>
                        <td>The heartbeat of an Eco-Schools action and learning.</td>
                    </tr>
                    <tr>
                        <td>Step 2</td>
                        <td> Environmental Review </td>
                        <td>Investigating the school’s environmental performance.</td>
                    </tr>
                    <tr>
                        <td>Step 3 </td>
                        <td>Action Plan</td>
                        <td>Decide on topic actions, based on the results of the Environmental Review.</td>
                    </tr>
                    <tr>
                        <td>Step 4 </td>
                        <td> Curriculum Links </td>
                        <td>Making the links between the school’s environmental activity and the curriculum.</td>
                    </tr>
                    <tr>
                        <td>Step 5 </td>
                        <td> Informing and Involving </td>
                        <td>Let the whole school and wider community know what the Eco-Committee is doing.</td>
                    </tr>
                    <tr>
                        <td>Step 6</td>
                        <td>Monitoring and Evaluation </td>
                        <td>Measuring change and finding out what works and what doesn’t.y</td>
                    </tr>
                    <tr>
                        <td>Step 7 </td>
                        <td> Eco-Code </td>
                        <td>Creating a call to action that the whole school can get behind.</td>
                    </tr>
                </table>



        </article>


        <!-- -------------------------------------------------MATH FUN--------------------------------------------------------- -->



        <article class="mathematics">

            <h1 style="background-color: #5c5c5c;
    margin: 0 auto;
    width: 95%;
    padding: 0.5em;
    text-align: center;
    font-weight: bold;
    font-size: 100%;
    color: #f35300;">Math Fun</h1>

            <div class="math" style="background-color:#aaa;">
                <h3>Example 1</h3>
                <section>

                    <p id="detyra1">Round 4889.75999</p>
                    <button onclick="Detyra_1()">See answer!</button>

                </section>


            </div>
            <div class="math" style="background-color:#bbb;">
                <h3>Example 2</h3>
                <section>

                    <p id="random"> Lucky Number for Today</p>
                    <button onclick="RandomNr()">Try it</button>

                </section>
            </div>


            <div class="math" style="background-color:#ccc;">
                <h3>Example 3</h3>
                <section>

                    <p id="sqrt"> Find square root of 625</p>
                    <button onclick="Detyra_3()">See answer!</button>

                </section>
            </div>


            <div class="math" style="background-color:#ddd;">
                <h3>Example 4</h3>
                <section>

                    <p id="min"> Find the lowest value <br />(230, -1.5, -125.5, 10, -2, -125.52) </p>
                    <button onclick="Detyra_4()">See answer!</button>

                </section>

            </div>


            <div style=" background-color: #aaa; 
                          background-image: linear-gradient(to right, #ddd, #aaa); ">
                <h3 style="text-align: center">Example 5</h3>
                <section style="text-align: center; padding-bottom: 20px;">

                    <p>Enter any number between 0 and 100, and find out the result of that number + any other number.</p>
                    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
                        <input type="range" id="a" value="50">100
                        +<input type="number" id="b" value="50">
                        =<output name="x" for="a b"></output>
                    </form>


                </section>
            </div>

        </article>

        <!-- //////////////////////////////////////// -->



        <!-- ------------------------------------------------------Eco Conference--------------------------------------------------------------- -->


        <article class="ecoconf">
            <h1 id="ecoconference" style=" font-size: 26px; color: #666666; font-weight:600; text-align: center; 
        border: 3px dashed #5c5c5c;
        padding: 10px 15px;
        background: #6F6;
        margin: auto;
        width: 50%;
        border-radius:20px;
        box-shadow: 10px 10px 7px #5c5c5c;
        font-family: eb;">
                WWF Eco-Schools Conference </h1>

            <div id="row">
                <div id="column">

                    <div class="dropdown">
                        <img src="Images/ecoconf1.PNG" alt="Kids in conference" style="width:160px; height:100px; border: 3pt solid;">
                        <div class="dropdown-content">
                            <img src=" Images/ecoconf1.PNG" alt="Kids in conference" style="width:400px; height:300px">
                            <div class="desc">Kids in conference</div>
                        </div>
                    </div>


                </div>

                <div id="column">

                    <div class="dropdown">
                        <img src="Images/ecoconf2.PNG" alt="wwf" width="150" height="100" border="3pt solid">
                        <div class="dropdown-content">
                            <img src=" Images/ecoconf2.PNG" alt="wwf" width="400" height="250">
                            <div class="desc">WWF</div>
                        </div>

                    </div>

                </div>


                <div id="column">

                    <div class="dropdown">
                        <img src="Images/kids3.jpg" alt="presentation" width="150" height="100" border="3pt solid">
                        <div class="dropdown-content">
                            <img src=" Images/kids3.jpg" alt="presentation" width="400" height="250">
                            <div class="desc">Presentation</div>
                        </div>
                    </div>

                </div>
            </div>




            <p style="  border: 2px solid #a1a1a1;
        padding: 10px 40px;
        background: #dddddd;
        border-radius: 15px;
        font-family: eb;
        letter-spacing: 1px;"> The internationally recognised Green Flag award rewards educational institutions for their environmental programme that empower students to be the change our world needs by engaging them in fun, action oriented learning experiences. <br />
                The conference also featured keynote speakers Sid Das,
                Executive Director of <abbr title="Earth Hour Global">EHG</abbr>,
                and &Euml;nd&euml;rresa Gashi, Regional Director for <abbr title=" Shark Savers Asia Pacific">SHSAP</abbr>. <br />
                Local, regional and global experts from Earth Hour, EarthFest, Ground-up Initiative and Coral Triangle Initiative, to name a few, were the conference theme influencers, and were also present.<br />
                They elaborated on the conference theme "YOU can be the CHANGE", urging students and educators to be the change our world needs. </p>

            <!-- SLOGAN -->
            <p id="slogan">#bethechange</p>

            <button type="button" onclick="document.getElementById('slogan').style.fontSize='35px' 
document.getElementById('slogan').style.color='#f35300'
document.getElementById('slogan').style.background='black'
document.getElementById('slogan').style.textAlign='center'">Click Me!</button>


        </article>




        <!-- ----------------------------CURIOSITIES/grid-------------------------------------------------- -->

        <h1 style="background-color: #015558;
                margin: 0 auto;
                width: 95%;
                padding: 0.5em;
                text-align: center;
                font-weight: bold;
                font-size: 100%;
                border:10pt;
                color: #f35300;">Curiosities</h1>

        <article>



            <div class="grid-container">


                <div class="grid-item">


                    <!----------------------------------SVG--------------------------------------------------------------------->
                    <svg width="400" height="180">
                        <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
                            <stop offset="100%" style="stop-color:rgb(0,255,0);stop-opacity:1" />
                        </linearGradient>
                        <rect x="50" y="20" rx="20" ry="20" width="350" height="150" fill="url(#grad2)" />
                        <text fill="#f35300" font-size="20" font-family="fantasy" x="170" y="105">#bethechange </text>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    <!----------------------------------END OF SVG--------------------------------------------------------------------->
                </div>


                <div class="grid-item">


                    <!--1 String Length
The length of a string (a string object) is found in the built in property length
-->
                    <p style="font-size: 20px">Click the button to see the number of characters in the slogan "#bethechange".</p>
                    <button onclick="bethech()">See!</button>
                    <p id="bchng"></p>

                    <script>
                        function bethech() {
  var str = "#bethechange";
  var n = str.length;
  document.getElementById("bchng").innerHTML = n;
}
</script>
                </div>



                <div class="grid-item">

                    <!-- The toExponential() method converts a number into an exponential notation. -->


                    <p style="font-size: 20px">Do you want to see the average budget for a single event organized from Eco-School? <br>
                        Click to see the exponential notation the specified number.</p>
                    <button onclick="exponential()">Try it</button>
                    <p id="toExp"></p>

                    <script>
                        function exponential() {
  var num = 1563.445;
  var n = num.toExponential(3);
  document.getElementById("toExp").innerHTML = n + ' &#36;';
}
</script>

                </div>



                <div class="grid-item">


                    <!--    MAX_VALUE    -->

                    <p style="font-size: 20px">Which class has the largest number of pupils?</p>
                    <button onclick="max()">See!</button>
                    <p id="maxnr"></p>
                    <script>
                        function max () {
var nr=1,n1,n2,n3;
while(nr<=3)
{
        var numri = prompt("Give pupils number per class:", "Number");
        switch(nr)
        {
            case 1: n1 = parseInt(numri);
            break;
            case 2: n2 = parseInt(numri);
            break;
            case 3: n3 = parseInt(numri);
            break;
        }
        nr++;
}
nr = Math.max(n1,n2);
nr = Math.max(nr,n3);
  document.getElementById("maxnr").innerHTML = "The class with " + nr + " pupils is the largest."
}
</script>
                </div>


            </div>

        </article>



        <!-- ---------------------------------------------Continue reading/FutureSchools----------------------------------------------------------- -->


        <article style="margin: 30px;
                outline: 2px dashed  #666666;
                outline-offset:10px;">

            <h1 id="futureschools" style="text-align: center; font-size: 26px; color: #666666; font-weight:600; text-align: center;">
                Future Schools</h1>

            <button class="futuresch">"Future Proofing Schools"</button>
            <div class="futuresch-content">
                <p>
                    Eco-Schools always has been keeping an eye on innovative solutions for schooling and education. We've covered the solar powered mobile computer classroom project and the AIRchitecture flying classrooms of the future, but now we're excited about these proposals from architects all over the world, who recently submitted their ideas for what schools of the future could look like.<br>
                    The winners for the <abbr title="Future Proofing Schools">FPS</abbr> design competition were recently announced, where designers where invited to submit their ideas for the next generation of relocatable classrooms. The competition, sponsored by the University of Melbourne, the <abbr title="Melbourne School of Design">MSD</abbr> and the Australian Institute of Architects, seeks to<strong> "elicit innovation, creativity and blue-sky thinking"</strong> and may just give us a peek into the future.
                    <br><br> The competition focuses on new ideas for relocatable classrooms, which in recent decades have commonly been used around the globe. These types of classroom facilities are generally a response to rapid growth in schools, remote community needs or a quick solution to cope with natural disasters. Although the classrooms are often described as cheap and miserable, the winners for this year's competition are anything but drab and dreary.
                    <br><br>

                </p>
            </div>


            <button class="futuresch" id="winner">The Winner</button>
            <div class="futuresch-content">
                <p id="winner">
                    <strong>The winning </strong> design idea from architecture firm Architectus took home <b> AU$25,000 (US$26,831) </b> for its futuristic vision of the classroom.
                    <br><br>
                    Dubbed <abbr title="Educational Modular Offsite Design">eMOD</abbr>, the concept is a flexible modular design system that can be configured to create a building solution that adapts to specific requirements such as site, climate and learning outcomes. The winning entry included a clever proposition of an app to formulate the modular design, which proved to be a hit amongst the judges.
                    <br><br>
                    "The concept represents the essence of an idea about the link between 21st century learning and space" said the jury. "[It] is both sophisticated and simple ... and is suggestive of adaptable and transportable space."
                    <br><br>
                    The eMOD design encompasses a learning space in all elements of the building that goes beyond the limitations of the walls. Learning areas include the internal/external environments around the building and the internal spaces that also provide adaptability to accommodate group-based student work or individual time.

                </p>
            </div>

            <button class="futuresch" id="second">Second Place</button>
            <div class="futuresch-content">
                <p> In <strong>second place</strong>, architecture firm NBRS+PARTNERS impressed the judges with its futuristic MODUPOD concept.
                    <br> "It was the suggestive flexibility of the organic core to the building and its capacity to indicate closed, open, unwrapped or linear active space that proposed an aspiration for a learning community over and above a rational, workable arrangement of classrooms," said the jury.
                    <br><br>
                    MODUPOD is a vision for 2025 and represents a dynamic 21st century learning environment with 3D text books promoting interaction and critical thinking for students. The concept features fast assembly, smart interiors and flexible PODS that place students and teachers at the heart of the learning experience. Dynamic multi-modal clusters are built around the central permeable student resource center.
                    <br><br> The active core can also function as a media platform featuring multimedia screens that encourage the presentation of school news, energy consumption, environment facts, technological innovation and student work. </p>
            </div>

            <button class="futuresch" id="third">Third Place</button>
            <div class="futuresch-content">
                <p>
                    <strong>The third place</strong> entry by <i>Oliver Ebben</i> from Studioquint in Amsterdam was praised for its architectural deliberation.
                    <br>"The rational classroom form is made both spatial and place specific by three dimensional origami-like scales that articulate the form both internally and externally," said the jury. "Externally, the scales respond to orientation, outlook, and context, while internally they become three dimensional, occupiable space. The rooftop contains a locally contextual landscape, as a part of the transportable form."
                    <br><br>
                    This entry also included some great sustainability functions such as using components that are fabricated from recycled polystyrene. To avoid dissipation of energy during the transportation phase, the thermal building mass is added on site by making use of local soil and plants.
                    <br>In addition, the building components can function as reservoirs for rainwater, and the three-dimensional design of all building components at an angle of 20 degrees enables efficient use of photovoltaic panels and a high rate of sun shielding.

                </p>
            </div>

        </article>

        <script>
            var coll = document.getElementsByClassName("futuresch");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>




        <!-- ****************************************************  Slideshow future schools  ************************************************* -->



        <!-- Slideshow container -->
        <div class="slideshow-permbajtja">

            <!-- Full-width images with number and caption text -->
            <div class="Sllajdet fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/ecoschool1.PNG" style="width:1000px; height:600px;">
                <div class="teksti">First Place</div>
            </div>

            <div class="Sllajdet fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/ecoschool3.PNG" style="width:1000px; height:600px;">
                <div class="teksti">Second Place</div>
            </div>

            <div class="Sllajdet fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/ecoschool2.PNG" style="width:1000px; height:600px;">
                <div class="teksti">Third Place</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center; padding-bottom: 20px;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>




        <script>
            var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("Sllajdet");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




        <!-- -------------------------------FOOTER-END ---------------------------------------------------- -->
            Copyrights &copy; 2018 Eco School -All rights reserved.
        </div>


        <?php include("footer.php"); ?>

</body>

</html>
