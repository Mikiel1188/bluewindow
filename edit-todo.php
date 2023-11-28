<?php
    $id = $_POST['fieldID'];
    $title = $_POST['title'];
    $description = $_POST['description'];

        include('includes/db_connection.php');
        $datetime = date_create()->format('Y-m-d H:i:s');
        $statement = "UPDATE  todolist SET title= '$title',description='$description' WHERE id='$id'";
        if ($dbConnection->query($statement) === TRUE) {
            header("location:index.php");
          } else {
            echo "Error: " . $statement . "<br>" . $dbConnection->error;
          }
    
?>