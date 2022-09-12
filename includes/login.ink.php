<?php
if (isset($_POST["submit"])) {

  $username = $_POST["uid"]; 
  $pwd = $_POST["pwd"]; 
  require_once 'dbh.ink.php';
  require_once 'functions.ink.php';

  if (emptyInputLogin($username, $pwd) !== false) {
    header("location: ../index.php?noP");
    exit();
  }

  loginUser($conn, $username, $pwd);
  //createUser($conn, $name, $email, $username, $pwd);
}
else {
    header("location: ../index.php?error");
    exit(); 
}