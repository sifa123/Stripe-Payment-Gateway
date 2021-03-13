<?php
require('config.php');
if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];
$data=\Stripe\Charge::create(array(
           "amount"=>5000,
           "currency"=>"inr",
           "description"=>"Donate For Children",
           "source"=>$token,
));
}
?>
<center>
	<br><br>
	<br><br>
<h1 style="color: green">Your Payment Has Been Successful!</h1>
 <h2>Thank you for your donation.</h2>
 <hr>
<h2><a href="index.php"> Go to home page</a></h2>
</center>




