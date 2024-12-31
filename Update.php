<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","std_recod");
if(!$connection){
    echo "faild";
}else{
   
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $course = $_GET['course'];
    $id =$_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style1.css">
    <title>Document</title>
</head>
<body>
    <form action="update-post.php" method="post">
    
        <div class="name">
            <input type="text" class="name" name="name" value="<?php echo $name ?>">
            <label for="name">name</label>
        </div>
        <div class="email">
            <input type="text" class="email" name="email" value="<?php echo $email ?>">
            <label for="email">email</label>
        </div>
        <div class="age">
            <input type="text" class="age" name="age" value="<?php echo $age ?>">
            <label for="age">age</label>
        </div>
        
        <div class="course">
            <input type="text" class="course" name="course" value="<?php echo $course ?>">
            <label for="course">course</label>
        </div>
        <input type="hidden" name="id" class="id" value="<?php echo $id ?>">
        <button>Update</button>
    </form>
</body>
</html>