<?php
// =============================
// TOPIK: Constructor
// Sumber: W3Schools PHP OOP
// =============================

// Constructor = method __construct()
// Dipanggil otomatis saat object dibuat

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        echo "Mahasiswa baru dibuat: " . $this->nama . "\n";
    }

    public function tampilInfo() {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Jurusan: " . $this->jurusan . "\n";
        echo "---\n";
    }
}

// Constructor dipanggil otomatis saat new
$mhs1 = new Mahasiswa("Parsa Ramadhan", "12345", "Teknik Informatika");
$mhs1->tampilInfo();

$mhs2 = new Mahasiswa("Budi Santoso", "67890", "Sistem Informasi");
$mhs2->tampilInfo();
?>
