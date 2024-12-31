<?php
error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$course = $_POST['course'];
$id = $_POST['id'];
$connect = mysqli_connect("localhost","root","","std_recod");

if(!$connect){
    echo "connection not establised";
    echo "technical issue 404 Error";
}else{
   // echo "connected";
     $query = "INSERT INTO `students`(`name`, `email`, `age`, `course`, `id`) VALUES ('$name','$email','$age','$$course','$id')" ;
    $result = mysqli_query($connect,$query);
    if($result){
            // echo "data sented";

            header("Location:welcome.php");
            exit();
    }else{
        echo "data not sended";
    }
}
?>