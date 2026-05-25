<?php
// =============================
// TOPIK: Destructor
// Sumber: W3Schools PHP OOP
// =============================

// Destructor = method __destruct()
// Dipanggil otomatis saat object dihapus / script selesai

class KoneksiDatabase {
    public $host;

    public function __construct($host) {
        $this->host = $host;
        echo "Koneksi ke " . $this->host . " dibuka.\n";
    }

    public function query($sql) {
        echo "Menjalankan query: " . $sql . "\n";
    }

    // Destructor
    public function __destruct() {
        echo "Koneksi ke " . $this->host . " ditutup.\n";
    }
}

$db = new KoneksiDatabase("localhost");
$db->query("SELECT * FROM mahasiswa");

// Saat script selesai, __destruct() dipanggil otomatis
echo "Script selesai.\n";
?>
