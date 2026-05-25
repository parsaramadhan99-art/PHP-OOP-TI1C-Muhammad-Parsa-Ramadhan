<?php
// =============================
// TOPIK: Namespaces
// Sumber: W3Schools PHP OOP
// =============================

// Namespace = cara mengorganisir class agar tidak bentrok namanya
// Seperti folder untuk class

namespace Toko;

class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama  = $nama;
        $this->harga = $harga;
    }

    public function tampil() {
        echo "[Toko] Produk: " . $this->nama . " | Harga: Rp " . number_format($this->harga) . "\n";
    }
}

class Keranjang {
    private $items = [];

    public function tambah(Produk $produk) {
        $this->items[] = $produk;
        echo $produk->nama . " ditambahkan ke keranjang.\n";
    }

    public function tampilSemua() {
        echo "\n--- Isi Keranjang ---\n";
        foreach ($this->items as $item) {
            $item->tampil();
        }
    }
}

// Menggunakan class dalam namespace Toko
$laptop  = new \Toko\Produk("Laptop", 8500000);
$mouse   = new \Toko\Produk("Mouse", 150000);
$keranjang = new \Toko\Keranjang();

$keranjang->tambah($laptop);
$keranjang->tambah($mouse);
$keranjang->tampilSemua();
?>
