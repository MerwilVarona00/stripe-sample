<?php
// Include Stripe's PHP library
require 'vendor/autoload.php';

// Set your secret key (replace with your actual Stripe secret key)
\Stripe\Stripe::setApiKey('sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Create a customer on Stripe
try {
    $customer = \Stripe\Customer::create([
        'name' => $name,
        'email' => $email,
        'address' => [
            'line1' => $address,
        ],
        'phone' => $phone,
    ]);

    // If successful, redirect to a success page
    header('Location: success.php');
    exit();
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle errors from Stripe API
    echo 'Error: ' . $e->getMessage();
    exit();
}
