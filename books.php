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
<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="footer.css"/>
    <link rel="stylesheet" type="text/css" href="books.css"/>
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

  <br><br>

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

<?php
    echo "<br/><br/><br/><br/><br/>";

    include 'footer.php';
?>
</div>
</body>
</html>
