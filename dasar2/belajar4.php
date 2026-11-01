<?php
// VARIABEL, KONSTANTA DAN TIPE DATA
/*
Ada aturan dalam penulisan variabel antara lain

Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan camelCase. tidak boleh menggunakan spasi
Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
*/

// Tipe data dalam bahasa pemrograman PHP bersifat fleksibel.
// untuk melihat tipe data dari suatu variabel bisa menggunakan sintaks var_dump()

$nama_barang = "Sabun Mandi";
$harga = 4000;
$stok = 40;

/* CONTOH
var_dump($nama_barang);
var_dump($harga);
var_dump($stok);
*/

// menampilkan isi variabel
echo "<br>Heppy membeli $nama_barang seharga Rp $harga";

//menggunakan petik satu
echo '<br>Heppy membeli $nama_barang seharga Rp '.$harga;

?>