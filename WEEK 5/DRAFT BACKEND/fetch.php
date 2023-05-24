<?php
$db_name="draft";
$db_pass="";
$db_server="localhost";
$db_user="root";

try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}catch(my_sql_exception){
    echo "you have not yet connected to the database";
}

$i=3;

$return="SELECT * FROM draft WHERE 
        project_id=(SELECT MAX(project_id) from draft)";
try{
    $result=mysqli_query($conn,$return);
}catch(my_sql_exception){
    echo "nothing happened";
}

$i=3;
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        // $row=mysqli_fetch_assoc($result);
        // echo $row["project_title"] . "<br>";
        // echo $row["project_description"] . "<br>";
        // echo $row["subtask$i"] . "<br>";
        

echo $row["project_id"] . "<br>";
    }  
}

?>