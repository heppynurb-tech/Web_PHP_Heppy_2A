<?php 
// Perulangan DO/WHILE
//Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali, kemudian melakukan pengecekan kondisi. Sedangkan perulangan while akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan. 

$ulangi = 10;
 
do {
    echo "<p>ini Angka ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);
 
?>