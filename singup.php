<?php
$showAlert = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $product_name = $_POST["product_name"];
    $quantity = $_POST["quantity"];
    $unit_price = $_POST["unit_price"];
    $exists=false;
    $sql = "INSERT INTO `product`(`product_id`, `product_name`, `quantity`, `unit_price`) VALUES ('','$product_name','$quantity','$unit_price')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <!-- <?php require 'partials/_nav.php'?> -->
    <?php
    if($showAlert){
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Product is Added.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <span aria-hidden="true">&times;</span>
      </div>';
    }
    ?>
    <div class="container">
      <h1 class='text-center'></h1>
      <form action="/Form/singup.php" method="post">
        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" class="form-control" id="product_name" name="product_name">
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
          <label for="unit_price">Unit Price</label>
          <input type="number" class="form-control" id="unit_price" name="unit_price">
        </div>
        <button type="submit" class="btn btn-primary" style="position: relative; left: 7.8rem; top: .5rem;" >Add Product</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>