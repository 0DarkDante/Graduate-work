<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Каталог</title>
</head>
  <body>
    <div class="wrapper1">
    
    <?php require "blocks/header.php" ?>

      <main>
        <div class="default-container">
          <div class="catalog-parents">
              <h1>Каталог спортивних товарів</h1>
                <div class="sort-catalog-submit">
                  <span>Сортування: </span>
                  <span><button type="submit" class="sort-catalog-submit-one active-catalog-btn">по популярності</button></span>
                  <span><button type="submit" class="sort-catalog-submit-two">спочатку дешевше</button></span>
                  <span><button type="submit" class="sort-catalog-submit-three">по назві</button></span>
                </div>
          </div>

          <div class="leftcol, catalogLeftcol">
          <div class="ch-b">
            <ul>
              <li> 
                <a href="/">
                  <span> <input type="checkbox"> Новинка </span>
                  <span class="catalog-availability">46</span>
                </a> 
              </li>
              <li>
                <a href="/">
                  <span> <input type="checkbox"> Хіт </span>
                  <span class="catalog-availability">10</span>
                </a> 
              </li>
            </ul>

            <div class="ch-b2">
              <h3>Бренд</h3>
              <ul>
                <li> 
                  <a href="/">
                    <span> <input type="checkbox"> Nike </span>
                    <span class="catalog-availability">11</span>
                  </a> 
                </li>
                <li>
                  <a href="/">
                    <span> <input type="checkbox"> Adidas </span>
                    <span class="catalog-availability">8</span>
                  </a> 
                </li>
                <li>
                  <a href="/">
                    <span> <input type="checkbox"> joma </span>
                    <span class="catalog-availability">4</span>
                  </a> 
                </li>
                <li>
                  <a href="/">
                    <span> <input type="checkbox"> Puma </span>
                    <span class="catalog-availability">3</span>
                  </a> 
                </li>
              </ul>
            </div>
          </div>

          <div class="ch-b3">
            <h3>Ціна, грн</h3>
            <span><input type="number" value="0" class="inpnumber"></span>
            <span>—</span>
            <span><input type="number" value="4999" class="inpnumber"></span>
            <span><input type="submit" value="Ок"></span>
            
            <form action="">
              <input type="range" name="price" id="price" min="0" max="4999" step="1" value="100">
              <output class="price-output">100</output> 
            </form>
            

          </div>
          </div>

          <div class="rightcoll, catalogRightcol">
            <ul class="container-grid card">

                  <?php
                      $mysql = new mysqli('localhost', 'root', 'root', 'register-vk');
                      $query = "SELECT * FROM catalog";
                      $results = $mysql->query($query);
                      while($row = $results->fetch_assoc()){
                          echo '
                          <li class="item">
                              <div> 
                                  <a href="NikeTiempo.php"> 
                                      <img class="tov_catal" src="'.$row["photo"].'"> 
                                  </a>
                              </div>
                              <div class="cataloCard-title"> 
                                  <div class="orderingText">
                                     <a href="'.$row["name"].'">'.$row["name"].'</a>
                                  </div>
                                  <p><b>'.$row["price"].' грн</b></p>
                              </div>
                              <div class="favorites-text"> 
                                  <a href=""><img src="IMG/icon/heart.png" alt="heart"> В обране</a>
                              </div>
                          </li>
                          ';
                      }
                  $mysql->close();
                    ?>
              

              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1042-removebg-preview-removebg-preview.png" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Adidas</a>
                  </div> 
                  <p> <b>850 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_0989.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Hypervenom</a> 
                  </div>
                  <p> <b>950 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_0971fas.jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Mercurial</a> 
                  </div>
                  <p> <b>850 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1021.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Сороконожки Adidas дитячі</a>
                  </div> 
                  <p> <b>550 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1036.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title">
                  <div class="orderingText"> 
                  <a href="">Буци Adidas</a>
                  </div> 
                  <p> <b>999 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
                <li class="item ">
                  <div> 
                    <a href=""> 
                      <img class="tov_catal" src="IMG/Товар/byts/IMG_1028.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                    </a>
                  </div>
                  <div class="cataloCard-title"> 
                    <div class="orderingText">
                    <a href="">Бутсы Nike Mercurial CR7</a>
                    </div> 
                    <p> <b>800 грн</b> </p>
                  </div>
                  <div class="favorites-text"> 
                    <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                  </div>
                </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1048.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Adidas (гібриди)</a>
                  </div> 
                  <p> <b>750 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1165.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Tiempo</a>
                  </div> 
                  <p> <b>670 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1189.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Hypervenom (з носком)</a>
                  </div> 
                  <p> <b>770 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1231.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Adidas</a>
                  </div> 
                  <p> <b>960 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1262.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Сороконіжки Adidas</a>
                  </div> 
                  <p> <b>999 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_1510.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Сороконіжки Nike Mercurial</a>
                  </div> 
                  <p> <b>740 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_3415.JPG" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Mercurial</a> 
                  </div>
                  <p> <b>970 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/photo_2020-08-26_13-58-22.jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Puma (напівпрофесійні)</a>
                  </div> 
                  <p> <b>1199 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/photo_2020-08-26_13-59-00.jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Сороконіжки Adidas X</a>
                  </div> 
                  <p> <b>899 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/photo_2020-10-05_15-08-18.jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Буци Adidas Copa Mundial</a> 
                  </div>
                  <p> <b>899 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/photo_2020-10-05_15-09-01 (2).jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Tiempo</a>
                  </div> 
                  <p> <b>570 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/photo_2021-04-21_14-01-46.jpg" alt="butsi-nike-tiempo-legend-8-elite-fg-at5293-414"> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Mercurial</a>
                  </div> 
                  <p> <b>799 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
              <li class="item ">
                <div> 
                  <a href=""> 
                    <img class="tov_catal" src="IMG/Товар/byts/IMG_0957.JPG" butsi-nike-tiempo-legend-8-elite-fg-at5293-414"=""> 
                  </a>
                </div>
                <div class="cataloCard-title"> 
                  <div class="orderingText">
                  <a href="">Бутсы Nike Mercurial</a>
                  </div> 
                  <p> <b>899 грн</b> </p>
                </div>
                <div class="favorites-text"> 
                  <a href=""> <img src="IMG/icon/heart.png" alt="heart">  В обране </a>
                </div>
              </li>
   
            </ul>
         
            <div class="pagination">
              <a href="#">«</a>
              <a class="btn_pagin active" href="#">1</a>
              <a class="btn_pagin" href="#">2</a>
              <a class="btn_pagin" href="#">3</a>
              <a class="btn_pagin" href="#">4</a>
              <a class="btn_pagin" href="#">5</a>
              <a class="btn_pagin" href="#">6</a>
              <a href="#">...</a>
              <a href="#">»</a>
            </div>


          </div>
        </div>
      </main>


      <?php require "blocks/footer.php" ?>

      <script src="JS/catalog.js"></script>
    
  </div>
  </div>
</body>
</html>