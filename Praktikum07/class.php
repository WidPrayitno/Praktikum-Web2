<?php 
// Bikin Class BMIPasien
class bmiPasien{
    // Bikin Property/variabel
    public $nama, $berat, $tinggi, $umur, $jk;

    // Construct : data nya di set sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // masukin data
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // Bikin method (fungsi)
    public function hasilBMI(){
        // Logic
        $tinggi_m = $this->tinggi / 100;
        // rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    // bikin method
    public function statusBMI(){
        // Simpen data bmi
        $bmi = $this->hasilBMI();
        // cek data menjadi status
        if ($bmi <18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (Ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
                return "Kelebihan Berat Badan";
        } else {
            return "Obesitas";
        }
        
    }
}

// Bikin objek
// $pasien = new bmiPasien("Widi", "64", "173", "20", "L");
// echo "Nama : " . $pasien->nama . "<br>";
// echo "Bmi: " . $pasien->hasilBMI() . "<br>";
// echo "Status BMI :" . $pasien->statusBMI() . "<br>";
?>