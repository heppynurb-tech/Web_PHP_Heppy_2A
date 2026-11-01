<?php
// Perulangan FOR

for($i = 0; $i < 10; $i++){
    echo "<h3>Saya Tidak ada datang terlambat lagi</h3>";
}

?>

<?php
 
for($i = 0; $i < 10; $i++){
    echo "<h3>Ini Angka ke-$i</h3>";
}
 
?>


<?php
// Coba ubah urutannya menjadi menurun (10, 9, 8 .. dst) Kira-kira code mana yang perlu diubah

for($i = 10; $i >= 1; $i--){
    echo "<h3>Ini Angka ke-$i</h3>";
}

// maka kode yang akan diubah adalah:
// $i=10 karena dimulai hitungan mundur
// $i >= 1 Perulangan akan terus berjalan selama nilai $i lebih besar dari atau sama dengan 1
// $i-- karena perhitungan dilakukan mundur, jadinya menggunakan pengurangan
?>