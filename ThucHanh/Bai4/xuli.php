<?php 
   
    if (isset($_GET['btn_cal_salary']) and ($_GET['btn_cal_salary'] == 'Lương tháng')) {
        include 'nhanvien.php' ; 
           // Lấy dữ liệu từ form 
           $manv = $_GET['manv'] ; 
           $tennv = $_GET['tennv']; 
           $songaylam = $_GET['songaylamviec'] ;
           $luongngay = $_GET['salary_per_day'] ; 
        if (isset($_GET['nvql']) && $_GET['nvql'] == 'yes') {
            //manv songaylamviec songaylamviec salary_per_day
            // Khoi tao nhan vien quan ly 
            $nv = new nhanvienQL($manv , $tennv, $songaylam , $luongngay) ; 
        }
        else {
            $nv = new nhanvien($manv , $tennv, $songaylam , $luongngay) ; 
        }
        $nv->Gan($manv,$tennv, $songaylam , $luongngay);
        $nv->InNhanVien(); 
        echo 'Tổng lương của nhân viên: ' . $nv->TinhLuong(); 
    }
?>