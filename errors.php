<!DOCTYPE html>
<html>
<head>
	<style>.error {
    width: 92%; 
    margin: 5px auto; 
    padding: 5px; 
    border: 1px solid #a94442; 
    color: white; 
    background: rgba(255,0,0,0.8); 
    border-radius: 5px; 
    text-align: left;
  }</style>
</head>
<body>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  <!-- foreach eshte unaz qe e shqyrton secilin antar tvargut dmth secilin error  -->
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
</body>
</html>

