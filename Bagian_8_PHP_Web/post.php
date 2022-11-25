<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <table>
        <tr>
            <th>First Name: </th>
            <td><?= $first_name ?></td>
        </tr>
        <tr>
            <th>Last Name: </th>
            <td><?= $last_name ?></td>
        </tr>
    </table>
</body>
</html>