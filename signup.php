<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<br>
<div  align="center">
<a href="index.php" align="center">
  <img src="img/logo.png" alt="logo" height="150" width="500">
</a>
</div><br>
<main class="form">
    <h1>Signup</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET["error"] == "emptyfields") {
          echo '<p style="color:red;">Fill in all fields!</p>';
        }
        else if ($_GET["error"] == "invaliduidmail") {
          echo '<p style="color:red;">Invalid username and e-mail!</p>';
        }
        else if ($_GET["error"] == "invaliduid") {
          echo '<p style="color:red;">Invalid username!</p>';
        }
        else if ($_GET["error"] == "invalidmail") {
          echo '<p style="color:red;">Invalid e-mail!</p>';
        }
        else if ($_GET["error"] == "passwordcheck") {
          echo '<p style="color:red;">Your passwords do not match!</p>';
        }
        else if ($_GET["error"] == "usertaken") {
          echo '<p style="color:red;">Username is already taken!</p>';
        }

      }
      if (isset($_GET["signup"])) {
        if ($_GET["signup"] == "success") {
            echo '<p style="color:green;">Signup successful!</p>';
        }
      }

     ?>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-Mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat password">
      <button type="submit" name="signup-submit">Signup</button>
    </form>
    <?php
    if (isset($_GET["signup"])) {
      if ($_GET["signup"] == "success") {
          echo '<p> Click <a href="index.php">here</a> to Login </p>';
      }
    }
    ?>
  </main>

<?php
  require "footer.php"
?>
