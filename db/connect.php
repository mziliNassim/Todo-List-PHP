<?php

$USERNAME = "root";
$PASSWORD = "";
$HOSTNAME = "localhost";
$DB = "todo_app";

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DB);

if (!$conn) {
  die("error connecting to database! :" . mysqli_error($conn));
}
