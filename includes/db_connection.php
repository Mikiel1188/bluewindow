<?php
include('../config.php');

$dbConnection =  new mysqli($serverName, $userName, $passWord);

if ($dbConnection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>