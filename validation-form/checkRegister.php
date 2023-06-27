<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login, 'UTF-8') < 5 || mb_strlen($login, 'UTF-8') > 90) {
    echo "Неприпустима довжина логіну";
    exit();
  } else if(mb_strlen($name, 'UTF-8') < 3 || mb_strlen($name, 'UTF-8') > 50) {
    echo "Неприпустима довжина імені";
    exit();
  } else if(mb_strlen($password, 'UTF-8') < 4 || mb_strlen($password, 'UTF-8') > 25) {
    echo "Неприпустима довжина пароля (від 4 до 25 символів)";
    exit();
  }

  $password = md5($password."VK342xfkss");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-vk');
  $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

  $mysql->close();

  header('location: /');
?>