<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Вхід</title>
</head>
<body>
  <body>
    <div class="wrapper1">
    
    <?php require "blocks/header.php" ?>

    <main>
      <section class="login">
        <div class="form-container">
          <p>Вхід</p>
          <form action="validation-form/auth.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="login" placeholder="Введіть сюди логін">
            <label for="password">Пароль</label>
            <input type="password" name="password" placeholder="Введіть сюди пароль">
            <input type="submit" value="Вхід">
          
          <p>або <span>Забули пароль</span></p>
          </form>
        </div>
        <p>Немає акаунту? <span><a href="register.php">Створити зараз</a></span></p>
      </section>
    </main>

    <?php require "blocks/footer.php" ?>

    <script src="JS/slider.js"></script>

  </div>
  </div>
</body>
</body>
</html>