<?php

// Nama   : IDZA RAMAULKIM
// NIM    : 121140152
// Kelas  : RB

class Mahasiswa {
    private $nama;
    private $nim;
    private $prodi;
    private $alamat;  

    public function __construct($nama, $nim, $prodi, $alamat) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->alamat = $alamat;  
        echo "Objek Mahasiswa dengan NIM {$this->nim} telah dibuat.<br><br>";
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function tampilkanDataMahasiswa() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";  
    }

    public function __destruct() {
        echo "<br>Objek Mahasiswa dengan NIM {$this->nim} akan dihapus.<br>";
    }
}

$mahasiswa = new Mahasiswa("IDZA RAMAULKIM", "121140152", "Ilmu Komputer", "Jalan Mahasiswa No. 123");

echo "Data Mahasiswa Awal:<br>";
$mahasiswa->tampilkanDataMahasiswa();

$mahasiswa->setNama("IDZA RAMAULKIM");
$mahasiswa->setNim("121140152");
$mahasiswa->setProdi("Teknik Informatika");
$mahasiswa->setAlamat("Gedung Kuliah No. 456");

echo "<br>Data Mahasiswa Setelah Perubahan:<br>";
$mahasiswa->tampilkanDataMahasiswa();

unset($mahasiswa);

?>
