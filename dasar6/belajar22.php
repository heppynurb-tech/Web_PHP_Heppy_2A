<?php
// Array Asosiatif
// Array asosiatif adalah array yang indeksnya tidak menggunakan nomer atau angka. Indeks array asosiatif berbentuk kata kunci.
// membuat array asosiatif

$artikel = [
    "judul" => "Modul Pemorgraman Mobile",
    "penulis" => "Bambang Duryudhana",
    "jumlah_halaman" => 110
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";

// Pada array asosiatif, kita menggunakan tanda => untuk mengasosiasikan sebuah kata kunci dengan isi array. Selain menggunakan tanda =>, kita juga bisa membuat array aosiatif dengan tanda =
?>

<?php
// membuat array asosiatif

$artikel = [
    "judul" = "Modul Pemorgraman Mobile",
    "penulis" = "Bambang Duryudhana",
    "jumlah_halaman" = 110
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";

?>