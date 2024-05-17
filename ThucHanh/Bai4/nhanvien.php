<?php
class nhanvien
{
    private $manv;
    private $tennv;
    private $songaylam;
    private $luongngay;
    public function __construct($manv, $tennv, $songaylam, $luongngay)
    {
        $this->manv = $manv;
        $this->tennv = $tennv;
        $this->songaylam = $songaylam;
        $this->luongngay = $luongngay;
    }
    public function Gan($ma, $ten, $songay, $luongngay)
    {
        $this->manv = $ma;
        $this->tennv = $ten;
        $this->songaylam = $songay;
        $this->luongngay = $luongngay;
    }
    public function InNhanVien()
    {
        echo 'Mã nhân viên: ' . $this->manv . '<br>';
        echo 'Tên nhân viên: ' . $this->tennv . '<br>';
        echo 'Số ngày làm trong tháng: ' . $this->songaylam . '<br>';
        echo 'Lương ngày: ' . $this->luongngay . '<br>';
    }
    public function TinhLuong()
    {
        return $this->songaylam * $this->luongngay;
    }
}

?>


<?php
class nhanvienQL extends nhanvien
{
    private $phucap = 2000;

    public function __construct($manv, $tennv, $songaylam, $luongngay)
    {
        parent::__construct($manv, $tennv, $songaylam, $luongngay);
    }
    public function InNhanVien()
    {
        parent::InNhanVien();
        echo 'Phụ cấp: ' . $this->phucap . '<br>';
    }
    public function TinhLuong()
    {
        return parent::TinhLuong() + $this->phucap;
    }
}

?>