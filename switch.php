<h1> Codingan Switch </h1>
<?php
$role = "admin";

switch($role){
    case "admin":
        echo "akses penuh ke sistem <br>";
        break;
    case "dosen":
        echo "akses data mahasiswa <br>";
        break;
    case "mahasiswa":
        echo "akses pengisian KRS <br>";
        break;
    default:
        echo "Role tidak ditemukan <br>";
}
?>

<br>
<br>
<a href="index.php"> Menu Awal</a>