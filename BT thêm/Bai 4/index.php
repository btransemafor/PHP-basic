<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>THÔNG TIN TÀI KHOẢN</h3>
    <form action="#" method="post" class = 'form__thongtin'>
        Số Tài Khoản: <input type="text" name="sotk" id=""><br>
        Tên tài khoản <input type="text" name="tentk" id=""><br>
        <input type="submit" value="Thong tin" name ='tk'>
    </form>

    <h3>RÚT TIỀN</h3>
       
    <form action="#" method="post" class = 'form__ruttien'>
        Số Tài Khoản: <input type="text" name="sotk" id=""><br>
        Tên tài khoản <input type="text" name="tentk" id=""><br>
        Rút tiền: <input type="text" name="sotienrut" id=""><br>
        <input type="submit" value="Rút tiền" name = 'rut_tien'>
    </form>

    <h3>NẠP TIỀN</h3>
    <form action="#" method="post" class ='form__naptien'>
        Số Tài Khoản: <input type="text" name="sotk" id=""><br>
        Tên tài khoản <input type="text" name="tentk" id=""><br>
        Nạp tiền: <input type="text" name="sotiennap" id=""><br>
        <input type="submit" value="Nạp tiền" name = 'nap_tien'>
    </form>


    <div class="Result">
        <?php include 'taikhoan.php' ?>
    </div>
</body>
</html>