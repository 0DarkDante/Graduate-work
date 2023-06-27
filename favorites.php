<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Улюблені товари</title>
</head>
  <body>
    <div class="wrapper1">
    
    <?php require "blocks/header.php" ?>

      <main class="default-container">
       <?php if (count($favorite_products) > 0) : ?>
        <?php foreach ($favorite_products as $product) : ?>
            <div class="product-card">
                <h3><?php echo $product['name']; ?></h3>
                <p>Ціна: <?php echo $product['price']; ?></p>
                <p><?php echo $product['description']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>У вас немає обраних товарів.</p>
    <?php endif; ?>
      </main>

      <?php require "blocks/footer.php" ?>

      <script src="JS/slider.js"></script>
    
  </div>
  </div>
</body>
</html>