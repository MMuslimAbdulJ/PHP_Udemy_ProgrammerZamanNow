<?php 
if(isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="image.jpeg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/image2.jpg');
} else {
    echo "Invalid link";
}
?>