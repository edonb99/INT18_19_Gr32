<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!--  **reviews** -->
<?php
  date_default_timezone_set('Europe/Tirane');
  include 'reviewsdb.inc.php';  
  include 'comments.inc.php';

?>



<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="footer.css"/>
    <link rel="stylesheet" type="text/css" href="books.css"/>
<!-- -->
    <link rel="stylesheet" type="text/css" href="reviews.css">

      <!-- **********reviews ******-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
<script>

  $(document).ready(function() {
    var commentCount = 2;
    $("button").click(function(){
      commentCount = commentCount + 2;
      $("#comments").load("load-comments.php", {
        commentNewCount: commentCount
      });

    });
  });


</script>
  <!-- -->

</head>

<body>
<div style="background-color: white">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2 style="margin-left: 50px; padding-top: 20px;">Welcome <strong><em><?php echo $_SESSION['username']; ?></em></strong>
        </h2>
    	<button style="float: right; margin-right: 50px; background-color: lightgreen;">
            <a href="books.php?logout='1'" style="color: #f35300; text-decoration: none;">Log out</a>
        </button>
    <?php endif ?>

  <br><br><br><br>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book1.jpg"/>
      </div>
      <h2>Enchantment</h2>
      <p class="author">by Guy Kawasaki</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book2.jpg"/>
      </div>
      <h2>CITY</h2>
      <p class="author">by P.D.Smith</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book3.jpg"/>
      </div>
      <h2>Just Courage</h2>
      <p class="author">by Gary A.Haugen</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book4.jpg"/>
      </div>
      <h2>The Tattooist of Auschwitz</h2>
      <p class="author">by Heather Morris</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book5.jpg"/>
      </div>
      <h2>Harry Potter</h2>
      <p class="author">by J.K. Rowling</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book6.jpg"/>
      </div>
      <h2>Every Breath</h2>
      <p class="author">by Nicolas Sparks</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book7.jpg"/>
      </div>
      <h2>The lost girls of Paris</h2>
      <p class="author">by Pan Jenoff</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book8.jpg"/>
      </div>
      <h2>The Reckoning</h2>
      <p class="author">by John Grisham</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book9.jpg"/>
      </div>
      <h2>The couple next door</h2>
      <p class="author">by Shari Lapena</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book10.jpg"/>
      </div>
      <h2>The silent patient</h2>
      <p class="author">by Alex Michaelides</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book11.jpg"/>
      </div>
      <h2>Where the cowards sing</h2>
      <p class="author">by Delia Owens</p>
    </figure>

    <figure class="thumb">
      <div class="cover">
        <img src="Images/Book12.jpg"/>
      </div>
      <h2>The Coin</h2>
      <p class="author">by Sandeep Sharma</p>
    </figure>

    <br><br><br>
    
    <p style="margin-left: 720px; display: inline; width: 400px; height:90px; background-color: navy;">
        <a href="Files.php" style="color: yellow; text-decoration: none;">
            Read more about Books
        </a>
    </p>
    
    <br><br><br>

<!-- *******************************REVIEWS*************************** -->

    <?php
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'>
    </textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>
    </form>";
  ?>



  <!-- -->

<div id="comments" style= "border-style: solid; border-color:orange; border-width: 5px; 
                border-collapse: separate;
              padding: 2px; margin: 10px; ">
    <?php
      $sql = "SELECT * FROM comments LIMIT 2";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<p>";
          echo $row['uid'];
          echo "<br>";
          echo $row['message'];
          echo "</p>";
        }


      } else {
        echo " No more comments!";
      }

    ?>
  </div>

  <button>Show more comments</button>


<!-- *******************************END_REVIEWS*************************** -->


<?php
    echo "<br/><br/><br/><br/><br/>";

    include ('footer.php');
?>
</div>
</body>
</html>
