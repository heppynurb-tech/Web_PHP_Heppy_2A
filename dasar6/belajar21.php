<?php
// membuat array
$barang = ["Buku", "Penghapus", "Pencil"];
 
// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

//menampilkan dengan perulangan
echo "<h3>Dengan Foreach</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
// Untuk menampilkan data array kita tinggal memanggil nomor indeks dari array tersebut. Selain itu kita bisa menggunakan perulangan foreach.

// MENGHAPUS DATA ARRAY 
//Untuk menghapus isi array, kita bisa menggunakan fungsi unset().

// menghapus Pencil
unset($barang[2]);
 
//menampilkan dengan perulangan
echo "<h3>Data setelah dihapus</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}

// MENAMBAHKAN ISI ARRAY
/* Ada dua cara yang bisa dilakukan untuk menambah isi array:
1. Mengisi langsung ke nomer indeks yang ingin ditambahkan
2. Mengisi langsung ke indeks terakhir
*/

//menambahkan Pencil pada indeks ke-2
$barang[2]="Pencil";
 
//menambahkan Penggaris di indeks terakhir
$barang[]="Penggaris";
 
echo "<h3>Data setelah Ditambah</h3>";
foreach($barang as $item) {
    echo $item."<br>";
}
?>