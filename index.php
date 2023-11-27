<?php
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'.'bluewindow'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="<?php echo $root; ?>/resources/style.css">

</head>
<body>
    <nav>
        
        <img src="<?php echo $root; ?>/resources/icons/writing.png" class="icon"/>
        <h1>ToDo List.io</h1>
    </nav>
    <section id="container">
        <?php
            include('includes/db_connection.php');
            $statement = "SELECT * FROM todolist";

            if ($result = $dbConnection->query($statement)) {

                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
        ?>
                    <div class="card">
                        <div class="card-inner">
                            <div class="tool-bar">
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="button-group">
                                    <form action="delete.php" method="post">
                                        <button type="submit"  class="action-btn" id="delete" name="delete_btn" value="<?php echo $id; ?>" class="btn-link"><img class="btn-icon" src="<?php echo $root; ?>/resources/icons/delete.png" class="icon"/></button>
                                    </form>
                                    <form action="edit.php" method="post">
                                        <button type="submit"  class="action-btn" id="edit" name="edit_btn" value="<?php echo $id; ?>" class="btn-link"><img class="btn-icon" src="<?php echo $root; ?>/resources/icons/edit.png" class="icon"/></button>
                                    </form>
                                </div>
                            </div>
                            <p class="description-text"><?php echo $row['description']; ?></p>
                        </div>
                    </div>
            <?php 
                }}else{
                    echo'<h3>Nothing to display</h3>';
                }
            
            ?>
    </section>
    <section id = "add-todo">
        <a href="add.php" class="cta-btn">Add Item in Todo List</a>
    </section>
    
</body>
</html>