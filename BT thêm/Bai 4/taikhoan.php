<?php
class TaiKhoan {
    private $soTK;
    private $tenTK;
    private $soTien;

    public function __construct($soTK, $tenTK, $soTien = 10) {
        $this->soTK = $soTK;
        $this->tenTK = $tenTK;
        $this->soTien = $soTien;
    }

    public function InTaiKhoan() {
        echo '<h3>Số Tài khoản: ' . $this->soTK . ' </h3>';
        echo '<h3>Tên Tài khoản: ' . $this->tenTK . ' </h3>';
        echo '<h3>Số tiền: ' . $this->soTien . ' </h3>';
    }

    public function NapTien($st) {
        $check = true; 
        if ($st < 0) {
            echo 'Vui lòng nhập số tiền nạp hợp lệ: ';
            $check = false ;
        }
        else {
            $this->soTien += $st;
        }
      
        return $check ; 
    }

    public function RutTien($st) {
        $check = true; 
        if ($st < 0 || $st > $this->soTien) {
            echo 'Số tiền rút không hợp lệ!';
           $check = false ; 
        }
        else {
            $phirut = 0.01 * $st;
            $this->soTien -= ($st + $phirut);
        }
        return  $check ; 
       
    }
}
?>

<?php
if (isset($_POST['tk']) && $_POST['tk'] == 'Thong tin') {
    $ten = $_POST['tentk'];
    $sotk = $_POST['sotk'];
    $tk = new TaiKhoan($sotk, $ten);
    $tk->InTaiKhoan();
}
if (isset($_POST['nap_tien']) && $_POST['nap_tien'] == 'Nạp tiền') {
    $sotiennap = ($_POST['sotiennap']) ; 
    $ten = $_POST['tentk'];
    $sotk = $_POST['sotk'];
    $tk = new TaiKhoan($sotk ,$ten) ; 
    if ($tk->NapTien( $sotiennap)) {
        echo 'Nạp tiền thành công' ; 
        $tk->InTaiKhoan() ; 
    }
    else {
        echo  'Nạp tiền không thành công' ; 
    }
}



if (isset($_POST['rut_tien']) && $_POST['rut_tien'] == 'Rút tiền') {
    $sotienrut = ($_POST['sotienrut']) ; 
    $ten = $_POST['tentk'];
    $sotk = $_POST['sotk'];
    $tk = new TaiKhoan($sotk ,$ten) ; 
    if ($tk->RutTien( $sotienrut)) {
        echo 'Rút tiền thành công' ; 
        $tk->InTaiKhoan() ; 
    }
    else {
        echo  'Rút tiền không thành công' ; 
    }
}



?>
