<?php
// =============================
// TOPIK: Abstract Classes
// Sumber: W3Schools PHP OOP
// =============================

// Abstract class = class yang tidak bisa dibuat object-nya langsung
// Digunakan sebagai template untuk class lain
// Method abstract WAJIB diimplementasikan di class turunan

abstract class Bentuk {
    abstract public function hitungLuas();
    abstract public function hitungKeliling();

    // Method biasa boleh ada di abstract class
    public function tampilInfo() {
        echo "Luas: " . $this->hitungLuas() . "\n";
        echo "Keliling: " . $this->hitungKeliling() . "\n";
    }
}

class Persegi extends Bentuk {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function hitungKeliling() {
        return 4 * $this->sisi;
    }
}

class SegiTiga extends Bentuk {
    public $alas, $tinggi, $sisiA, $sisiB, $sisiC;

    public function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC) {
        $this->alas   = $alas;
        $this->tinggi = $tinggi;
        $this->sisiA  = $sisiA;
        $this->sisiB  = $sisiB;
        $this->sisiC  = $sisiC;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling() {
        return $this->sisiA + $this->sisiB + $this->sisiC;
    }
}

echo "=== Persegi (sisi=5) ===\n";
$p = new Persegi(5);
$p->tampilInfo();

echo "\n=== Segitiga ===\n";
$s = new SegiTiga(6, 4, 5, 5, 6);
$s->tampilInfo();
?>
