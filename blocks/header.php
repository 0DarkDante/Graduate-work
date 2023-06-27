<header>
  <nav class="stic">
    <div class="menu default-container">
      <span class="elementsOne">
        <a href="index.php">Головна</a>
      </span>
      
      <span class="elementsOne">
        <a href="catalog.php">Каталог</a>
      </span>

      <span class="elementsOne">
        <a href="about_we.php">Про нас</a>
      </span>

      <span class="elementsOne">
        <a href="delivery.php">Оплата та доставка</a>
      </span>

      <span class="elementsOne">
        <a href="contact.php">Контакти</a>
      </span>

      <span class="elementsOne elementsOne-end">

      <div class="user-menu">
  <?php if (isset($_COOKIE['user'])) : ?>
    <button class="user-button"><?php echo $_COOKIE['user']; ?></button>
    <ul class="user-dropdown">
      <li><a href="setting.php">Настройки</a></li>
      <li><a href="validation-form/exit.php">Выход</a></li>
    </ul>
  <?php else : ?>
    <a href="input.php">Вхід</a>
  <?php endif; ?>
</div>
        
      </span>
      
      <span class="elementsOne elementsOne-end">        
        <a href="favorites.php"> <img src="IMG/icon/heart.png" alt="">  Обране</a>
      </span>
    </div>

    <div class="inf2_0">
      <div class="default-container">
      <div class="inf">
        <div class="number_phone_wrapper1">
        <img src="IMG/icon/18070286501543238910-128.png" alt="phone">
        <a href="tel:+380660024808">0660024808</a>
      </div>
        <a href="index.php"><img src="IMG/VADIK.png" alt="Vadik"></a> 
        <div class="shop_bascet">
          <img src="IMG/icon/free-icon-shopping-cart-6957439.png" alt="shop"> 
          <a href="">Корзина</a> 
        </div>
      </div>
     </div>
    </div>

    <div class="menu1">
      <hr>
  
        <span class="elements">
          <a href="#">Футбольна форма</a>
        </span>
  
        <span class="elements">
          <a href="catalog.php">Футбольне взуття</a>
        </span>
  
        <span class="elements">
          <a href="#">Футбольний одяг</a>
        </span>
  
        <span class="elements">
          <a href="#">Інші товари</a>
        </span>
  
      <hr class="mini_hr">
    </div>


</nav></header>