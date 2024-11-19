<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16'
);
$result = $stripe->products->all(['limit' => 3]);
var_dump($result);