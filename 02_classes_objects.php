<?php
// =============================
// TOPIK: Classes and Objects
// Sumber: W3Schools PHP OOP
// =============================

// Class adalah blueprint/cetakan
// Object adalah hasil dari class

class Mobil {
    // Properti
    public $merk;
    public $warna;
    public $tahun;

    // Method
    public function deskripsi() {
        echo "Mobil: " . $this->merk . ", Warna: " . $this->warna . ", Tahun: " . $this->tahun . "\n";
    }
}

// Membuat object dari class Mobil
$mobil1 = new Mobil();
$mobil1->merk = "Toyota";
$mobil1->warna = "Merah";
$mobil1->tahun = 2022;
$mobil1->deskripsi();

$mobil2 = new Mobil();
$mobil2->merk = "Honda";
$mobil2->warna = "Putih";
$mobil2->tahun = 2023;
$mobil2->deskripsi();

// Cek instance dari class
echo "\n";
var_dump($mobil1 instanceof Mobil); // true
?>
