<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <style>
      body{
        background-image: url("payment-gateway.jpg");
}
</style>
</head>
<body>
   <nav class="navbar navbar-inverse" style="color: white;font-family: sans-serif;font-size: 18px;background-color: black">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="#" style="color: red;">The Sparks Foundation</a>
  </div>
  <ul class="nav navbar-nav">

  <li class="active"><a href="index.php" class="menu-btn">Home</a></li>
  <li><a href="#about" class="menu-btn">About</a></li>
  <li><a href="#contact" class="menu-btn">Contact</a></li>

    </ul>
  </div>
</nav>
<br><br><br>
   <center>                
    <h1 style="color: yellow;font-family: sans-serif;font-size: 40px;">Donate For Children</h1>
<h4 style="color: white;"><i>“The way you get meaning into your life is to devote yourself to loving others,<br> devote yourself to your community around you, and devote yourself to creating something that gives you purpose and meaning.”</i></h4>
<h4 style="color: white"><u>Mitch Albom</u></h4>
            
</center>



<form action="submit.php" method="post">
	<center><script
	src="https://checkout.stripe.com/checkout.js" class="stripe-button"

	data-key="pk_test_51ISR4oJLdWOkhSZGZ1c5y3vzKnwtJQvx4YbtJUIe1YfcQuvd7D4oYwJJMI3m520LgEdvEf7ulwQgf0JxiykAYNlP00gHqImwBD"
	data-amount="5000"
	data-name="The Sparks Foundation"
	data-description="Donate For Children"
	data-image="logo_small.png"
	data-currency="inr"
    
	></script></center>
</form>
</body>
</html>