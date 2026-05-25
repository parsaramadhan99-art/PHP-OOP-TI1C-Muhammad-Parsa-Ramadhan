<?php
// =============================
// TOPIK: Static Methods
// Sumber: W3Schools PHP OOP
// =============================

// Static method = method yang bisa dipanggil TANPA membuat object
// Menggunakan kata kunci: static
// Dipanggil dengan: NamaClass::namaMethod()

class Kalkulator {
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if ($b == 0) {
            return "Error: tidak bisa bagi dengan 0!";
        }
        return $a / $b;
    }
}

// Panggil tanpa membuat object
echo "10 + 5 = " . Kalkulator::tambah(10, 5) . "\n";
echo "10 - 5 = " . Kalkulator::kurang(10, 5) . "\n";
echo "10 * 5 = " . Kalkulator::kali(10, 5) . "\n";
echo "10 / 5 = " . Kalkulator::bagi(10, 5) . "\n";
echo "10 / 0 = " . Kalkulator::bagi(10, 0) . "\n";

// Static method juga bisa dipanggil dari dalam class lain
class IlmuPasti extends Kalkulator {
    public static function pangkat($a, $b) {
        return pow($a, $b);
    }

    public static function contoh() {
        echo "2 + 3 = " . parent::tambah(2, 3) . "\n";
    }
}

echo "\n2^8 = " . IlmuPasti::pangkat(2, 8) . "\n";
IlmuPasti::contoh();
?>
