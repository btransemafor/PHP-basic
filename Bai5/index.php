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
        <form method="get" action="#"> 
                Chiều dài: <input type="input" name="chieudai"><br><br> 
                Chiều rộng: <input type="input" name="chieurong"><br><br> 
                Chiều cao: <input type="input" name="chieucao"><br><br> 
                <input type="Submit" value="Tính" name="Submit"> 
            </form>
        <div class="Result"><?php include 'Xuli.php' ?></div>
    </div>
     
</body>
</html>