<?php
// =============================
// TOPIK: Static Properties
// Sumber: W3Schools PHP OOP
// =============================

// Static property = properti yang BERBAGI nilai di semua object
// Diakses dengan: NamaClass::$namaProperti atau self::$namaProperti

class Counter {
    public static $jumlah = 0; // static property

    public function __construct() {
        self::$jumlah++; // tambah setiap kali object dibuat
        echo "Object ke-" . self::$jumlah . " dibuat.\n";
    }

    public static function getJumlah() {
        return self::$jumlah;
    }
}

$a = new Counter(); // Object ke-1
$b = new Counter(); // Object ke-2
$c = new Counter(); // Object ke-3

echo "\nTotal object Counter: " . Counter::$jumlah . "\n";
echo "Lewat method: " . Counter::getJumlah() . "\n";

// Contoh lain: ID unik otomatis
class Produk {
    private static $nextId = 1;
    public $id;
    public $nama;

    public function __construct($nama) {
        $this->id   = self::$nextId++;
        $this->nama = $nama;
    }

    public function tampil() {
        echo "ID: " . $this->id . " | Nama: " . $this->nama . "\n";
    }
}

echo "\n--- Daftar Produk ---\n";
$p1 = new Produk("Laptop");
$p2 = new Produk("Mouse");
$p3 = new Produk("Keyboard");
$p1->tampil();
$p2->tampil();
$p3->tampil();
?>
