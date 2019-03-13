<?php

$servername = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
  die("Connessione fallita: ".mysqli_connect_error());
}
