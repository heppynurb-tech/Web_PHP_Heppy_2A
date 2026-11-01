<?php
// membuat array kosong
$siswa = array();
$kelas = [];
 
// membuat array sekaligus mengisinya
$siswa = array("Wahyu", "Agung", "Marsya");
$kelas = [10, 11, 12];
 
// membuat array dengan mengisi indeks tertentu
$siswa[0] = "Heppy";
$siswa[1] = "Dian";
$siswa[2] = "Sinta";
 
var_dump($siswa);
echo "<br>";
var_dump($kelas);

/*Kita bisa mendefisikan array baik kosong maupun dengan isinya. Baik secara per indeks atau langsung beberapa indeks. 
Array disini memiliki tipe data yang sama. Bisa dilihat dari code diatas untuk array $siswa datanya adalah string sedangkan $kelas bertipe integer. */

?>