<!DOCTYPE html>

<html>

<head>
    <title>sadf</title>
    <link rel="stylesheet" type="text/css" href="Game1.css">
    <script>
        var waterX = 5;
        var seedX = 1;
        var score = 0;
        var pic = 2;
        var plantHeight = 150;
        var plantWidth = 50;

        function reset() {
            window.location.reload();
        }

        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("current", ev.target.id);
        }

        function plantDrop(ev) {
            ev.preventDefault();
            var obj = document.getElementById(ev.dataTransfer.getData("current"));
            var seeds = document.getElementById("seeds");
            var soil = document.getElementById("soil");
            var plant = document.getElementById("plant");
            var water = document.getElementById("water");

            if (obj.id == seeds.id) {
                if (seedX > 0) {
                    seedX--;
                    if (seedX == 0) {
                        seeds.src = "Images/x.png";
                        seeds.draggable = false;
                        seeds.style.cursor = "default";
                    }
                    document.getElementById("seedsX").innerHTML = seedX;
                    window.setTimeout(function() {
                        plant.src = "Images/"+ pic + ".png";
                        pic++;
                        plant.style.height = "90px";
                    }, 1000);
                    score += 25;
                    document.getElementById("score").innerHTML = score;
                }
            }
            if (obj.id == water.id && seedX == 0 && pic < 8) {
                if (waterX > 0) {
                    waterX--;
                    if (waterX == 0) {
                        water.src = "Images/x.png";
                        water.draggable = false;
                        water.style.cursor = "default";

                    }
                    document.getElementById("waterX").innerHTML = waterX;
                    window.setTimeout(function() {
                        if (pic == 4) {
                            plant.style.marginTop = "230px";

                        } else if (pic == 5) {
                            plant.style.marginTop = "200px";
                        } else if (pic == 6) {
                            plant.style.marginTop = "180px";
                            plant.style.marginLeft = "-132px";

                        } else if (pic == 7) {
                            plant.style.marginTop = "167px";
                            plant.style.marginLeft = "-139px";

                        } else {
                            plant.style.marginTop = "240px";
                            plant.style.marginLeft = "-119px";
                        }
                        plant.src ="Images/" + pic + ".png";
                        pic++;
                        plant.style.height = plantHeight + "px";
                        plantHeight += 20;
                        plant.style.width = plantWidth + "px";
                        plantWidth += 8;
                    }, 1000);
                    score += 15;
                    document.getElementById("score").innerHTML = score;
                }
            }
        }
        function clsModal(){
            var input = document.getElementById("inp").value;
            if(input=="")
                {
                    document.getElementById("err").style.display="block";
                }
            else{
        document.getElementById('Modal2').style.display="none";
            }
        }
        
        
        
        var seconds=15;
var timer;
function myFunction() {
  if(seconds < 15) { // I want it to say 1:00, not 60
    document.getElementById("timer").innerHTML = seconds;
  }
  if (seconds >0 ) { // so it doesn't go to -1
     seconds--;
  } else {
    document.getElementById("Modal2").style.display="block";
      document.getElementById("sc").value=score;
    }
}
window.onload = function() {
  if(!timer) {
    timer = window.setInterval(function() { 
      myFunction();
    }, 1000); // every second
  }
} 
        
    </script>
</head>

<body>


    <div style="display: none" id="Modal2" class="modal2">

        <!-- ************* Modal content **************-->

        <div class="modal2-content">
            <br>
            <form action="GameFinished.php" method="POST">
                <label style="color: white; font-weight: 600; font-size: 30px; font-family: arial; ">Nickname:</label>
                <input name="nickname" id="inp" style="width: 200px; height: 30px; font-size: 25px; margin-left: 15px;" type="text">
                <span style="margin-left: 195px;position: absolute; display: none; color:red" id="err">Enter your nickname!</span>
                <br><br><br>
                <label name="nickname" style="color: white; font-weight: 600; font-size: 30px; font-family: arial;">Your score: </label><input name="score" id="sc" style="width: 200px; height: 30px; font-size: 25px; margin-left: 0px;" type="text">
                <br>
                <br>
                <button onclick="clsModal()" style="background-color:rgba(0, 90, 10, 0.4) ;color: white; font-weight: 600; font-size: 20px; font-family: arial;width: 100px; height: 40px;margin-left: 150px; opacity: 0.8">Enter</button>
            </form>
        </div>
    </div>

    <div>
        <div style="float: right; width: 400px; height: 240px; background-color: rgba(0, 90, 10, 0.4); border-radius: 50px;">

            <span style="font-family: arial; font-weight: 600; color: white; font-size: 42px; margin-left: 143px;">Tools</span>
            <br><br>
            <span style=" margin-left: 80px;font-family: arial; font-weight: 600; color: white; font-size: 15px; ">Water</span>
            <span style="margin-left: 145px;font-family: arial; font-weight: 600; color: white; font-size: 15px; ">Seeds</span>
            <br>
            <div style="display:flex;">
                <img draggable="true" ondragstart="drag(event)" id="water" src="Images/water.png" width="140" height="120">
                <img draggable="true" ondragstart="drag(event)" id="seeds" src="Images/seeds.png" width="140" height="120">
            </div>
            <span id="waterX" style="padding-left: 95px;font-family: arial; font-weight: 600; color: white; font-size: 20px; ">
                5</span><span style="font-family: arial; font-weight: 600; color: white; font-size: 20px;">x</span>
            <span id="seedsX" style="padding-left: 165px;font-family: arial; font-weight: 600; color: white; font-size: 20px; ">
                1</span><span style="font-family: arial; font-weight: 600; color: white; font-size: 20px;">x</span>
        </div>
        <a id="reset" onclick="reset()" style="opacity:0.5 ;position:absolute; margin-left: 420px;"><img draggable="false" width="45" height="45" src="Images/reset.png"></a>
        <div style="width: 400px; height: 45px; background-color: rgba(0, 90, 10, 0.4); border-radius: 50px;">
            <span style="font-family: arial; font-weight: 600; color: white; font-size: 40px; margin-left: 80px; ">Score:
                <span id="score" style="font-family: arial; font-weight: 600; color: white; font-size: 40px; ">0</span>
                <t />pt</span>
        </div>
        <div>
            <img id="soil" ondragover="allowDrop(event)" ondrop="plantDrop(event)" draggable="false" src="Images/1.png" width="200">
            <img id="plant" src="">
        </div>
        <div style="text-align: center;font-family: arial; font-weight: 600; color: white; font-size: 72px; opacity: 0.4;">
            Plant the seeds in soil and water
            the flower until it blooms.
        </div>
        <span style="float:right;font-family: arial; font-weight: 600; color: white; font-size: 30px;" id="timer">15</span>
    </div>
</body>

</html>
