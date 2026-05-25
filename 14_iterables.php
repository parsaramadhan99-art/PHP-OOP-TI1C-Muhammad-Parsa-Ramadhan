<?php
// =============================
// TOPIK: Iterables
// Sumber: W3Schools PHP OOP
// =============================

// Iterable = tipe data yang bisa di-loop dengan foreach
// Bisa berupa: array atau object yang implement interface Iterator

// Contoh 1: Array sebagai iterable
function tampilSemua(iterable $data) {
    foreach ($data as $item) {
        echo $item . "\n";
    }
}

$buah = ["Apel", "Mangga", "Jeruk", "Pisang"];
echo "=== Daftar Buah ===\n";
tampilSemua($buah);

// Contoh 2: Class yang implement Iterator (object iterable)
class DaftarNilai implements Iterator {
    private $nilai = [];
    private $posisi = 0;

    public function tambah($n) {
        $this->nilai[] = $n;
    }

    // Wajib implement method-method berikut:
    public function current() {
        return $this->nilai[$this->posisi];
    }

    public function key() {
        return $this->posisi;
    }

    public function next() {
        $this->posisi++;
    }

    public function rewind() {
        $this->posisi = 0;
    }

    public function valid() {
        return isset($this->nilai[$this->posisi]);
    }
}

$nilai = new DaftarNilai();
$nilai->tambah(85);
$nilai->tambah(90);
$nilai->tambah(78);
$nilai->tambah(92);
$nilai->tambah(88);

echo "\n=== Daftar Nilai Mahasiswa ===\n";
foreach ($nilai as $key => $val) {
    echo "Mahasiswa " . ($key + 1) . ": " . $val . "\n";
}

echo "\n=== Tampil lewat fungsi iterable ===\n";
tampilSemua($nilai);
?>
