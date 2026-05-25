<?php
// =============================
// TOPIK: Constants
// Sumber: W3Schools PHP OOP
// =============================

// Konstanta dalam class = nilainya tidak bisa diubah
// Didefinisikan dengan kata kunci: const

class Matematika {
    const PI = 3.14159;
    const E  = 2.71828;

    public function luasLingkaran($r) {
        return self::PI * $r * $r;
    }

    public function kelilingLingkaran($r) {
        return 2 * self::PI * $r;
    }
}

// Akses konstanta tanpa membuat object
echo "Nilai PI: " . Matematika::PI . "\n";
echo "Nilai E: " . Matematika::E . "\n";

// Akses lewat object
$mat = new Matematika();
echo "Luas lingkaran r=7: " . $mat->luasLingkaran(7) . "\n";
echo "Keliling lingkaran r=7: " . $mat->kelilingLingkaran(7) . "\n";

// Konstanta juga bisa diwarisi
class FisikaMatematika extends Matematika {
    public function tampilKonstanta() {
        echo "PI dari parent: " . parent::PI . "\n";
    }
}

$fm = new FisikaMatematika();
$fm->tampilKonstanta();
?>
