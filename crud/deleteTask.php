<?php

if (isset($_GET['id'])) {
  include "../db/connect.php";

  $id  = $_GET['id'];
  $sql = "DELETE FROM `tasks` WHERE id=$id";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    header('location:../index.php?msg=task deleted successfully!');
    exit();
  } else {
    header("location:../index.php?msg=Coudn't delete task!");
    exit();
  }
} else header('location:../index.php');
