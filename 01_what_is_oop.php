<?php
// =============================
// TOPIK: What is OOP?
// Sumber: W3Schools PHP OOP
// =============================

// OOP = Object-Oriented Programming
// Program disusun dalam objek-objek yang memiliki properti dan method

// Contoh sederhana OOP:
class Hewan {
    public $nama;
    public $suara;

    public function bersuara() {
        echo $this->nama . " bersuara: " . $this->suara . "\n";
    }
}

$kucing = new Hewan();
$kucing->nama = "Kucing";
$kucing->suara = "Meow";
$kucing->bersuara();

$anjing = new Hewan();
$anjing->nama = "Anjing";
$anjing->suara = "Guk Guk";
$anjing->bersuara();
?>
