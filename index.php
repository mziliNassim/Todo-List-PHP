<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:./view/sign.php');
  exit();
}
?>
<?php include "./view/header.php"; ?>

<body>
  <header>
    <h1>Todo LISTE</h1>
    <h2><?php echo $_SESSION['user'] ?></h2>
    <a href="./view/logout.php">DECOX</a>
  </header>
  <div class="container">
    <form action="./crud/createTask.php" method="post">
      <input type="text" name="task" placeholder="Tesk to do..." required>
      <input type="submit" value="Add Task">
    </form>
    <div class="tasks">
      <ul>
        <?php include "./crud/readTasks.php"; ?>
      </ul>
    </div>
  </div>
</body>

<script>
  document.querySelector('form input').focus()
</script>

</html>