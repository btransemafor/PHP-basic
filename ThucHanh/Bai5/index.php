<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Phan So</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="PhanSo">
    <h3>Chương trình cộng, trừ, nhân, chia hai phân số</h3>
        <form action="" method="post" id ='PS'>
            <div class="left">
                <div>Tử phân số 1 <input type="text" name="ts1" id="ts1"></div>
                <div>Mẫu phân số 1 <input type="text" name="ms1" id="ms1"></div>
                <div>Tử phân số 2 <input type="text" name="ts2" id="ms2"></div>
                <div>Mẫu phân số 2 <input type="text" name="ms2" id="ms2"></div>
                <div><input type="submit" value="=" name = 'equal'></div>

                <div class="KQ"><?php include 'xuli.php' ?></div>
            </div>

            <div class="right">
                <fieldset>
                    <legend>Phép tính</legend>
                       <div><input type="radio" name="pheptinh" id="cong" value = 'Cộng'> + </div> 
                       <div><input type="radio" name="pheptinh" id="tru" value = 'Trừ'> - </div>  
                       <div><input type="radio" name="pheptinh" id="nhan" value = 'Nhân'> * </div>  
                       <div> <input type="radio" name="pheptinh" id="chia" value = 'Chia'> /</div> 
                </fieldset>
            </div>

        </form>
       
    </div>
</body>
</html>