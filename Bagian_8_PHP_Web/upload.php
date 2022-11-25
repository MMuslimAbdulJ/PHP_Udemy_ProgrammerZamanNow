<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_FILES['upload_file']['name'];
    $type = $_FILES['upload_file']['type'];
    $size = $_FILES['upload_file']['size'];
    $tmp_name = $_FILES['upload_file']['tmp_name'];
    $error = $_FILES['upload_file']['error'];

    move_uploaded_file($tmp_name, __DIR__ . '/file/' . $name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <h1>Upload File</h1>
    <table>
        <tr>
            <td>File Name</td>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <td>File type</td>
            <td><?= $type ?></td>
        </tr>
        <tr>
            <td>File size</td>
            <td><?= $size ?></td>
        </tr>
        <tr>
            <td>Tmp_name</td>
            <td><?= $tmp_name ?></td>
        </tr>
        <tr>
            <td>Error</td>
            <td><?= $error ?></td>
        </tr>
    </table>
<?php } ?>
<h1>Form Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">
            File:
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="Upload">
    </form>
</body>
</html>