<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhan Vien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form__TinhLuong">
        <form action="/xuli.php" method="get" class = 'form_Salary'>


        <table>
            <tr>
                <td><label for="manv">Mã nhân viên</label></td>
                <td> <input type="text" name="manv" id="manv"></td>
            </tr>
            <tr>
                <td> <label for="tennv">Tên nhân viên</label></td>
                <td> <input type="text" name="tennv" id="tennv"></td>
            </tr>
            <tr>
                <td> <label for="songaylamviec">Số ngày làm việc</label></td>
                <td>  <input type="text" name="songaylamviec" id="songaylamviec"></td>
            </tr>
            <tr>
                <td> <label for="">Lương ngày</label></td>
                <td> <input type="text" name="salary_per_day" id=""></td>
            </tr>
            <tr>
                <td> <label for="nvql">Nhân viên quản lý</label></td>
                <td> <input type="checkbox" name="nvql" id="nvql" value ='yes'></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Lương tháng" class ='btn_cal_salary' name = 'btn_cal_salary'></td>
                <td></td>
            </tr>
        </table>
       
          
    </div>
</body>
</html>