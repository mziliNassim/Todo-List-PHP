<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "./connect.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE username='$username' and pass='$password'";
  $query = mysqli_query($conn, $sql);

  if (mysqli_num_rows($query) == 0) {
    header('location:../view/sign.php?state=false');
    exit();
  } else {
    session_start();
    $user = mysqli_fetch_assoc($query);
    $_SESSION['user'] = $user['username'];
    header('location:../index.php');
    exit();
  }
} else header('location:../view/sign.php');
