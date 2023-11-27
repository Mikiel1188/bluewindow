<?php
    $title = $_POST['title'];
    $description = $_POST['description'];

    if(empty($_POST['title'])||empty($_POST['description'])){
        header("location:add.php?error=true");
    }else{
        include('includes/db_connection.php');
        $datetime = date_create()->format('Y-m-d H:i:s');
        $statement = "INSERT INTO todolist (title, description,created_at,updated_at) VALUES ('$title','$description','$datetime ' ,'$datetime' )";
        if ($dbConnection->query($statement) === TRUE) {
            header("location:index.php");
          } else {
            echo "Error: " . $statement . "<br>" . $dbConnection->error;
          }
    }
?>