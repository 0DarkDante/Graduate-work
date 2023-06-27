<?php
$login = filter_var(trim($_POST['login']), 
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$password = md5($password."VK342xfkss");

$mysql = new mysqli('localhost', 'root', 'root', 'register-vk');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();
if(count($user) == 0) {
  echo "Такого користувача не існує";
  exit();
}


setcookie('user', $user['name'], time() + 3600 * 24, "/");

$mysql->close();

header('Location: /');
?>