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
            <input type="Submit" name="Tim" value="Tìm"> <br><br>
        <div class="FindAge">
            <h3>Tìm có tồn tại trong mảng không ?</h3>
            Nhập tuổi để kiếm tên: <input type="text" name="tuoi"><br><br> 
            <input type="submit" value="Tim tuoi" name ='timtuoi'><br><br>
        </div>
        <div class="XS">
            <h3>Sắp Xếp Mảng</h3>
            <input type="submit" value="Sap Xep" name ='sapxep'>
        </div>
        <div class="Them">
            <h3>Thêm một phần tử vào cuối danh sách</h3>
            <input type="text" name="name" id="name" placeholder="Enter Name">
            <input type="text" name="age" id="age" placeholder="Enter Age">
            <input type="submit" value="Thêm" name = 'them'>
        </div>

        <div class = 'Xoa'>
            <h3>Xóa một phần tử theo tên</h3>
            <input type="text" name="nameDel" id="nameDel" placeholder="Enter Name need to  Remove">
            <input type="submit" value="Xóa" name = 'Xoa'>
        </div>

        <hr>
        </form> 
        <div class = 'Result'>
            <?php include 'xuli.php' ?>
        </div>
    </body>
    </html>