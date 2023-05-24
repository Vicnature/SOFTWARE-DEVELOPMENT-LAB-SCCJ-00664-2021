<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script defer src="index.js"></script>
</head>
<body>

<div class="page-title">
    <h1>LET YOUR<br> <span>MIND</span> WANDER</h1>
</div>
<div class="forms">
<div class="login-form">
    <form action="login.php"  method="post">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <button type="submit" name="login">login</button><br>
    </form>
</div>
<div class="sign-up">
<form action="login.php"  method="post">
        <h1>SIGN UP</h1>
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="password" name="password-confirmation" placeholder="Confirm password"><br>
        <button type="submit" name="sign up">sign up</button><br>
    </form>
</div>
</div>
</body>
</html>

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
        $_SESSION["username"]=$username;
        $password=$_POST["password"];
        $password=password_hash($password,PASSWORD_DEFAULT);
        $email=$_POST["email"];
        $sql="INSERT INTO login(username,email,password)
        VALUES ('$username','$email','$password')";
        try{
           mysqli_query($conn,$sql);  
        //    echo "login successful <br>";
        //    echo "Welcome $username";
       echo "<script>alert('login successful.welcome $username')</script>";
       header("location:index.php");
        }catch(my_sql_exception){
            echo "login failed";
        }
        }
        else{
            echo '<script>alert("please enter all your details")</script>';
        }
     }  
?>

