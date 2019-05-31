<!-- ------------------------------------ FOOTER ------------------------------------------------------------------------------- -->


<footer class="footer">



    <div class="details" id="bottom">

        <h3><a href="#" style="text-transform: capitalize">Stay in the know!</a></h3>
        <hr />
        <p style="color: antiquewhite">Please enter your E-Mail to join our mailing list</p>
        <form>
            <input type="email" placeholder="e-mail..." multiple>
            <input type="submit" value="Enter"></form>
        <p style="color: antiquewhite">To unsubscribe please click<a href="#"><b>here</b></a></p>
        <br>
        <p><small><a href="#top">Go to the Top</a></small></p>
    </div>



    <div class="details">

        <h3 style="float: center"><a href="#">Services</a></h3>
        <hr>
        <p style="color: antiquewhite"><a href="#"><b>Apply</b></a> at our schools</p>
        <p style="color: antiquewhite">Play the game<a href="Loja.php" target="_blank"><b>Play</b></a></p>

        <br>

        <p style="color: antiquewhite"><i><small>Follow us on social network:</small></i></p>


        <!--                 <a href="https://web.facebook.com/?_rdc=1&_rdr" target="blank" title="Facebook">
                    <img src="Images/facebook.png" alt="Facebook" style="width: 20px; height: 20px;"> </a>

                <a href="https://www.instagram.com/" target="blank" title="Instagram">
                    <img src="Images/instagram.png" alt="Instagram" style="width: 20px; height: 20px;"> </a>

                <a href="https://www.pinterest.com/" target="blank" title="Pinterest">
                    <img src="Images/pinterest.png" alt="Pintesrest" style="width: 20px; height: 20px;"></a> -->

        <a href="twitter.php" target="blank" title="Twitter">
            <img src="Images/twitter.png" alt="Twitter" style="width: 20px; height: 20px;"></a>

        <!--                 <a href="https://www.youtube.com/" target="blank" title="Youtube">
                    <img src="Images/youtube.png" alt="Youtube" style="width: 20px; height: 20px;"></a>

                <a href="https://plus.google.com/discover" target="blank" title="Google+" ;>
                    <img src="Images/google-plus.png" alt="Google+" style="width: 20px; height: 20px;"></a> -->


    </div>



    <div class="details">

        <h3 style="float: center"><a target="_blank" href="Contacts.html">Contacts</a></h3>
        <hr>
        <p style="color: lightskyblue; font-size: 14px"><b>E-Mail:</b></p>
        <p style="color: antiquewhite; font-size: 14px">
            <i>info@ecoschools.com</i></p>
        <p style="color: lightskyblue; font-size: 14px;"><b>Tel:</b></p>
        <p style="color: antiquewhite; font-size: 14px"><i>+1-555-7954-89</i></p>
        <p style="color: lightskyblue; font-size: 14px;"><b>Website:</b></p>
        <p style="color: antiquewhite; font-size: 14px"><u><i><a href="#">www.ecoschools.com</a></i></u></p>

    </div>



    <div class="details">

        <h3 style="float: center"><a href="#">About</a></h3>
        <hr>
        <p style="color: antiquewhite">Our <a href="#mission"><b>Mission</b></a></p>
        <p style="color: antiquewhite">Address:</p>

        <address style="display: block; font-style: italic; text-align: center;">
            <p style="color: antiquewhite; font-size: 12px">216 West 52nd Street</p>
            <p style="color: antiquewhite; font-size: 12px">New York, 10019</p>
            <p style="color: antiquewhite; font-size: 12px">United States of America</p>
            <p style="color: antiquewhite; font-size: 12px"><a href="https://www.google.com/maps/place/216+W+52nd+St,+New+York,+NY+10019/@40.7627246,-73.9854276,685m/data=!3m2!1e3!4b1!4m5!3m4!1s0x89c25857ce8cfed5:0x682040e55f9746fc!8m2!3d40.7627246!4d-73.9832546">40.762940, -73.983213</a></p>
        </address>

    </div>



</footer>

<!-- -------------------------------FOOTER-END ---------------------------------------------------- -->


<div class="template" style="float:left">

    Copyrights &copy; 2018 Eco School -All rights reserved.
</div>

<!-- ------------------------------TIME------------------ -->
<div class="template" style="float:right">
    <div id="txt"></div>
    <script>
        function startTime() {
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
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

    </script>

    <!-- ///// -->


    <!--**************************************************Java Script****************************************************-->
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var nav = document.getElementById("nav");
        var sticky = nav.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                nav.classList.add("fix")
            } else {
                nav.classList.remove("fix");
            }
        }

    </script>
    <!--**************************************************End-Java Script****************************************************-->
