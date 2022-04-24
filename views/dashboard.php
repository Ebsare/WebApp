<?php require '../businessLogic/databaseConfig.php';

$sql = "SELECT * FROM register_form";

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>users</h1>
        <table>
            <thead>
                <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
            </tr>
</thead>
<tbody>
    <?php
    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){
?>
    <tr>
    <th><?php echo $row['id'];?></th>
    <th><?php echo $row['name']; ?></th>
    <th><?php echo $row['surname']; ?></th>
    <th><?php echo $row['username']; ?></th>
    <th><?php echo $row['email']; ?></th>
    <th><?php echo $row['pass']; ?></th>
    <th><?php echo $row['image']; ?></th>
    <td><a href="../editDelete/editReg.php?id=<?php echo $row['id']; ?>">Edit</a><a href="../editDelete/deleteReg.php?id=<?php echo $row['id']; ?>">Delete</a>
</tr>
<h1><a href="../views/dashboardContact.php">Contact</a></h1>
<?php
        }
    }
    ?>
</tbody>
</table>
</div>

</body>
</html>




