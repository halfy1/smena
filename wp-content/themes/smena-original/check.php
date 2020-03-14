<?php 
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  if (mb_strlen($login) <5 || mb_strlen($login) > 40) {
  	echo "Недопустимая длина логина";
  	exit();
  } 
  elseif (mb_strlen($email) <2 || mb_strlen($email) > 40) {
    echo "Недопустимая длина пароля";
    exit();
  }
  elseif (mb_strlen($password) <2 || mb_strlen($password) > 32) {
  	echo "Недопустимая длина пароля";
  	exit();
  }

  $password = md5($password. "her_naidesh");
  
  $mysql = new mysqli('register-bd', 'root', '','users');
  $mysql->set_charset('utf8');
  $mysql ->query("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email')");

  $mysql-> close();

  echo $login;
  echo $email;
  echo $password;
?>