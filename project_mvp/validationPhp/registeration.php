<?php
  $fullName = filter_var(trim ($_POST['fullName']),
  FILTER_SANITIZE_STRING);
  $phone = filter_var(trim ($_POST['phone']),
  FILTER_SANITIZE_STRING);
  $email = filter_var(trim ($_POST['email']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim ($_POST['password']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($fullName) < 2 || mb_strlen($fullName) > 90 ){
    echo "Invalid length";
    exit();
  } else if(mb_strlen($phone) < 2 || mb_strlen($phone) > 90 ){
    echo "Invalid length";
    exit();
  } else if(mb_strlen($email) < 2 || mb_strlen($email) > 90 ){
    echo "Invalid length";
    exit();
  }  else if(mb_strlen($password) < 6 || mb_strlen($password) > 64 ){
    echo "Invalid length";
    exit();
  }

  $password = md5($password."sol12e3");


  $mysql = new mysqli('localhost', 'root', '', 'applause');
  $mysql->query("INSERT INTO `clients` (`Name`, `Tel_number`, `Email`, `Password`) VALUES('$fullName', '$phone', '$email', '$password')");

  $mysql->close();

  header('Location: /project_mvp/index.php');
  
?>