<?php
// =============================
// TOPIK: Traits
// Sumber: W3Schools PHP OOP
// =============================

// Traits = kumpulan method yang bisa dipakai ulang di banyak class
// PHP tidak mendukung multiple inheritance, tapi bisa pakai banyak trait

trait PesanLog {
    public function log($pesan) {
        echo "[LOG] " . date("H:i:s") . " - " . $pesan . "\n";
    }
}

trait Validasi {
    public function cekKosong($nilai, $label) {
        if (empty($nilai)) {
            echo "[ERROR] $label tidak boleh kosong!\n";
            return false;
        }
        return true;
    }
}

class FormPendaftaran {
    use PesanLog, Validasi; // menggunakan dua trait sekaligus

    public function daftar($nama, $email) {
        $this->log("Mencoba mendaftar...");

        if (!$this->cekKosong($nama, "Nama")) return;
        if (!$this->cekKosong($email, "Email")) return;

        $this->log("Pendaftaran berhasil untuk: $nama ($email)");
    }
}

$form = new FormPendaftaran();
$form->daftar("Parsa Ramadhan", "parsa@email.com");
echo "\n";
$form->daftar("", "test@email.com"); // nama kosong
?>
