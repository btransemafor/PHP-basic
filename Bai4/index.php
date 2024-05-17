<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="get" action="#">
        <table>
            <tr>
                <td>Chiều dài</td>
                <td>  <input type="input" name="chieudai" id = 'cd'></td>
            </tr>
            <tr>
                <td>Chiều Rộng</td>
                <td> <input type="input" name="chieurong" id = 'cr'></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan = '2'><input type="Submit" value="Tính" name="Submit"></td>
            </tr>
        </table>
</form>

    <div>
        <?php include 'xuli.php' ?>
    </div>
</body>
</html>