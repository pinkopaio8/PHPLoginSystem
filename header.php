<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of a meta description.">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
      <nav><br>
        <div  align="center">
        <a href="index.php" align="center">
          <img src="img/logo.png" alt="logo" height="150" width="500">
        </a>
        </div>
<!--        <ul>
          <li> <a href="index.php">Home</a> </li>
          <li> <a href="#">Portfolio</a> </li>
          <li> <a href="#">About Me</a> </li>
          <li> <a href="#">Contact</a> </li>
        </ul> -->
        <div class="login-page">
          <?php

          if (isset($_GET['error'])) {
            if($_GET['error'] == "wrongpwd" || $_GET['error'] == "nouser"){
            echo '<p style="color:red;">Wrong username or password!</p>';
           }
          }

          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form><br>';
          }
          else {

            echo '<div class="form">
            <form action="includes/login.inc.php" class="login-form" method="post">
              <input type="text" name="mailuid" placeholder="UserName/E-mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
            </form><br>';
          }
           ?>



          <a href="signup.php">Signup</a>

        </div>
      </nav>
  </header>
