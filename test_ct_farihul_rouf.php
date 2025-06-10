<?php
// ============================
// Soal Nomor 1
// ============================
$angka = 77777;
echo "Nilai asli: " . $angka . "<br>";

// ============================
// Soal Nomor 2
// ============================
echo "Nilai dengan separator: " . number_format($angka) . "<br>";

// ============================
// Soal Nomor 3
// ============================
$nama = "Budi";
$nama .= " CrossTechno Developer";
echo "Setelah digabung: " . $nama . "<br>";
$nama = str_ireplace("o", "A", $nama);
echo "Setelah huruf 'o' dan 'O' diganti jadi 'A': " . $nama . "<br>";

// ============================
// Soal Nomor 4
// ============================
$kota = [];
$kota[1] = "Surabaya";
$kota[2] = "Jakarta";
$kota[3] = "Semarang";
$kota[4] = "Makassar";
echo "Isi array awal kota:<br>";
print_r($kota);
echo "<br><br>";

$kota[3] = "Samarinda";
echo "Setelah mengganti index 3 menjadi Samarinda:<br>";
print_r($kota);
echo "<br><br>";

$kota[5] = "Aceh";
echo "Setelah menambahkan index 5 dengan Aceh:<br>";
print_r($kota);
echo "<br><br>";

// ============================
// Soal Nomor 5 (array kota sudah dibuat di atas)
// ============================

// ============================
// Soal Nomor 6
// ============================
$data = [];
$data['fruit'] = "Orange";
$data['animal'] = "Dog";
$data['bird'] = "Eagle";
$data['food'] = "Rice";

echo "Isi array awal (data):<br>";
print_r($data);
echo "<br><br>";

$data['animal'] = "Cat";
echo "Setelah mengubah 'animal' menjadi 'Cat':<br>";
print_r($data);
echo "<br><br>";

$gabungan = array_merge($kota, $data);
echo "Hasil penggabungan array kota & data:<br>";
print_r($gabungan);
echo "<br><br>";

// ============================
// Soal Nomor 7
// ============================
function gambarPattern($panjang, $tinggi) {
    for ($i = 0; $i < $tinggi; $i++) {
        for ($j = 0; $j < $panjang; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
echo "Pola hasil gambarPattern(12, 6):<br>";
gambarPattern(12, 6);
echo "<br>";

// ============================
// Soal Nomor 8
// ============================
class Vehicle {
    private $nama;
    private $kapasitas_mesin;
    private $roda;

    public function setValues($nama, $kapasitas_mesin, $roda) {
        $this->nama = $nama;
        $this->kapasitas_mesin = $kapasitas_mesin;
        $this->roda = $roda;
    }

    public function tampilkanInfo() {
        return "Nama: {$this->nama}, Kapasitas Mesin: {$this->kapasitas_mesin}, Roda: {$this->roda}";
    }

    public function tampilkanInfoUppercase() {
        return strtoupper($this->tampilkanInfo());
    }
}

// Deklarasi objek
$kendaraan = new Vehicle();
$kendaraan->setValues("Toyota Supra", "3000cc", 4);
echo "Informasi kendaraan:<br>";
echo $kendaraan->tampilkanInfo() . "<br><br>";
echo "Informasi kendaraan (uppercase):<br>";
echo $kendaraan->tampilkanInfoUppercase() . "<br><br>";

// ============================
// Soal Nomor 9
// ============================
class Car extends Vehicle {
    protected $nama;
    protected $kapasitas_mesin;
    protected $roda;
    protected $merk;
    protected $tahun_pembuatan;
    protected $nomor_rangka;

    public function __construct($nama, $kapasitas_mesin, $roda, $merk, $tahun_pembuatan, $nomor_rangka) {
        $this->nama = $nama;
        $this->kapasitas_mesin = $kapasitas_mesin;
        $this->roda = $roda;
        $this->merk = $merk;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->nomor_rangka = $nomor_rangka;
    }

    public function tampilkanInfoLengkap() {
        return "Nama: {$this->nama}, Kapasitas Mesin: {$this->kapasitas_mesin}, Roda: {$this->roda}, Merk: {$this->merk}, Tahun: {$this->tahun_pembuatan}, No. Rangka: {$this->nomor_rangka}";
    }

    public function tampilkanInfoLengkapUppercase() {
        return strtoupper($this->tampilkanInfoLengkap());
    }
}

// Buat 2 objek Car
$car1 = new Car("Civic Turbo", "1500cc", 4, "Honda", 2022, "HNDCV1234567890");
$car2 = new Car("Fortuner Diesel", "2400cc", 4, "Toyota", 2021, "TYTFN0987654321");

echo "Informasi Mobil 1:<br>";
echo $car1->tampilkanInfoLengkap() . "<br><br>";
echo "Informasi Mobil 1 (Uppercase):<br>";
echo $car1->tampilkanInfoLengkapUppercase() . "<br><br>";

echo "Informasi Mobil 2:<br>";
echo $car2->tampilkanInfoLengkap() . "<br><br>";
echo "Informasi Mobil 2 (Uppercase):<br>";
echo $car2->tampilkanInfoLengkapUppercase() . "<br><br>";

?>
