<?php
include("header.php");
// echo "<br> <br> <br> <br> <br> <br>";
?>

<?php
$db_name="afterparty";
$db_user="root";
$db_pass="";
$db_server="localhost";


try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}catch(mysqli_sql_exception){
    echo "could not connect";
}

// if($conn){
//     echo "You have connected successfully <br>";
       
// }

 if(isset($_POST["login"])){
    if(!empty($_POST["username"])&&!empty($_POST["password"])&&!empty($_POST["email"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $password=password_hash($password,PASSWORD_DEFAULT);
        $email=$_POST["email"];
        $sql="INSERT INTO login(username,email,password)
        VALUES ('$username','$email','$password')";
        try{
           mysqli_query($conn,$sql);  
           echo "login successful <br>";
           echo "Welcome $username";
        }catch(my_sql_exception){
            echo "login failed";
        }
       

        // echo $username . "<br>";
        // echo $password . "<br>";
        // echo $email . "<br>";
        }
        else{
            echo "please insert all your details";
        }
     }  
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
