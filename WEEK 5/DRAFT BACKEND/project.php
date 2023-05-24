<?php
session_start();
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <form action="progress.php" method="post">
    <div class="overall-container">
    <!-- LEFT SIDE DIV -->
     <div class="left-div">
        <h1>PROJECT TITLE</h1>
        <input type="text" name="project-title" class="project-title">
        <h1>PROJECT DESCRIPTION</h1>
        <input type="textbox" name="project-description" class="project-description">
        <button type="submit" name="check-progress">check progress</button>
     </div>

     <!-- RIGHT SIDE DIV -->
     <!-- first subdivision -->
     <div class="right-div">
        <h1>SUBTASKS</h1>
     <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name" name="subtask-1"><br>
        <input type="textbox" placeholder="subtask description" name="description-1">
        </div>
        <div class="actions">
            <h1>ACTIONS</h1>
            <input type="textbox" name="action-1">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- second subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name" name="subtask-2"><br>
        <input type="textbox" placeholder="subtask description" name="description-2">
        </div>
        <div class="actions">
            <input type="textbox" name="action-2">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- third subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name" name="subtask-3"><br>
        <input type="textbox" placeholder="subtask description" name="description-3">
        </div>
        <div class="actions">
            <input type="textbox" name="action-3">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- fourth subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name" name="subtask-4"><br>
        <input type="textbox" placeholder="subtask description" name="description-4">
        </div>
        <div class="actions">
            <input type="textbox" name="action-4">
        </div>
        
        </div>



     </div>
    </div>
    
</form>
</body>
</html>

<?php
include("footer.php");
?>