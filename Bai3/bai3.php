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
            Nhập tên cần tìm <input type="text" name="tencantim"><br><br> 
            <input type="Submit" name="Tim" value="Tìm"> 
        </form> 
        <div class = 'Result'>
            <?php include 'xuli.php' ?>
        </div>
    </body>
    </html>