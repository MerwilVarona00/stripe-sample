<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16'
);
$result = $stripe->products->delete(
  'prod_MQfpZK2C7IOD0M',
  []
);
var_dump($result);