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
    <form action="../db/setRgister.php" method="post">
      <h1>Register</h1>
      <?php
      if (isset($_GET['state'])) {
        if ($_GET['state'] == "username") {
          echo "<p>Username not valid!</p>";
        } else {
          echo "<p>Password not valid!</p>";
        }
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
      <div class="password">
        <label for="confirm_password">Confirm password :</label>
        <input type="password" name="confirm_password" placeholder="***********" required>
      </div>
      <div class="submit">
        <input type="submit" value="Sign">
      </div>
      <hr>
      <div class="form-footer">
        <span>Allredy have Account</span>
        <a href="./sign.php">Sign in</a>
      </div>
    </form>
  </div>
</body>