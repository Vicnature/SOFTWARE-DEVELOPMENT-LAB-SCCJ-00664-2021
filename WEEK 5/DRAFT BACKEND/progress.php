<?php
// this includes the header file into the page
include("header.php");

//database connection credentials
$db_name="draft";
$db_user="root";
$db_pass="";
$db_server="localhost";

//establishing database connection
try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}catch(mysqli_sql_exception){
    echo "could not connect";
}

//fetching data and sending to the database
if(isset($_POST["check-progress"])){
    //checking whether there are any fields 
    //data which can be fetched and sent
    //to the database
    if(
    !empty($_POST["project-title"])||
    !empty($_POST["project-description"])||
    !empty($_POST["subtask-1"])||
    !empty($_POST["description-1"])||
    !empty($_POST["action-1"])||
    !empty($_POST["subtask-2"])||
    !empty($_POST["description-2"])||
    !empty($_POST["action-2"])||
    !empty($_POST["subtask-3"])||
    !empty($_POST["description-3"])||
    !empty($_POST["action-3"])||
    !empty($_POST["subtask-4"])||
    !empty($_POST["description-4"])||
    !empty($_POST["action-4"])){

    
    //assigning input data to variables
    $project_title=$_POST["project-title"];
    $project_description=$_POST["project-description"];
    $subtask_1=$_POST["subtask-1"];
    $description_1=$_POST["description-1"];
    $action_1=$_POST["action-1"];
    $subtask_2=$_POST["subtask-2"];
    $description_2=$_POST["description-2"];
    $action_2=$_POST["action-2"];
    $subtask_3=$_POST["subtask-3"];
    $description_3=$_POST["description-3"];
    $action_3=$_POST["action-3"];
    $subtask_4=$_POST["subtask-4"];
    $description_4=$_POST["description-4"];
    $action_4=$_POST["action-4"];


    //sql statement to inset records into 
    //relevant database fields
     $sql="INSERT INTO draft(project_title,project_description,
                            subtask1,subtask1_description,subtask1_actions,
                            subtask2,subtask2_description,subtask2_actions,
                            subtask3,subtask3_description,subtask3_actions,
                            subtask4,subtask4_description,subtask4_actions) 
                            VALUES('$project_title','$project_description',
                            '$subtask_1','$description_1','$action_1',
                            '$subtask_2','$description_2','$action_2',
                            '$subtask_3','$description_3','$action_3',
                            '$subtask_4','$description_4','$action_4')";
    //query string that does actual insertion
         try{
            mysqli_query($conn,$sql);
         }catch(my_sql_exception){
            echo "could not connect";
         }
        }
        }

        
$return="SELECT * FROM draft WHERE project_id=(SELECT MAX(project_id) FROM draft)";
try{
    $result=mysqli_query($conn,$return);
}catch(my_sql_exception){
    echo "nothing happened";
}

echo '<script>alert("hello")</script>';
?>


<!-- html page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="progress.css">
    <script defer src="progress.js"></script>
</head>
<body>
    <!-- <div class="overall-container"></div> -->
    <!-- project title -->
    <div class="title">
        <div class="heading">TITLE</div>
        <div class="content-box">
        <?php 
        $row=mysqli_fetch_assoc($result);
        echo $row["project_title"];?>
        </div>
    </div>

    <!-- project description -->
    <div class="description">
    
        <div class="heading">PROJECT DESCRIPTION</div>
        <div class="content-box">
        <?php 
        echo $row["project_description"];
        ?>
    </div>
    </div>

    <!-- subtask name-->
    <div class="subtasks"><div class="heading">SUBTASK <?php $i=2 ;echo $i ?> NAME </div>
    <div class="content-box">
    <?php
        echo $row["subtask$i"];
    ?>
    </div>
   
</div>

<!-- subtask description -->
<div class="subtasks"><div class="heading">SUBTASK <?php $i=2 ;echo$i?> DESCRIPTION</div>
    <div class="content-box">
    <?php  
    echo $row["subtask{$i}_description"];
    ?>
    </div>
    
   <!-- subtask descriptions -->
</div>
    <div class="actions"><div class="heading">SUBTASK <?php echo $i?> ACTIONS</div>
        <div class="content-box">
        <?php
            echo $row["subtask{$i}_actions"];
        ?>
        </div>
    </div>
    <div class="toggle-buttons">
    <button name="previous" id="previous">previous subtask</button>
    <button name="next" id="next" >next subtask</button>
</div>

</body>
</html>

<?php
//this displays the footer which is being
//imported from a file called footer.php
include("footer.php");
?>


<script>
    // const next=document.getElementById("next");
    // const prev=document.getElementById("previous");
    // let i=1;
    // next.addEventListener('click',()=>{
    //     alert("hello");
    // })

    function reduce(){
        if(i>1){
            i--
            return i
        }
    }
</script>