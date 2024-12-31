<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","std_recod");
if(!$connection){
    echo "connection faild";
}else{

    $id =$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    
   $query = "UPDATE `students` SET `name`='$name',`email`='$email',`age`='$age',`course`='$course' WHERE `id`= '$id'";
  
    $result = mysqli_query($connection,$query);
    
    if($result){
        echo "your data record";
    }else{
        $err = mysqli_error($connection);
        echo "There is error because --> $err";
    }
}
?>