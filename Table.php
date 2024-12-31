<?php
error_reporting(0);

$connection = mysqli_connect("localhost", "root", "", "std_recod");

if (!$connection) {
    echo "Connection not established";
    exit();
}


$query = "SELECT * FROM students"; 
$result = mysqli_query($connection, $query);

if (!$result) {
    echo "Query failed: " . mysqli_error($connection);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        .delete {
            color: red;
            text-decoration: none;
        }
        .update {
            color: green;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Student Records</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Course</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                    <td><?php echo htmlspecialchars($row['course']); ?></td>
                    <?php
                        echo "<td><a href='Delete.php?id=$row[id]' class='delete'>Delete</a> </td>";
                        ?>
                        <?php
                        echo"<td><a href='Update.php?name=$row[name]&email=$row[email]$age=$row[age]&course=$row[course]&id=$row[id]' class='Update'>update</a></td>";
                        ?>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Close the connection
mysqli_close($connection);
?>
