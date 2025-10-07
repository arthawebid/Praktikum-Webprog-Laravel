<?php
    class Kendaraan{
        private $warna;

        public function setWarna($wrn){
            $this->warna = $wrn;
        }
        public function info(){
            echo "Kendaraan berwarna ". $this->warna;
        }
    }

    class Mobil extends Kendaraan{
        private $jenis;

        public function setJenis($jns){
            $this->jenis = $jns;
        }

        public function info(){
            parent::info();
            echo " dan jenisnya " . $this->jenis;
        }
    }

    //instan class Mobil
    $knd = new Mobil();
    $knd->setWarna("Merah");
    $knd->setJenis("JiP");
    $knd->info();