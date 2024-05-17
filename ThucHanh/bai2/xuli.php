<?php 

    function InMang($array){
        foreach ($array as $ten => $tuoi) {
            echo $ten ." ". $tuoi. '<br>';
        }
    }

    function Timten($array , $str) {
        foreach($array as $ten => $tuoi ) {
            if ($ten == $str) {
                return true  ; 
            }
        }
        return false ; 
    }
    

    function cacbanlonhon20($arr){
        foreach($arr as $ten => $tuoi){
            if ($tuoi > 20){
                echo $ten.'<br>' ; 
            }
        }
    }
    //sắp xếp mảng một chiều tăng dần theo tuổi  
    function sapxep(&$arr) {
        asort($arr);
    }
    // Tim tuoi 
    function timtuoi($arr ,$age ){
        foreach($arr as $x => $tuoi){
            if ($tuoi == $age){
                return true; 
            }
        }
        return false; 
    }

    // Them một phần tử vào cuối DS 
    function ThemVaoCuoi(&$Arr, $ten, $tuoi){
        $Arr[$ten] = $tuoi ; 
    }


    // Xoa mot pt theo tem 

    function RemoveEle(&$arr, $name) {
        // Kiem tra xem co ton tai khong 
        if (!Timten($arr, $name)) {
            return false; 
        }
        else {
            unset($arr[$name]) ; 
            return true; 
        }
    }
?>

<?php 

   
    $ban = array("Tuấn" => 21, "Tú" => 19, "Tâm" => 22, "Tùng" => 20);

    if(isset($_GET['Tim'])&&($_GET['Tim']=="Tìm")) {
      
        $tencantim = $_GET['tencantim'] ; 
        if (Timten($ban,$tencantim)){
            echo 'Tìm thấy '.$tencantim. " trong mảng.<br>";
        }
        else {
            echo ' Tìm không thấy <br>' ; 
        }
        echo '<h3>Xuất Mảng</h3>';
        InMang($ban);
        echo '<h3>Những bạn lớn hơn 20 tuổi là:</h3> <br>';
        cacbanlonhon20($ban) ; 

     
    }
    if (isset($_GET['timtuoi']) && $_GET['timtuoi'] == 'Tim tuoi' ){
     
        $tuoi = $_GET['tuoi'] ; 
        if (timtuoi($ban,$tuoi)){
            echo 'Đã tìm thấy tuổi<br>';
        }
        else {
            echo 'Không tìm thấy tuổi trong mảng<br>' ; 
        }
        echo '<h3>Xuất Mảng<br></h3>';
        InMang($ban); 
    }

    if (isset($_GET['sapxep'])&&($_GET['sapxep'] = 'Sap Xep')){
        echo '<h3>Sau khi sap xep: </h3><br>';
        sapxep($ban) ;
        InMang($ban);
    }
    // Them 1 pt vao cuoi DS 
    if (isset($_GET['them'])&&($_GET['them'] = 'Thêm')){
        $tuoi = $_GET['age'] ; 
        $ten = $_GET['name'] ; 
        ThemVaoCuoi($ban,$ten,$tuoi); 
        echo '<h3>Bảng mới</h3><br>';
        InMang($ban); 
    }
    // Xoa

    if (isset($_GET['Xoa'])&&($_GET['Xoa'] = 'Xóa')){
        $nameDel = $_GET['nameDel'] ; 

        if (RemoveEle($ban,$nameDel) ) {
            echo '<h3>Đã Xóa Thành Công</h3><br>' ; 
            echo '<h3>Mảng sau khi xóa</h3>' ; 
            InMang($ban) ; 
        }
        else {
            echo 'Tên ' . $nameDel. ' không tồn tại.';
        }
    }
?>