<?php 
  
        if (isset($_POST['equal']) && $_POST['equal'] == '='){
              //  Kiem tra da nhap chua 
            if (empty($_POST['ts1'])|| (empty($_POST['ts2'])) || empty($_POST['ms1']) || empty($_POST['ms2']) || empty($_POST['pheptinh'])) {
                    echo 'Vui lòng nhập đầy đủ thông tin.' ; 
            }
            else {
                $ts1 = (float)$_POST['ts1'] ; 
                $ts2 = (float)$_POST['ts2'] ; 
                $ms1 = (float)$_POST['ms1'] ; 
                $ms2 = (float)$_POST['ms2'] ; 
                include 'PhanSo.php';
                $ps1 = new PhanSo($ts1,$ms1) ; 
                $ps2 = new PhanSo ($ts2, $ms2) ;
    
                $choose = $_POST['pheptinh'] ; 
                switch ($choose) {
                    case 'Cộng':
                        $pt = '+';
                        $newPS = $ps1->Cong($ps2) ; 
                        break;
                    case 'Trừ':
                        $pt = '-';
                        $newPS = $ps1->Tru($ps2) ; 
                        break;
                    case 'Nhân':
                        $pt = '*';
                        $newPS = $ps1->Nhan($ps2);
                        break;
                    case 'Chia':
                        $pt = '/' ; 
                        $newPS = $ps2->Chia($ps2) ; 
                        break;
                }
    
                $ps1->Xuat() ; 
                echo $choose. ' '. $ps1->Xuat().' '.$pt.''.$ps2->Xuat() ." = ". $newPS->Xuat(); 
    
            }
            }
         
?>