<!DOCTYPE html>
<html lang="en">
<script>
    alert("Game Instructions:\nDrag and drop each piece of trash to the right trash can.\n\nOptional:\nHover over RESET and HOME to rotate the buttons 180 degrees.\nDrag Drag and drop the HOME button to the marked place under the RESET button and back to its place.");
</script>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Game.css">
    <title>Game-Eco School</title>
    <script>
        var score=0;
        //allows an element to drop on another element
        
        function allowDrop(ev) {
            ev.preventDefault();
        }
        //sets the data type and the id of the dragged element
        
        function drag(ev) {
            ev.dataTransfer.setData("current", ev.target.id);
        }
        //gets the id of the dragged element and deletes that element if the specified condition is true

        function drop1(ev) {
            ev.preventDefault();
            var el = document.getElementById(ev.dataTransfer.getData("current"));
            var glass = ['d1', 'd2', 'd8'];
            var i = 0
            while(i < glass.length) {
                if (el.id == glass[i]) {
                    el.parentNode.removeChild(el);
                    document.getElementById('blueTrash').src = "Images/bule.png";
                    score+=10;
                    document.getElementById('score').innerHTML=score;
                }
                i++;
            };
        }
        //gets the id of the dragged element and deletes that element if the specified condition is true
        
        function drop2(ev) {
            ev.preventDefault();
            var el = document.getElementById(ev.dataTransfer.getData("current"));
            var plastic = ['d3', 'd5', 'd6', 'd10'];
            for (var i = 0; i < plastic.length; i++) {
                if (el.id == plastic[i]) {
                    el.parentNode.removeChild(el);

                    document.getElementById('redTrash').src = "Images/red.png";
                    score+=10;
                    document.getElementById('score').innerHTML=score;
                }
            }
        }
        //gets the id of the dragged element and deletes that element if the specified condition is true
        
        function drop3(ev) {
            ev.preventDefault();
            var el = document.getElementById(ev.dataTransfer.getData("current"));
            var paper = ['d4', 'd7', 'd9'];
            for (var i = 0; i < paper.length; i++) {
                if (el.id == paper[i]) {
                    el.parentNode.removeChild(el);
                    document.getElementById('yellowTrash').src = "Images/yellow.png";
                    score+=10;
                    
                    document.getElementById('score').innerHTML=score;
                }
            }
        }
        //changes the background image 
        window.onload = function(){
            startGame();
            var d = new Date();
            if (d.getHours() < 6 || d.getHours() >= 17) {
                document.body.style.backgroundImage = "url('Images/b123.jpg')";    
            }

        }
        //reloads the page
        function reset() {
            window.location.reload();
        }
        //sets the data type and the id of the dragged element
               function drag1(ev) {
            ev.dataTransfer.setData("home", ev.target.id);
        }
        //gets the dragged element and transfers it to the target
        
        function drop4(ev){
            ev.preventDefault();
          var el = ev.dataTransfer.getData("home");
  ev.target.appendChild(document.getElementById(el));

          document.getElementById('place2').style.display='block';
        }
                function drop5(ev){
            ev.preventDefault();
          var el = ev.dataTransfer.getData("home");
  ev.target.appendChild(document.getElementById(el));
                }

        //******************************************************************************************************************************************************
        var myGamePiece;
var start;
function startGame() {
    myGamePiece = new component(30, 30, "red", 250, 220);
    start = new component(100, 50, "green", 215, 10);
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 505;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle= color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;
                    if(((this.x>185) && (this.x<315)) && (this.y<=60))
    {
        
document.getElementById('cccc').innerHTML="Starting the game";
        window.scrollTo({
  top: 800,
  behavior: 'smooth',
});
    }
    }
}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.newPos();    
    myGamePiece.update();
    start.update();
}

function moveup() {
    myGamePiece.speedY -= 1; 
}

function movedown() {
    myGamePiece.speedY += 1; 
}

function moveleft() {
    myGamePiece.speedX -= 1; 
}

function moveright() {
    myGamePiece.speedX += 1; 
}
    </script>
</head>

<body style="width: 1260px;margin: auto">
    <div style="text-align: center;  width: 1260; height: 500px">
        <button onclick="moveup()">UP</button><br><br>
        <button onclick="moveleft()">LEFT</button>
        <button onclick="moveright()">RIGHT</button><br><br>
        <button onclick="movedown()">DOWN</button><br><br><br><br>
        <div id="cccc">Move the red box to the green rectangle to start the game</div>
    </div>
    <div id="div" style="width:1260">
        <div id="div3">
            <input class="rot1" value="Reset" type="submit" onClick="reset()">
            <span style="padding-left: 50px;  border-radius: 15px 0px 0px 15px">SCORE: </span><span id="score" style="margin-left: 0px; padding-right: 50px; border-radius: 0px 15px 15px 0px">0</span>
            <input id="buttonHome" draggable="true" ondragstart="drag1(event)" class="rot2" value="Home" type="submit" onClick="window.location='index.html';" style="float: right;">
            <div id="place2" ondrop="drop5(event)" ondragover="allowDrop(event)"></div>
        </div>
        <br>
        <br>
        <!--************************drop target for home button***********************-->
        <div id="place1" ondrop="drop4(event)" ondragover="allowDrop(event)" ondrop="drop4(event)"></div>
        <!-- *****************************IMAGES OF TRASH CANS********************************* -->
        <div id="div2">
            <div><img id="blueTrash" ondrop="drop1(event)" ondragover="allowDrop(event)" src="Images/blue1.png" width="170" height="300">
                <span style="margin-left: 8px; background-color: #2d98d4">Glass</span>
            </div>
            <div><img id="redTrash" ondrop="drop2(event)" ondragover="allowDrop(event)" src="Images/red1.png" width="170" height="300"><span style="margin-left: 0px; background-color: #e7221b">Plastic</span></div>
            <div><img id="yellowTrash" ondrop="drop3(event)" ondragover="allowDrop(event)" src="Images/yellow1.png" width="170" height="300"><span style="margin-left: 62px; background-color: #fbc900">Paper</span></div>
        </div>
        <!-- *****************************TRASH IMAGES****************************************** -->
        <div class="div1">
            <img id="d1" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d2" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d3" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d4" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d5" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d6" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d7" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d8" draggable="true" class="glass1" src="Images/bottle1.png" width="70px" height="180px" ondragstart="drag(event)">
            <img id="d9" class="paper" draggable="true" src="Images/paper.png" width="170px" height="120px" ondragstart="drag(event)">
            <img id="d10" draggable="true" class="glass1" src="Images/bottle2.png" width="70px" height="180px" ondragstart="drag(event)">

        </div>
    </div>
</body>

</html>
