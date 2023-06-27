<?php
  // print_r($_POST)
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
    $error = 'Введіть ваш email';
  else if(trim($message) == '')
    $error = 'Введіть повідомлення';  
  else if(trim($name) == '')
    $error = 'Введіть ваше імя';
  else if(strlen($message) < 10)
    $error = 'Напишіть більше 10 символів';  

  if($error != '') {
    echo $error;
    exit;
  }

  $subject = "=utf-8?B?".base64_encode("Повідомлення")."?=";
  $headers = "From: $email\r\nReply-to: $emaol\r\nContent-type: text/html;charset=utf-8\r\n";
  
  mail('vadym.kulinich@nure.ua', $subject, $message, $headers, $name);

  header('Location: /Response.php');
?>


