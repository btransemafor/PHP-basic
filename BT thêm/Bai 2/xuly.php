<?php
    if (isset($_GET['btn']) && $_GET['btn'] =='next') {
        $day = $_GET['day'] ; 
        $month = $_GET['month'] ; 
        $year = $_GET['year'] ; 

        // Tao doi tuong datetime

        $date = new DateTime("$year-$month-$day") ; 
        $date->modify('+1 day');
        $nD = $date->format('d') ; 
        $nM = $date->format('m') ; 
        $nY = $date->format('Y') ; // Y => 2024 y => 24

        echo "Ngày kế tiếp của ngày $day Tháng $month Năm $year là ngày $nD tháng $nM năm $nY.";
    }


?>