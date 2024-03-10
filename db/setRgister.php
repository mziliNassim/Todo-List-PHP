<?php
// check Username valid
function checkUsername($username)
{
  if (strlen($username) < 4) {
    header('location:../view/register.php?state=username');
    exit();
    return false;
  }
  return true;
}

// check match password!
function checkPassword($pass, $cofirm)
{
  if ($pass != $cofirm) {
    header('location:../view/register.php?state=password');
    exit();
    return false;
  }
  return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "./connect.php";

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  checkUsername($username);
  checkPassword($password, $confirm_password);


  $sql = "INSERT INTO `users`(`username`, `pass`) VALUES ('$username','$password')";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    header('location:../view/sign.php');
    exit();
  } else {
    die("Error");
  }
  // if (mysqli_num_rows($query) == 0) {
  //   header('location:../view/sign.php?state=false');
  //   exit();
  // } else {
  //   session_start();
  //   $user = mysqli_fetch_assoc($query);
  //   $_SESSION['user'] = $user['username'];
  //   header('location:../index.php');
  //   exit();
  // }
} else header('location:../view/register.php');
