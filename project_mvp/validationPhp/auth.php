<?php


  $email = filter_var(trim($_POST['email']),  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),   FILTER_SANITIZE_STRING);

  $password = md5($password."sol12e3");

  $mysql = new mysqli('localhost', 'root', '', 'applause');

  $result = $mysql->query("SELECT * FROM `clients` WHERE `Email` = '$email' AND `Password` = '$password'");

  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "User Not found";
    exit();
  }

  setcookie('user', $user['name'], time() + 3600, "/");

  $mysql->close();

  header('Location: /project_mvp/index.php');

?>