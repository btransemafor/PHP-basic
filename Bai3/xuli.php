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


?>

<?php 
    $ban=array("Tuấn"=>21,"Tú"=>19,"Tâm"=>22,"Tùng"=>20);
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
    }
?>