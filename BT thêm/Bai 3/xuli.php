<?php
function FindDayInWeek() {
    $dayinweek = [
        '0' => 'Chủ Nhật',
        '1' => 'Thứ 2',
        '2' => 'Thứ 3',
        '3' => 'Thứ 4',
        '4' => 'Thứ 5',
        '5' => 'Thứ 6',
        '6' => 'Thứ 7'
    ];
    
    $baseDate = new DateTime('1970-01-01');
    
    if (isset($_GET['btn']) && $_GET['btn'] == 'In Thứ') {
        $ngay = $_GET['day'];
        $thang = $_GET['month'];
        $nam = $_GET['year'];
        $enteredDate = new DateTime("$nam-$thang-$ngay");
        $interval = $enteredDate->diff($baseDate);
        $tongngay = $interval->days;
        // ngày gốc là thứ 5 => cộng thêm 4 tức 2,3,4,5
        $x = ($tongngay + 4) % 7;
        echo $dayinweek[$x] . " Ngày $ngay Tháng $thang Năm $nam";
    }
}

FindDayInWeek(); 
?>
