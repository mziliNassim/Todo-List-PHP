<?php

if (isset($_GET['id'])) {
  include "../db/connect.php";

  $id  = $_GET['id'];
  $sql = "SELECT * FROM `tasks` WHERE `id`=$id";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    $row = mysqli_fetch_assoc($query);
    if ($row['finish']) {
      $upd = 0;
    } else {
      $upd = 1;
    }
    $sql1 = "UPDATE `tasks` SET `finish`=$upd WHERE `id`=$id";
    $query1 = mysqli_query($conn, $sql1);
    if ($query1) {
      header('location:../index.php?msg=success updating!');
      exit();
    } else die(mysqli_error($conn));
  } else die(mysqli_error($conn));
} else header('location:../index.php');
