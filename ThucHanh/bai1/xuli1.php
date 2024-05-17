<?php 

    function Xuat($a, $b, $c) {
        $str = ''; 
        if ($a == 1 ){
            $str.= ' X^2 ';   
        }
        elseif ($a == -1){
            $str.= ' - X^2 '; 
        }
        else {
            $str.=" ".$a.'X^2 ' ; 
        }

        if ($b == 1 ){
            $str.="+ X " ;
        }
        elseif ($b == -1) {
            # code...
            $str.='- X ' ; 
        }
        elseif($b > 1){
            $str.='+ '.$b. 'X ' ; 
        }
        else {
            $str.= $b."X " ; 
        }

        $c = $c > 0 ? '+ '.$c : $c ; 
        $str.=$c. " = 0 " ; 
        return $str; 
    }

    if (isset($_GET['Giai']) &&  $_GET['Giai'] == "Giải") {

        $hsa = (float)$_GET['hsa'] ; 
        $hsb = (float)$_GET['hsb'] ; 
        $hsc = (float)($_GET)['hsc'] ; 
       

        // Bien luan PT bac 2 
        $delta = pow($hsb , 2) - 4*$hsa*$hsc ; 

        if ($delta > 0) {
            $x1 = (-$hsb - sqrt($delta))/(2*$hsa) ; 
            $x2 = (-$hsb + sqrt($delta))/(2*$hsa) ;
            echo "Phương trình ". Xuat($hsa, $hsb, $hsc). 'có 2 nghiệm phân biệt: x1 = '.$x1. '; x2 = '.$x2;
        }
        else if ($delta == 0){
            $x = (-$hsb)/(2*$hsa) ; 
            echo 'Phương trình '. Xuat($hsa, $hsb, $hsc). 'có nghiệm kép : x1 = x2 ='.$x;
        }
        else {
            echo "Phường trình ". Xuat($hsa, $hsb, $hsc). " vô nghiệm";
        }
    }
?>