<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","std_recod");

if(!$connection){
    echo "connection faild";
}
else{
    echo "connected";
    $id = $_GET['id'];

    $query = "DELETE FROM `students`WHERE `students` .id='$id'";
    $result = mysqli_query($connection,$query);
    if($result){
        echo "data deleted";
    }else{
        echo "data not deleted";
    }
}
?>
<a href="table.php">Go Back</a>