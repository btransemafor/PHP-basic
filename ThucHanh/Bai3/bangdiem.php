<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['MK'] = $_POST['MK'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleBD.css">
</head>
<body>
    <div class="TableScore">
        <h1>BẢNG ĐIỂM</h1>
        <div class= 'TenSV'>Tên: <span class ='ten'><?php echo $_POST['username']?> </span></div>
        <div class="Diem">
            <table>
                <tr>
                    <td>STT</td>
                    <td>Tên môn</td>
                    <td>Điểm</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Cơ Sở Dữ Liệu</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Phát triển ứng dụng web</td>                
                    <td>8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lập trình Java</td>
                    <td>7.5</td>
                </tr>
            </table>
        </div>
   
    <a href="thongtinsinhvien.php"><i>Xem thông tin sinh viên</i></a>
    </div>
</body>
</html>