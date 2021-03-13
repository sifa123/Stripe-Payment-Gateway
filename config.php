<?php

require('stripe-php-master/init.php');

$publishablekey="pk_test_51ISR4oJLdWOkhSZGZ1c5y3vzKnwtJQvx4YbtJUIe1YfcQuvd7D4oYwJJMI3m520LgEdvEf7ulwQgf0JxiykAYNlP00gHqImwBD";
$secretkey="sk_test_51ISR4oJLdWOkhSZGM9R3g0aplUjBMq3h6MtagmepxrJJyyhXgYj5LksB8w3iMvZCmYDW8Fw5rO79DTxl8cLzKd7v00fgqYF0c5";
\Stripe\Stripe::setApiKey($secretkey);

?>