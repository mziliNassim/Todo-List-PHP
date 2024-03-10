<?php
include "./db/connect.php";

// session_start();
$user = $_SESSION['user'];

$sql = "SELECT * FROM `tasks` WHERE user='$user' ORDER by id DESC";
$query = mysqli_query($conn, $sql);

if ($query) {
  while ($row = mysqli_fetch_assoc($query)) {
?>
    <li>
      <span class="
      <?php if ($row['finish']) {
        echo "finish";
      } else {
        echo "";
      } ?>">
        <?php echo $row['task'] ?>
      </span>
      <div class="events">
        <a href="./crud/updateTask.php?id=<?php echo $row['id'] ?>">✅</a>
        <a href="./crud/deleteTask.php?id=<?php echo $row['id'] ?>">❌</a>
      </div>
    </li>
<?php
  }
} else die("error!");
?>