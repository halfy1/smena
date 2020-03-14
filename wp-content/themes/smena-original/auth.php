<?php
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING); 

  $password = md5($password. "her_naidesh");
  
  $mysql = new mysqli('register-bd', 'root', '','users');
  $mysql->set_charset('utf8');

  $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
  	echo "ТАКИХ НЕТ В НАШЕЙ КНИЖЕЧКЕ";
  	exit();
  }

  setcookie('user', $user['name'], time() + 3600, "/");

  print_r($user);
  exit();

  $mysql-> close();
  header('Location : index.php')
?> 