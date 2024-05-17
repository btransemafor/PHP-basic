<?php
// Kiem tra nam nhuan 
function KTNN($y)
{
    if (($y % 4 == 0 && $y % 100 != 0) || ($y % 400 == 0)) {
        return true;
    }
    return false;
}
// Tinh so ngay trong thang 
function songaytrongthang($thang, $nam)
{
    $songay = 0;
    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $songay = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $songay = 30;
            break;
        case 2: {
                if (KTNN($nam)) {
                    $songay = 29;
                } else {
                    $songay = 28;
                }
                break;
            }
        default:
            $songay = 0;
    }
    return $songay;
}

// Tinh so ngay tu nam den gio 
if (isset($_GET['Submit']) && $_GET['Submit'] == 'Tổng') {
    $ngay = (int)$_GET['ngay'];
    $thang = (int)$_GET['thang'];
    $nam = (int)$_GET['nam'];

    $tongngay = $ngay;
    for ($i = 0; $i < $thang; $i++) {
        $tongngay += songaytrongthang($i, $nam);
    }
    echo 'Tổng số ngày từ đầu năm: ' . $tongngay;
}

?> 