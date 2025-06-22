<h1>index Array</h1>
<?php
$buah =["Apple", "Jeruk", "Mangga"];
echo $buah[0]. "<br>";
echo $buah[1]. "<br>";

echo "<h1>Associative Array</h1>";
$mahasiswa =[
    "nama"=> "Mesi Nurmaisya",
    "nim"=> "14523061",
    "jurusan"=> "Teknik Informatika",
];
echo $mahasiswa['nama']."<br>";
echo $mahasiswa['nim']."<br>";
echo $mahasiswa['jurusan']."<br>";

echo "<h1>Multidemensional Array</h1>";
$daftarMahasiswa =[
    ["Anisha","14523001","teknik informatika"],
    ["Hilda","14523054","teknik informasi"],
];

echo $daftarMahasiswa[0][0]."<br>";
echo $daftarMahasiswa[1][2]."<br>";

echo "<h1>Array Loop</h1>";
$buah =["Apel", "Jeruk", "Mangga"];
for($i = 0; $i < count($buah); $i++){
    echo $buah [$i]."<br>";
}


?>
<br>
<br>
<a href="index.php">menu awal</a>