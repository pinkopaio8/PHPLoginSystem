<?php
  require "header.php";
?>

  <main>
    <<?php
      if (isset($_SESSION['userId'])) {
        echo '<p align="center" style="font-size:50px;">You are logged in!</p>';
      }
      else {
        
        echo '<p align="center" style="font-size:50px;">You are logged out!</p>';
      }
    ?>

  </main>

<?php
  require "footer.php"
?>
