<?php 
    include '/LAB4/Bai4/hinhchunhat.php' ; 
    class HinhLapPhuong extends HinhChuNhat{
        private $cao ; 
        public function __construct($d, $r, $c) { 
            parent::__construct($d, $r); 
            $this->cao = $c; 
        } 

        public function TinhDienTich()
        {
            return parent::TinhDienTich()*2 + $this->cao*parent::TinhChuVi() ; 
        }
        public function TinhTheTich()
        {
            return parent::TinhDienTich()*$this->cao ; 
        }
    }
?>