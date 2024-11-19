
<?php
require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
      'price' => 'price_1LhpBPBAOXNz4Zwq0kE4aIYe',
      'quantity' => 1,
    ]],
    'mode' => 'subscription',
    'success_url' => $YOUR_DOMAIN . '/success.html',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  ]);


  header("HTTP/1.1 303 see other");
  header("Location: " . $checkout_session->url);