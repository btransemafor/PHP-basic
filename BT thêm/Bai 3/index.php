
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Thứ trong Tuần</title>
</head>
<body>
  
    <div style="border: 3px solid blue; width:fit-content; padding:10px">
    <table >
    <form method="GET" >
        <tr>
            <td>Ngày</td>
            <td><input type="number" name="day" required></td>
        </tr>
        <tr>
            <td>Tháng</td>
            <td><input type="number" name="month" required></td>
        </tr>
        <tr>
            <td>Năm</td>
            <td><input type="number" name="year" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><button type="submit" name="btn" value="In Thứ">In Thứ</button></td>
            <td></td>
        </tr>

    </form>  
</table>
<?php include 'xuli.php' ?>
</div>
    

</body>
</html>
