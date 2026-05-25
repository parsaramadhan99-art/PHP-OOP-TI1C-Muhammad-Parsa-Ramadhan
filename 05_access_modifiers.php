<?php
// =============================
// TOPIK: Access Modifiers
// Sumber: W3Schools PHP OOP
// =============================

// public    = bisa diakses dari mana saja
// protected = hanya bisa diakses dari class itu sendiri dan turunannya
// private   = hanya bisa diakses dari class itu sendiri

class Rekening {
    public $pemilik;        // bisa diakses dari luar
    protected $saldo;       // hanya bisa diakses dalam class & turunan
    private $pin;           // hanya bisa diakses dalam class ini saja

    public function __construct($pemilik, $saldo, $pin) {
        $this->pemilik = $pemilik;
        $this->saldo = $saldo;
        $this->pin = $pin;
    }

    public function getSaldo() {
        return $this->saldo; // method public untuk akses saldo
    }

    public function cekPin($inputPin) {
        return $this->pin === $inputPin;
    }

    public function tampilInfo() {
        echo "Pemilik: " . $this->pemilik . "\n";
        echo "Saldo: Rp " . number_format($this->saldo) . "\n";
    }
}

$rek = new Rekening("Parsa", 5000000, "1234");

echo $rek->pemilik . "\n";     // OK - public
echo $rek->getSaldo() . "\n";  // OK - lewat method public
$rek->tampilInfo();

// echo $rek->pin; // ERROR - private tidak bisa diakses langsung
?>
