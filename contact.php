<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Контакти</title>
</head>
  <body>
    <div class="wrapper1">
    
    <?php require "blocks/header.php" ?>

      <main>
        <div class="menu-flex menu-flex-contact default-container">
          <div class="leftcol">
            <ul class="not_pl_delivery">
              <li><a href="index.php">Головна</a></li>
              <li><a href="catalog.php">Каталог</a></li>
              <li><a href="about_we.php">Про нас</a></li>
              <li class="delivery_li_mini_adapt"><a href="delivery.php">Оплата та достака</a></li>
              <li><a href="contact.php" class="active neon">Контакти</a></li>
            </ul>
          </div>

          <div class="rightcoll rightcoll-contact">
            <div class="rrc">
              <h1>Контакти</h1>
              <ul class="wrapper-contact">
              <li><img src="IMG/icon/free-icon-call-now-7989054.png" alt="tel"><a href="tel:+380660024808">066 002-48-08</a></li>
              <li><a href="tel:+380999561547">099 956-15-47</a></li>
              <li><a href="tel:+380662363866">066 236-38-66</a></li>
              <li><img src="IMG/icon/free-icon-message-4716557.png" alt="tel"><a href="mailto:vadym.kulinich@nure.ua">vadym.kulinich@nure.ua</a></li>
              </ul>
          </div>

            <div class="adres">
              <h3>Адрес</h3>
              <span>місто Охтирка, Сумська область</span>
            </div>
          </div>
        </div>
      </main>


      <?php require "blocks/footer.php" ?>

      <script src="JS/slider.js"></script>
    
  </div>
  </div>
</body>
</html>