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
    <section id="list">
        <div class="card">
            <div class="card-inner">
                <div class="tool-bar">
                    <h4>Title</h4>
                    <div class="button-group">
                        <a href="" class="action-btn" id="delete"><img class="btn-icon" src="<?php echo $root; ?>/resources/icons/delete.png" class="icon"/></a>
                        <a href="" class="action-btn" id="edit"><img class="btn-icon" src="<?php echo $root; ?>/resources/icons/edit.png" class="icon"/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id = "add-todo">
        <a href="" class="cta-btn">Add Item in Todo List</a>
    </section>
    
</body>
</html>