<?php 
class PhanSo {
    private $tuso, $mauso;

    public function __construct($ts, $ms) {
        $this->tuso = $ts;
        $this->mauso = $ms;
    }

    public function Xuat() {
        $this->RutGon() ; 
        return $this->tuso . '/' . $this->mauso;
    }
    // CONG
    public function Cong(PhanSo $ps) {
        $newTs = $this->tuso * $ps->mauso + $ps->tuso * $this->mauso;
        $newMs = $this->mauso * $ps->mauso;
        return new PhanSo($newTs, $newMs);
    }
    // TRU
    public function Tru(PhanSo $ps) {
        $newTS = $this->tuso*$ps->mauso - $this->mauso*$ps->tuso ; 
        $newMS = $this->mauso*$ps->mauso ; 
        return new PhanSo($newTS,$newMS) ; 
    }
    // NHAN 
    public function Nhan(PhanSo $ps) {
        $newTs = $this->tuso * $ps->tuso;
        $newMs = $this->mauso * $ps->mauso;
        return new PhanSo($newTs, $newMs);
    }
    //CHIA
    public function Chia(PhanSo $ps) {
        $newTs = $this->tuso * $ps->mauso;
        $newMs = $this->mauso * $ps->tuso;
        return new PhanSo($newTs, $newMs);
    }
    
// Tim UCLN 
  
public function UCLN($ts, $ms){
    $ucln = 0; 
    if ($ts == 0 || $ms == 0 ){
        $ucln = $ts + $ms ; 
    }
    while ($ts!=$ms){
        if ($ts > $ms ){
            $ts-=$ms; 
        }
        else {
            $ms-=$ts ; 
        }
    }
    $ucln = $ts ; 
    return $ucln ; 
}

// Ham Rut Gon Phan So 

public function RutGon(){
    $ts = $this->tuso ; 
    $ms = $this->mauso ; 
    $ucln = $this->UCLN($ts, $ms) ; 
    $this->tuso/=$ucln ; 
    $this->mauso/=$ucln ; 
}
}
?>