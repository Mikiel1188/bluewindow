<?php 
$id = $_POST['delete_btn'];
include('includes/db_connection.php');
$statement = "DELETE FROM todolist WHERE id=$id";
if ($dbConnection->query($statement) === TRUE) {
    header("location:index.php");
  } else {
    echo "Error: " . $statement . "<br>" . $dbConnection->error;
  }

?>