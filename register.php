<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Реєстрація</title>
</head>
  <body>
    <div class="wrapper1">
    
    <?php require "blocks/header.php" ?>

      <main class="login-page">
        <section class="login">
          <div class="form-container">
            <p>Реєстрація</p>
            <form action="validation-form/checkRegister.php" method="post" class="formRegister">
              <label class="labelRegister" for="repeat_password">Ім'я</label>
              <input type="text" name="name" placeholder="Введіть сюди ім'я">
              <label class="labelRegister" for="email">Email</label>
              <input type="email" name="login" placeholder="Введіть сюди логін">
              <label class="labelRegister" for="password">Пароль</label>
              <input type="password" name="password" placeholder="Введіть сюди пароль">
              <input type="submit" value="Register">
            
            <p>або <span><a href="input.php">Ввійти</a></span></p>
            </form>
          </div>
        </section>
      </main>

      <?php require "blocks/footer.php" ?>
      

      <script src="JS/slider.js"></script>
    
  </div>
  </div>
</body>
</html>