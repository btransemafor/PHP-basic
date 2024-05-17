<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <div>
            Tháng <input type="number" name="month" id="">
            Năm <input type="number" name="year" id="">
            Ngày <input type="number" name="day" id="">
        </div>

        <button type="submit" name='btn' style='display: block;' value='next'>Next</button>
    </form>

    <div class="Result">
        <?php include 'xuly.php'
        ?>
    </div>
</body>

</html>