<?php 
    class HinhChuNhat {
        private $dai, $rong ; 
        public function __construct($d, $r) { 
            $this->dai = $d; 
            $this->rong = $r; 
        }  
        public function TinhDienTich() {
            return $this->dai*$this->rong ; 
        }
        public function TinhChuVi(){
            return ($this->dai + $this->rong )*2 ; 
        }
    }

?>