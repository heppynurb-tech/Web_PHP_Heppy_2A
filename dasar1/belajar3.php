<?php
//Sintaks echo();

echo "<h2>Belajar PHP itu menyenangkan (mengguanakan sintaks echo)!</h2>";
echo("Selamat Datang!<br>");
echo "Aku sedang belajar PHP!<br>";
echo "Ini "."teks "."yang "."dibuat "."terpisah.";

/* tanda (.) titik.Titik di baris ke 5 adalah operator untuk menggabungkan dua teks di PHP.
Kenapa tidak menggunakan simbol plus (+)? Pada PHP, simbol plus digunakan untuk penjumlahan, bukan untuk menggabungkan string.
*/
?>

<?php
//Sintaks print();

/* Perbedaannya dengan echo():
1. print() akan selalu mengembalikan nilai 1 saat dieksekusi, sedangkan echo() tidak mengembalikan apa-apa.
2. print() hanya boleh diberikan satu parameter saja, sedangkan echo() boleh lebih dari satu.
*/

//untuk sintaks print
print "<h2>Belajar PHP (menggunakan sintaks print)!</h2>";
print "Hello world!<br>";
print "Belajar mecetak teks di PHP!<br>";
?>

<?php
//Sintaks printf();
//sintaks printf() digunakan untuk memformat teks atau string. Ini akan mengembalikan panjang dari teks saat dieksekusi.
echo "<h2> Menggunakan sintaks printf </h2>";

//menggunakan echo
$txt = "rudyekoprasetya.wordpress.com";
echo "<br>Aku belajar pemrograman PHP di " . $txt . "<br>";
 
//menggunakan printf
$txt = "rudyekoprasetya.wordpress.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);

/*Simbol %s adalah sebuah placeholder untuk teks (string). Selain simbol %s ada juga simbol:
1. %d untuk bilangan desimal (integer);
2. %f untuk pecahan (float);
3. %b untuk boolean.
*/
?>

<?php
echo "<h2> Menggunakan %f untuk menampilkan bilangan </h2>";
//sintaks %.2f artinya kita akan menetak bilangan dengan dua angka di belakang koma.
// misalkan kita punya bilangan 
$harga = 150000;
 
// jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga <br>";
 
// jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f<br>", $harga);
?>