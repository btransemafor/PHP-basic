<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nd">
        <form action="#" method="get">
        <table border="1" cellspacing="0">  
                <tr><td>Ngày </td><td><input type="input" name="ngay"></td></tr> 
                <tr><td>Tháng </td><td><input type="input" name="thang"></td></tr> 
                <tr><td>Năm </td><td><input type="input" name="nam"></td></tr> 
                <tr><td colspan="2" align="center"><input type="Submit" value="Tổng" name="Submit"></td></tr> 
        </table>
        </form>
        <div class="KQ">
            <?php include 'xuli2.php' ?>
        </div>
    </div>
    
</body>
</html>