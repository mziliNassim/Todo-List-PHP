<?php
session_start();
if (isset($_SESSION['user'])) {
  header('location:../index.php');
  exit();
}
?>
<?php include "./header.php" ?>

<body>
  <div class="sign">
    <form action="../db/checksign.php" method="post">
      <h1>Sign IN</h1>
      <?php
      if (isset($_GET['state'])) {
        echo "<p>Erorr Username Or Password!</p>";
      }
      ?>
      <div class="username">
        <label for="username">Username :</label>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="password">
        <label for="password">Password :</label>
        <input type="password" name="password" placeholder="***********" required>
      </div>
      <div class="submit">
        <input type="submit" value="Sign">
      </div>
      <hr>
      <div class="form-footer">
        <span>Don't have Account</span>
        <a href="./register.php">Create Account</a>
      </div>
    </form>
  </div>
</body>