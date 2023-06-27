<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>VK</title>
</head>

<body>
  <div class="wrapper1">

  <?php require "blocks/header.php" ?>


<main>

  <div class="flex-wrapper default-container">
    <div class="slider-wrapper">
      <div class="slide active">
        <img src="IMG/Nike-Mercurial-Vapor-360-Elite.jpg" alt="">
      </div>
      <div class="slide">
        <img src="IMG/pole_vorota_setka_214473_1280x720.jpg" alt="">
      </div>
      <div class="slide">
        <img src="IMG/futbolnyj_miach_miach_futbol_143079_1280x720.jpg" alt="">
      </div>
      <div class="slide">
        <img src="IMG/futbolnyj_miach_miach_futbol_152418_1280x720.jpg" alt="">
      </div>
      <div id="btn-prev"></div>
      <div id="btn-next"></div>
    </div>
  </div>

  <hr class="hr_object default-container">

  <div class="foto_nav_menu2_0 default-container">
    <img src="IMG/connor-coyne-OgqWLzWRSaI-unsplash.jpg" alt="">
    <div class="foto_nav_menu default-container">
      <span class="byts shoes">
      <a href="catalog.php"><img src="IMG/m3985.jpg" alt=""></a> 
      <figure><a href="catalog.php"><button type="submit" class="btn btn-form" onclick="showMessage()">Буци</button></a></figure>
      </span>

      <span class="sorok shoes">
        <a href="catalog.php"><img src="IMG/2ж2-500x500.jpeg" alt=""></a>
        <figure><a href="catalog.php"><button type="submit" class="btn btn-form" id="myBtn">Сороконожки</button></a></figure>
      </span>
    </div>
  </div>  
  

</main>


<?php require "blocks/footer.php" ?>

<script src="JS/slider.js"></script>

</div>

</body>
</html>