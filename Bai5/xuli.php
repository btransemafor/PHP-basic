<?php 
    if (isset($_GET['Submit']) && ($_GET['Submit']== 'Tính')) {

        $cd = (float)$_GET['chieudai'] ; 
        $cr = (float)$_GET['chieurong'] ; 
        $cc = (float)$_GET['chieucao'] ; 
        include 'HinhLapPhuong.php' ;
        $hlp = new HinhLapPhuong($cd, $cr, $cc) ; 

        $dientich = $hlp->TinhDienTich() ; 
        $thetich = $hlp->TinhTheTich() ; 
        echo 'Diện tích: '.$dientich. '<br>';
        echo "Thể tích: ".$thetich.'<br>' ;
    }

?>