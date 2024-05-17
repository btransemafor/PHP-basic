<?php
class Book
{
    // Mã sách, tên sách, đơn giá, số lượng, nhà xuất bản,
    protected $masach;
    protected $tensach;
    protected $dongia;
    protected $soluong;
    protected $nhaxuatban;

    public function __construct($ms, $ts, $dg, $sl, $nxb)
    {
        $this->masach = $ms;
        $this->tensach = $ts;
        $this->dongia = floatval($dg);
        $this->soluong = floatval($sl);
        $this->nhaxuatban = $nxb;
    }

    public function InSach()
    {
        echo 'Mã sách: ' . $this->masach . '<br>';
        echo 'Tên sách: ' . $this->tensach . '<br>';
        echo 'Đơn giá: ' . $this->dongia . '<br>';
        echo 'Số Lượng: ' . $this->soluong . '<br>';
        echo 'Nhà xuất bản: ' . $this->nhaxuatban . '<br><br>'; 
    }

    public function ThanhTien()
    {
        return $this->dongia * $this->soluong; 
    }
}


class SachTieuThuyet extends Book
{
    private $tinhtrang;

    public function __construct($ms, $ts, $dg, $sl, $nxb, $tt)
    {
        parent::__construct($ms, $ts, $dg, $sl, $nxb);
        $this->tinhtrang = $tt;
    }

    public function ThanhTien()
    {
        $tien = parent::ThanhTien();
        if ($this->tinhtrang == 'cu') {
            $tien *= 1.2;
        }
        return $tien;
    }
}

class SachTrinhTham extends Book
{
    private $thue;

    public function __construct($ms, $ts, $dg, $sl, $nxb, $thue)
    {
        parent::__construct($ms, $ts, $dg, $sl, $nxb);
        $this->thue = floatval($thue);
    }

    public function ThanhTien()
    {
        return parent::ThanhTien() + $this->thue;
    }
}



class ListBook
{
    private $dssach = [];

    public function themSach($sach)
    {
        $this->dssach[] = $sach;
    }

    public function demSoLuong()
    {
        $Count_TieuThuyet = 0;
        $Count_TrinhTham = 0;
        foreach ($this->dssach as $sach) {
            if ($sach instanceof SachTieuThuyet) {
                $Count_TieuThuyet++;
            } elseif ($sach instanceof SachTrinhTham) {
                $Count_TrinhTham++;
            }
        }
        echo "Số lượng sách tiểu thuyết: " . $Count_TieuThuyet . "<br>";
        echo "Số lượng sách trinh thám: " . $Count_TrinhTham . "<br>";
    }

    public function tinhTongTien()
    {
        $Total_money_tieu_thuyet = 0;
        $Total_money_trinh_tham = 0;

        foreach ($this->dssach as $sach) {
            if ($sach instanceof SachTrinhTham) {
                $Total_money_trinh_tham += $sach->ThanhTien();
            } elseif ($sach instanceof SachTieuThuyet) {
                $Total_money_tieu_thuyet += $sach->ThanhTien();
            }
        }

        echo 'Tổng tiền của sách trinh thám là : ' . $Total_money_trinh_tham . ' VND<br>'; 
        echo 'Tổng tiền của sách tiểu thuyết là: ' . $Total_money_tieu_thuyet . ' VND<br>';
        echo 'Tổng cộng: ' . ($Total_money_tieu_thuyet + $Total_money_trinh_tham) . ' VND';
    }
}

// TEST 
$danhSach = new ListBook();

$sach1 = new SachTrinhTham("TT001", "Sách TT 1", 10000, 10, "NXB A", 20000);
$sach2 = new SachTrinhTham("TT002", "Sách TT 2", 12000, 10, "NXB A", 10000);
$sach3 = new SachTieuThuyet("TT003", "Sách TT 1", 20000, 10, "NXB A", "cu");

$danhSach->themSach($sach1);
$danhSach->themSach($sach2);
$danhSach->themSach($sach3);

$danhSach->demSoLuong();
$danhSach->tinhTongTien();
?>
