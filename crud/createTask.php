<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "../db/connect.php";

  session_start();
  $user = $_SESSION['user'];
  $task = $_POST['task'];

  $sql = "INSERT INTO `tasks` (`task`, `user`, `finish`) VALUES ('$task', '$user', 0)";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    header('location:../index.php?msg=success insert');
    exit();
  } else die("Could not create Task");
} else header('location:../index.php');
