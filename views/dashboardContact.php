<?php require '../businessLogic/databaseConfig.php';

$sql = "SELECT * FROM contact_form";

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
            <th>Email</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Message</th>
            </tr>
</thead>
<tbody>
    <?php
    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){
?>
    <tr>
    <<th><?php echo $row['id'];?></th>
    <th><?php echo $row['name']; ?></th>
    <th><?php echo $row['email']; ?></th>
    <th><?php echo $row['number']; ?></th>
    <th><?php echo $row['subject']; ?></th>
    <th><?php echo $row['message']; ?></th>
    <td><a href="../editDelete/deleteReg.php=<?php echo $row['id']; ?>">Delete</a>
</tr>

<?php
        }
    }
    ?>
</tbody>
</table>
</div>

</body>
</html>