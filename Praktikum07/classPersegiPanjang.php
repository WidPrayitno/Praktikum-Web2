<?php 
// Buat class persegi panjang
class persegiPanjang{
    // Property/Variabel
    public $panjang, $lebar;

    // Construction
    function __construct($panjang, $lebar){
        // Memasukan data
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luas(){
        return $this->lebar * $this->panjang;
    }

    public function keliling(){
        return 2 * ($this->lebar + $this->panjang);
    }
}

// $persegi = new persegiPanjang("5", "3");
// echo "Panjang: " . $persegi->panjang;
// echo "Luas: " . $persegi->luas();
// echo "Keliling: " . $persegi->keliling();

?>