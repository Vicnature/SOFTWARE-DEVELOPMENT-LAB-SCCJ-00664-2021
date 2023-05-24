<?php
session_start();
// $user=$_SESSION["username"];
if(!empty($_SESSION["username"])){
    // echo "<script>alert('welcome'.$user)</script>";
    
    echo "welcome ". $_SESSION["username"];
}
include("header.php");
// echo "<br> <br> <br> <br> <br> <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class=upper-section>
    <div class="home-text">
    <h1>DRAFT</h1>    
    <p>Draft is a quality whiteboarding 
website which allows you to 
effectively document your overall 
plan before you embark on any 
given project.It provides a template 
to professionally document all the 
essential pieces of information needed to work on a project successfully. The said template provides room for capturing general information all the way to specifics in all user-defined categories.</p></div>    
    <div class="image"></div>
    </div>

    <div class="lower-section">
    <button><a href="project.php">START WHITEBOARDING</a></button>
    </div>
</body>
</html>


<?php
include("footer.php");
?>
