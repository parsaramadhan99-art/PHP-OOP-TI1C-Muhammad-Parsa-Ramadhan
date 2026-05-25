<?php
// =============================
// TOPIK: Interfaces
// Sumber: W3Schools PHP OOP
// =============================

// Interface = kontrak yang WAJIB diimplementasikan oleh class
// Semua method di interface bersifat public & abstract
// Class bisa implement BANYAK interface (berbeda dengan extends)

interface BisaTerbang {
    public function terbang();
}

interface BisaBerenan {
    public function berenan();
}

class Burung implements BisaTerbang {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function terbang() {
        echo $this->nama . " sedang terbang di udara!\n";
    }
}

class Bebek implements BisaTerbang, BisaBerenan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function terbang() {
        echo $this->nama . " terbang rendah!\n";
    }

    public function berenan() {
        echo $this->nama . " sedang berenang di danau!\n";
    }
}

$elang = new Burung("Elang");
$elang->terbang();

echo "\n";

$bebek = new Bebek("Bebek Donald");
$bebek->terbang();
$bebek->berenan();
?>
