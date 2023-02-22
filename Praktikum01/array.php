<?php 
//Buat array
$animals = ["kucing", "ayam", "ikan", "burung"];
//Tampilan kucing
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

// Looping Array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
// Buat array asosiatif
$mahasiswa = ["Nama"=>"Widi", "Umur"=>21, "Alamat"=>"Citayam"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}
echo "<br>";

// buat array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "Jarkom"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn){
    echo "Nama Dosen : " . $dsn[0];
    echo " Matakuliah : " . $dsn[1];
    echo "<br>";
}

?>