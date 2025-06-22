<?php 
echo"<h1> Codingan function </h1>";
echo"<h2>tanpa parameter</h2><br>";

function salam(){
    echo "Hallo PHP <br>";
}
salam();
echo " dengan parameter <br>";

function namaAnda($name){
    echo "selamat datang di php , $name";

}
namaAnda("Mesi"); 
echo "<br>";
echo "dengan parameter default <br>";

function salam2($name = "user"){
    echo "<br> Selamat datang! Hallo $name";
}
salam2();
salam2("Rudi");

function jumlah ($a,$b){
    return $a + $b;
}
$hasil = jumlah(70, 198);
echo "hasil : ".$hasil;
?>

<br>
<br>
<a href="index.php">Menu Awal</a>