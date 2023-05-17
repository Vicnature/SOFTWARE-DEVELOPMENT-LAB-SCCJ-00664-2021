<?php
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
    <div class="overall-container">
    <!-- LEFT SIDE DIV -->
     <div class="left-div">
        <h1>PROJECT TITLE</h1>
        <input type="text" name="project-title" class="project-title">
        <h1>PROJECT DESCRIPTION</h1>
        <input type="textbox" name="project-description" class="project-description">
     </div>

     <!-- RIGHT SIDE DIV -->
     <!-- first level -->
     <div class="right-div">
        <h1>SUBTASKS</h1>
     <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name"><br>
        <input type="textbox" placeholder="subtask description">
        </div>
        <div class="actions">
            <h1>ACTIONS</h1>
            <input type="textbox">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- second subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name"><br>
        <input type="textbox" placeholder="subtask description">
        </div>
        <div class="actions">
            <input type="textbox">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- third subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name"><br>
        <input type="textbox" placeholder="subtask description">
        </div>
        <div class="actions">
            <input type="textbox">
        </div>
        
        </div>
        <br>
        <hr>
        <br>

        <!-- fourth subdivision -->
        <div class="action-level">   
     <div class="subtasks">
        <input type="text" placeholder="subtask name"><br>
        <input type="textbox" placeholder="subtask description">
        </div>
        <div class="actions">
            <input type="textbox">
        </div>
        
        </div>
        <br>
        <br>




     </div>
    </div>
</body>
</html>

<?php
include("footer.php");
?>