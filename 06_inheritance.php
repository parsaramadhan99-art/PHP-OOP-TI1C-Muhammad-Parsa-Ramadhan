<?php
// =============================
// TOPIK: Inheritance (Pewarisan)
// Sumber: W3Schools PHP OOP
// =============================

// Inheritance = class anak mewarisi properti & method dari class induk

class Kendaraan {
    public $merk;
    public $kecepatan;

    public function __construct($merk, $kecepatan) {
        $this->merk = $merk;
        $this->kecepatan = $kecepatan;
    }

    public function info() {
        echo "Merk: " . $this->merk . ", Kecepatan Maks: " . $this->kecepatan . " km/h\n";
    }
}

// Class Mobil mewarisi class Kendaraan
class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $kecepatan, $jumlahPintu) {
        parent::__construct($merk, $kecepatan); // panggil constructor induk
        $this->jumlahPintu = $jumlahPintu;
    }

    public function info() {
        parent::info();
        echo "Jumlah Pintu: " . $this->jumlahPintu . "\n";
    }
}

// Class Motor mewarisi class Kendaraan
class Motor extends Kendaraan {
    public $jenis;

    public function __construct($merk, $kecepatan, $jenis) {
        parent::__construct($merk, $kecepatan);
        $this->jenis = $jenis;
    }

    public function info() {
        parent::info();
        echo "Jenis: " . $this->jenis . "\n";
    }
}

$mobil = new Mobil("Toyota", 180, 4);
$mobil->info();
echo "\n";

$motor = new Motor("Honda", 120, "Sport");
$motor->info();
?>
