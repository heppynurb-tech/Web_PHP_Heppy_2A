<?php
// Perulangan FOREACH
//Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk array.

$daftar_siswa = [
    "Ani",
    "Budi",
    "Sigit",
    "Hanif",
];
 
echo "<h3>Daftar Nama Siswa</h3>";
echo "<ul>";
 
foreach($daftar_siswa as $siswa){
    echo "<li>$siswa</li>";
}
 
echo "</ul>";
 
?>