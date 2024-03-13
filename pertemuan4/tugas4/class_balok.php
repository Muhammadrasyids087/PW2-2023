<?php
    /**
     * Task 1
     * Buatlah class balok yang memiliki:
     * 1. Private property panjang, lebar dan tinggi
     * 2. Method __construct, getLuas, getKeliling dan getVolume
     */ 

    class Balok {
        // Property
        private $panjang;
        private $lebar;
        private $tinggi;

        // Method
        public function __construct($p, $l, $t) {
            $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }

        // 2 x (panjang x lebar + panjang x tinggi + lebar x tinggi)
        public function getLuas() {
            return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
        }

        // 4 x (panjang + lebar + tinggi)
        public function getKeliling() {
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
        }

        // panjang × lebar × tinggi
        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    }
?>
