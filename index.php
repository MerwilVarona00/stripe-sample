<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16',
);

// (MURRAYS Pomade)
$product1 = $stripe->products->retrieve('prod_MP8z93sCKOSqLP', []);
$price1 = $stripe->prices->retrieve('price_1LhpBPBAOXNz4Zwq0kE4aIYe', []);

// (MURRAYS Electric Grooming Set)
$product2 = $stripe->products->retrieve('prod_MQgEsG9IiLCqDT', []);
$price2 = $stripe->prices->retrieve('price_1Lhp3kBAOXNz4Zwqu94weXwr', []);

// (MURRAYS Comb)
$product3 = $stripe->products->retrieve('prod_MP90LNAAGGOlhL', []);
$price3 = $stripe->prices->retrieve('price_1Lhp8uBAOXNz4ZwqOxuq36Tu', []); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>MURRAY'S Pomade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#FFB25E;">


<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">MURRAY'S</h5>
    <span class="text-muted">Classic Grooming style & kit.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</br>
</br>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <!-- Product 1 (Existing Product) -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?php echo array_pop($product1->images); ?>" alt="<?php echo $product1->name; ?>" class="card-img-top" width="260" height="270"/>
          <div class="card-body">
            <h5 class="card-title"><?php echo $product1->name; ?></h5>
            <p class="card-text"><strong><?php echo $product1->description; ?></strong></p>
            <h5><?php echo strtoupper($price1->currency); ?> <?php echo number_format($price1->unit_amount_decimal / 100, 2); ?></h5>
            <form action="/stripe/my-product.php" method="POST">
              <button type="submit" id="checkout-button" class="btn btn-primary">PURCHASE</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Product 2 (MURRAYS Electric Grooming Set) -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?php echo array_pop($product2->images); ?>" alt="<?php echo $product2->name; ?>" class="card-img-top" width="260" height="270"/>
          <div class="card-body">
            <h5 class="card-title"><?php echo $product2->name; ?></h5>
            <p class="card-text"><strong><?php echo $product2->description; ?></strong></p>
            <h5><?php echo strtoupper($price2->currency); ?> <?php echo number_format($price2->unit_amount_decimal / 100, 2); ?></h5>
            <form action="/stripe/my-product.php" method="POST">
              <button type="submit" id="checkout-button" class="btn btn-primary">PURCHASE</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Product 3 (MURRAYS Comb) -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?php echo array_pop($product3->images); ?>" alt="<?php echo $product3->name; ?>" class="card-img-top" width="260" height="270"/>
          <div class="card-body">
            <h5 class="card-title"><?php echo $product3->name; ?></h5>
            <p class="card-text"><strong><?php echo $product3->description; ?></strong></p>
            <h5><?php echo strtoupper($price3->currency); ?> <?php echo number_format($price3->unit_amount_decimal / 100, 2); ?></h5>
            <form action="/stripe/my-product.php" method="POST">
              <button type="submit" id="checkout-button" class="btn btn-primary">PURCHASE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
