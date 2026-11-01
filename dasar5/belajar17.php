<?php 
// Perulangan WHILE

//Perulangan while adalah perulangan yang termasuk dalam uncounted loop. Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya.
 
$ulangi = 0;
 
while($ulangi < 10){
    echo "<p>Ini Angka ke-$ulangi</p>";
    $ulangi++;
}
 
//Perulangan while akan terus mengulang selama nilai $ulangi lebih kecil dari 10. Lalu di dalam perulangan kita melakukan increment nilai $ulangi dengan $ulangi++. Artinya: Tambah 1 disetiap pengulangan
?>

<?php
// jika urutnnya dibuat menurunn, maka kodenya akan seperti ini:
echo "<p><h3> JIKA URUTANNYA DIBALIK<h3></p>";

$ulangi = 10;

while($ulangi >= 0){
    echo "<p> Ini angka ke-$ulangi</p>";
    $ulangi--;
}

?>
