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
        <div class="card">
            <div class="card-inner">
                <div class="tool-bar">
                    <h4>Add Todo</h4>
                </div>
                <form action="add-tolist.php" method="post">
                    <div class="form-group">
                        <p>Task Title</p>
                        <input type='text' class="form-input" name='title' id='title' placeholder='' />
                    </div>
                    <div class="form-group">
                        <p>Description</p>
                        <textarea id="description" name="description" rows="4" cols="50">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input id="submit-btn" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        if(isset($_GET['error'])){
    ?>
    <section id = "add-todo">
       <p>One or more details left empty !</p>
    </section>
    <?php
        }
    ?>
</body>
</html>