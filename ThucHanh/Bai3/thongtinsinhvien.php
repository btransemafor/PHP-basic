<?php
ob_start(); 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link rel="stylesheet" href="stylettsv.css">
</head>
<body>
    <div class="INFO">
    <?php 
        if (isset($_SESSION['username']) && isset($_SESSION['MK'])) {
            echo '<h2>Thông tin sinh viên</h2>';
            echo '<p>Tên: ' . htmlspecialchars($_SESSION['username']) . '</p>';
            echo '<p>Mật khẩu: ' . htmlspecialchars($_SESSION['MK']) . '</p>'; 
        } else {
            echo 'Not Found!';
        }
    ?>
    </div>

</body>
</html>